
<?php
namespace App\Controllers;
use App\Models\AddPurchaseModel;


class Dashboard extends BaseController
{

public function index()
{
    

    return view('layout/dashboard');
}
}
?>
