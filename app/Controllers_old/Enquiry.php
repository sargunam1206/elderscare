<?php
namespace App\Controllers;

use App\Models\EnquiryModel;
use CodeIgniter\Files\File;

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
        $name = $this->request->getGet('name');
        $mobileNo = $this->request->getGet('mobile_no');
        $roomType = $this->request->getGet('room_type');

        $filters = [
            'name' => $name,
            'mobile_no' => $mobileNo,
            'room_type' => $roomType
        ];

        // Fetch filtered enquiries
        $enquiries = $this->enquiryModel->getFilteredEnquiries($filters);

        $data['enquiries'] = $enquiries;
        $data['filter_name'] = $name;
        $data['filter_mobile_no'] = $mobileNo;
        $data['filter_room_type'] = $roomType;

        return view('enquiry/index', $data);
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