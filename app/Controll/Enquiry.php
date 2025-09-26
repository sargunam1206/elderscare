<?php
namespace App\Controllers;

use App\Models\EnquiryModel;
use CodeIgniter\Files\File;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Enquiry extends BaseController
{
    protected $enquiryModel;
    protected $db;

    public function __construct()
    {
        $this->db = db_connect();
        $this->enquiryModel = new EnquiryModel();
    }

    public function index()
    {
        helper(['url', 'form']);

        // Get filter parameters from GET request
        $fromDate = $this->request->getGet('from_date');
        $toDate = $this->request->getGet('to_date');
        $roomType = $this->request->getGet('room_type');
        
        // Initialize query builder
        $builder = $this->enquiryModel->orderBy('created_on', 'DESC')->where('deleted_on IS NULL');
        
        // Apply filters if they exist
        if (!empty($fromDate)) {
            $builder->where('DATE(created_on) >=', $fromDate);
        }
        if (!empty($toDate)) {
            $builder->where('DATE(created_on) <=', $toDate);
        }
        if (!empty($roomType) && strtolower($roomType) !== 'all') {
            $builder->where('room_type', $roomType);
        }

        // Check for export requests
        if ($this->request->getGet('pdf')) {
            return $this->generatePdf($builder->findAll());
        }
        if ($this->request->getGet('excel')) {
            return $this->generateExcel($builder->findAll());
        }
        
        // Get filtered or all enquiries
        $data['enquiries'] = $builder->findAll();
        
        // Pass filter values back to view to maintain form state
        $data['filter_from_date'] = $fromDate;
        $data['filter_to_date'] = $toDate;
        $data['filter_room_type'] = $roomType;

        return view('enquiry/index', $data);
    }

    private function generatePdf($enquiries)
    {
        $data['enquiries'] = $enquiries;
        
        $mpdf = new \Mpdf\Mpdf();
        $html = view('enquiry/pdf_template', $data);
        $mpdf->WriteHTML($html);
        
        $pdfContent = $mpdf->Output('', 'S');
        
        $response = \Config\Services::response();
        $response->setHeader('Content-Type', 'application/pdf');
        $response->setHeader('Content-Disposition', 'inline; filename="enquiries_report.pdf"');
        
        return $response->setBody($pdfContent);
    }

   private function generateExcel($enquiries)
{
    // Clear any previous output
    if (ob_get_length()) ob_clean();
    
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();
    
    // Set headers
    $sheet->setCellValue('A1', 'S.No');
    $sheet->setCellValue('B1', 'Name');
    $sheet->setCellValue('C1', 'Mobile No');
    $sheet->setCellValue('D1', 'Room Type');
    $sheet->setCellValue('E1', 'Address');
    $sheet->setCellValue('F1', 'Guest Count');
    $sheet->setCellValue('G1', 'File');
    $sheet->setCellValue('H1', 'Date of Enquiry');
    
    // Fill data rows
    $row = 2;
    foreach ($enquiries as $i => $enquiry) {
        $col = 'A';
        $sheet->setCellValue($col++.$row, $i+1);
        $sheet->setCellValue($col++.$row, $enquiry['name']);
        $sheet->setCellValue($col++.$row, $enquiry['mobile_no']);
        $sheet->setCellValue($col++.$row, $enquiry['room_type']);
        $sheet->setCellValue($col++.$row, $enquiry['address']);
        $sheet->setCellValue($col++.$row, $enquiry['guest_count']);
        // File name with hyperlink
    $fileCell = $col++.$row;
    if (!empty($enquiry['file_path'])) {
        $fileUrl = base_url("public/uploads/enquiries/" . $enquiry['file_path']);
        $sheet->setCellValue($fileCell, '=HYPERLINK("'.$fileUrl.'","'.$enquiry['original_file_name'].'")');
    } else {
        $sheet->setCellValue($fileCell, 'No file');
    }
        $sheet->setCellValue($col++.$row, $enquiry['created_on']);
        $row++;
    }
    
    // Auto-size columns
    foreach(range('A','G') as $column) {
        $sheet->getColumnDimension($column)->setAutoSize(true);
    }
    
    // Set proper headers FIRST
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="enquiries_'.date('Y-m-d').'.xlsx"');
    header('Cache-Control: max-age=0');
    header('Pragma: no-cache');
    header('Expires: 0');
    
    // Then output
    $writer = new Xlsx($spreadsheet);
    $writer->save('php://output');
    exit;
}
    public function store()
    {
        helper(['url', 'form', 'text']);
        
        $rules = [
            'name' => 'required|min_length[3]|max_length[255]',
            'mobile_no' => 'required|exact_length[10]|numeric',
            'room_type' => 'permit_empty|in_list[Garden View,North East View]',
            'address' => 'required|min_length[5]',
            'guest_count' => 'permit_empty|integer|greater_than[0]',
            'enquiry_file' => 'permit_empty|uploaded[enquiry_file]|max_size[enquiry_file,5120]|ext_in[enquiry_file,pdf,jpg,jpeg,png,doc,docx]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'name' => $this->request->getPost('name'),
            'mobile_no' => $this->request->getPost('mobile_no'),
            'room_type' => $this->request->getPost('room_type'),
            'address' => $this->request->getPost('address'),
            'guest_count' => $this->request->getPost('guest_count')
        ];

        try {
            $this->db->transStart();
            
            // Handle file upload
            $file = $this->request->getFile('enquiry_file');
            if ($file && $file->isValid() && !$file->hasMoved()) {
                $basePath = ROOTPATH . 'public/uploads/enquiries/';
                
                // Create directory if it doesn't exist
                if (!is_dir($basePath)) {
                    mkdir($basePath, 0755, true);
                }
                
                $newName = $file->getRandomName();
                $file->move($basePath, $newName);
                
                $data['file_path'] = $newName;
                $data['original_file_name'] = $file->getClientName();
            }
            
            $this->enquiryModel->insert($data);
            
            $this->db->transComplete();
            return redirect()->to('/enquiry')->with('message', 'Enquiry added successfully!');
        } catch (\Exception $e) {
            $this->db->transRollback();
            return redirect()->back()->withInput()->with('error', 'Failed to save enquiry: ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        $enquiry = $this->enquiryModel->find($id);
        
        if (!$enquiry) {
            return $this->response->setJSON(['error' => 'Enquiry not found']);
        }
        
        return $this->response->setJSON($enquiry);
    }

    public function update($id)
    {
        helper(['url', 'form', 'text']);
        
        $rules = [
            'name' => 'required|min_length[3]|max_length[255]',
            'mobile_no' => 'required|exact_length[10]|numeric',
            'room_type' => 'permit_empty|in_list[Garden View,North East View]',
            'address' => 'required|min_length[5]',
            'guest_count' => 'permit_empty|integer|greater_than[0]',
            'enquiry_file' => 'permit_empty|uploaded[enquiry_file]|max_size[enquiry_file,5120]|ext_in[enquiry_file,pdf,jpg,jpeg,png,doc,docx]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        try {
            $this->db->transStart();
            
            $data = [
                'name' => $this->request->getPost('name'),
                'mobile_no' => $this->request->getPost('mobile_no'),
                'room_type' => $this->request->getPost('room_type'),
                'address' => $this->request->getPost('address'),
                'guest_count' => $this->request->getPost('guest_count'),
                'updated_on' => date('Y-m-d H:i:s')
            ];

            // Handle file upload
            $file = $this->request->getFile('enquiry_file');
            if ($file && $file->isValid() && !$file->hasMoved()) {
                $basePath = ROOTPATH . 'public/uploads/enquiries/';
                
                // Delete existing file if any
                $existingEnquiry = $this->enquiryModel->find($id);
                if ($existingEnquiry && $existingEnquiry['file_path']) {
                    $existingFilePath = $basePath . $existingEnquiry['file_path'];
                    if (file_exists($existingFilePath)) {
                        @unlink($existingFilePath);
                    }
                }
                
                $newName = $file->getRandomName();
                $file->move($basePath, $newName);
                
                $data['file_path'] = $newName;
                $data['original_file_name'] = $file->getClientName();
            }
            
            $this->enquiryModel->update($id, $data);
            
            $this->db->transComplete();
            return redirect()->to('/enquiry')->with('message', 'Enquiry updated successfully!');
        } catch (\Exception $e) {
            $this->db->transRollback();
            return redirect()->back()->withInput()->with('error', 'Failed to update enquiry: ' . $e->getMessage());
        }
    }

    public function download($id)
    {
        $enquiry = $this->enquiryModel->find($id);
        
        if (!$enquiry || !$enquiry['file_path']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        
        $filePath = ROOTPATH . 'public/uploads/enquiries/' . $enquiry['file_path'];
        
        if (!file_exists($filePath)) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        
        return $this->response->download($filePath, null)->setFileName($enquiry['original_file_name']);
    }

    public function delete($id)
    {
        try {
            $this->db->transStart();
            
            // Soft delete the enquiry
            $this->enquiryModel->update($id, ['deleted_on' => date('Y-m-d H:i:s')]);
            
            $this->db->transComplete();
            return redirect()->to('/enquiry')->with('message', 'Enquiry deleted successfully!');
        } catch (\Exception $e) {
            $this->db->transRollback();
            return redirect()->back()->with('error', 'Failed to delete enquiry: ' . $e->getMessage());
        }
    }
}