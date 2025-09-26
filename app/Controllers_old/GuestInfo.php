<?php namespace App\Controllers;

use App\Models\GuestPersonalModel;
use App\Models\GuestGuardianModel;
use App\Models\GuestMedicalHistoryModel;
use App\Models\GuestLikesDisModel;

class GuestInfo extends BaseController
{
    protected $guestPersonalModel;
    protected $guestGuardianModel;
    protected $guestMedicalModel;
    protected $guestLikesModel;

    public function __construct()
    {
        $this->GuestPersonalModel = new GuestPersonalModel();
        $this->GuestGuardianModel = new GuestGuardianModel();
        $this->GuestMedicalHistoryModel = new GuestMedicalHistoryModel();
        $this->GuestLikesDisModel = new GuestLikesDisModel();
        
        helper(['url', 'form']);
         $this->session = \Config\Services::session();
    }

   

    public function index()
{
    helper(['url']);
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);

    if ($this->request->getMethod() === 'post') {

        echo "hello";
        echo '<pre>';
        print_r($this->request->getPost());
        echo '</pre>';

        // Capture all form data
        $full = $this->request->getPost();
        echo json_encode($full);
        // exit;

        // Handle file uploads
        // Handle guest photo upload
        if ($photoUpload = $this->request->getFile('photo_upload')) {
            if ($photoUpload->isValid()) {
                $photoName = $photoUpload->getRandomName();
                $photoUpload->move(ROOTPATH . 'public/uploads/guests/photos', $photoName);
                $full['photo_upload'] = 'uploads/guests/photos/' . $photoName;
            }
        }

        // Handle ID proof file
        if ($idProof = $this->request->getFile('id_proof')) {
            if ($idProof->isValid()) {
                $idProofName = $idProof->getRandomName();
                $idProof->move(ROOTPATH . 'public/uploads/guests/id_proofs', $idProofName);
                $full['id_proof'] = 'uploads/guests/id_proofs/' . $idProofName;
            }
        }

        // Handle medical reports
        if ($medicalReports = $this->request->getFile('medical_reports')) {
            if ($medicalReports->isValid()) {
                $medicalName = $medicalReports->getRandomName();
                $medicalReports->move(ROOTPATH . 'public/uploads/guests/medical_reports', $medicalName);
                $full['medical_reports'] = 'uploads/guests/medical_reports/' . $medicalName;
            }
        }

        // Handle guardian ID proofs (multiple)
       
$guardianProofs = [];
$uploadPath = ROOTPATH . 'public/uploads/guests/guardian_proofs';

// Create directory if it doesn't exist
if (!is_dir($uploadPath)) {
    mkdir($uploadPath, 0777, true);
}

// Get all uploaded files
$allFiles = $this->request->getFiles();

// Process guardian files if they exist
if (isset($allFiles['guardians']) && is_array($allFiles['guardians'])) {
    foreach ($allFiles['guardians'] as $index => $guardian) {
        if (isset($guardian['id_proof']) && 
            $guardian['id_proof']->isValid() && 
            !$guardian['id_proof']->hasMoved()) {
            
            $file = $guardian['id_proof'];
            $fileName = $file->getRandomName();
            
            if ($file->move($uploadPath, $fileName)) {
                $guardianProofs[$index] = 'uploads/guests/guardian_proofs/' . $fileName;
                echo "<p>Successfully saved guardian $index ID proof: " . $guardianProofs[$index] . "</p>";
            }
        }
    }
}

$full['guardian_id_proof'] = !empty($guardianProofs) ? json_encode($guardianProofs) : null;

        

        // Process multi-select fields
        $full['known_conditions'] = implode(',', (array)$this->request->getPost('known_conditions'));
        $full['disabilities'] = implode(',', (array)$this->request->getPost('disabilities'));
        $full['fav_foods'] = implode(',', (array)$this->request->getPost('fav_foods'));
        $full['disliked_foods'] = implode(',', (array)$this->request->getPost('disliked_foods'));
        $full['hobbies'] = implode(',', (array)$this->request->getPost('hobbies'));
        $full['religious_practices'] = implode(',', (array)$this->request->getPost('religious_practices'));
        $full['routine_preferences'] = implode(',', (array)$this->request->getPost('routine_preferences'));

        // Set creation timestamp
        date_default_timezone_set('Asia/Kolkata');
        $full['created_on'] = date("Y-m-d H:i:s");
        $full['updated_on'] = null;
        echo json_encode($full);
        //exit;

        // Save the data to the database - Personal Info first
        $this->GuestPersonalModel->save($full);
        $guestId = $this->GuestPersonalModel->insertID();

        // Save guardian information
        if (!empty($full['guardians'])) {
            foreach ($full['guardians'] as $index => $guardian) {
                $guardianData = [
                    'guest_id' => $guestId,
                    'full_name' => $guardian['full_name'],
                    'relationship_with_guest' => $guardian['relationship_with_guest'],
                    'contact_number' => $guardian['contact_number'],
                    'alternate_contact' => $guardian['alternate_contact'] ?? null,
                    'email' => $guardian['email'] ?? null,
                    'current_address' => $guardian['current_address'] ?? null,
                    'id_proof' => $guardianProofs[$index] ?? null,
                    'created_on' => date("Y-m-d H:i:s"),
                    'updated_on' => null
                ];

                echo "Saving guardian $index data:<br>";
                echo '<pre>';
                print_r($guardianData);
                echo '</pre>';
                $this->GuestGuardianModel->save($guardianData);
            }
        }

       

        // Save medical history
        $medicalData = [
            'guest_id' => $guestId,
            'known_conditions' => $full['known_conditions'],
            'disabilities' => $full['disabilities'],
            'recent_surgeries' => $full['recent_surgeries'] ?? null,
            'ongoing_medication' => $full['ongoing_medication'] ?? null,
            'doctor_info' => $full['doctor_info'] ?? null,
            'blood_group' => $full['blood_group'] ?? null,
            'allergies' => $full['allergies'] ?? null,
            'medical_reports' => $full['medical_reports'] ?? null,
            'created_on' => date("Y-m-d H:i:s"),
            'updated_on' => null
        ];
        $this->GuestMedicalHistoryModel->save($medicalData);

        // Save likes/dislikes
        $likesData = [
            'guest_id' => $guestId,
            'fav_foods' => $full['fav_foods'],
            'disliked_foods' => $full['disliked_foods'],
            'hobbies' => $full['hobbies'],
            'religious_practices' => $full['religious_practices'],
            'routine_preferences' => $full['routine_preferences'],
            'remarks' => $full['remarks'] ?? null,
            'created_on' => date("Y-m-d H:i:s"),
            'updated_on' => null
        ];
        $this->GuestLikesDisModel->save($likesData);
        //exit;

        // Set success message and redirect
        $this->session->setFlashdata('success', 'Guest information saved successfully');
        return redirect()->to(base_url('viewguestinfo'));
    }

    return view('guestinfo/create');
}

public function view()
{
    helper(['url']);
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);

    // Get all active guests
    $data['guests'] = $this->GuestPersonalModel
        ->where('deleted_on', null)
        ->findAll();

    // Get related data for each guest
    foreach ($data['guests'] as &$guest) {
        $guest['guardians'] = $this->GuestGuardianModel
            ->where('guest_id', $guest['guest_id'])
            ->findAll();
            
        $guest['medical'] = $this->GuestMedicalHistoryModel
            ->where('guest_id', $guest['guest_id'])
            ->first();
            
        $guest['preferences'] = $this->GuestLikesDisModel
            ->where('guest_id', $guest['guest_id'])
            ->first();
    }

    return view('guestinfo/view', $data);
}

public function edit($guest_id)
{
    helper(['url']);
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);

    // Load guest personal information
    $guest = $this->GuestPersonalModel->find($guest_id);
    if (!$guest) {
        return redirect()->to(base_url('guestinfo'))->with('error', 'Guest not found');
    }

    // Load related data
    $data = [
        'guest' => $guest,
        'guardians' => $this->GuestGuardianModel->where('guest_id', $guest_id)->findAll(),
        'medical' => $this->GuestMedicalHistoryModel->where('guest_id', $guest_id)->first(),
        'preferences' => $this->GuestLikesDisModel->where('guest_id', $guest_id)->first()
        
    ];

    return view('guestinfo/edit', $data);
}


public function update($guest_id)
{
    helper(['url']);
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);

    if ($this->request->getMethod() === 'post') {
        // Capture all form data
        $full = $this->request->getPost();

        // Handle file uploads
        $this->handleFileUploads($full);

        // Process multi-select fields
        $this->processMultiSelectFields($full);

        // Set update timestamp
        date_default_timezone_set('Asia/Kolkata');
        $full['updated_on'] = date("Y-m-d H:i:s");

        // Update the personal information
        $this->GuestPersonalModel->update($guest_id, $full);

        // Process guardians
        $this->processGuardians($guest_id, $full);

        echo json_encode($full);

        // Update medical history
        $medicalData = [
            'known_conditions' => $full['known_conditions'],
            'disabilities' => $full['disabilities'],
            'recent_surgeries' => $full['recent_surgeries'] ?? null,
            'ongoing_medication' => $full['ongoing_medication'] ?? null,
            'doctor_info' => $full['doctor_info'] ?? null,
            'blood_group' => $full['blood_group'] ?? null,
            'allergies' => $full['allergies'] ?? null,
            'medical_reports' => $full['medical_reports'] ?? null,
            'updated_on' => $full['updated_on']
        ];
        $this->GuestMedicalHistoryModel->where('guest_id', $guest_id)->set($medicalData)->update();

        // Update likes/dislikes
        $likesData = [
            'fav_foods' => $full['fav_foods'],
            'disliked_foods' => $full['disliked_foods'],
            'hobbies' => $full['hobbies'],
            'religious_practices' => $full['religious_practices'],
            'routine_preferences' => $full['routine_preferences'],
            'remarks' => $full['remarks'] ?? null,
            'updated_on' => $full['updated_on']
        ];
        $this->GuestLikesDisModel->where('guest_id', $guest_id)->set($likesData)->update();
        //exit;

        // Set success message and redirect
        $this->session->setFlashdata('success', 'Guest information updated successfully');
        return redirect()->to(base_url('viewguestinfo'));
    }

    // Load data for editing
    $data['guest'] = $this->GuestPersonalModel->find($guest_id);
    $data['guardians'] = $this->GuestGuardianModel->where('guest_id', $guest_id)->findAll();
    $data['medical'] = $this->GuestMedicalHistoryModel->where('guest_id', $guest_id)->first();
    $data['likes'] = $this->GuestLikesDisModel->where('guest_id', $guest_id)->first();

    return view('guestinfo/edit', $data);
}

protected function handleFileUploads(&$full)
{
    // Handle guest photo upload
    if ($photoUpload = $this->request->getFile('photo_upload')) {
        if ($photoUpload->isValid()) {
            $oldPhoto = $this->request->getPost('photo_upload');
            if ($oldPhoto && file_exists(ROOTPATH . 'public/' . $oldPhoto)) {
                unlink(ROOTPATH . 'public/' . $oldPhoto);
            }
            $photoName = $photoUpload->getRandomName();
            $photoUpload->move(ROOTPATH . 'public/uploads/guests/photos', $photoName);
            $full['photo_upload'] = 'uploads/guests/photos/' . $photoName;
        }
    } else {
        $full['photo_upload'] = $this->request->getPost('photo_upload');
    }

    // Handle ID proof file
    if ($idProof = $this->request->getFile('id_proof')) {
        if ($idProof->isValid()) {
            $oldIdProof = $this->request->getPost('id_proof');
            if ($oldIdProof && file_exists(ROOTPATH . 'public/' . $oldIdProof)) {
                unlink(ROOTPATH . 'public/' . $oldIdProof);
            }
            $idProofName = $idProof->getRandomName();
            $idProof->move(ROOTPATH . 'public/uploads/guests/id_proofs', $idProofName);
            $full['id_proof'] = 'uploads/guests/id_proofs/' . $idProofName;
        }
    } else {
        $full['id_proof'] = $this->request->getPost('id_proof');
    }

    // Handle medical reports
    if ($medicalReports = $this->request->getFile('medical_reports')) {
        if ($medicalReports->isValid()) {
            $oldMedical = $this->request->getPost('medical_reports');
            if ($oldMedical && file_exists(ROOTPATH . 'public/' . $oldMedical)) {
                unlink(ROOTPATH . 'public/' . $oldMedical);
            }
            $medicalName = $medicalReports->getRandomName();
            $medicalReports->move(ROOTPATH . 'public/uploads/guests/medical_reports', $medicalName);
            $full['medical_reports'] = 'uploads/guests/medical_reports/' . $medicalName;
        }
    } else {
        $full['medical_reports'] = $this->request->getPost('medical_reports');
    }

   
  // Handle guardian ID proofs
$guardianProofs = [];
$allFiles = $this->request->getFiles();

if (isset($allFiles['guardians']) && is_array($allFiles['guardians'])) {
    foreach ($allFiles['guardians'] as $index => $guardian) {
        if (isset($guardian['id_proof']) && $guardian['id_proof']->isValid() && !$guardian['id_proof']->hasMoved()) {
            // New file upload
            $file = $guardian['id_proof'];
            $fileName = $file->getRandomName();
            
            // Get current file path from hidden input
            $currentFile = $this->request->getPost("guardians[$index][id_proof]");
            
            // Delete old file if exists
            if (!empty($currentFile) && file_exists(ROOTPATH . 'public/' . $currentFile)) {
                unlink(ROOTPATH . 'public/' . $currentFile);
            }
            
            if ($file->move(ROOTPATH . 'public/uploads/guests/guardian_proofs', $fileName)) {
                $guardianProofs[$index] = 'uploads/guests/guardian_proofs/' . $fileName;
            }
        } else {
            // No new file - use existing file from hidden input if not deleted
            $currentFile = $this->request->getPost("guardians[$index][id_proof]");
            if (!empty($currentFile) && 
                (!isset($full['guardians'][$index]['delete']) || $full['guardians'][$index]['delete'] != '1')) {
                $guardianProofs[$index] = $currentFile;
            }
        }
    }
}

// Maintain the proofs array without re-indexing to preserve the original structure
$full['guardian_id_proof'] = !empty($guardianProofs) ? json_encode($guardianProofs) : null;


}

protected function processMultiSelectFields(&$full)
{
    $fields = [
        'known_conditions',
        'disabilities',
        'fav_foods',
        'disliked_foods',
        'hobbies',
        'religious_practices',
        'routine_preferences'
    ];
    
    foreach ($fields as $field) {
        $full[$field] = implode(',', (array)$this->request->getPost($field));
    }
}

protected function processGuardians($guest_id, $full)
{
    if (!empty($full['guardians'])) {
        // Get all existing guardian IDs for this guest
        $existingGuardianIds = array_column(
            $this->GuestGuardianModel->where('guest_id', $guest_id)->findAll(),
            'guardian_id'
        );
        
        $submittedGuardianIds = [];
        
        foreach ($full['guardians'] as $index => $guardian) {
            // Track submitted IDs
            if (!empty($guardian['guardian_id'])) {
                $submittedGuardianIds[] = $guardian['guardian_id'];
            }
            
            // Handle deletions
            if (isset($guardian['delete']) && $guardian['delete'] == '1') {
                if (!empty($guardian['guardian_id'])) {
                    $this->GuestGuardianModel->delete($guardian['guardian_id']);
                    // Remove from submitted IDs array
                    $submittedGuardianIds = array_diff($submittedGuardianIds, [$guardian['guardian_id']]);
                }
                continue;
            }
            
            // Handle file reference
            $guardianProofs = json_decode($full['guardian_id_proof'] ?? '[]', true);
            $idProof = $guardianProofs[$index] ?? null;
            
            $guardianData = [
                'guest_id' => $guest_id,
                'full_name' => $guardian['full_name'],
                'relationship_with_guest' => $guardian['relationship_with_guest'],
                'contact_number' => $guardian['contact_number'],
                'alternate_contact' => $guardian['alternate_contact'] ?? null,
                'email' => $guardian['email'] ?? null,
                'current_address' => $guardian['current_address'] ?? null,
                'id_proof' => $idProof,
                'updated_on' => $full['updated_on']
            ];
            
            if (!empty($guardian['guardian_id'])) {
                $this->GuestGuardianModel->update($guardian['guardian_id'], $guardianData);
            } else {
                $guardianData['created_on'] = $full['updated_on'];
                $this->GuestGuardianModel->insert($guardianData);
            }
        }
        
        // Delete guardians that exist in DB but weren't submitted
        $missingIds = array_diff($existingGuardianIds, $submittedGuardianIds);
        foreach ($missingIds as $idToDelete) {
            $this->GuestGuardianModel->delete($idToDelete);
        }
    } else {
        // If no guardians data received, delete all guardians for this guest
        $this->GuestGuardianModel->where('guest_id', $guest_id)->delete();
    }
}



public function delete($guest_id)
{
    helper(['url']);
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);

    try {
        // Delete from all related tables
        $this->GuestPersonalModel->delete($guest_id);
        $this->GuestMedicalHistoryModel->where('guest_id', $guest_id)->delete();
        $this->GuestLikesDisModel->where('guest_id', $guest_id)->delete();
        $this->GuestGuardianModel->where('guest_id', $guest_id)->delete();

        return redirect()->to(base_url('viewguestinfo'))->with('success', 'Deleted successfully');
    } catch (\Exception $e) {
        log_message('error', 'Failed to delete guest: ' . $e->getMessage());
        return redirect()->back()->with('error', 'Failed to delete guest. Please try again.');
    }
}

public function getGuestsForModal()
{
    helper(['url']);
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);
    
    // Get all guests using the model
    $guests = $this->GuestPersonalModel->orderBy('last_name', 'asc')->findAll();
    
    if (empty($guests)) {
        return $this->response->setJSON(['error' => 'No guests found']);
    }
    
    // Add title to each guest
    foreach ($guests as &$guest) {
        $guest['title'] = $this->getGuestTitle($guest['gender'], $guest['marital_status']);
    }
    
    return $this->response->setJSON($guests);
}

protected function getGuestTitle($gender, $maritalStatus)
{
    $gender = strtolower($gender);
    $maritalStatus = strtolower($maritalStatus);
    
    if ($gender === 'male') {
        return 'Mr.';
    } elseif ($gender === 'female') {
        return ($maritalStatus === 'married') ? 'Mrs.' : 'Miss.';
    }
    
    return ''; // Default if gender not specified
}



}
