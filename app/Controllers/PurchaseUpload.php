<?php

namespace App\Controllers;

use App\Models\AddPurchaseModel;
use PhpOffice\PhpSpreadsheet\IOFactory;
use CodeIgniter\Controller;

class PurchaseUpload extends Controller
{
    public function index()
    {
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);
        return view('addpurchase/upload_form');
    }

  public function upload()
{
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);

    $file = $this->request->getFile('excel_file');

    if (!$file || !$file->isValid()) {
        return redirect()->back()->with('error', 'Invalid or missing file.');
    }

    $spreadsheet = IOFactory::load($file->getTempName());
    $sheet = $spreadsheet->getActiveSheet();
    $rows = $sheet->toArray();

    $model = new AddPurchaseModel();

    $inserted = 0;

    // Start from 1 to skip header
    for ($i = 1; $i < count($rows); $i++) {
        $row = $rows[$i];

        // Skip completely empty rows
        if (array_filter($row) === []) {
            continue;
        }

        $orderDate    = $this->formatDate($row[1] ?? null);
        $invoiceDate  = $this->formatDate($row[11] ?? null);
        $invoiceNumber = trim($row[12] ?? '');

        $data = [];

        if (!empty($row[0])) $data['purchase1_id'] = $row[0];
        if (!empty($orderDate)) $data['order_date'] = $orderDate;
        if (!empty($row[2])) $data['asset_type'] = $row[2];
        if (!empty($row[3])) $data['purchase_reason'] = $row[3];
        if (!empty($row[4])) $data['specification'] = $row[4];
        if (!empty($row[5])) $data['asset_make'] = $row[5];
        if (!empty($row[6])) $data['supplier_name'] = $row[6];
        if (!empty($row[7])) $data['quantity'] = $row[7];
        if (!empty($row[8])) $data['unit_price'] = $row[8];
        if (!empty($row[9])) $data['total_cost'] = $row[9];
        if (!empty($row[10])) $data['delivery_status'] = $row[10];
        if (!empty($invoiceDate)) $data['invoice_date'] = $invoiceDate;
        if (!empty($invoiceNumber)) $data['invoice_number'] = $invoiceNumber;
        if (!empty($row[13])) $data['received_qty'] = $row[13];
        if (!empty($row[14])) $data['remarks'] = $row[14];

        $data['created_on'] = date('Y-m-d H:i:s');

        // Only insert if there's meaningful data
        if (count($data) > 1) {
            $model->insert($data);
            $inserted++;
        }
    }

    return redirect()->to('/purchase-upload')->with('success', "Imported: $inserted rows");
}


   private function formatDate($excelDate)
{
    if (!$excelDate) return null;

    // If it's numeric (Excel serial date), convert normally
    if (is_numeric($excelDate)) {
        return date('Y-m-d', \PhpOffice\PhpSpreadsheet\Shared\Date::excelToTimestamp($excelDate));
    }

    // If it's in 'd/m/Y' or 'd-m-Y' format, parse it
    $date = \DateTime::createFromFormat('d/m/Y', $excelDate);
    if (!$date) {
        $date = \DateTime::createFromFormat('d-m-Y', $excelDate);
    }

    // If it's a valid date, format it; else, return null
    return $date ? $date->format('Y-m-d') : null;
}

}