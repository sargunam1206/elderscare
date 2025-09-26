<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 * 
 * 
 * 
 * 
 */


// Login Routes
$routes->get('login', 'Login::index');
$routes->post('login/process', 'Login::process');
$routes->get('logout', 'Login::logout');

$routes->group('', ['filter' => 'auth'], function($routes) {


//advance booking
$routes->get('advancebooking', 'AdvBooking::index'); 
$routes->post('advancebooking', 'AdvBooking::index'); 
$routes->get('viewadvancebooking', 'AdvBooking::view'); 
$routes->post('viewadvancebooking', 'AdvBooking::view'); 
$routes->get('editadvancebooking/(:num)', 'AdvBooking::edit/$1');
$routes->post('updateadvancebooking/(:num)', 'AdvBooking::update/$1');
$routes->get('deleteadvancebooking/(:num)', 'AdvBooking::delete/$1');
$routes->get('updatebookingstatus/(:num)', 'AdvBooking::updateBookingStatus/$1');
$routes->post('updatebookingstatus/(:num)', 'AdvBooking::updateBookingStatus/$1');
$routes->get('validatebooking/(:num)', 'AdvBooking::validateBooking/$1');


$routes->post('view/pdf', 'AdvBooking::view');
$routes->post('advancebooking/export', 'AdvBooking::exportToExcel');

$routes->get('guestinfo/generate_pdf/(:num)', 'AdvBooking::generate_pdf/$1');




$routes->get('fro', 'Frontoffice::index');




//  $routes->get('/', 'UserInfo::login_viyoma'); 
//  $routes->post('/', 'UserInfo::login_viyoma'); 
 //$routes->post('', 'UserInfo::login_viyoma'); 
//  $routes->get( 'logout', 'UserInfo::logout');
 
 $routes->get('purchase-upload', 'PurchaseUpload::index');
$routes->get('purchase-upload/upload', 'PurchaseUpload::upload');
$routes->post('purchase-upload', 'PurchaseUpload::index');
$routes->post('purchase-upload/upload', 'PurchaseUpload::upload');
 
 $routes->get('register', 'UserInfo::register_viyoma');
 $routes->post('register', 'UserInfo::register_viyoma');
  $routes->get('dashboard', 'UserInfo::dashboard');
  $routes->get('admindashboard', 'UserInfo::admin_dashboard');
   $routes->get('posdashboard', 'UserInfo::PointOfSale_dashboard');
 

  
//rooms

$routes->get('rooms', 'Rooms::view');
$routes->post('addrooms', 'Rooms::add');
$routes->post('updaterooms/(:any)', 'Rooms::update/$1');
$routes->get('deleterooms/(:any)', 'Rooms::delete/$1');
$routes->get('getrooms', 'Rooms::getRoomsForModal');
$routes->get('roomstatus', 'Rooms::roomstatus');



//noticeboard
$routes->get('not', 'Notice::index');
$routes->post('notice/store', 'Notice::store');
$routes->get('notice/edit/(:num)', 'Notice::edit/$1');
$routes->post('notice/update/(:num)', 'Notice::update/$1');
$routes->get('notice/delete/(:num)', 'Notice::delete/$1');
$routes->get('notice/delete-file/(:num)', 'Notice::deleteFile/$1');



//activities

$routes->get('act', 'Activity::index');
$routes->post('activities/store', 'Activity::store');
$routes->get('activities/edit/(:num)', 'Activity::edit/$1');
$routes->post('activities/update/(:num)', 'Activity::update/$1');
$routes->get('activities/delete/(:num)', 'Activity::delete/$1');


//prescription
$routes->get('prescri/(:num)', 'Prescription::index/$1');
$routes->get('prescri', 'Prescription::index');
$routes->post('prescription/store', 'Prescription::store');
$routes->get('prescription/edit/(:num)', 'Prescription::edit/$1');
$routes->post('prescription/update/(:num)', 'Prescription::update/$1');
$routes->get('prescription/files/(:num)', 'Prescription::files/$1');
$routes->get('prescription/delete/(:num)', 'Prescription::delete/$1');


//Guest Info
$routes->get('guestinfo', 'GuestInfo::index');
$routes->post('guestinfo', 'GuestInfo::index');
$routes->get('viewguestinfo', 'GuestInfo::view');
$routes->post('viewguestinfo', 'GuestInfo::view');
$routes->get('editguestinfo/(:num)', 'GuestInfo::edit/$1');
$routes->post('updateguestinfo/(:num)', 'GuestInfo::update/$1');

$routes->put('updateguestinfo/(:num)', 'GuestInfo::update/$1');
$routes->get('deleteguestinfo/(:num)', 'GuestInfo::delete/$1');
$routes->get('get-guests-for-modal', 'GuestInfo::getGuestsForModal');


// Protected Routes
//  $routes->group('', ['filter' => 'auth'], function($routes) {
    $routes->get('users', 'User::index');
    $routes->post('users/store', 'User::store');
    $routes->get('users/edit/(:num)', 'User::edit/$1');
    $routes->post('users/update/(:num)', 'User::update/$1');
    $routes->get('users/delete/(:num)', 'User::delete/$1');
//  });

// Service Type Routes

$routes->get('servicemodes', 'Servicemodes::view');
$routes->post('addservicemodes', 'Servicemodes::add');
$routes->post('updateservmodes/(:any)', 'Servicemodes::update/$1');
$routes->get('deleteservmodes/(:any)', 'Servicemodes::delete/$1');




$routes->get('searchtype/(:any)', 'Serviceitems::searchtype/$1');
$routes->get('searchmodes/(:any)', 'Serviceitems::searchmode/$1');


// Service Category Routes
$routes->get('category', 'Category::view');
$routes->post('addcategory', 'Category::add');
$routes->post('updatecategory/(:any)', 'Category::update/$1');
$routes->get('deletecategory/(:any)', 'Category::delete/$1');

// Service Type Routes

$routes->get('servicetype', 'ServiceType::view');
$routes->post('addservicetype', 'ServiceType::add');
$routes->post('updateservicetype/(:any)', 'ServiceType::update/$1');
$routes->get('deleteservicetype/(:any)', 'ServiceType::delete/$1');


// Service Type Controller

$routes->get('room_guest/(:any)', 'Inhouseguest::room_guest/$1');
$routes->get('servicemode_alpha/(:any)', 'Landingpage::servicemode_alpha/$1');
$routes->get('category_alpha/(:any)', 'Landingpage::category_alpha/$1');
$routes->get('service_category/(:any)', 'Landingpage::service_category/$1');

$routes->get('service_items/(:any)', 'Landingpage::service_items/$1');




//room guest
$routes->get('room_guest/(:any)', 'Inhouseguest::room_guest/$1');


//inhouse guest
$routes->get('addproduct', 'Landingpage::addproduct');


//wallet concept
$routes->get('wallet/(:num)', 'Wallet::wallet_read/$1'); 
$routes->get('wallet', 'Wallet::wallet_read');
$routes->get('roomguest/(:num)', 'Wallet::room_guest/$1'); 
$routes->get('guest_wallet/(:any)', 'Wallet::guest_wallet/$1'); 
$routes->get('guest_wallet_id/(:any)', 'Wallet::guest_wallet_id/$1'); 
$routes->post('addfund', 'Wallet::addfund'); 
$routes->post('verify', 'Wallet::verify');


//maintanence 

$routes->get('maintenance', 'Maintenance::index');
$routes->get('maintenance/edit/(:num)', 'Maintenance::edit/$1');
$routes->get('maintenance/download/(:num)', 'Maintenance::download/$1');
$routes->post('maintenance/store', 'Maintenance::store');
$routes->post('maintenance/update/(:num)', 'Maintenance::update/$1');
$routes->get('maintenance/delete/(:num)', 'Maintenance::delete/$1');
$routes->get('maintenance/delete-file/(:num)', 'Maintenance::deleteFile/$1');


//Enquiry
$routes->get('enquiry', 'Enquiry::index');
$routes->post('enquiry/store', 'Enquiry::store');
$routes->get('enquiry/edit/(:num)', 'Enquiry::edit/$1');
$routes->post('enquiry/update/(:num)', 'Enquiry::update/$1');
$routes->get('enquiry/download/(:num)', 'Enquiry::download/$1');
$routes->get('enquiry/delete/(:num)', 'Enquiry::delete/$1');


//servicereport
$routes->post('servicepay', 'Wallet::servicepay');
$routes->post('paymentrecd', 'Wallet::paymentrecd');
$routes->post('payrecord', 'Wallet::payrecord');

$routes->get('servicerept', 'Servicebook::view');
$routes->get('servicerept/(:any)', 'Servicebook::view/$1');

//charges
$routes->get('charges', 'Charges::index');
$routes->post('charges/store', 'Charges::store');
$routes->get('charges/edit/(:num)', 'Charges::edit/$1');
$routes->post('charges/update/(:num)', 'Charges::update/$1');
$routes->get('charges/delete/(:num)', 'Charges::delete/$1');

//charges report

$routes->get('chargesrept', 'ChargesReport::view');
$routes->get('chargesrept/(:any)', 'ChargesReport::view/$1');

$routes->get('guest_charge/(:any)', 'Charges::guest_charge/$1');
$routes->post('chargepay', 'Charges::chargepay');
$routes->post('chargepay_store', 'Charges::chargepay_store');
$routes->post('charge_filter', 'Charges::charge_filter');
});


// $routes->get('rooms', 'Rooms::view');
// $routes->post('addrooms', 'Rooms::add');
// $routes->post('updaterooms/(:any)', 'Rooms::update/$1');
// $routes->get('deleterooms/(:any)', 'Rooms::delete/$1');
 
 //asset type   
 $routes->get('assetmake', 'AssetMake::index');
 $routes->post('assetmake', 'AssetMake::index');
 $routes->get('viewassetmake', 'AssetMake::view');
$routes->post('viewassetmake', 'AssetMake::view');   
$routes->get('editassetmake/(:num)', 'AssetMake::edit/$1');
$routes->post('updateassetmake/(:num)', 'AssetMake::update/$1');
$routes->get('deleteassetmake/(:num)', 'AssetMake::delete/$1');
$routes->post('delete_assetmakes', 'AssetMake::delete_assetmakes');


 //asset type   
$routes->get('assettype', 'AssetType::index');
$routes->post('assettype', 'AssetType::index');
$routes->get('viewassettype', 'AssetType::viewAssetType');
$routes->post('viewassettype', 'AssetType::viewAssetType');
$routes->get('editassettype/(:num)', 'AssetType::edit/$1');
$routes->post('updateassettype/(:num)', 'AssetType::update/$1');
$routes->get('deleteassettype/(:num)', 'AssetType::delete/$1');
$routes->post('delete_assettypes', 'AssetType::delete_assettypes');
$routes->get('assetfields/(:any)', 'AssetType::assetfields/$1');


 //dealers  
 $routes->get('dealers', 'Dealers::index');
 $routes->post('dealers', 'Dealers::index');
 $routes->get('viewdealers', 'Dealers::view');
 $routes->post('viewdealers', 'Dealers::view');
 $routes->get('editdealers/(:num)', 'Dealers::edit/$1');
 $routes->post('updatedealers/(:num)', 'Dealers::update/$1');
 $routes->get('deletedealers/(:num)', 'Dealers::delete/$1');
 $routes->post('delete_dealers', 'Dealers::delete_dealers');

 //dealers  
 $routes->get('uom', 'Uom::index');
 $routes->post('uom', 'Uom::index');
 $routes->get('viewuom', 'Uom::view');
 $routes->post('viewuom', 'Uom::view');
 $routes->get('edituom/(:num)', 'Uom::edit/$1');
 $routes->post('updateuom/(:num)', 'Uom::update/$1');
 $routes->get('deleteuom/(:num)', 'Uom::delete/$1');
 $routes->post('delete_uom', 'Uom::delete_uom');

 //asset 
 $routes->get('asset1', 'Asset::index');
 $routes->post('asset1', 'Asset::index');
 $routes->get('viewasset', 'Asset::viewAsset');
 $routes->post('viewasset', 'Asset::viewAsset');
 $routes->get('editasset/(:any)', 'Asset::edit/$1');
 $routes->post('updateasset/(:num)', 'Asset::update/$1');
 $routes->get('deleteasset/(:num)', 'Asset::delete/$1');
 $routes->post('delete_assets', 'Asset::delete_assets');//multiple delete option (checkbox)

 

 $routes->get('asset1/all_part_name', 'Asset::all_part_name');// Filters
 $routes->get('asset1/all_grn_no', 'Asset::all_grn_no');// Filters
 $routes->get('asset1/all_asset_types', 'Asset::all_asset_types');// Filters 
 $routes->get('asset1/all_asset_makes', 'Asset::all_asset_makes');// Filters 
 $routes->get('asset1/all_dealers', 'Asset::all_dealers');// Filters 
 $routes->get('asset1/all_materials', 'Asset::all_materials');// Filters 
 $routes->get('asset1/all_part_numbers', 'Asset::all_part_numbers');// Filters
 $routes->get('asset1/all_customers', 'Asset::all_customers');// Filters 
 $routes->get('asset1/all_locations', 'Asset::all_locations');// Filters 
 $routes->get('asset1/all_rooms', 'Asset::all_rooms');// Filters 
 $routes->get('asset1/all_purposes', 'Asset::all_purposes');
 $routes->get('asset1/all_uoms', 'Asset::all_uoms');
 $routes->post('asset/download', 'Asset::download');
 $routes->post('asset/downloadexcel', 'Asset::exportToExcel');
//);

 //add purchase
 $routes->get('purchase1', 'AddPurchase::index');
$routes->post('purchase1', 'AddPurchase::index');
$routes->get('viewpurchase1', 'AddPurchase::view');
$routes->post('viewpurchase1', 'AddPurchase::view');
$routes->get('editpurchase1/(:any)', 'AddPurchase::edit/$1');
$routes->post('updatepurchase1', 'AddPurchase::update');
$routes->get('deletepurchase1/(:any)', 'AddPurchase::delete/$1');

$routes->post('delete_purchase', 'AddPurchase::delete_assets');
$routes->post('downloadpurchase', 'AddPurchase::view');
$routes->post('downloadexcel', 'AddPurchase::downloadexcel');

$routes->get('purchase1/s', 'AddPurchase::getSupplierSuggestions');
$routes->get('purchase1/asset', 'AddPurchase::getAssetSuggestions');
$routes->get('purchase1/make', 'AddPurchase::getAssetMakeSuggestions');
$routes->get('purchase1/reason', 'AddPurchase::getPurchaseReasonSuggestions');

$routes->get('purchase1/all_suppliers', 'AddPurchase::all_suppliers');
$routes->get('purchase1/all_asset_types', 'AddPurchase::all_asset_types');
$routes->get('purchase1/all_asset_makes', 'AddPurchase::all_asset_makes');
$routes->get('purchase1/all_purchase_reasons', 'AddPurchase::all_purchase_reasons');
$routes->get('purchase1/all_uoms', 'AddPurchase::all_uoms');


//assigning assets

$routes->get('assign', 'Assign::viewAssetType');
$routes->post('assign', 'Assign::viewAssetType');
$routes->post('addassign', 'Assign::index');
$routes->post('updateassign/(:any)', 'Assign::update/$1');
$routes->get('deleteassign/(:any)', 'Assign::delete/$1');



//assets 
$routes->get('assets', 'Assets::index');
$routes->get('viewassets', 'Assets::view');
$routes->post('assets', 'Assets::index');
$routes->get('editassets/(:any)', 'Assets::edit/$1');
$routes->post('updateassets', 'Assets::update');
$routes->get('deleteassets/(:any)', 'Assets::delete/$1');
$routes->post('viewassets', 'Assets::view');
$routes->post('downloadassets', 'Assets::view');

$routes->get('asset_type/(:any)', 'Assets::asset_type/$1');

//assetsvalue
$routes->get('assetsvalue', 'Assetsvalue::index');
$routes->post('assetsvalue', 'Assetsvalue::index');
$routes->get('viewassetsvalue', 'Assetsvalue::view');
$routes->post('viewassetsvalue', 'Assetsvalue::view');
$routes->get('editassetsvalue/(:any)', 'Assetsvalue::edit/$1');
$routes->get('deleteassetsvalue/(:any)', 'Assetsvalue::delete/$1');
$routes->post('updateassetsvalue', 'Assetsvalue::update');
$routes->post('downloadassetsvalue', 'Assetsvalue::view');


//assignedassets
$routes->get('assignedassets', 'AssignedAssets::index');
$routes->post('assignedassets', 'AssignedAssets::index');
$routes->get('assetsdata/(:any)', 'AssignedAssets::assetsdata/$1');
$routes->get('viewassignedassets', 'AssignedAssets::view');
$routes->get('viewassignedassets/(:any)', 'AssignedAssets::view/$1');
$routes->post('viewassignedassets', 'AssignedAssets::view');
$routes->get('editassignedassets/(:any)', 'AssignedAssets::edit/$1');
$routes->post('updateassignedassets', 'AssignedAssets::update');
$routes->get('deleteassignedassets/(:any)', 'AssignedAssets::delete/$1');
$routes->get('childpart/(:any)', 'AssignedAssets::childpart/$1');
$routes->post('downloadassignedassets', 'AssignedAssets::view');


//purchase
$routes->get('purchase', 'Purchase::index');
$routes->post('purchase', 'Purchase::index');
$routes->get('viewpurchase', 'Purchase::view');
$routes->post('viewpurchase', 'Purchase::view');
$routes->get('editpurchase/(:any)', 'Purchase::edit/$1');
$routes->post('updatepurchase', 'Purchase::update');
$routes->get('deletepurchase/(:any)', 'Purchase::delete/$1');
$routes->post('downloadpurchase', 'Purchase::view');

//dericiation

$routes->get('depreciation', 'Depreciation::index');
$routes->post('depreciation', 'Depreciation::index');
$routes->get('viewdepreciation', 'Depreciation::view');
$routes->post('viewdepreciation', 'Depreciation::view');
$routes->get('editdepreciation/(:any)', 'Depreciation::edit/$1');
$routes->post('updatedepreciation', 'Depreciation::update');
$routes->get('deletedepreciation/(:any)', 'Depreciation::delete/$1');
$routes->post('downloaddepreciation', 'Depreciation::view');

//return

$routes->get('return', 'ReturnInfo::index');
$routes->post('return', 'ReturnInfo::index');
$routes->get('viewreturn', 'ReturnInfo::view');
$routes->post('viewreturn', 'ReturnInfo::view');
$routes->get('viewreturn/(:any)', 'ReturnInfo::view/$1');
$routes->get('editreturn/(:any)', 'ReturnInfo::edit/$1');
$routes->post('updatereturn', 'ReturnInfo::update');
$routes->get('deletereturn/(:any)', 'ReturnInfo::delete/$1');
$routes->post('downloadreturn', 'ReturnInfo::view');



//services

$routes->get('request', 'Service::index');
$routes->post('request', 'Service::index');
$routes->get('viewrequest', 'Service::view');
$routes->post('viewrequest', 'Service::view');
$routes->get('editrequest/(:any)', 'Service::edit/$1');
$routes->post('updaterequest', 'Service::update');
$routes->get('deleterequest/(:any)', 'Service::delete/$1');



/*$routes->get('/', 'UserInfo::login_new');
$routes->get('login', 'UserInfo::login_view');
$routes->get('register', 'UserInfo::index');

$routes->post('user_register', 'UserInfo::store');


$routes->post('user_login', 'UserInfo::login');

$routes->get('home', 'BloodBank::home_page');
$routes->get('userlist', 'UserInfo::users_view');


$routes->get('logout', 'UserInfo::logout');
$routes->get('welcome', 'UserInfo::welcome');



$routes->get('register_new', 'UserInfo::index_new');
$routes->get('register_data/(:any)', 'UserInfo::list/$1');
$routes->post('register_new', 'UserInfo::index_new');
$routes->get('login_new', 'UserInfo::login_new');
$routes->post('login_new', 'UserInfo::login_new');



$routes->get('blood_details/(:any)', 'BloodDetails::index/$1');
$routes->get('bpos_details/(:any)', 'BloodDetails::index1/$1');
$routes->get('opos_details/(:any)', 'BloodDetails::Opos/$1');
$routes->get('oneg_details/(:any)', 'BloodDetails::Oneg/$1');
$routes->get('aneg_details/(:any)', 'BloodDetails::Aneg/$1');
$routes->get('bneg_details/(:any)', 'BloodDetails::Bneg/$1');
$routes->get('abpos_details/(:any)', 'BloodDetails::ABpos/$1');
$routes->get('abneg_details/(:any)', 'BloodDetails::ABneg/$1');

$routes->get('blooddetails/(:any)', 'BloodDetails::groups/$1'); 




$routes->get('adduser', 'UserInfo::add_user');

$routes->post('newuser', 'UserInfo::new_user');


$routes->get('edituser/(:any)', 'UserInfo::edit/$1');

$routes->post('updateuser/(:any)', 'UserInfo::update/$1');

$routes->get('deleteuser/(:any)', 'UserInfo::delete/$1');


//Employee personal Info Routes

$routes->get('personaldetails', 'PersonalInfo::index');
$routes->post('addempperdetails', 'PersonalInfo::store');
$routes->get('viewempperdetails', 'PersonalInfo::view');
$routes->get('pdfempperdetails', 'PersonalInfo::pdf');
$routes->get('editempperdetails/(:any)', 'PersonalInfo::edit/$1');
$routes->post('updateempperdetails', 'PersonalInfo::update');
$routes->get('deleteempperdetails/(:any)', 'PersonalInfo::delete/$1');



//BankAccount Info Routes

$routes->get('bankaccountdetails', 'BankAccountInfo::index');
$routes->post('addbankaccountdetails', 'BankAccountInfo::store');
$routes->get('viewbankaccountdetails', 'BankAccountInfo::view');
$routes->get('pdfbankaccountdetails', 'BankAccountInfo::pdf');
$routes->get('editbankaccountdetails/(:any)', 'BankAccountInfo::edit/$1');
$routes->post('updatebankaccountdetails', 'BankAccountInfo::update');
$routes->get('deletebankaccountdetails/(:any)', 'BankAccountInfo::delete/$1');

//Educational Info Routes

$routes->get('educationaldetails', 'EducationalInfo::index');
$routes->post('educationaldetails', 'EducationalInfo::index');
$routes->get('vieweducationaldetails', 'EducationalInfo::view');
$routes->get('pdfeducationaldetails', 'EducationalInfo::pdf');
$routes->get('editeducationaldetails/(:any)', 'EducationalInfo::edit/$1');
$routes->post('updateeducationaldetails', 'EducationalInfo::update');
$routes->get('deleteeducationaldetails/(:any)', 'EducationalInfo::delete/$1');




//Companywork Info Routes

$routes->get('companyworkdetails', 'CompanyWorkInfo::index');
$routes->post('companyworkdetails', 'CompanyWorkInfo::index');
$routes->get('viewcompanyworkdetails', 'CompanyWorkInfo::view');
$routes->get('editcompanyworkdetails/(:any)', 'CompanyWorkInfo::edit/$1');
$routes->post('updatecompanyworkdetails', 'CompanyWorkInfo::update');
$routes->get('deletecompanyworkdetails/(:any)', 'CompanyWorkInfo::delete/$1');


//Employment Info Routes

$routes->get('employmentdetails', 'EmploymentInfo::index');;
$routes->post('employmentdetails', 'EmploymentInfo::index');
$routes->get('viewemploymentdetails', 'EmploymentInfo::view');
$routes->get('editemploymentdetails/(:any)', 'EmploymentInfo::edit/$1');
$routes->post('updateemploymentdetails', 'EmploymentInfo::update');
$routes->get('deleteemploymentdetails/(:any)', 'EmploymentInfo::delete/$1');

//CompanyResign Info Routes

$routes->get('companyresigndetails', 'CompanyResignInfo::index');
$routes->post('companyresigndetails', 'CompanyResignInfo::index');
$routes->get('viewcompanyresigndetails', 'CompanyResignInfo::view');
$routes->get('editcompanyresigndetails/(:any)', 'CompanyResignInfo::edit/$1');
$routes->post('updatecompanyresigndetails', 'CompanyResignInfo::update');
$routes->get('deletecompanyresigndetails/(:any)', 'CompanyResignInfo::delete/$1');


//Leave Info Routes

$routes->get('leavedetails', 'LeaveInfo::index');
$routes->post('leavedetails', 'LeaveInfo::index');
$routes->get('viewleavedetails', 'LeaveInfo::view');
$routes->get('editleavedetails/(:any)', 'LeaveInfo::edit/$1');
$routes->post('updateleavedetails', 'LeaveInfo::update');
$routes->get('deleteleavedetails/(:any)', 'LeaveInfo::delete/$1');



//Employee Navigation bar info
$routes->get('employee', 'Employee::index');


$routes->get('reports', 'Reports::reports');
$routes->get('reportsdefault', 'Reports::reportsdefault');
$routes->get('reportslist', 'Reports::reportslist');
$routes->post('reportsdefault', 'Reports::reportsdefault');

//Overall Reports
$routes->get('allreports', 'AllReports::index');
$routes->post('allreports', 'AllReports::index');
$routes->post('allreportsdefault', 'AllReports::reportsdefault');


//Experience 
$routes->get('experience', 'ExperienceInfo::index');
$routes->post('experience', 'ExperienceInfo::index');
$routes->get('viewexperience', 'ExperienceInfo::view');
$routes->get('experiencedata/(:any)', 'ExperienceInfo::list/$1');
$routes->get('editexperience/(:any)', 'ExperienceInfo::edit/$1');
$routes->post('updateexperience', 'ExperienceInfo::update');
$routes->get('deleteexperience/(:any)', 'ExperienceInfo::delete/$1');


//nominees
$routes->get('nominee', 'NomineeInfo::index');
$routes->post('nominee', 'NomineeInfo::index');
$routes->get('viewnominee', 'NomineeInfo::view');
$routes->get('editnominee/(:any)', 'NomineeInfo::edit/$1');
$routes->post('updatenominee', 'NomineeInfo::update');
$routes->get('deletenominee/(:any)', 'NomineeInfo::delete/$1');
$routes->get('nomineedata/(:any)', 'NomineeInfo::list/$1');



//nominees
$routes->get('jobvacancy', 'Jobvacancy::index');
$routes->post('jobvacancy', 'Jobvacancy::index');
$routes->get('viewjobvacancy', 'Jobvacancy::view');
$routes->get('editjobvacancy/(:any)', 'Jobvacancy::edit/$1');
$routes->post('updatejobvacancy', 'Jobvacancy::update');
$routes->get('deletejobvacancy/(:any)', 'Jobvacancy::delete/$1');
$routes->get('vacancy', 'Jobvacancy::vacancy/$1');
$routes->get('vacancydata', 'Jobvacancy::list');


//recruitments process
$routes->get('recruitment/(:any)', 'RecruitmentInfo::index/$1');
$routes->get('recruitment', 'RecruitmentInfo::index');
$routes->post('recruitment', 'RecruitmentInfo::index');
$routes->get('profile/(:any)', 'RecruitmentInfo::profile/$1');
$routes->post('updateprofile', 'RecruitmentInfo::updateprofile');

//department process
$routes->get('department', 'DepartmentInfo::index');
$routes->post('department', 'DepartmentInfo::index');
$routes->get('viewdepartment', 'DepartmentInfo::view');
$routes->get('editdepartment/(:any)', 'DepartmentInfo::edit/$1');
$routes->post('updatedepartment', 'DepartmentInfo::update');
$routes->get('deletedepartment/(:any)', 'DepartmentInfo::delete/$1');


//recruitments process
$routes->get('candidates', 'RecruitmentInfo::candidates');
$routes->post('candidates', 'RecruitmentInfo::candidates');
$routes->get('designation/(:any)', 'RecruitmentInfo::designation/$1');



$routes->get('seniority', 'SeniorityInfo::index');
$routes->post('seniority', 'SeniorityInfo::index');
$routes->get('editseniority/(:any)', 'SeniorityInfo::edit/$1');
$routes->post('updateseniority', 'SeniorityInfo::update');
$routes->get('deleteseniority/(:any)', 'SeniorityInfo::delete/$1');


$routes->get('viewseniority', 'SeniorityInfo::view');
$routes->get('userdata/(:any)', 'SeniorityInfo::personaldata/$1');


//grivances info
$routes->get('grievances', 'GrievancesInfo::index');
$routes->post('grievances', 'GrievancesInfo::index');
$routes->get('viewgrievances', 'GrievancesInfo::view');
$routes->get('editgrievances/(:any)', 'GrievancesInfo::edit/$1');
$routes->post('updategrievances', 'GrievancesInfo::update');
$routes->get('deletegrievances/(:any)', 'GrievancesInfo::delete/$1');
$routes->get('pdfgrievances/(:any)', 'GrievancesInfo::reportsdefault/$1');




//project info
$routes->get('project', 'ProjectInfo::index');
$routes->post('project', 'ProjectInfo::index');
$routes->get('viewproject', 'ProjectInfo::view');
$routes->get('work_type/(:any)', 'ProjectInfo::work_type/$1');
$routes->get('editproject/(:any)', 'ProjectInfo::edit/$1');
$routes->post('updateproject', 'ProjectInfo::update');
$routes->get('deleteproject/(:any)', 'ProjectInfo::delete/$1');


//manpower info
$routes->get('manpower', 'ManpowerInfo::index');
$routes->post('manpower', 'ManpowerInfo::index');
$routes->get('viewmanpower', 'ManpowerInfo::view');
$routes->get('deletemanpower/(:any)', 'ManpowerInfo::delete/$1');
$routes->get('editmanpower/(:any)', 'ManpowerInfo::edit/$1');
$routes->post('updatemanpower', 'ManpowerInfo::update');

$routes->get('pdfmanpower/(:any)', 'ManpowerInfo::reportsdefault/$1');
$routes->get('pdfmanpower', 'ManpowerInfo::view');

$routes->post('pdfcandidates', 'RecruitmentInfo::reportsdefault');



//nature of project info
$routes->get('natureproject', 'NatureInfo::index');
$routes->post('natureproject', 'NatureInfo::index');
$routes->get('projectinfo/(:any)', 'NatureInfo::projectinfo/$1');
$routes->get('viewnatureproject', 'NatureInfo::view');
$routes->get('deletenatureproject/(:any)', 'NatureInfo::delete/$1');
$routes->get('editnatureproject/(:any)', 'NatureInfo::edit/$1');
$routes->post('updatenatureproject', 'NatureInfo::update');

$routes->get('donors_view', 'BloodDonors::index');

$routes->get('add_donor', 'BloodDonors::new_donor');

$routes->post('new_donor', 'BloodDonors::add_donor');

$routes->get('edit_donor/(:num)', 'BloodDonors::edit_donor/$1');

$routes->post('update', 'BloodDonors::update_donor');

$routes->get('delete_donor/(:num)', 'BloodDonors::delete/$1');


$routes->get('report_view', 'BloodDonors::report_view');

$routes->post('search','BloodDonors::search');

$routes->get('download/(:num)','BloodDonors::download/$1');





$routes->get('send_mail/(:num)', 'BloodBank::send_mail/$1');

$routes->get('request/(:num)', 'BloodDonors::request/$1');

$routes->get('message/(:num)', 'BloodDonors::message/$1');


$routes->get('logout', 'BloodBank::logout');

*/