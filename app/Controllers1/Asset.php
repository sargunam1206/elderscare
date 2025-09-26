<?php

namespace App\Controllers;
use App\Models\AssetModel;
use App\Models\DealerModel;
use App\Models\AssetTypeModel;
use App\Models\AssetMakeModel;
use App\Models\UomModel;
use App\Models\AddPurchaseModel;
use App\Models\GrnModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Asset extends BaseController
{

    //protected $session;
      protected $assetModel;
    function __construct()
      {
  
          $this->session = \Config\Services::session();
          //$this->session->start();
          $this->assetModel = new AssetModel();
  
  
      }
public function index()
{
    helper(['url']);
    helper('grn'); // Load the GRN helper

    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);
    
       $accessoriesData = $this->request->getPost('accessories');

    // Generate the real GRN
    $grnModel = new \App\Models\GrnModel(); // Instantiate the GrnModel
    $generatedGrn = generateGrn($grnModel); // Generate the GRN

    // Check if the form is submitted
    if ($this->request->getPost('submit')) {

        // Get GRN from the form input
        $grn = $this->request->getPost('grn');

        // Check if the GRN already exists
        $existinggrn = $grnModel
            ->where('grn', $grn)
            ->first();

        if ($existinggrn) {
            $this->session->setFlashdata('error', 'The GRN number already exists! Please enter a unique GRN number.');
            return redirect()->to(current_url());
        }

        // Capture all form data
        $full = $this->request->getPost();
        date_default_timezone_set('Asia/Kolkata');
        $date = date("Y-m-d H:i:s");
        $full['created_on'] = $date;
        // Encode accessories data to JSON
    if (!empty($full['accessories'])) {
        $full['accessories'] = json_encode($full['accessories']);
    }
        
           // Handle asset image upload
    if ($this->request->getFile('asset_image') != '') {
        $img_bank = $this->request->getFile('asset_image');
        $filepath_bank = 'public/' . $img_bank->getName();
        $img_bank->move(ROOTPATH . 'public');
        $full['asset_image'] = $filepath_bank;
    } else {
        $full['asset_image'] = null;
    }

    // Save data to the asset table
    if ($this->assetModel->save($full)) { // Save asset and check success
            $assetId = $this->assetModel->getInsertID(); // Retrieve the inserted ID

            if ($assetId) {
                // Insert the GRN into the GRN table with the asset ID
                $grnModel->insert([
                    'grn' => $full['grn'],
                    'asset_id' => $assetId, // Link the GRN to the asset ID
                ]);

                // Set a success message
                $this->session->setFlashdata('success', 'Added successfully.');
            }
        } else {
            // If saving the asset failed
            $this->session->setFlashdata('error', 'Failed to add asset.');
        }

        // Redirect to avoid duplicate submission
        return redirect()->to(current_url());
    }

    // Return the view with the generated GRN
    return view('newasset/index', ['grn' => $generatedGrn]);
}

          public function viewAsset()
          {
              ini_set('display_errors', '1');
              ini_set('display_startup_errors', '1');
              error_reporting(E_ALL);

          
              $assetModel = new AssetModel();
          
                  // Get selected filters from the POST data
                $dealerFilters = $this->request->getPost('dealer_filters'); // Get selected dealers from POST
                $assetTypeFilters = $this->request->getPost('asset_type_filters'); // Get selected asset types from POST
                $assetMakeFilters = $this->request->getPost('asset_make_filters'); // Get selected asset makes from POST
                $materialFilters = $this->request->getPost('material_filters'); // Get selected materials from POST
                $customerFilters = $this->request->getPost('customer_filters'); // Get selected customers from POST
                $locationFilters = $this->request->getPost('location_filters'); // Get selected location from POST
                $partnumberFilters = $this->request->getPost('partnumber_filters'); // Get selected partnumber from POST
                $roomFilters = $this->request->getPost('room_filters'); // Get selected room from POST

              // Base query: fetch assets not marked as deleted
              $query = $assetModel->where('deleted_on', null);
          
              // Apply filter if asset types are selected
              if (!empty($assetTypeFilters)) {
                  $query = $query->whereIn('asset_type', $assetTypeFilters);
              }

                  // Apply asset make filter if selected
             if (!empty($assetMakeFilters)) {
                 $query->whereIn('asset_make', $assetMakeFilters); // Filter by selected asset makes
             }

                 // Apply supplier filter if selected
             if (!empty($dealerFilters)) {
                $query->whereIn('dealer_name', $dealerFilters); // Filter by selected dealers
             }

                // Apply material filter if selected
             if (!empty($materialFilters)) {
                $query->whereIn('material', $materialFilters); // Filter by selected materials
             }

            // Apply partnumber filter if selected
            if (!empty($partnumberFilters)) {
                $query->whereIn('part_number', $partnumberFilters); // Filter by selected partnumber
            }

            // Apply location filter if selected
            if (!empty($locationFilters)) {
                $query->whereIn('location', $locationFilters); // Filter by selected partnumber      
            }

                    // Apply customer filter if selected
            if (!empty($customerFilters)) {
                $query->whereIn('customer_name', $customerFilters); // Filter by customers
            }
             // Apply room filter if selected
            if (!empty($roomFilters)) {
                $query->whereIn('room', $roomFilters); // Filter by selected room      
            }

             
             
              $data['assets'] = $query->findAll();
              
               // Pass the selected filters to the view
    $data['dealerFilters'] = $dealerFilters;
    $data['assetTypeFilters'] = $assetTypeFilters;
    $data['assetMakeFilters'] = $assetMakeFilters;
    $data['materialFilters'] = $materialFilters;
    $data['partnumberFilters'] = $partnumberFilters;
    $data['locationFilters'] = $locationFilters;
    $data['customerFilters'] = $customerFilters;
    $data['roomFilters'] = $roomFilters;
            // Fetch only assets that are not marked as deleted (deleted_on = null)
          //$data['assets'] = $this->assetModel->where('deleted_on', null)->findAll();
      
          //return view('newasset/view', $data);
             $submit = $this->request->getPost('submit');
             if ($submit == "download") {
                // Pass the filtered data to the download method
                return $this->download($data);
            }

     
          
              // Log for debugging
              log_message('debug', 'Assets fetched: ' . json_encode($data['assets']));
          
              return view('newasset/view', $data);
          }
     
          public function all_purposes()
          {
              ini_set('display_errors', '1');
              ini_set('display_startup_errors', '1');
              error_reporting(E_ALL);
          
              // Load the model
              $assetModel = new AssetModel();
          
              // Fetch purposes from the database, excluding null values
              $purposes = $assetModel
                  ->select('purpose')
                  ->where('purpose IS NOT NULL')
                  ->where('purpose !=', '')// Exclude null purposes
                  ->where('deleted_on', NULL)    // Exclude soft-deleted records
                  ->groupBy('purpose')           // Group by purpose to remove duplicates
                  ->findAll();
          
              // Return as JSON response
              return $this->response->setJSON($purposes);
          }
          
          
      
      public function all_asset_types()
      {
                              ini_set('display_errors', '1');
              ini_set('display_startup_errors', '1');
              error_reporting(E_ALL);
          // Load the model
          $assetModel = new AssetTypeModel();
          
          // Fetch  from the database
             //$assetModel->distinct('asset_type');
          $assetTypes =  $assetModel->select('asset_type')->groupBy('asset_type')->where('asset_type !=', '')->where('deleted_on', NULL)->findAll();
           
           // echo json_encode($assetTypes);
          // Return as JSON response
         return $this->response->setJSON($assetTypes);
         
      }
      public function all_asset_makes()
      {
                        ini_set('display_errors', '1');
              ini_set('display_startup_errors', '1');
              error_reporting(E_ALL);
          // Load the model
          $assetModel = new AssetMakeModel();
          
          // Fetch asset makes from the database, grouped by asset make
          
          $assetMakes =  $assetModel->select('asset_make')->groupBy('asset_make')->where('asset_make !=', '')->where('deleted_on', NULL)->findAll();
          
          //echo json_encode($assetMakes);
          
          // Return the result as a JSON response
         return $this->response->setJSON($assetMakes);
      }


      /*public function all_suppliers()
      {
        // Load the model
        $assetModel = new AssetModel();
        
        // Fetch  from the database
        $suppliers = $assetModel->select('supplier_name')->groupBy('supplier_name')->where('deleted_on', NULL)->findAll();
        // Return as JSON response
        return $this->response->setJSON( $suppliers);
        
    }*/
    public function all_dealers()
    {
        // Load the model
        $dealerModel = new DealerModel();
    
        // Fetch dealers from the database
        $dealers = $dealerModel->select('dealer_name')->groupBy('dealer_name')->where('dealer_name !=', '')->where('deleted_on', NULL)->findAll();
    
        // Return as JSON response
        return $this->response->setJSON($dealers);
    }
    public function all_uoms()
    {
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);
    
        // Load the model
        $assetModel = new UomModel();
    
        // Fetch UOMs from the database (excluding null values)
        $uoms = $assetModel
            ->select('uom')
            ->where('uom IS NOT NULL')
            ->where('uom !=', '')// Exclude null UOM names
            ->where('deleted_on', NULL)    // Exclude soft-deleted records
            ->groupBy('uom')          // Group by UOM to remove duplicates
            ->findAll();
     //echo json_encode( $uoms);
        // Return as JSON response
        return $this->response->setJSON($uoms);
    }
    

      
public function all_part_numbers()
{
    // Load the model
    $assetModel = new AssetModel();
    
    // Fetch part numbers from the database
    $partnumbers = $assetModel->select('part_number')->groupBy('part_number')->where('part_number !=', '')->where('deleted_on', NULL)->findAll();
    
    // Return part numbers as JSON response
    return $this->response->setJSON($partnumbers);
}

    public function all_customers()
    {
                  ini_set('display_errors', '1');
          ini_set('display_startup_errors', '1');
          error_reporting(E_ALL);
      // Load the model
      $assetModel = new AssetModel();
      
      // Fetch  from the database
      $customers = $assetModel->select('customer_name')->groupBy('customer_name')->where('customer_name !=', '')->where('deleted_on', NULL)->findAll();
      
      
      // Return as JSON response
      return $this->response->setJSON(   $customers);
      //echo json_encode( $customers);
  }

    public function all_materials()
    {
                  ini_set('display_errors', '1');
          ini_set('display_startup_errors', '1');
          error_reporting(E_ALL);
      // Load the model
      $assetModel = new AssetModel();
      
      // Fetch  from the database
      $materials = $assetModel->select('material')->groupBy('material')->where('material !=', '')->where('deleted_on', NULL)->findAll();
      
      
      // Return as JSON response
      return $this->response->setJSON($materials);
      
  }
 public function all_locations()
  {
                ini_set('display_errors', '1');
          ini_set('display_startup_errors', '1');
          error_reporting(E_ALL);
      // Load the model
      $assetModel = new AssetModel();
      
      // Fetch unique locations from the database
      $locations = $assetModel->select('location')->groupBy('location')->where('location !=', '')->where('deleted_on', NULL)->findAll();
  
      // Return the data as JSON
      return $this->response->setJSON($locations);
  }
  
  public function all_rooms()
  {
                ini_set('display_errors', '1');
          ini_set('display_startup_errors', '1');
          error_reporting(E_ALL);
      // Load the model
      $assetModel = new AssetModel();
      
      // Fetch  from the database
      $rooms = $assetModel->select('room')->groupBy('room')->where('room !=', '')->where('deleted_on', NULL)->findAll();
      
      
      // Return as JSON response
      return $this->response->setJSON($rooms);
      //echo json_encode($locations);
  }
          // Display the edit form for a specific asset
      // Display the edit form for a specific asset
    public function edit($id)
{
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);

    $base = base64_decode(base64_decode(base64_decode($id)));

    // Fetch asset by ID
    $asset = $this->assetModel->find($base);

    if (empty($asset)) {
        throw new \CodeIgniter\Exceptions\PageNotFoundException("Asset with ID $id not found.");
    }

// Decode accessories data (if available and valid)
if (isset($asset['accessories']) && !empty($asset['accessories'])) {
    $accessoriesData = json_decode($asset['accessories'], true);

    
} else {
    $accessoriesData = [];
}

    // Decode accessories data (if available and valid)
    /*$accessoriesData = [];
    if (!empty($asset['accessories'])) {
        $accessoriesData = json_decode($asset['accessories'], true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            $accessoriesData = []; // Fallback to empty array on error
        }
    }*/

    // Pass the asset and accessories data to the view
    return view('newasset/edit', [
        'asset' => $asset,
        'accessoriesData' => $accessoriesData,
    ]);
}






    // Handle the form submission and update the asset
    public function update($id)
    {
        if ($this->request->getPost('submit')) {
            helper(['url']);
            ini_set('display_errors', '1');
            ini_set('display_startup_errors', '1');
            error_reporting(E_ALL);
        
            // Capture the form data
            $full = $this->request->getPost();
            date_default_timezone_set('Asia/Kolkata');
            $date = date("Y-m-d H:i:s");
            $full['updated_on'] = $date; // Set the updated timestamp
    
            // Fetch the current asset details
            $existingAsset = $this->assetModel->find($id);
    
            // Check if a new image is uploaded
            if ($this->request->getFile('asset_image')->isValid()) {
                // Delete the old image if it exists
                if (!empty($existingAsset['asset_image']) && file_exists(ROOTPATH . 'public/' . $existingAsset['asset_image'])) {
                    unlink(ROOTPATH . 'public/' . $existingAsset['asset_image']); // Delete the old image
                }
    
                // Handle the new image upload
                $img_bank = $this->request->getFile('asset_image');
                $filepath_bank = 'public/' . $img_bank->getName();
                $img_bank->move(ROOTPATH . 'public'); // Move the file to the desired directory
                $full['asset_image'] = $filepath_bank; // Set the new image path
            } else {
                // If no new image is uploaded, keep the existing image
                $full['asset_image'] = $existingAsset['asset_image'];
            }
    
            // Update the asset in the database
            $this->assetModel->update($id, $full);
    
            // Set a success message and redirect
            $this->session->setFlashdata('success', 'Updated successfully.');
            return redirect()->to('viewasset');
        }
    
        // Return the edit view if no form was submitted
        return view('newasset/edit', ['asset' => $this->assetModel->find($id)]);
    }
    
    
   
    public function delete($id)
    {
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);

        
        $base=base64_decode(base64_decode(base64_decode($id)));
        // Fetch the asset to delete
        $asset = $this->assetModel->find( $id);
    
        if (empty($asset)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Asset with ID $id not found.");
        }
    
        // Check if the asset has an associated image and delete the file
        if (!empty($asset['asset_image']) && file_exists(ROOTPATH . 'public/' . $asset['asset_image'])) {
            unlink(ROOTPATH . 'public/' . $asset['asset_image']);
        }
    
        // Perform the soft delete by setting the deleted_on timestamp
        date_default_timezone_set('Asia/Kolkata');
        $date = date("Y-m-d H:i:s");
        $updateData = [
            'deleted_on' => $date,  // Set the current date and time as the deleted timestamp
        ];
    
        // Update the asset record with the soft delete timestamp
        if ($this->assetModel->update($id, $updateData)) {
            // Set a success message
            $this->session->setFlashdata('success', 'Deleted successfully.');
        } else {
            // Set an error message
            $this->session->setFlashdata('error', 'Failed to mark asset as deleted. Please try again.');
        }
    
        // Redirect to the asset list page
        return redirect()->to('viewasset');
    }
    /*public function delete_assets()
    {
        // Get the raw POST data
        $input = $this->request->getJSON();
        date_default_timezone_set('Asia/Kolkata');
        $deletedOn = date("Y-m-d H:i:s");
    
        if (isset($input->ids) && is_array($input->ids)) {
            // Load the AssetModel
            $assetModel = new AssetModel();
    
            // Perform a soft delete by updating the 'deleted_on' field
            foreach ($input->ids as $id) {
                $assetModel->update($id, ['deleted_on' => $deletedOn]);
            }
    
            return $this->response->setJSON(['success' => true, 'message' => 'Assets soft-deleted successfully.']);
        } else {
            return $this->response->setJSON(['success' => false, 'message' => 'No valid IDs received.']);
        }
    }*/
    
    

    public function delete_assets()
    {
        // Get the raw POST data
        $input = $this->request->getJSON();
        date_default_timezone_set('Asia/Kolkata');
        $deletedOn = date("Y-m-d H:i:s");
    
        // Check if input contains valid IDs
        if (isset($input->ids) && is_array($input->ids)) {
            // Load the AssetModel
            $assetModel = new AssetModel();
            $successCount = 0;
            $errorCount = 0;
    
            // Perform a soft delete by updating the 'deleted_on' field
            foreach ($input->ids as $id) {
                $updateData = ['deleted_on' => $deletedOn];
                if ($assetModel->update($id, $updateData)) {
                    $successCount++;
                } else {
                    $errorCount++;
                }
            }
    
            // Set flash messages based on the result
            if ($successCount > 0) {
                $this->session->setFlashdata('success', "$successCount deleted successfully.");
            }
            if ($errorCount > 0) {
                $this->session->setFlashdata('error', "$errorCount failed to be deleted. Please try again.");
            }
    
            return $this->response->setJSON([
                'success' => true,
                'message' => 'Assets deleted successfully.',
                'successCount' => $successCount,
                'errorCount' => $errorCount,
            ]);
        } else {
            // Set an error message if no valid IDs are received
            $this->session->setFlashdata('error', 'No valid IDs received. Please try again.');
            return $this->response->setJSON([
                'success' => false,
                'message' => 'No valid IDs received.',
            ]);
        }
    }
 

   public function download($data)
    {
        ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);



       $assetModel = new \App\Models\AssetModel();
    $query = $assetModel->where('deleted_on', NULL); // Apply filters if needed

       // Apply supplier filter if selected
       if (!empty($data['dealerFilters'])) {
        $query->whereIn('dealer_name', $data['dealerFilters']);
    }

    // Apply asset type filter if selected
    if (!empty($data['assetTypeFilters'])) {
        $query->whereIn('asset_type', $data['assetTypeFilters']);
    }

    // Apply asset make filter if selected
    if (!empty($data['assetMakeFilters'])) {
        $query->whereIn('asset_make', $data['assetMakeFilters']);
    }
       // Apply supplier filter if selected
       if (!empty($data['materialFilters'])) {
        $query->whereIn('material', $data['materialFilters']);
    }

    // Apply asset type filter if selected
    if (!empty($data['customerFilters'])) {
        $query->whereIn('customer_name', $data['customerFilters']);
    }

    // Apply asset make filter if selected
    if (!empty($data['locationFilters'])) {
        $query->whereIn('location', $data['locationFilters']);
    }

      // Apply asset type filter if selected
      if (!empty($data['partnumberFilters'])) {
        $query->whereIn('part_number', $data['partnumberFilters']);
    }

    // Apply asset make filter if selected
    if (!empty($data['roomFilters'])) {
        $query->whereIn('room', $data['roomFilters']);
    }

   

    // Fetch the filtered data
    $data['assets'] = $query->findAll();

    
        // Initialize mPDF
        $mpdf = new \Mpdf\Mpdf();
       // echo json_encode($data);
        // Generate the HTML content from the 'newasset/download' view and pass the data
        $html = view('newasset/download',$data);
    
        // Write the HTML content to the PDF
        $mpdf->WriteHTML($html);
    
        // Get the generated PDF content as a string
        $pdfContent = $mpdf->Output('', 'S');
    
        // Set response headers for PDF download
        $response = \Config\Services::response();
        $response->setHeader('Content-Type', 'application/pdf');
        $response->setHeader('Content-Disposition', 'inline; filename="download.pdf"');
    
        // Return the generated PDF content
        return $response->setBody($pdfContent);
    }
    
    
    public function exportToExcel()
{
  
    // Fetch selected filters from POST data
    $dealerFilters = $this->request->getPost('dealer_filters');
    $assetTypeFilters = $this->request->getPost('asset_type_filters');
    $assetMakeFilters = $this->request->getPost('asset_make_filters');
    $materialFilters = $this->request->getPost('material_filters');
    $customerFilters = $this->request->getPost('customer_filters');
    $locationFilters = $this->request->getPost('location_filters');
    $partnumberFilters = $this->request->getPost('partnumber_filters');
    $roomFilters = $this->request->getPost('room_filters');

    // Fetch the asset data with filters
    $assetModel = new \App\Models\AssetModel();
    $query = $assetModel->where('deleted_on', NULL); // Base query for non-deleted assets

    // Apply filters if selected
    if (!empty($assetTypeFilters)) {
        $query->whereIn('asset_type', $assetTypeFilters);
    }
    if (!empty($assetMakeFilters)) {
        $query->whereIn('asset_make', $assetMakeFilters);
    }
    if (!empty($dealerFilters)) {
        $query->whereIn('dealer_name', $dealerFilters);
    }
    if (!empty($materialFilters)) {
        $query->whereIn('material', $materialFilters);
    }
    if (!empty($customerFilters)) {
        $query->whereIn('customer_name', $customerFilters);
    }
    if (!empty($locationFilters)) {
        $query->whereIn('location', $locationFilters);
    }
    if (!empty($partnumberFilters)) {
        $query->whereIn('part_number', $partnumberFilters);
    }
    if (!empty($roomFilters)) {
        $query->whereIn('room', $roomFilters);
    }

    $assets = $query->findAll(); // Fetch filtered assets

    // Rest of the Excel export logic remains the same
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    // Set the header row
    $sheet->setCellValue('A1', 'S.No');
    $sheet->setCellValue('B1', 'Asset Type');
    $sheet->setCellValue('C1', 'Asset Make');
    $sheet->setCellValue('D1', 'Specification');
    $sheet->setCellValue('E1', 'Current Stock');
    $sheet->setCellValue('F1', 'Reorder Level');
    $sheet->setCellValue('G1', 'Dealer Name');
    $sheet->setCellValue('H1', 'Asset Image'); // Will be a clickable link
    $sheet->setCellValue('I1', 'Grade');
    $sheet->setCellValue('J1', 'Material');
    $sheet->setCellValue('K1', 'Part Name');
    $sheet->setCellValue('L1', 'Part Number');
    $sheet->setCellValue('M1', 'Customer Name');
    $sheet->setCellValue('N1', 'Purpose');
    $sheet->setCellValue('O1', 'Unit of Measurement (UOM)');
    $sheet->setCellValue('P1', 'Calibration Id');
    $sheet->setCellValue('Q1', 'Serial Id');
    $sheet->setCellValue('R1', 'Location');
    $sheet->setCellValue('S1', 'Room');
    $sheet->setCellValue('T1', 'Goods Received Number (GRN)');
    $sheet->setCellValue('U1', 'Accessories');
    $sheet->setCellValue('V1', 'Resharpening');

    // Fill the rows with asset data
    $row = 2; // Start from the second row
    $serialNumber = 1; // Initialize serial number
    foreach ($assets as $asset) {
        $sheet->setCellValue('A' . $row, $serialNumber); // Serial number
        $sheet->setCellValue('B' . $row, $asset['asset_type']);
        $sheet->setCellValue('C' . $row, $asset['asset_make']);
        $sheet->setCellValue('D' . $row, $asset['specification']);
        $sheet->setCellValue('E' . $row, $asset['current_stock']);
        $sheet->setCellValue('F' . $row, $asset['reorder_level']);
        $sheet->setCellValue('G' . $row, $asset['dealer_name']);
        
        // Set the asset image as a clickable hyperlink
        if (!empty($asset['asset_image'])) {
            $imageUrl = base_url($asset['asset_image']); // Replace with your actual image path
            $sheet->setCellValue('H' . $row, 'View Image');
            $sheet->getCell('H' . $row)->getHyperlink()->setUrl($imageUrl); // Set the hyperlink
            $sheet->getStyle('H' . $row)->getFont()->setUnderline(true)->getColor()->setRGB('0000FF');
        } else {
            $sheet->setCellValue('H' . $row, 'No Image');
        }

        $sheet->setCellValue('I' . $row, $asset['grade']);
        $sheet->setCellValue('J' . $row, $asset['material']);
        $sheet->setCellValue('K' . $row, $asset['part_name']);
        $sheet->setCellValue('L' . $row, $asset['part_number']);
        $sheet->setCellValue('M' . $row, $asset['customer_name']);
        $sheet->setCellValue('N' . $row, $asset['purpose']);
        $sheet->setCellValue('O' . $row, $asset['uom']);
        $sheet->setCellValue('P' . $row, $asset['calibration_id']);
        $sheet->setCellValue('Q' . $row, $asset['serial_id']);
        $sheet->setCellValue('R' . $row, $asset['location']);
        $sheet->setCellValue('S' . $row, $asset['room']);
        $sheet->setCellValue('T' . $row, $asset['grn']);
        $sheet->setCellValue('U' . $row, $asset['accessories']);
        $sheet->setCellValue('V' . $row, $asset['resharpening']);

        $row++;
        $serialNumber++;
    }

    // Generate and download the Excel file
    $writer = new Xlsx($spreadsheet);
    $fileName = 'Assets_' . date('Y-m-d') . '.xlsx';

    // Set headers to trigger download
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="' . $fileName . '"');
    header('Cache-Control: max-age=0');

    $writer->save('php://output');
    exit;
}

    
    
}