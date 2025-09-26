<?php
namespace App\Controllers;

use CodeIgniter\Files\File;
use App\Models\NoticeModel;
use App\Models\NoticeFileModel;

class Notice extends BaseController
{
    protected $db;
    protected $noticeModel;
    protected $fileModel;

    public function __construct()
    {
        $this->db = db_connect();
        $this->noticeModel = new NoticeModel();
        $this->fileModel = new NoticeFileModel();
    }

    public function index1()
    {
        helper(['url', 'form']);
        
        $notices = $this->noticeModel
            ->where('deleted_on', null)
            ->orderBy('created_on', 'DESC')
            ->findAll();
        
        foreach ($notices as &$notice) {
            $files = $this->fileModel
                ->where('notice_id', $notice['id'])
                ->where('deleted_on', null)
                ->findAll();
            $notice['files'] = $files;
        }
        
        $data['notices'] = $notices;
        return view('noticeboard/create', $data);
    }

    public function index()
{
    helper(['url', 'form']);

    // Get filter parameters from GET request
    $fromDate = $this->request->getGet('from_date');
    $toDate = $this->request->getGet('to_date');
    $priority = $this->request->getGet('priority');
    $category = $this->request->getGet('category');

    // Initialize query
    $builder = $this->noticeModel
        ->where('deleted_on', null)
        ->orderBy('created_on', 'DESC');

    // Apply filters
    if (!empty($fromDate)) {
    $builder->where('created_on >=', $fromDate . ' 00:00:00');
}
if (!empty($toDate)) {
    $builder->where('created_on <=', $toDate . ' 23:59:59');
}
    if (!empty($priority) && strtolower($priority) !== 'all') {
    $builder->where('priority', $priority);
}
if (!empty($category) && strtolower($category) !== 'all') {
    $builder->where('category', $category);
}

    // Fetch filtered notices
    $notices = $builder->findAll();

    // Get files for each notice
    foreach ($notices as &$notice) {
        $files = $this->fileModel
            ->where('notice_id', $notice['id'])
            ->where('deleted_on', null)
            ->findAll();
        $notice['files'] = $files;
    }

    // Handle PDF export
    if ($this->request->getGet('pdf')) {
        return $this->generatePdf($notices);
    }

    // Handle Excel export
    if ($this->request->getGet('excel')) {
        return $this->generateExcel($notices);
    }

    $data['notices'] = $notices;
    $data['filter_from_date'] = $fromDate;
    $data['filter_to_date'] = $toDate;
    $data['filter_priority'] = $priority;
    $data['filter_category'] = $category;

    return view('noticeboard/create', $data);
}

private function generatePdf($notices)
{
    $data['notices'] = $notices;

    $mpdf = new \Mpdf\Mpdf();
    $html = view('noticeboard/pdf_template', $data);
    $mpdf->WriteHTML($html);

    $pdfContent = $mpdf->Output('', 'S');

    $response = \Config\Services::response();
    $response->setHeader('Content-Type', 'application/pdf');
    $response->setHeader('Content-Disposition', 'inline; filename="notice_board_report.pdf"');

    return $response->setBody($pdfContent);
}

private function generateExcel($notices)
{
    $spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    // Headers
    $sheet->setCellValue('A1', 'S.No')
          ->setCellValue('B1', 'Title')
          ->setCellValue('C1', 'Content')
          ->setCellValue('D1', 'Priority')
          ->setCellValue('E1', 'Category')
          ->setCellValue('F1', 'Start Date')
          ->setCellValue('G1', 'End Date');

    $row = 2;
    foreach ($notices as $index => $n) {
        $sheet->setCellValue('A' . $row, $index + 1);
        $sheet->setCellValue('B' . $row, $n['title']);
        $sheet->setCellValue('C' . $row, $n['content']);
        $sheet->setCellValue('D' . $row, $n['priority']);
        $sheet->setCellValue('E' . $row, $n['category']);
        $sheet->setCellValue('F' . $row, $n['start_date']);
        $sheet->setCellValue('G' . $row, $n['end_date'] ?? 'No end date');
        $row++;
    }

    $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
    $filename = 'notice_board_report.xlsx';

    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header("Content-Disposition: attachment; filename=\"$filename\"");

    $writer->save("php://output");
    exit;
}


    

    public function store()
    {
        helper(['url', 'form', 'text']);
        
        $rules = [
            'title' => 'required|min_length[3]|max_length[100]',
            'content' => 'required|min_length[5]',
            'priority' => 'required|in_list[High,Medium,Low]',
            'category' => 'required|in_list[General,Important,Urgent]',
            'start_date' => 'required|valid_date',
            'end_date' => 'permit_empty|valid_date',
            'additional_info' => 'permit_empty|max_length[500]',
            'files' => 'permit_empty|uploaded[files]|max_size[files,5120]|ext_in[files,jpg,jpeg,png,pdf,doc,docx,xls,xlsx]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'title' => $this->request->getPost('title'),
            'content' => $this->request->getPost('content'),
            'priority' => $this->request->getPost('priority'),
            'category' => $this->request->getPost('category'),
            'start_date' => $this->request->getPost('start_date'),
            'end_date' => $this->request->getPost('end_date') ?: null,
            'additional_info' => $this->request->getPost('additional_info'),
            'created_on' => date('Y-m-d H:i:s')
        ];

        try {
            $this->db->transStart();
            
            $noticeId = $this->noticeModel->insert($data);
            
            $files = $this->request->getFileMultiple('files');
            
            if ($files && is_array($files)) {
                foreach ($files as $file) {
                    if ($file->isValid() && !$file->hasMoved()) {
                        $uploadPath = ROOTPATH . 'public/uploads/notices/';
                        
                        if (!is_dir($uploadPath)) {
                            mkdir($uploadPath, 0755, true);
                        }
                        
                        $newName = $file->getRandomName();
                        $file->move($uploadPath, $newName);
                        
                        $this->fileModel->insert([
                            'notice_id' => $noticeId,
                            'file_path' => $newName,
                            'original_name' => $file->getClientName(),
                            'created_on' => date('Y-m-d H:i:s')
                        ]);
                    }
                }
            }
            
            $this->db->transComplete();
            return redirect()->to('/not')->with('message', 'Notice added successfully!');
        } catch (\Exception $e) {
            $this->db->transRollback();
            return redirect()->back()->withInput()->with('error', 'Failed to save notice: ' . $e->getMessage());
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
    
    $filePath = ROOTPATH . 'public/uploads/notices/' . $file['file_path'];
    
    if (!file_exists($filePath)) {
        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
    }
    
    return $this->response->download($filePath, null)->setFileName($file['original_name']);
}

public function edit($id)
{
    $notice = $this->noticeModel->find($id);
    
    if (!$notice) {
        return $this->response->setJSON(['error' => 'Notice not found']);
    }
    
    // Only get files where deleted_on is null
    $files = $this->fileModel
        ->where('notice_id', $id)
        ->where('deleted_on', null)
        ->findAll();
    
    $notice['files'] = $files;
    
    return $this->response->setJSON($notice);
}

    // public function update($id)
    // {
    //     helper(['url', 'form', 'text']);
        
    //     $rules = [
    //         'title' => 'required|min_length[3]|max_length[100]',
    //         'content' => 'required|min_length[5]',
    //         'priority' => 'required|in_list[High,Medium,Low]',
    //         'category' => 'required|in_list[General,Important,Urgent]',
    //         'start_date' => 'required|valid_date',
    //         'end_date' => 'permit_empty|valid_date',
    //         'additional_info' => 'permit_empty|max_length[500]',
    //         'files' => 'permit_empty|uploaded[files]|max_size[files,5120]|ext_in[files,jpg,jpeg,png,pdf,doc,docx,xls,xlsx]'
    //     ];

    //     if (!$this->validate($rules)) {
    //         return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
    //     }

    //     try {
    //         $this->db->transStart();
            
    //         $data = [
    //             'title' => $this->request->getPost('title'),
    //             'content' => $this->request->getPost('content'),
    //             'priority' => $this->request->getPost('priority'),
    //             'category' => $this->request->getPost('category'),
    //             'start_date' => $this->request->getPost('start_date'),
    //             'end_date' => $this->request->getPost('end_date') ?: null,
    //             'additional_info' => $this->request->getPost('additional_info'),
    //             'updated_on' => date('Y-m-d H:i:s')
    //         ];

    //         $this->noticeModel->update($id, $data);
            
    //         $files = $this->request->getFileMultiple('files');
            
    //         if ($files && is_array($files)) {
    //             foreach ($files as $file) {
    //                 if ($file->isValid() && !$file->hasMoved()) {
    //                     $uploadPath = ROOTPATH . 'public/uploads/notices/';
                        
    //                     if (!is_dir($uploadPath)) {
    //                         mkdir($uploadPath, 0755, true);
    //                     }
                        
    //                     $newName = $file->getRandomName();
    //                     $file->move($uploadPath, $newName);
                        
    //                     $this->fileModel->insert([
    //                         'notice_id' => $id,
    //                         'file_path' => $newName,
    //                         'original_name' => $file->getClientName(),
    //                         'created_on' => date('Y-m-d H:i:s')
    //                     ]);
    //                 }
    //             }
    //         }
            
    //         $this->db->transComplete();
    //         return redirect()->to('/not')->with('message', 'Notice updated successfully!');
    //     } catch (\Exception $e) {
    //         $this->db->transRollback();
    //         return redirect()->back()->withInput()->with('error', 'Failed to update notice: ' . $e->getMessage());
    //     }
    // }


    public function update($id)
{
    helper(['url', 'form', 'text']);
    
    $rules = [
        'title' => 'required|min_length[3]|max_length[100]',
        'content' => 'required|min_length[5]',
        'priority' => 'required|in_list[High,Medium,Low]',
        'category' => 'required|in_list[General,Important,Urgent]',
        'start_date' => 'required|valid_date',
        'end_date' => 'permit_empty|valid_date',
        'additional_info' => 'permit_empty|max_length[500]',
        'files' => 'permit_empty|uploaded[files]|max_size[files,5120]|ext_in[files,jpg,jpeg,png,pdf,doc,docx,xls,xlsx]'
    ];

    if (!$this->validate($rules)) {
        return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
    }

    try {
        $this->db->transStart();
        
        $data = [
            'title' => $this->request->getPost('title'),
            'content' => $this->request->getPost('content'),
            'priority' => $this->request->getPost('priority'),
            'category' => $this->request->getPost('category'),
            'start_date' => $this->request->getPost('start_date'),
            'end_date' => $this->request->getPost('end_date') ?: null,
            'additional_info' => $this->request->getPost('additional_info'),
            'updated_on' => date('Y-m-d H:i:s')
        ];

        $this->noticeModel->update($id, $data);
        
        // Handle file uploads and soft delete existing files if new ones are uploaded
        $this->handleNoticeFiles($id, true);
        
        // Clean up old files (could also run this as a cron job)
        $this->cleanUpOldNoticeFiles();
        
        $this->db->transComplete();
        return redirect()->to('/not')->with('message', 'Notice updated successfully!');
    } catch (\Exception $e) {
        $this->db->transRollback();
        return redirect()->back()->withInput()->with('error', 'Failed to update notice: ' . $e->getMessage());
    }
}

protected function handleNoticeFiles($noticeId, $isUpdate = false)
{
    $basePath = ROOTPATH . 'public/uploads/notices/';
    
    // Get uploaded files
    $files = $this->request->getFileMultiple('files');
    
    if ($files && is_array($files)) {
        // Filter valid uploaded files
        $validFiles = array_filter($files, function($file) {
            return $file->isValid() && !$file->hasMoved();
        });

        if (!empty($validFiles)) {
            // Soft delete existing files if this is an update and new files are being uploaded
            if ($isUpdate) {
                $this->fileModel->where('notice_id', $noticeId)
                              ->where('deleted_on', null)
                              ->set(['deleted_on' => date('Y-m-d H:i:s')])
                              ->update();
            }

            // Upload new files
            foreach ($validFiles as $file) {
                $newName = $file->getRandomName();
                $file->move($basePath, $newName);

                $this->fileModel->insert([
                    'notice_id' => $noticeId,
                    'file_path' => $newName,
                    'original_name' => $file->getClientName(),
                    'created_on' => date('Y-m-d H:i:s')
                ]);
            }
        }
    }
}

private function cleanUpOldNoticeFiles()
{
    // Clean up only soft-deleted files older than 30 days
    $oldFiles = $this->fileModel->where('deleted_on IS NOT NULL')
                          ->where('deleted_on <', date('Y-m-d H:i:s', strtotime('-30 days')))
                          ->findAll();
    
    foreach ($oldFiles as $file) {
        $filePath = ROOTPATH . 'public/uploads/notices/' . $file['file_path'];
        
        // Delete physical file if exists
        if (file_exists($filePath)) {
            @unlink($filePath);
        }
        
        // Permanently delete the record
        $this->fileModel->delete($file['id'], true);
    }
}
    public function deleteFile($fileId)
    {
        try {
            $this->fileModel->delete($fileId);
            return $this->response->setJSON(['success' => true]);
        } catch (\Exception $e) {
            return $this->response->setJSON(['error' => $e->getMessage()]);
        }
    }

    public function delete($id)
    {
        try {
            $this->db->transStart();
            $this->noticeModel->delete($id);
            $this->fileModel->where('notice_id', $id)->delete();
            $this->db->transComplete();
            return redirect()->to('/not')->with('message', 'Notice deleted successfully!');
        } catch (\Exception $e) {
            $this->db->transRollback();
            return redirect()->back()->with('error', 'Failed to delete notice: ' . $e->getMessage());
        }
    }
}