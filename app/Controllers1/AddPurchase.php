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

    // Check if the form is submitted
    if ($this->request->getPost('submit1')) {

        // Get the invoice number and GRN
        $invoiceNumber = $this->request->getPost('invoice_number');
        $grn = $this->request->getPost('grn');

        // Check if the invoice number is set and not empty
        if (!empty($invoiceNumber)) {
            // Check if the invoice number already exists
            $existingInvoice = $this->AddPurchaseModel
                ->where('invoice_number', $invoiceNumber)
                ->first();

            if ($existingInvoice) {
                $this->session->setFlashdata('error', 'The invoice number already exists! Please enter a unique invoice number.');
                return redirect()->to(current_url());
            }
        }

        // Check if GRN already exists
        $existinggrn = $grnModel->where('grn', $grn)->first();
        if ($existinggrn) {
            $this->session->setFlashdata('error', 'The GRN number already exists! Please enter a unique GRN number.');
            return redirect()->to(current_url());
        }

        // Capture all form data
        $full = $this->request->getPost();
        date_default_timezone_set('Asia/Kolkata');
        $date = date("Y-m-d H:i:s");
        $full['created_on'] = $date;

        // Handle asset image upload
        if ($this->request->getFile('asset_image') != '') {
            $img_bank = $this->request->getFile('asset_image');
            $filepath_bank = 'public/' . $img_bank->getName();
            $img_bank->move(ROOTPATH . 'public');
            $full['asset_image'] = $filepath_bank;
        } else {
            $full['asset_image'] = null;
        }

        // Encode accessories if it's an array
        if (isset($full['accessories']) && is_array($full['accessories'])) {
            $full['accessories'] = json_encode($full['accessories']);
        }

        // Save to add_purchase table
        if ($this->AddPurchaseModel->save($full)) {
            $purchaseId = $this->AddPurchaseModel->getInsertID(); // Retrieve the inserted ID

            if ($purchaseId) {
                // Save GRN to GRN table
                $grnModel->insert([
                    'grn' => $full['grn'],
                    'purchase_id' => $purchaseId
                ]);

                // Save to newasset table if status is "Assets Received"
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
                        'grn' => $full['grn'],
                        'accessories' => $full['accessories'],
                        'resharpening' => $full['resharpen'],
                        'created_on' => $date,
                    ];

                    $this->AssetModel->save($assetData);
                }

                $this->session->setFlashdata('success', 'Added successfully.');
            }
        }

        return redirect()->to(current_url());
    } else {
        // Return the view with the GRN value
        return view('addpurchase/create', ['grn' => $generatedGrn]);
    }
}

 public function indexx()
            {
                   ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);
    
    
    // Check if the form is submitted
    if ($this->request->getPost('submit1')) {
        echo 'sample';
        echo ($_POST['grade']);
        echo json_encode($_POST['accessories']);
        exit();
    }
    else{
    

    // Return the view with the GRN value
    return view('addpurchase/create');
    }}

    
 public function test()
    {
    helper(['url']);
    helper('grn'); // Load the GRN helper

    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);
    
    $accessoriesData = $this->request->getPost('accessories');
    
   

    // Generate the real GRN on page load
    $grnModel = new \App\Models\GrnModel(); // Instantiate the GrnModel
    $generatedGrn = generateGrn($grnModel); // Generate the GRN using the helper
        // Get the invoice number entered by the user
        $invoiceNumber = $this->request->getPost('invoice_number');
        $grn = $this->request->getPost('grn');
        // Check if the invoice number is set and not empty
if (!empty($invoiceNumber)) {
    // Check if the invoice number already exists
    $existingInvoice = $this->AddPurchaseModel
        ->where('invoice_number', $invoiceNumber)
        ->first();

    // If the invoice number exists, show an error message and prevent form submission
    if ($existingInvoice) {
        $this->session->setFlashdata('error', 'The invoice number already exists! Please enter a unique invoice number.');
        return redirect()->to(current_url());
    }
}
        
        
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

        // Assign the generated GRN
       // $full['grn'] = $generatedGrn;
        

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
              // Debugging: Print the $full array
  
            $purchaseId = $this->AddPurchaseModel->getInsertID(); // Retrieve the inserted ID

            if ($purchaseId) {
                // Insert the GRN into the GRN table with the purchase ID
                $grnModel->insert([
                    'grn' => $full['grn'],
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
                        'grn' => $full['grn'], // Link the GRN
                        'accessories' => $full['accessories'],
                        'resharpening' => $full['resharpen'],
                        'created_on' => $date,
                    ];

                    $this->AssetModel->save($assetData);
                }

                // Set a success message
                $this->session->setFlashdata('success', 'Added successfully.');
            }
        }
        //$date = date("Y-m-d H:i:s");


        // Redirect to the same page to avoid duplicate submission
    return redirect()->to('purchase1');


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
        $suppliers = $dealerModel->select('dealer_name')->groupBy('dealer_name')->where('dealer_name !=', '')->where('deleted_on', NULL)->findAll();
    
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

public function all_purchase_reasons()
{
    // Load the model
    $purchaseModel = new AddPurchaseModel();
    
    // Fetch purchase reasons from the database, grouped by purchase reason
    //$purchaseReasons = $purchaseModel->groupBy('purchase_reason')->where('deleted_on',NULL)->findAll();
    $purchaseReasons = $purchaseModel->select('purchase_reason')->groupBy('purchase_reason')->where('purchase_reason !=', '')->where('deleted_on', NULL)->findAll();
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
        ->where('uom IS NOT NULL')
        ->where('uom !=', '')// Exclude null UOM names
        ->where('deleted_on', NULL)    // Exclude soft-deleted records
        ->groupBy('uom')          // Group by UOM to remove duplicates
        ->findAll();
 //echo json_encode( $uoms);
    // Return as JSON response
    return $this->response->setJSON($uoms);
}

public function edit($id = null) {
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);

    $base = base64_decode(base64_decode(base64_decode($id)));
    $purchaseModel = new AddPurchaseModel();

    // Fetch the specific purchase record
    $data['purchase'] = $purchaseModel->where('purchase_id', $base)->first();
   


    // Decode the 'accessories' field if it exists
    if (isset($data['purchase']['accessories'])) {
        
        $data['accessoriesData'] = json_decode($data['purchase']['accessories'], true);
        
    } else {
        $data['accessoriesData'] = [];
    }
    
   

    // Pass the data to the view
    return view('addpurchase/edit', $data);
}

           
            

           

            
            public function update()
            {
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);
            
                $purchaseModel = new AddPurchaseModel();
                $assetModel = new AssetModel();
                $purchase_id = $this->request->getVar('purchase_id');
                
                // Get the current timestamp
                date_default_timezone_set("Asia/Kolkata");
                $date = date("Y-m-d h:i:s");
            
                // Get the existing purchase data to retain old image if no new image is uploaded
                $existingPurchase = $purchaseModel->where('purchase_id', $purchase_id)->first();
            
                // If GRN does not exist, handle the error
                if (!$existingPurchase) {
                    $session = \Config\Services::session();
                    $session->setFlashdata('error', 'GRN not found');
                    return redirect()->to(base_url('viewpurchase1'));
                }
            
                // Get the posted data from the form
                $data = $this->request->getPost();
                
 

               
              if($this->request->getFile('asset_image')!=''){
                    $img_bank = $this->request->getFile('asset_image');
                     $filepath_bank = 'public/'. $img_bank->getName();
                     $img_bank->move(ROOTPATH . 'public');
                     $data['asset_image']= $filepath_bank;
                }
                 else {
    // Retain the old image path if no new image is uploaded
    $data['asset_image'] = $existingPurchase['asset_image'] ?? null;
}
// Ensure $data['asset_image'] is always set
if (!isset($data['asset_image'])) {
    $data['asset_image'] = null;
}
                if(isset($filepath_bank)){
                    if($filepath_bank!=''){
                        
                        $data['asset_image'] =$filepath_bank;
                        
                    }
                  }
            
             
            
                // Set the updated timestamp
                $data['updated_on'] = $date;
            
                // Update the purchase record
                $isUpdated = $purchaseModel->where('purchase_id', $purchase_id)->set($data)->update();
            
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

            


           public function delete($grn = null)
            {
                // Decode the GRN
                $base = base64_decode(base64_decode(base64_decode($grn)));
            
                // Get the current date and time
                date_default_timezone_set("Asia/Kolkata");
                $date = date("Y-m-d h:i:s");
            
                // Prepare the data for soft deletion
                $data = [
                    'deleted_on' => $date,
                ];
            
                // Load the AddPurchaseModel
                $info = new AddPurchaseModel();
            
                // Perform the update based on the GRN
                $info->where('grn', $base)->set($data)->update();
            
                // Set a success message
                $session = \Config\Services::session();
                $session->setFlashdata('success', 'Deleted successfully'); 
            
                // Redirect to the 'viewpurchase1' page
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

    // Load the model
    $purchaseModel = new AddPurchaseModel();

    // Start building the query
    $query = $purchaseModel->where('deleted_on', NULL);

    // Apply date range filter if provided
    if (!empty($data['from_date'])) {
        $from_correctdate = date("Y-m-d 00:00:00", strtotime($data['from_date']));
        $query->where("STR_TO_DATE(created_on, '%Y-%m-%d %H:%i:%s') >=", $from_correctdate);
    }

    if (!empty($data['to_date'])) {
        $to_correctdate = date("Y-m-d 23:59:59", strtotime($data['to_date']));
        $query->where("STR_TO_DATE(created_on, '%Y-%m-%d %H:%i:%s') <=", $to_correctdate);
    }

    // Apply supplier filter if selected
    if (!empty($data['supplierFilters'])) {
        $query->whereIn('supplier_name', $data['supplierFilters']);
    }

    // Apply asset type filter if selected
    if (!empty($data['assetTypeFilters'])) {
        $query->whereIn('asset_type', $data['assetTypeFilters']);
    }

    // Apply asset make filter if selected
    if (!empty($data['assetMakeFilters'])) {
        $query->whereIn('asset_make', $data['assetMakeFilters']);
    }

    // Apply purchase reason filter if selected
    if (!empty($data['purchaseReasonFilters'])) {
        $query->whereIn('purchase_reason', $data['purchaseReasonFilters']);
    }

    // Apply purchase status filter if selected
    if (!empty($data['purchaseStatuses'])) {
        $query->whereIn('purchase_status', $data['purchaseStatuses']);
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

            /*public function downloa($data)
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
}*/



public function downloadexcel()
{
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);
    
    $purchaseModel = new AddPurchaseModel();

    // Get selected filters from the POST data
    $from_date = $this->request->getPost('from_date');
    $to_date = $this->request->getPost('to_date');
    $supplierFilters = $this->request->getPost('supplier_filters');
    $assetTypeFilters = $this->request->getPost('asset_type_filters');
    $assetMakeFilters = $this->request->getPost('asset_make_filters');
    $purchaseReasonFilters = $this->request->getPost('purchase_reason_filters');
    $purchaseStatuses = $this->request->getPost('purchase_status_filters');

    // Build the query
    $query = $purchaseModel->where('deleted_on', NULL);

    // Apply filters
    if (!empty($supplierFilters)) {
        $query->whereIn('supplier_name', $supplierFilters);
    }

    if (!empty($assetTypeFilters)) {
        $query->whereIn('asset_type', $assetTypeFilters);
    }

    if (!empty($assetMakeFilters)) {
        $query->whereIn('asset_make', $assetMakeFilters);
    }

    if (!empty($purchaseReasonFilters)) {
        $query->whereIn('purchase_reason', $purchaseReasonFilters);
    }

    if (!empty($purchaseStatuses)) {
        $query->whereIn('purchase_status', $purchaseStatuses);
    }

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
    $sheet->setCellValue('J1', 'Asset Image');
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

        if (!empty($purchase['asset_image'])) {
            $imageUrl = base_url($purchase['asset_image']);
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


public function nested()
{
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);

    if ($this->request->getPost('submit') != '') {
        $inputData = $this->request->getPost('inputData');

        if (!empty($inputData)) {
            // Decode the JSON into a PHP array
            $nestedInputs = json_decode($inputData, true);

            if ($nestedInputs) {
                // Debug: Display the decoded structure
                function processInputs($inputs, $level = 0)
                {
                    foreach ($inputs as $input) {
                        echo str_repeat("--", $level) . htmlspecialchars($input['value']) . "<br>";
                        if (!empty($input['children'])) {
                            processInputs($input['children'], $level + 1);
                        }
                    }
                }

                processInputs($nestedInputs);
                echo "Data successfully posted and processed.";
                return view('addpurchase/nested_test', ['nestedInputs' => $nestedInputs]);
            } else {
                echo "Failed to decode JSON data.";
            }
        } else {
            echo "No input data received.";
        }
    } else {
        echo "Form was not submitted.";
        return view("addpurchase/nested_test");
    }
}

public function nestedpost()
{
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);

    
        $inputData = $this->request->getPost('inputData');

        if (!empty($inputData)) {
            // Decode the JSON into a PHP array
            $nestedInputs = json_decode($inputData, true);

            if ($nestedInputs) {
                // Debug: Display the decoded structure
                function processInputs($inputs, $level = 0)
                {
                    foreach ($inputs as $input) {
                        echo str_repeat("--", $level) . htmlspecialchars($input['value']) . "<br>";
                        if (!empty($input['children'])) {
                            processInputs($input['children'], $level + 1);
                        }
                    }
                }

                processInputs($nestedInputs);
                echo "Data successfully posted and processed.";
                return view('addpurchase/nested_test', ['nestedInputs' => $nestedInputs]);
            } else {
                echo "Failed to decode JSON data.";
            }
        } else {
            echo "No input data received.";
        }

}





   



 



            
}