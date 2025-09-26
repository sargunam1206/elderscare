<?php

namespace App\Controllers;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use App\Models\AddPurchaseModel;
use App\Models\AssetModel;
use App\Models\DealerModel;
use App\Models\AssetTypeModel;
use App\Models\AssetMakeModel;
use App\Models\UomModel;
use App\Models\GrnModel;


class AddPurchase extends BaseController
{
  

    //protected $session;
    protected $AddPurchaseModel;
  function __construct()
    {

        $this->session = \Config\Services::session();
        //$this->session->start();
        $this->AddPurchaseModel = new AddPurchaseModel();
        $this->AssetModel = new AssetModel();

    }
    
    public function index()
    {
        helper(['url']);
        helper('grn'); // Load the GRN helper
    
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);
    
        // Generate the real GRN on page load
        $grnModel = new \App\Models\GrnModel(); // Instantiate the GrnModel
        $generatedGrn = generateGrn($grnModel); // Generate the GRN using the helper
    
        // Variable to hold the inserted row
        $insertedPurchase = null;
    
        // Check if the form is submitted
        if ($this->request->getPost('submit')) {
            // Get the invoice number entered by the user
            $invoiceNumber = $this->request->getPost('invoice_number');
    
            // Check if the invoice number already exists
            $existingInvoice = $this->AddPurchaseModel
                ->where('invoice_number', $invoiceNumber)
                ->first();
    
            // If the invoice number exists, show an error message and prevent form submission
            if ($existingInvoice) {
                $this->session->setFlashdata('error', 'The invoice number already exists! Please enter a unique invoice number.');
                return redirect()->to(current_url());
            }
    
            // Capture all form data
            $full = $this->request->getPost();
            date_default_timezone_set('Asia/Kolkata');
            $date = date("Y-m-d H:i:s");
            $full['created_on'] = $date;
    
            // Assign the generated GRN
            $full['grn'] = $generatedGrn;
   // Handle asset image upload
            if ($this->request->getFile('asset_image') != '') {
                $img_bank = $this->request->getFile('asset_image');
                $filepath_bank = 'public/' . $img_bank->getName();
                $img_bank->move(ROOTPATH . 'public');
                $full['asset_image'] = $filepath_bank;
            } else {
                $full['asset_image'] = null;
            }
    
            // Save the data to the `add_purchase` table
            if ($this->AddPurchaseModel->save($full)) {
               /* echo '<pre>';
                print_r($full);
                echo'</pre>';
                exit;*/
                      
                $purchaseId = $this->AddPurchaseModel->getInsertID(); // Retrieve the inserted ID
    
                if ($purchaseId) {
                    // Retrieve the inserted row from the `add_purchase` table
                    $insertedPurchase = $this->AddPurchaseModel->find($purchaseId);
    
                    // Insert the GRN into the GRN table with the purchase ID
                    $grnModel->insert([
                        'grn' => $generatedGrn,
                        'purchase_id' => $purchaseId // Link the GRN to the purchase ID
                    ]);
    
                    // If purchase_status is "Assets Received," save data to the `newasset` table
                    if ($full['purchase_status'] === 'Assets Received') {
                        $assetData = [
                            'asset_type' => $full['asset_type'],
                            'asset_make' => $full['asset_make'],
                            'specification' => $full['specification'],
                            'material' => $full['material'],
                            'asset_image' => $full['asset_image'],
                            'part_name' => $full['part_name'],
                            'part_number' => $full['part_number'],
                            'customer_name' => $full['customer_name'],
                            'reorder_level' => $full['reorder'],
                            'location' => $full['location'],
                            'room' => $full['room'],
                            'current_stock' => $full['quantity'],
                            'dealer_name' => $full['supplier_name'],
                            'grade' => $full['grade'],
                            'purpose' => $full['purchase_reason'],
                            'uom' => $full['uom'],
                            'grn' => $generatedGrn, // Link the GRN
                            'accessories' => $full['accessories'],
                            'resharpening' => $full['resharpen'],
                            'created_on' => $date,
                        ];
    
                        $this->AssetModel->save($assetData);
                    }
    
                    // Set a success message
                    $this->session->setFlashdata('success', 'Purchase added successfully. ');
                }
            }
    
            // Redirect to the same page to avoid duplicate submission
            return redirect()->to(current_url());
        }
    
        // Return the view with the GRN value and the inserted row if available
        return view('addpurchase/create', ['grn' => $generatedGrn, 'insertedPurchase' => $insertedPurchase]);
        //echo json_encode($insertedPurchase);
    }
    


    

    


            public function getSupplierSuggestions()
            {
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);

                
               
                $query = $this->request->getGet('query'); // Get the user input
                if (!empty($query)) {
                    // Fetch matching supplier names from the database
                    $suppliers = $this->AddPurchaseModel
                    ->select('supplier_name')
                        ->like('supplier_name', $query)
                        ->groupBy('supplier_name')
                        ->findAll();
            
                    // Return JSON response
                    return $this->response->setJSON($suppliers);
                    //echo json_encode($suppliers);
                }
                return $this->response->setJSON([]);
                //echo json_encode($suppliers);
            }
            
            public function getAssetSuggestions()
{
    $query = $this->request->getGet('query'); // Get the user input
    if (!empty($query)) {
        // Fetch matching asset types from the database
        $assets = $this->AddPurchaseModel
        ->select('asset_type')
            ->like('asset_type', $query)
            ->groupBy('asset_type')
            ->findAll();

        // Return JSON response
        return $this->response->setJSON($assets);
    }
    return $this->response->setJSON([]);
}

public function getAssetMakeSuggestions()
{
    $query = $this->request->getGet('query'); // Get the user input
    if (!empty($query)) {
        // Fetch matching asset makes from the database
        $makes = $this->AddPurchaseModel
            ->select('asset_make') // Select only the asset_make column
            ->like('asset_make', $query)
            ->groupBy('asset_make') // Group by asset_make to ensure uniqueness
            ->findAll();

        // Return JSON response
        return $this->response->setJSON($makes);
    }
    return $this->response->setJSON([]);
}

public function getPurchaseReasonSuggestions()
{
    $query = $this->request->getGet('query'); // Get the user input
    if (!empty($query)) {
        // Fetch unique purchase reasons matching the query
        $reasons = $this->AddPurchaseModel
            ->select('purchase_reason') // Select only the purchase_reason column
            ->like('purchase_reason', $query)
            ->groupBy('purchase_reason') // Ensure unique values
            ->findAll();

        // Return JSON response
        return $this->response->setJSON($reasons);
    }
    return $this->response->setJSON([]);
}

public function view()
{
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);

    // Load the model
    $purchaseModel = new AddPurchaseModel();

    // Get selected filters from the POST data
    $supplierFilters = $this->request->getPost('supplier_filters');
    $assetTypeFilters = $this->request->getPost('asset_type_filters');
    $assetMakeFilters = $this->request->getPost('asset_make_filters');
    $purchaseReasonFilters = $this->request->getPost('purchase_reason_filters');
    $purchaseStatuses = $this->request->getPost('purchase_status_filters');
    $from_date = $this->request->getPost('from_date'); // Capture 'From Date'
    $to_date = $this->request->getPost('to_date');     // Capture 'To Date'

    // Build the query
    $query = $purchaseModel->where('deleted_on', NULL);

    // Apply supplier filter if selected
    if (!empty($supplierFilters)) {
        $query->whereIn('supplier_name', $supplierFilters);
    }

    // Apply asset type filter if selected
    if (!empty($assetTypeFilters)) {
        $query->whereIn('asset_type', $assetTypeFilters);
    }

    // Apply asset make filter if selected
    if (!empty($assetMakeFilters)) {
        $query->whereIn('asset_make', $assetMakeFilters);
    }

    // Apply purchase reason filter if selected
    if (!empty($purchaseReasonFilters)) {
        $query->whereIn('purchase_reason', $purchaseReasonFilters);
    }

    // Apply purchase status filter if selected
    if (!empty($purchaseStatuses)) {
        $query->whereIn('purchase_status', $purchaseStatuses);
    }

    // Apply date range filter
    if (!empty($from_date)) {
        $from_correctdate = date("Y-m-d 00:00:00", strtotime($from_date));
        $query->where("STR_TO_DATE(created_on, '%Y-%m-%d %H:%i:%s') >=", $from_correctdate);
    }

    if (!empty($to_date)) {
        $to_correctdate = date("Y-m-d 23:59:59", strtotime($to_date));
        $query->where("STR_TO_DATE(created_on, '%Y-%m-%d %H:%i:%s') <=", $to_correctdate);
    }

    // Fetch the filtered data
    $data['alldata'] = $query->findAll();

    // Pass the selected filters to the view
    $data['supplierFilters'] = $supplierFilters;
    $data['assetTypeFilters'] = $assetTypeFilters;
    $data['assetMakeFilters'] = $assetMakeFilters;
    $data['purchaseReasonFilters'] = $purchaseReasonFilters;
    $data['purchaseStatuses'] = $purchaseStatuses;
    $data['from_date'] = $from_date;
    $data['to_date'] = $to_date;

    // Handle form submission for download
    $submit = $this->request->getPost('submit');
    if ($submit == "download") {
        return $this->download($data);
    }

    // Render the view with filtered data
    return view("addpurchase/view", $data);
}





public function all_suppliers()
    {
        // Load the model
        $dealerModel = new DealerModel();
    
        // Fetch dealers from the database
        $suppliers = $dealerModel->select('dealer_name')->groupBy('dealer_name')->where('deleted_on', NULL)->findAll();
    
        // Return as JSON response
        return $this->response->setJSON($suppliers);
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
          $assetTypes =  $assetModel->select('asset_type')->groupBy('asset_type')->where('deleted_on', NULL)->findAll();
           
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
          
          $assetMakes =  $assetModel->select('asset_make')->groupBy('asset_make')->where('deleted_on', NULL)->findAll();
          
          //echo json_encode($assetMakes);
          
          // Return the result as a JSON response
         return $this->response->setJSON($assetMakes);
      }

public function all_purchase_reasons()
{
    // Load the model
    $purchaseModel = new AddPurchaseModel();
    
    // Fetch purchase reasons from the database, grouped by purchase reason
    //$purchaseReasons = $purchaseModel->groupBy('purchase_reason')->where('deleted_on',NULL)->findAll();
    $purchaseReasons = $purchaseModel->select('purchase_reason')->groupBy('purchase_reason')->where('deleted_on', NULL)->findAll();
    // Return the result as a JSON response
    return $this->response->setJSON($purchaseReasons);
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
        ->where('uom IS NOT NULL') // Exclude null UOM names
        ->where('deleted_on', NULL)    // Exclude soft-deleted records
        ->groupBy('uom')          // Group by UOM to remove duplicates
        ->findAll();
 //echo json_encode( $uoms);
    // Return as JSON response
    return $this->response->setJSON($uoms);
}


            public function edit($grn=null) {

                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);
                $base=base64_decode(base64_decode(base64_decode($grn)));
                
                $purchaseModel = new AddPurchaseModel();
                
                $data['purchase'] =$purchaseModel->where('grn',$base)->first();
                //echo json_encode($data);
                //echo $base;
                return view('addpurchase/edit', $data);
            }
            

           

            
            public function update()
            {
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);
            
                $purchaseModel = new AddPurchaseModel();
                $assetModel = new AssetModel();
                $grn = $this->request->getVar('grn');
                
                // Get the current timestamp
                date_default_timezone_set("Asia/Kolkata");
                $date = date("Y-m-d h:i:s");
            
                // Get the existing purchase data to retain old image if no new image is uploaded
                $existingPurchase = $purchaseModel->where('grn', $grn)->first();
            
                // If GRN does not exist, handle the error
                if (!$existingPurchase) {
                    $session = \Config\Services::session();
                    $session->setFlashdata('error', 'GRN not found');
                    return redirect()->to(base_url('viewpurchase1'));
                }
            
                // Get the posted data from the form
                $data = $this->request->getPost();
            
                // Handle file upload if a new file is provided
                if ($this->request->getFile('asset_image') && $this->request->getFile('asset_image')->isValid()) {
                    $img_bank = $this->request->getFile('asset_image');
                    $filepath_bank = 'public/' . $img_bank->getRandomName(); // Generate a random file name
                    $img_bank->move(ROOTPATH . 'public', $filepath_bank); // Move the file to the public folder
                    $data['asset_image'] = $filepath_bank; // Set the new image path
                } else {
                    // Retain the old image path if no new image is uploaded
                    $data['asset_image'] = $existingPurchase['asset_image'] ?? null;
                }
            
                // Set the updated timestamp
                $data['updated_on'] = $date;
            
                // Update the purchase record
                $isUpdated = $purchaseModel->where('grn', $grn)->set($data)->update();
            
                // Check if the purchase status is "Assets Received"
                if (isset($data['purchase_status']) && $data['purchase_status'] === 'Assets Received') {
                    // Prepare data for the `newasset` table
                    $assetData = [
                        'asset_type' => $data['asset_type'],
                        'asset_make' => $data['asset_make'],
                        'specification' => $data['specification'],
                        'material' => $data['material'],
                        'asset_image' => $data['asset_image'], // Use the existing or newly uploaded image
                        'part_name' => $data['part_name'],
                        'part_number' => $data['part_number'],
                        'customer_name' => $data['customer_name'],
                        'reorder_level' => $data['reorder'],
                        'location' => $data['location'],
                        'room' => $data['room'],
                        'current_stock' => $data['quantity'],
                        'dealer_name' => $data['supplier_name'],
                        'grade' => $data['grade'],
                        'purpose' => $data['purchase_reason'],
                        'uom' => $data['uom'],
                        'grn' => $data['grn'],
                        'accessories' => $data['accessories'],
                        'resharpening' => $data['resharpen'],
                        'created_on' => $date,
                    ];
            
                    // Check if the GRN already exists in the newasset table
                    $existingAsset = $assetModel->where('grn', $data['grn'])->first();
            
                    if ($existingAsset) {
                        // If the GRN exists, update the existing asset record
                        $assetModel->where('grn', $data['grn'])->set($assetData)->update();
                    } else {
                        // If the GRN does not exist, insert a new asset record
                        $assetModel->save($assetData);
                    }
                }
            
                // Handle success or failure
                $session = \Config\Services::session();
                if ($isUpdated) {
                    $session->setFlashdata('success', 'Updated successfully');
                } else {
                    $session->setFlashdata('error', 'Failed to update');
                }
            
                return redirect()->to(base_url('viewpurchase1'));
            }
            

            


            public function delete($user_id=null)
            {
               
                
                $base=base64_decode(base64_decode(base64_decode($user_id)));
                
                date_default_timezone_set("Asia/Kolkata");
                $date = date("Y-m-d h:i:s");

                        $data=[

                            'deleted_on' => $date,
                        ];
                
                $info = new AddPurchaseModel();
                $info->where('purchase_id', $base)->update($base,$data);
                $info->where('deleted_on =',null);
                
                $session= \Config\Services::session();
                $session->setFlashdata('success', 'Deleted successfully'); 
                //$data['alldata']=$info->orderBy('purchase_id', 'ASC')->findAll();
             
                helper(['url']);
                return redirect()->to('viewpurchase1'); 


            }

            public function delete_assets()
            {
                // Get the raw POST data
                $input = $this->request->getJSON();
                date_default_timezone_set('Asia/Kolkata');
                $deletedOn = date("Y-m-d H:i:s");
            
                // Check if input contains valid IDs
                if (isset($input->ids) && is_array($input->ids)) {
                    // Load the AssetModel
                    $assetModel = new AddPurchaseModel();
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
                        $this->session->setFlashdata('success', "$successCount  Deleted successfully.");
                    }
                    if ($errorCount > 0) {
                        $this->session->setFlashdata('error', "$errorCount Failed to be deleted. Please try again.");
                    }
            
                    return $this->response->setJSON([
                        'success' => true,
                        'message' => 'Deleted successfully.',
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

            /*public function download($data)
            {
                ini_set('display_errors', '0');
                ini_set('display_startup_errors', '0');
                error_reporting(0);
                
                // echo json_encode($data);
                $mpdf = new \Mpdf\Mpdf();
                $html = view('addpurchase/download',$data);
    
                $mpdf->WriteHTML($html);
    
                $pdfContent = $mpdf->Output('', 'S');
    
                $response = \Config\Services::response();
                $response->setHeader('Content-Type', 'application/pdf');
                $response->setHeader('Content-Disposition', 'inline; filename="download.pdf"');
    
                return $response->setBody($pdfContent);
            }*/


            public function download($data)
{
    ini_set('display_errors', '0');
    ini_set('display_startup_errors', '0');
    error_reporting(0);

    // Get the selected date range filters from the $data parameter
    $from_date = $data['from_date'] ?? null;
    $to_date = $data['to_date'] ?? null;

    // Load the model
    $purchaseModel = new AddPurchaseModel();

    // Start building the query
    $query = $purchaseModel->where('deleted_on', NULL);

    // Apply the date range filter if provided
    if (!empty($from_date)) {
        $from_correctdate = date("Y-m-d 00:00:00", strtotime($from_date));
        $query->where("STR_TO_DATE(created_on, '%Y-%m-%d %H:%i:%s') >=", $from_correctdate);
    }

    if (!empty($to_date)) {
        $to_correctdate = date("Y-m-d 23:59:59", strtotime($to_date));
        $query->where("STR_TO_DATE(created_on, '%Y-%m-%d %H:%i:%s') <=", $to_correctdate);
    }

    

    // Fetch the filtered data
    $data['alldata'] = $query->findAll();

    // Generate the HTML for the PDF
    $html = view('addpurchase/download', $data);

    // Create a new mPDF instance and write the HTML content
    $mpdf = new \Mpdf\Mpdf();
    $mpdf->WriteHTML($html);

    // Generate the PDF content
    $pdfContent = $mpdf->Output('', 'S');

    // Prepare the response to download the PDF
    $response = \Config\Services::response();
    $response->setHeader('Content-Type', 'application/pdf');
    $response->setHeader('Content-Disposition', 'inline; filename="download.pdf"');

    // Return the PDF as the response body
    return $response->setBody($pdfContent);
}



public function downloadexcel()
{
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);
    
    $purchaseModel = new AddPurchaseModel();

    // Get selected filters from the POST data
    $from_date = $this->request->getPost('from_date');
    $to_date = $this->request->getPost('to_date');

    // Build the query
    $query = $purchaseModel->where('deleted_on', NULL);

    // Apply date range filter
    if (!empty($from_date)) {
        $from_correctdate = date("Y-m-d 00:00:00", strtotime($from_date));
        $query->where("STR_TO_DATE(created_on, '%Y-%m-%d %H:%i:%s') >=", $from_correctdate);
    }

    if (!empty($to_date)) {
        $to_correctdate = date("Y-m-d 23:59:59", strtotime($to_date));
        $query->where("STR_TO_DATE(created_on, '%Y-%m-%d %H:%i:%s') <=", $to_correctdate);
    }

    $data = $query->findAll();

    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    // Set headers
    $sheet->setCellValue('A1', 'S.NO');
    $sheet->setCellValue('B1', 'Dealer Name');
    $sheet->setCellValue('C1', 'Asset Type');
    $sheet->setCellValue('D1', 'Asset Make');
    $sheet->setCellValue('E1', 'Specification');
    $sheet->setCellValue('F1', 'Stock Purchased');
    $sheet->setCellValue('G1', 'Purchase Status');
    $sheet->setCellValue('H1', 'Invoice Date');
    $sheet->setCellValue('I1', 'Invoice Number');
    $sheet->setCellValue('J1', 'Asset Image'); // This will hold hyperlinks
    $sheet->setCellValue('K1', 'Grade');
    $sheet->setCellValue('L1', 'Material');
    $sheet->setCellValue('M1', 'Part Name');
    $sheet->setCellValue('N1', 'Part Number');
    $sheet->setCellValue('O1', 'Customer Name');
    $sheet->setCellValue('P1', 'Purpose');
    $sheet->setCellValue('Q1', 'Unit Of Measurement');
    $sheet->setCellValue('R1', 'Location');
    $sheet->setCellValue('S1', 'Room');
    $sheet->setCellValue('T1', 'GRN');
    $sheet->setCellValue('U1', 'Accessories');
    $sheet->setCellValue('V1', 'Resharpen');
    $sheet->setCellValue('W1', 'Reorder');

    // Fill data rows
    $row = 2;
    $serialNo = 1;
    foreach ($data as $purchase) {
        $sheet->setCellValue('A' . $row, $serialNo);
        $sheet->setCellValue('B' . $row, $purchase['supplier_name']);
        $sheet->setCellValue('C' . $row, $purchase['asset_type']);
        $sheet->setCellValue('D' . $row, $purchase['asset_make']);
        $sheet->setCellValue('E' . $row, $purchase['specification']);
        $sheet->setCellValue('F' . $row, $purchase['quantity']);
        $sheet->setCellValue('G' . $row, $purchase['purchase_status']);
        $sheet->setCellValue('H' . $row, $purchase['invoice_date']);
        $sheet->setCellValue('I' . $row, $purchase['invoice_number']);

        // Add hyperlink for Asset Image
        if (!empty($purchase['asset_image'])) {
            $imageUrl = base_url($purchase['asset_image']); // Adjust base URL as needed
            $sheet->setCellValue('J' . $row, 'View Image');
            $sheet->getCell('J' . $row)->getHyperlink()->setUrl($imageUrl);
            $sheet->getStyle('J' . $row)->getFont()->setUnderline(true)->getColor()->setRGB('0000FF');
        } else {
            $sheet->setCellValue('J' . $row, 'No Image');
        }

        $sheet->setCellValue('K' . $row, $purchase['grade']);
        $sheet->setCellValue('L' . $row, $purchase['material']);
        $sheet->setCellValue('M' . $row, $purchase['part_name']);
        $sheet->setCellValue('N' . $row, $purchase['part_number']);
        $sheet->setCellValue('O' . $row, $purchase['customer_name']);
        $sheet->setCellValue('P' . $row, $purchase['purchase_reason']);
        $sheet->setCellValue('Q' . $row, $purchase['uom']);
        $sheet->setCellValue('R' . $row, $purchase['location']);
        $sheet->setCellValue('S' . $row, $purchase['room']);
        $sheet->setCellValue('T' . $row, $purchase['grn']);
        $sheet->setCellValue('U' . $row, $purchase['accessories']);
        $sheet->setCellValue('V' . $row, $purchase['resharpen']);
        $sheet->setCellValue('W' . $row, $purchase['reorder']);

        $row++;
        $serialNo++;
    }

    $writer = new Xlsx($spreadsheet);
    $filename = 'purchase_data.xlsx';
    $response = \Config\Services::response();
    $response->setHeader('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    $response->setHeader('Content-Disposition', 'attachment; filename="' . $filename . '"');

    $writer->save('php://output');
    return $response;
}


            
}