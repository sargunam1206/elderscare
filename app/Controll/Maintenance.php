<?php
namespace App\Controllers;

use CodeIgniter\Files\File;
use App\Models\MaintenanceModel;
use App\Models\MaintenanceFileModel;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Maintenance extends BaseController
{
    protected $db;
    protected $maintenanceModel;
    protected $fileModel;

    public function __construct()
    {
        $this->db = db_connect();
        $this->maintenanceModel = new MaintenanceModel();
        $this->fileModel = new MaintenanceFileModel();
    }

    public function index()
    {
        helper(['url', 'form']);

        // Get filter parameters from GET request
        $fromDate = $this->request->getGet('from_date');
        $toDate = $this->request->getGet('to_date');
        $status = $this->request->getGet('status');
        $type = $this->request->getGet('type');

        $filters = [
            'from_date' => $fromDate,
            'to_date' => $toDate,
            'status' => $status,
            'type' => $type
        ];

        // Fetch filtered requests
        $requests = $this->maintenanceModel->getFilteredRequests($filters);

        // Get files for each request
        foreach ($requests as &$request) {
            $problemPhotos = $this->fileModel->getFilesByMaintenanceId($request['id'], 'problem_photo');
            $clearancePhotos = $this->fileModel->getFilesByMaintenanceId($request['id'], 'clearance_photo');
            $paymentBill = $this->fileModel->getFilesByMaintenanceId($request['id'], 'payment_bill');
            
            $request['problem_photos'] = $problemPhotos;
            $request['clearance_photos'] = $clearancePhotos;
            $request['payment_bill'] = !empty($paymentBill) ? $paymentBill[0] : null;
        }

        // Handle PDF export
        if ($this->request->getGet('pdf')) {
            return $this->generatePdf($requests);
        }

        // Handle Excel export
        if ($this->request->getGet('excel')) {
            return $this->generateExcel($requests);
        }

        $data['requests'] = $requests;
        $data['filter_from_date'] = $fromDate;
        $data['filter_to_date'] = $toDate;
        $data['filter_status'] = $status;
        $data['filter_type'] = $type;

        return view('maintenance/index', $data);
    }

    private function generatePdf($requests)
    {
        $data['requests'] = $requests;

        $mpdf = new \Mpdf\Mpdf();
        $html = view('maintenance/pdf_template', $data);
        $mpdf->WriteHTML($html);

        $pdfContent = $mpdf->Output('', 'S');

        $response = \Config\Services::response();
        $response->setHeader('Content-Type', 'application/pdf');
        $response->setHeader('Content-Disposition', 'inline; filename="maintenance_requests_report.pdf"');

        return $response->setBody($pdfContent);
    }

    private function generateExcel($requests)
    {
        $spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Headers
        $sheet->setCellValue('A1', 'S.No')
              ->setCellValue('B1', 'Maintenance Area')
              ->setCellValue('C1', 'Requested By')
              ->setCellValue('D1', 'Type')
              ->setCellValue('E1', 'Request Date')
              ->setCellValue('F1', 'Expected Arrest Date')
              ->setCellValue('G1', 'Status')
              ->setCellValue('H1', 'Assigned To');

        $row = 2;
        foreach ($requests as $index => $r) {
            $sheet->setCellValue('A' . $row, $index + 1);
            $sheet->setCellValue('B' . $row, $r['maintenance_area']);
            $sheet->setCellValue('C' . $row, $r['requested_by']);
            $sheet->setCellValue('D' . $row, $r['type']);
            $sheet->setCellValue('E' . $row, $r['request_date']);
            $sheet->setCellValue('F' . $row, $r['expected_arrest_date'] ?? 'Not set');
            $sheet->setCellValue('G' . $row, $r['status']);
            $sheet->setCellValue('H' . $row, $r['assigned_to'] ?? 'Not assigned');
            $row++;
        }

        $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
        $filename = 'maintenance_requests_report.xlsx';

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header("Content-Disposition: attachment; filename=\"$filename\"");

        $writer->save("php://output");
        exit;
    }

    public function store()
    {
        helper(['url', 'form', 'text']);
        
        $rules = [
            'maintenance_area' => 'required|min_length[3]|max_length[255]',
            'requested_by' => 'required|min_length[3]|max_length[255]',
            'type' => 'required|in_list[Cleaning,Plumbing,Electrical,Carpentry,HVAC,Other]',
            'request_date' => 'required|valid_date',
            'expected_arrest_date' => 'permit_empty|valid_date',
            'arrest_date' => 'permit_empty|valid_date',
            'problem_description' => 'required',
            'assigned_to' => 'permit_empty',
            'approved_by' => 'permit_empty|max_length[255]',
            'status' => 'required|in_list[Pending,In Progress,Completed,Cancelled]',
            'amount' => 'permit_empty|decimal',
            'resolution_notes' => 'permit_empty',
            'problem_photos' => 'permit_empty|uploaded[problem_photos]|max_size[problem_photos,5120]|is_image[problem_photos]',
            'clearance_photos' => 'permit_empty|uploaded[clearance_photos]|max_size[clearance_photos,5120]|is_image[clearance_photos]',
            'payment_bill' => 'permit_empty|uploaded[payment_bill]|max_size[payment_bill,5120]|ext_in[payment_bill,pdf,jpg,jpeg,png]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'maintenance_area' => $this->request->getPost('maintenance_area'),
            'requested_by' => $this->request->getPost('requested_by'),
            'type' => $this->request->getPost('type'),
            'request_date' => $this->request->getPost('request_date'),
            'expected_arrest_date' => $this->request->getPost('expected_arrest_date') ?: null,
            'arrest_date' => $this->request->getPost('arrest_date') ?: null,
            'problem_description' => $this->request->getPost('problem_description'),
            'assigned_to' => $this->request->getPost('assigned_to') ?: null,
            'approved_by' => $this->request->getPost('approved_by') ?: null,
            'status' => $this->request->getPost('status'),
            'amount' => $this->request->getPost('amount') ?: null,
            'resolution_notes' => $this->request->getPost('resolution_notes') ?: null
        ];

        try {
            $this->db->transStart();
            
            $maintenanceId = $this->maintenanceModel->insert($data);
            
            // Handle file uploads
            $this->handleFileUploads($maintenanceId);
            
            $this->db->transComplete();
            return redirect()->to('/maintenance')->with('message', 'Maintenance request added successfully!');
        } catch (\Exception $e) {
            $this->db->transRollback();
            return redirect()->back()->withInput()->with('error', 'Failed to save maintenance request: ' . $e->getMessage());
        }
    }

    public function download($fileId)
    {
        $file = $this->fileModel->where('id', $fileId)
                            ->where('deleted_on', null)
                            ->first();
        
        if (!$file) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        
        $filePath = ROOTPATH . 'public/uploads/maintenance/' . $file['file_path'];
        
        if (!file_exists($filePath)) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        
        return $this->response->download($filePath, null)->setFileName($file['original_name']);
    }

    public function edit($id)
    {
        $request = $this->maintenanceModel->find($id);
        
        if (!$request) {
            return $this->response->setJSON(['error' => 'Maintenance request not found']);
        }
        
        // Get files
        $problemPhotos = $this->fileModel->getFilesByMaintenanceId($id, 'problem_photo');
        $clearancePhotos = $this->fileModel->getFilesByMaintenanceId($id, 'clearance_photo');
        $paymentBill = $this->fileModel->getFilesByMaintenanceId($id, 'payment_bill');
        
        $request['problem_photos'] = $problemPhotos;
        $request['clearance_photos'] = $clearancePhotos;
        $request['payment_bill'] = !empty($paymentBill) ? $paymentBill[0] : null;
        
        return $this->response->setJSON($request);
    }

    public function update($id)
    {
        helper(['url', 'form', 'text']);
        
        $rules = [
            'maintenance_area' => 'required|min_length[3]|max_length[255]',
            'requested_by' => 'required|min_length[3]|max_length[255]',
            'type' => 'required|in_list[Cleaning,Plumbing,Electrical,Carpentry,HVAC,Other]',
            'request_date' => 'required|valid_date',
            'expected_arrest_date' => 'permit_empty|valid_date',
            'arrest_date' => 'permit_empty|valid_date',
            'problem_description' => 'required',
            'assigned_to' => 'permit_empty',
            'approved_by' => 'permit_empty|max_length[255]',
            'status' => 'required|in_list[Pending,In Progress,Completed,Cancelled]',
            'amount' => 'permit_empty|decimal',
            'resolution_notes' => 'permit_empty',
            'problem_photos' => 'permit_empty|uploaded[problem_photos]|max_size[problem_photos,5120]|is_image[problem_photos]',
            'clearance_photos' => 'permit_empty|uploaded[clearance_photos]|max_size[clearance_photos,5120]|is_image[clearance_photos]',
            'payment_bill' => 'permit_empty|uploaded[payment_bill]|max_size[payment_bill,5120]|ext_in[payment_bill,pdf,jpg,jpeg,png]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        try {
            $this->db->transStart();
            
            $data = [
                'maintenance_area' => $this->request->getPost('maintenance_area'),
                'requested_by' => $this->request->getPost('requested_by'),
                'type' => $this->request->getPost('type'),
                'request_date' => $this->request->getPost('request_date'),
                'expected_arrest_date' => $this->request->getPost('expected_arrest_date') ?: null,
                'arrest_date' => $this->request->getPost('arrest_date') ?: null,
                'problem_description' => $this->request->getPost('problem_description'),
                'assigned_to' => $this->request->getPost('assigned_to') ?: null,
                'approved_by' => $this->request->getPost('approved_by') ?: null,
                'status' => $this->request->getPost('status'),
                'amount' => $this->request->getPost('amount') ?: null,
                'resolution_notes' => $this->request->getPost('resolution_notes') ?: null,
                'updated_on' => date('Y-m-d H:i:s')
            ];

            $this->maintenanceModel->update($id, $data);
            
            // Handle file uploads
            $this->handleFileUploads($id, true);
            
            $this->db->transComplete();
            return redirect()->to('/maintenance')->with('message', 'Maintenance request updated successfully!');
        } catch (\Exception $e) {
            $this->db->transRollback();
            return redirect()->back()->withInput()->with('error', 'Failed to update maintenance request: ' . $e->getMessage());
        }
    }
protected function handleFileUploads($maintenanceId, $isUpdate = false)
{
    $basePath = ROOTPATH . 'public/uploads/maintenance/';
    
    // Create directory if it doesn't exist
    if (!is_dir($basePath)) {
        mkdir($basePath, 0755, true);
    }
    
    // Handle problem photos - check if new files are being uploaded
    $problemPhotos = $this->request->getFileMultiple('problem_photos');
    if ($problemPhotos && is_array($problemPhotos) && count($problemPhotos) > 0 && $problemPhotos[0]->isValid()) {
        // If updating and new files are uploaded, soft delete existing problem photos
        if ($isUpdate) {
            $existingProblemPhotos = $this->fileModel->where('maintenance_id', $maintenanceId)
                                                  ->where('file_type', 'problem_photo')
                                                  ->where('deleted_on', null)
                                                  ->findAll();
            
            if ($existingProblemPhotos) {
                foreach ($existingProblemPhotos as $existingPhoto) {
                    $this->fileModel->update($existingPhoto['id'], [
                        'deleted_on' => date('Y-m-d H:i:s')
                    ]);
                }
            }
        }
        
        // Upload new problem photos
        foreach ($problemPhotos as $file) {
            if ($file->isValid() && !$file->hasMoved()) {
                $newName = $file->getRandomName();
                $file->move($basePath, $newName);
                
                $this->fileModel->insert([
                    'maintenance_id' => $maintenanceId,
                    'file_type' => 'problem_photo',
                    'file_path' => $newName,
                    'original_name' => $file->getClientName(),
                    'created_on' => date('Y-m-d H:i:s')
                ]);
            }
        }
    }
    
    // Handle clearance photos - check if new files are being uploaded
    $clearancePhotos = $this->request->getFileMultiple('clearance_photos');
    if ($clearancePhotos && is_array($clearancePhotos) && count($clearancePhotos) > 0 && $clearancePhotos[0]->isValid()) {
        // If updating and new files are uploaded, soft delete existing clearance photos
        if ($isUpdate) {
            $existingClearancePhotos = $this->fileModel->where('maintenance_id', $maintenanceId)
                                                     ->where('file_type', 'clearance_photo')
                                                     ->where('deleted_on', null)
                                                     ->findAll();
            
            if ($existingClearancePhotos) {
                foreach ($existingClearancePhotos as $existingPhoto) {
                    $this->fileModel->update($existingPhoto['id'], [
                        'deleted_on' => date('Y-m-d H:i:s')
                    ]);
                }
            }
        }
        
        // Upload new clearance photos
        foreach ($clearancePhotos as $file) {
            if ($file->isValid() && !$file->hasMoved()) {
                $newName = $file->getRandomName();
                $file->move($basePath, $newName);
                
                $this->fileModel->insert([
                    'maintenance_id' => $maintenanceId,
                    'file_type' => 'clearance_photo',
                    'file_path' => $newName,
                    'original_name' => $file->getClientName(),
                    'created_on' => date('Y-m-d H:i:s')
                ]);
            }
        }
    }
    
    // Handle payment bill - check if a new file is being uploaded
    $paymentBill = $this->request->getFile('payment_bill');
    if ($paymentBill && $paymentBill->isValid() && !$paymentBill->hasMoved()) {
        // Delete existing payment bill if updating
        if ($isUpdate) {
            $existingBill = $this->fileModel->where('maintenance_id', $maintenanceId)
                                          ->where('file_type', 'payment_bill')
                                          ->where('deleted_on', null)
                                          ->first();
            if ($existingBill) {
                $this->fileModel->update($existingBill['id'], [
                    'deleted_on' => date('Y-m-d H:i:s')
                ]);
            }
        }
        
        $newName = $paymentBill->getRandomName();
        $paymentBill->move($basePath, $newName);
        
        $this->fileModel->insert([
            'maintenance_id' => $maintenanceId,
            'file_type' => 'payment_bill',
            'file_path' => $newName,
            'original_name' => $paymentBill->getClientName(),
            'created_on' => date('Y-m-d H:i:s')
        ]);
    }
}
    // protected function handleFileUploads($maintenanceId, $isUpdate = false)
    // {
    //     $basePath = ROOTPATH . 'public/uploads/maintenance/';
        
    //     // Create directory if it doesn't exist
    //     if (!is_dir($basePath)) {
    //         mkdir($basePath, 0755, true);
    //     }
        
    //     // Handle problem photos
    //     $problemPhotos = $this->request->getFileMultiple('problem_photos');
    //     if ($problemPhotos && is_array($problemPhotos)) {
    //         foreach ($problemPhotos as $file) {
    //             if ($file->isValid() && !$file->hasMoved()) {
    //                 $newName = $file->getRandomName();
    //                 $file->move($basePath, $newName);
                    
    //                 $this->fileModel->insert([
    //                     'maintenance_id' => $maintenanceId,
    //                     'file_type' => 'problem_photo',
    //                     'file_path' => $newName,
    //                     'original_name' => $file->getClientName(),
    //                     'created_on' => date('Y-m-d H:i:s')
    //                 ]);
    //             }
    //         }
    //     }
        
    //     // Handle clearance photos
    //     $clearancePhotos = $this->request->getFileMultiple('clearance_photos');
    //     if ($clearancePhotos && is_array($clearancePhotos)) {
    //         foreach ($clearancePhotos as $file) {
    //             if ($file->isValid() && !$file->hasMoved()) {
    //                 $newName = $file->getRandomName();
    //                 $file->move($basePath, $newName);
                    
    //                 $this->fileModel->insert([
    //                     'maintenance_id' => $maintenanceId,
    //                     'file_type' => 'clearance_photo',
    //                     'file_path' => $newName,
    //                     'original_name' => $file->getClientName(),
    //                     'created_on' => date('Y-m-d H:i:s')
    //                 ]);
    //             }
    //         }
    //     }
        
    //     // Handle payment bill
    //     $paymentBill = $this->request->getFile('payment_bill');
    //     if ($paymentBill && $paymentBill->isValid() && !$paymentBill->hasMoved()) {
    //         // Delete existing payment bill if updating
    //         if ($isUpdate) {
    //             $existingBill = $this->fileModel->where('maintenance_id', $maintenanceId)
    //                                           ->where('file_type', 'payment_bill')
    //                                           ->where('deleted_on', null)
    //                                           ->first();
    //             if ($existingBill) {
    //                 $this->fileModel->delete($existingBill['id']);
    //                 @unlink($basePath . $existingBill['file_path']);
    //             }
    //         }
            
    //         $newName = $paymentBill->getRandomName();
    //         $paymentBill->move($basePath, $newName);
            
    //         $this->fileModel->insert([
    //             'maintenance_id' => $maintenanceId,
    //             'file_type' => 'payment_bill',
    //             'file_path' => $newName,
    //             'original_name' => $paymentBill->getClientName(),
    //             'created_on' => date('Y-m-d H:i:s')
    //         ]);
    //     }
    // }

    public function deleteFile($fileId)
    {
        try {
            $file = $this->fileModel->find($fileId);
            if ($file) {
                $filePath = ROOTPATH . 'public/uploads/maintenance/' . $file['file_path'];
                if (file_exists($filePath)) {
                    @unlink($filePath);
                }
                $this->fileModel->delete($fileId);
            }
            return $this->response->setJSON(['success' => true]);
        } catch (\Exception $e) {
            return $this->response->setJSON(['error' => $e->getMessage()]);
        }
    }

    public function delete($id)
    {
        try {
            $this->db->transStart();
            
            // Soft delete the maintenance request
            $this->maintenanceModel->update($id, ['deleted_on' => date('Y-m-d H:i:s')]);
            
            // Soft delete associated files
            $this->fileModel->where('maintenance_id', $id)
                          ->set(['deleted_on' => date('Y-m-d H:i:s')])
                          ->update();
            
            $this->db->transComplete();
            return redirect()->to('/maintenance')->with('message', 'Maintenance request deleted successfully!');
        } catch (\Exception $e) {
            $this->db->transRollback();
            return redirect()->back()->with('error', 'Failed to delete maintenance request: ' . $e->getMessage());
        }
    }
}