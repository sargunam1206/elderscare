<?php

namespace App\Controllers;

use CodeIgniter\Files\File;
use App\Models\PrescriptionModel;
use App\Models\PrescriptionFileModel;
use App\Models\GuestPersonalModel;
class Prescription extends BaseController
{
    protected $db;
    protected $prescriptionModel;
    protected $fileModel;

    public function __construct()
    {
        $this->db = db_connect();
        $this->prescriptionModel = new PrescriptionModel();
        $this->fileModel = new PrescriptionFileModel();
        $this->guestinfo = new GuestPersonalModel();

    }

    public function index($id='')
    {
        helper(['url', 'form']);
        
        // Get all non-deleted prescriptions with their files
        if($id == '') {
        $prescriptions = $this->prescriptionModel
            ->where('deleted_on', null)
            ->orderBy('created_on', 'DESC')
            ->findAll();
        
        // Get files for each prescription
        foreach ($prescriptions as &$prescription) {
            $files = $this->fileModel
                ->where('prescription_id', $prescription['id'])
                ->where('deleted_on', null)
                ->findAll();
            
            $prescription['files'] = $files;
        }
    }else{
         $prescriptions = $this->prescriptionModel
            ->where('deleted_on', null)
             ->where('guest_id', $id)
            ->orderBy('created_on', 'DESC')
            ->findAll();
        
        // Get files for each prescription
        foreach ($prescriptions as &$prescription) {
            $files = $this->fileModel
                ->where('prescription_id', $prescription['id'])
                ->where('deleted_on', null)
                ->findAll();
            
            $prescription['files'] = $files;
        }
    }
     $data['guest'] = $this->guestinfo
            ->where('deleted_on', null)
            ->orderBy('created_on', 'DESC')
            ->findAll();
        
        
        $data['prescriptions'] = $prescriptions;
        
      return view('prescription/create', $data);
    }

public function store()
{
    helper(['url', 'form', 'text']);

    // Prepare prescription data
    $data = [
        'problem_description' => $this->request->getPost('problem_description'),
        'doctor_name' => $this->request->getPost('doctor_name'),
        'date' => $this->request->getPost('date'),
        'notes' => $this->request->getPost('notes'),
        'guest_id' =>  $this->request->getPost('guest_id'),
        'created_on' => date('Y-m-d H:i:s'),
        'updated_on' => null,
        'deleted_on' => null
    ];

    try {
        // Start transaction
        $this->db->transStart();
        
        // Insert prescription
        $prescriptionId = $this->prescriptionModel->insert($data);
        
        // Handle prescription file upload
        $prescriptionFile = $this->request->getFile('prescription_file');
        if ($prescriptionFile && $prescriptionFile->isValid() && !$prescriptionFile->hasMoved()) {
            $newName = $prescriptionFile->getRandomName();
            $prescriptionFile->move(ROOTPATH . 'public/uploads/prescriptions', $newName);
            
            $this->fileModel->insert([
                'prescription_id' => $prescriptionId,
                'file_path' => $newName, // Changed to match update() method
                'original_name' => $prescriptionFile->getClientName(),
                'file_type' => 'prescription',
                'created_on' => date('Y-m-d H:i:s')
            ]);
        }
        
        // Handle other files upload
        $otherFiles = $this->request->getFileMultiple('other_files');
        if ($otherFiles) {
            foreach ($otherFiles as $file) {
                if ($file->isValid() && !$file->hasMoved()) {
                    $newName = $file->getRandomName();
                    $file->move(ROOTPATH . 'public/uploads/prescriptions/other_files', $newName);
                    
                    $this->fileModel->insert([
                        'prescription_id' => $prescriptionId,
                        'file_path' => $newName, // Changed to match update() method
                        'original_name' => $file->getClientName(),
                        'file_type' => 'other',
                        'created_on' => date('Y-m-d H:i:s')
                    ]);
                }
            }
        }
        
        // Commit transaction
        $this->db->transComplete();
        
        return redirect()->to('/prescri')->with('message', 'Prescription added successfully!');
    } catch (\Exception $e) {
        // Rollback transaction on error
        $this->db->transRollback();
        return redirect()->back()->withInput()->with('error', 'Failed to save prescription: ' . $e->getMessage());
    }
}

    // public function store()
    // {
    //     helper(['url', 'form', 'text']);
        
    //     $rules = [
    //         'problem_description' => 'required|min_length[5]|max_length[255]',
    //         'doctor_name' => 'required|min_length[3]|max_length[100]',
    //         'date' => 'required|valid_date',
    //         'notes' => 'permit_empty|max_length[500]',
    //         'prescription_file' => 'uploaded[prescription_file]|max_size[prescription_file,10240]|ext_in[prescription_file,jpg,jpeg,png,pdf]',
    //         'other_files' => 'permit_empty|uploaded[other_files]|max_size[other_files,10240]|ext_in[other_files,jpg,jpeg,png,pdf,doc,docx]'
    //     ];

    //     if (!$this->validate($rules)) {
    //         return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
    //     }

    //     // Prepare prescription data
    //     $data = [
    //         'problem_description' => $this->request->getPost('problem_description'),
    //         'doctor_name' => $this->request->getPost('doctor_name'),
    //         'date' => $this->request->getPost('date'),
    //         'notes' => $this->request->getPost('notes'),
    //         'guest_id' => session()->get('user_id') ?? 0,
    //         'created_on' => date('Y-m-d H:i:s'),
    //         'updated_on' => null,
    //         'deleted_on' => null
    //     ];

    //     try {
    //         // Start transaction
    //         $this->db->transStart();
            
    //         // Insert prescription
    //         $prescriptionId = $this->prescriptionModel->insert($data);
            
    //         // Handle prescription file upload
    //         $prescriptionFile = $this->request->getFile('prescription_file');
    //         if ($prescriptionFile->isValid() && !$prescriptionFile->hasMoved()) {
    //             $newName = $prescriptionFile->getRandomName();
    //             $prescriptionFile->move(ROOTPATH . 'public/uploads/prescriptions', $newName);
                
    //             $this->fileModel->insert([
    //                 'prescription_id' => $prescriptionId,
    //                 'file_path' => $newName,
    //                 'original_name' => $prescriptionFile->getClientName(),
    //                 'file_type' => 'prescription',
    //                 'created_on' => date('Y-m-d H:i:s')
    //             ]);
    //         }
            
    //         // Handle other files upload
    //         $otherFiles = $this->request->getFiles('other_files');
    //         if ($otherFiles && isset($otherFiles['other_files'])) {
    //             foreach ($otherFiles['other_files'] as $file) {
    //                 if ($file->isValid() && !$file->hasMoved()) {
    //                     $newName = $file->getRandomName();
    //                     $file->move(ROOTPATH . 'public/uploads/prescriptions/other_files', $newName);
                        
    //                     $this->fileModel->insert([
    //                         'prescription_id' => $prescriptionId,
    //                         'file_path' => $newName,
    //                         'original_name' => $file->getClientName(),
    //                         'file_type' => 'other',
    //                         'created_on' => date('Y-m-d H:i:s')
    //                     ]);
    //                 }
    //             }
    //         }
            
    //         // Commit transaction
    //         $this->db->transComplete();
            
    //         // In your store() 
    //         session()->setFlashdata('debug_message', 'This is a test message');
    //         return redirect()->to('/prescri')->with('message', 'Prescription added successfully!');
    //     } catch (\Exception $e) {
    //         // Rollback transaction on error
    //         $this->db->transRollback();
    //         return redirect()->back()->withInput()->with('error', 'Failed to save prescription: ' . $e->getMessage());
    //     }
    // }
    
        public function files($id)
        {
            $files = $this->fileModel
                ->where('prescription_id', $id)
                ->where('deleted_on', null)
                ->findAll();
                
            if (empty($files)) {
                return $this->response->setJSON(['error' => 'No files found for this prescription']);
            }
            
            return $this->response->setJSON($files);
        }
public function edit($id)
{
    $prescription = $this->prescriptionModel->find($id);
    
    if (!$prescription) {
        return $this->response->setJSON(['error' => 'Prescription not found']);
    }
    
    // Get associated files
    $files = $this->fileModel->where('prescription_id', $id)->findAll();
    
    // Separate files into prescription files (single upload) and other files (multiple uploads)
    $prescription['prescription_file'] = null;
    $prescription['other_files'] = [];
    
    foreach ($files as $file) {
        // If file_type is empty or 'prescription', treat as single upload
        if (empty($file['file_type']) || $file['file_type'] === 'prescription') {
            $prescription['prescription_file'] = $file;
        } else {
            $prescription['other_files'][] = $file;
        }
    }
    
    return $this->response->setJSON($prescription);
}
    
public function update($id)
{
    helper(['url', 'form', 'text']);
    
    $rules = [
        'problem_description' => 'required|min_length[5]|max_length[255]',
        'doctor_name' => 'required|min_length[3]|max_length[100]',
        'date' => 'required|valid_date',
        'notes' => 'permit_empty|max_length[500]',
        'prescription_file' => 'permit_empty|max_size[prescription_file,5120]|ext_in[prescription_file,jpg,jpeg,png,pdf]',
        'other_files' => 'permit_empty|uploaded[other_files]|max_size[other_files,5120]|ext_in[other_files,jpg,jpeg,png,pdf,doc,docx]'
    ];

    if (!$this->validate($rules)) {
        return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
    }

    try {
        $this->db->transStart();
        
        $data = [
            'problem_description' => $this->request->getPost('problem_description'),
            'doctor_name' => $this->request->getPost('doctor_name'),
            'date' => $this->request->getPost('date'),
            'notes' => $this->request->getPost('notes'),
            'updated_on' => date('Y-m-d H:i:s')
        ];

        $this->prescriptionModel->update($id, $data);
        $this->handlePrescriptionFiles($id, true);
        
        // Clean up old files (could also run this as a cron job)
        $this->cleanUpOldFiles();
        
        $this->db->transComplete();
       // In your update() method
        return redirect()->to('/prescri')->with('message', 'Prescription updated successfully!');
    } catch (\Exception $e) {
        $this->db->transRollback();
        return redirect()->back()->withInput()->with('error', 'Failed to update prescription: ' . $e->getMessage());
    }
}

protected function handlePrescriptionFiles($prescriptionId, $isUpdate = false)
{
    $basePath = ROOTPATH . 'public/uploads/prescriptions/';
    $fileModel = new PrescriptionFileModel();
    
    // Handle single prescription file (empty or 'prescription' type)
    $prescriptionFile = $this->request->getFile('prescription_file');
    
    if ($prescriptionFile && $prescriptionFile->isValid() && !$prescriptionFile->hasMoved()) {
        // Delete only empty or 'prescription' type files if new file exists
        if ($isUpdate) {
            $fileModel->where('prescription_id', $prescriptionId)
                      ->groupStart()
                          ->where('file_type', 'prescription')
                          ->orWhere('file_type', '')
                          ->orWhere('file_type', null)
                      ->groupEnd()
                      ->set(['deleted_on' => date('Y-m-d H:i:s')])
                      ->update();
        }
        
        // Upload new file
        $newName = $prescriptionFile->getRandomName();
        $prescriptionFile->move($basePath, $newName);
        
        // Create new file record with 'prescription' type
        $fileModel->insert([
            'prescription_id' => $prescriptionId,
            'file_path' => $newName,
            'original_name' => $prescriptionFile->getClientName(),
            'file_type' => 'prescription',
            'created_on' => date('Y-m-d H:i:s')
        ]);
    }
    
    // Handle other files ('other' type only)
    $otherFiles = $this->request->getFiles('other_files');

    if ($otherFiles && isset($otherFiles['other_files'])) {
        // Filter valid uploaded files
        $validOtherFiles = array_filter($otherFiles['other_files'], function($file) {
            return $file->isValid() && !$file->hasMoved();
        });

        if (!empty($validOtherFiles)) {
            // Delete only 'other' type files if new files exist
            if ($isUpdate) {
                $fileModel->where('prescription_id', $prescriptionId)
                          ->where('file_type', 'other')
                          ->set(['deleted_on' => date('Y-m-d H:i:s')])
                          ->update();
            }

            // Upload new other files
            foreach ($validOtherFiles as $file) {
                $newName = $file->getRandomName();
                $file->move($basePath . 'other_files/', $newName);

                $fileModel->insert([
                    'prescription_id' => $prescriptionId,
                    'file_path' => $newName,
                    'original_name' => $file->getClientName(),
                    'file_type' => 'other',
                    'created_on' => date('Y-m-d H:i:s')
                ]);
            }
        }
    }
}

private function cleanUpOldFiles()
{
    $fileModel = new PrescriptionFileModel();
    
    // Clean up only soft-deleted files older than 30 days
    $oldFiles = $fileModel->where('deleted_on IS NOT NULL')
                          ->where('deleted_on <', date('Y-m-d H:i:s', strtotime('-30 days')))
                          ->findAll();
    
    foreach ($oldFiles as $file) {
        $basePath = ROOTPATH . 'public/uploads/prescriptions/';
        
        // Determine correct path based on file type
        $filePath = ($file['file_type'] === 'other') 
            ? $basePath . 'other_files/' . $file['file_path']
            : $basePath . $file['file_path'];
        
        // Delete physical file if exists
        if (file_exists($filePath)) {
            @unlink($filePath);
        }
        
        // Permanently delete the record
        $fileModel->delete($file['id'], true);
    }
}

public function delete($id)
{
    try {
        // Start transaction
        $this->db->transStart();
        
        // Soft delete the prescription
        $this->prescriptionModel->delete($id);
        
        // Soft delete associated files
        $this->fileModel
            ->where('prescription_id', $id)
            ->delete();
            
        // Commit transaction
        $this->db->transComplete();
        
        return redirect()->to('/prescri')->with('message', 'Prescription deleted successfully!');
    } catch (\Exception $e) {
        // Rollback transaction on error
        $this->db->transRollback();
        return redirect()->back()->with('error', 'Failed to delete prescription: ' . $e->getMessage());
    }
}
    
}