<?php

namespace App\Controllers;

use App\Models\ActivityModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Activity extends BaseController
{
    protected $activityModel;

    public function __construct()
    {
        $this->activityModel = new ActivityModel();
    }

    public function index1()
    {
        helper(['url', 'form']);
        
        // Get all activities from database
        $data['activities'] = $this->activityModel->orderBy('created_on', 'DESC')->findAll();
        
        return view('activity/create', $data);
    }


public function index()
{
    helper(['url', 'form']);
    
    // Get filter parameters from GET request
    $fromDate = $this->request->getGet('from_date');
    $toDate = $this->request->getGet('to_date');
    $activityType = $this->request->getGet('activity_type');
    
    // Initialize query builder
    $builder = $this->activityModel->orderBy('activity_date', 'DESC');
    
    // Apply filters if they exist
    if (!empty($fromDate)) {
        $builder->where('activity_date >=', $fromDate);
    }
    if (!empty($toDate)) {
        $builder->where('activity_date <=', $toDate);
    }
    if (!empty($activityType)&& strtolower($activityType) !== 'all') {
        $builder->where('category', $activityType);
    }

    
    // Check for export requests
    if ($this->request->getGet('pdf')) {
        return $this->generatePdf($builder->findAll());
    }
    if ($this->request->getGet('excel')) {
        return $this->generateExcel($builder->findAll());
    }
    
    // Get filtered or all activities
    $data['activities'] = $builder->findAll();
    
    // Pass filter values back to view to maintain form state
    $data['filter_from_date'] = $fromDate;
    $data['filter_to_date'] = $toDate;
    $data['filter_activity_type'] = $activityType;
    
    return view('activity/create', $data);
}

private function generatePdf($activities)
{
    $data['activities'] = $activities;
    
    $mpdf = new \Mpdf\Mpdf();
    $html = view('activity/pdf_template', $data);
    $mpdf->WriteHTML($html);
    
    $pdfContent = $mpdf->Output('', 'S');
    
    $response = \Config\Services::response();
    $response->setHeader('Content-Type', 'application/pdf');
    $response->setHeader('Content-Disposition', 'inline; filename="activities_report.pdf"');
    
    return $response->setBody($pdfContent);
}

private function generateExcel($activities)
{
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();
    
    // Set headers
    $sheet->setCellValue('A1', 'S.No');
    $sheet->setCellValue('B1', 'Activity Name');
    $sheet->setCellValue('C1', 'Date');
    $sheet->setCellValue('D1', 'Time');
    $sheet->setCellValue('E1', 'Category');
    $sheet->setCellValue('F1', 'Duration (min)');
    $sheet->setCellValue('G1', 'Description');
    
    // Fill data
    $row = 2;
    foreach ($activities as $i => $activity) {
        $sheet->setCellValue('A'.$row, $i+1);
        $sheet->setCellValue('B'.$row, $activity['activity_name']);
        $sheet->setCellValue('C'.$row, date('M d, Y', strtotime($activity['activity_date'])));
        $sheet->setCellValue('D'.$row, date('h:i A', strtotime($activity['activity_time'])));
        $sheet->setCellValue('E'.$row, $activity['category']);
        $sheet->setCellValue('F'.$row, $activity['duration_minutes']);
        $sheet->setCellValue('G'.$row, $activity['description']);
        $row++;
    }
    
    // Auto-size columns
    foreach(range('A','G') as $column) {
        $sheet->getColumnDimension($column)->setAutoSize(true);
    }
    
    // Output Excel
    $writer = new Xlsx($spreadsheet);
    $fileName = 'activities_'.date('Y-m-d').'.xlsx';
    
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="'.$fileName.'"');
    header('Cache-Control: max-age=0');
    
    $writer->save('php://output');
    exit;
}

    public function store()
    {
        helper(['url', 'form']);
        
        $id = $this->request->getPost('activity_id');
        
        // If ID exists, it's an update
        if ($id) {
            return $this->update($id);
        }
        
        // Validate the form data for new activity
        $rules = [
            'activity_name' => 'required|min_length[3]|max_length[255]',
            'activity_date' => 'required|valid_date',
            'activity_time' => 'required',
            'category' => 'required',
            'duration_minutes' => 'required|numeric',
            'description' => 'permit_empty|max_length[500]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        // Prepare the data for insertion
        $data = [
            'activity_name' => $this->request->getPost('activity_name'),
            'activity_date' => $this->request->getPost('activity_date'),
            'activity_time' => $this->request->getPost('activity_time'),
            'category' => $this->request->getPost('category'),
            'duration_minutes' => $this->request->getPost('duration_minutes'),
            'description' => $this->request->getPost('description'),
            'created_on' => date('Y-m-d H:i:s')
        ];

        // Insert into database
        if ($this->activityModel->insert($data)) {
            return redirect()->to('/act')
                ->with('message', 'Activity added successfully!');
        } else {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Failed to add activity. Please try again.');
        }
    }

    public function edit($id)
    {
        helper(['url', 'form']);
        
        // Find the activity by ID
        $activity = $this->activityModel->find($id);
        
        if (!$activity) {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Activity not found'
            ]);
        }
        
        // Return JSON response for AJAX call
        return $this->response->setJSON([
            'status' => 'success',
            'data' => $activity
        ]);
    }

    public function update($id)
    {
        helper(['url', 'form']);
        
        // Validate the form data
        $rules = [
            'activity_name' => 'required|min_length[3]|max_length[255]',
            'activity_date' => 'required|valid_date',
            'activity_time' => 'required',
            'category' => 'required',
            'duration_minutes' => 'required|numeric',
            'description' => 'permit_empty|max_length[500]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        // Prepare the data
        $data = [
            'activity_name' => $this->request->getPost('activity_name'),
            'activity_date' => $this->request->getPost('activity_date'),
            'activity_time' => $this->request->getPost('activity_time'),
            'category' => $this->request->getPost('category'),
            'duration_minutes' => $this->request->getPost('duration_minutes'),
            'description' => $this->request->getPost('description'),
            'updated_on' => date('Y-m-d H:i:s')
        ];

        // Update the activity
        if ($this->activityModel->update($id, $data)) {
            return redirect()->to('/act')
                ->with('message', 'Activity updated successfully!');
        } else {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Failed to update activity. Please try again.');
        }
    }

    public function delete($id)
    {
        if ($this->activityModel->delete($id)) {
            return redirect()->to('/act')
                ->with('message', 'Activity deleted successfully!');
        } else {
            return redirect()->to('/act')
                ->with('error', 'Failed to delete activity. Please try again.');
        }
    }
}