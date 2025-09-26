
<?php
namespace App\Controllers;
use App\Models\AddPurchaseModel;


class Dashboard extends BaseController
{

public function index()
{
    $purchaseModel = new AddPurchaseModel();

    // Fetch the latest 5 purchases only
    $data['alldata'] = $purchaseModel
        ->where('deleted_on', null)
        ->orderBy('created_on', 'DESC') // Ensure this is a valid datetime field
        ->limit(5)
        ->findAll();

    return view('layout/dashboard', $data);
}
}
?>
