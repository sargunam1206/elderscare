 <?php


ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
?>


<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="refresh" content="900;url=http://viyoma.neuralarc.com/viyoma/logout" />

  <!-- Favicon icon-->
  <link rel="shortcut icon" type="image/png" href="<?= base_url(); ?>/public/dist/assets/images/logos/favicon.png" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Core Css -->
  <link rel="stylesheet" href="<?= base_url(); ?>/public/dist/assets/css/styles.css" />

  <title>MatDash Bootstrap Admin</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<!-- Required meta tags -->
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!-- Favicon icon-->
<link rel="shortcut icon" type="image/png" href="<?= base_url(); ?>/public/dist/assets/images/logos/favicon.png" />

<!-- Core Css -->
<link rel="stylesheet" href="<?= base_url(); ?>/public/dist/assets/css/styles.css" />

<title>MatDash Bootstrap Admin</title>
<link rel="stylesheet"
  href="<?= base_url(); ?>/public/dist/assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css">




</head>
 
 
 <div class="datatables">
  
   <div class="table-responsive mt-3">                
                     
<table id="form_inputs" class="table table-striped w-100 table-bordered display text-nowrap align-middle">
  <thead>
    <tr>
      <th>Asset Type</th>
      <th>Asset Make</th>
      <th>Specification</th>
      <th>Stock</th>
      <th>Delivery Status</th>
      <!-- <th>Actions</th> -->
    </tr>
  </thead>
  <tbody>
    <?php foreach ($alldata as $data) {
      $base = base64_encode(base64_encode(base64_encode($data['purchase_id']))); ?>
      <tr>
        <td><?= $data['asset_type']; ?></td>
        <td><?= $data['asset_make']; ?></td>
        <td><?= $data['specification']; ?></td>
        <td><?= $data['quantity']; ?></td>
        <td><?= $data['delivery_status']; ?></td>
        <!-- <td>
          <a href="<?= base_url('editpurchase1/' . $base); ?>" class="btn" style="color:blue">
            <i class="bi bi-pencil-square"></i>
          </a>
          <a href="javascript:void(0)" class="btn" data-bs-toggle="modal"
            data-bs-target="#deletePurchaseModal<?= $data['purchase_id']; ?>">
            <i class="bi bi-trash text-danger"></i>
          </a>
         
          <div class="modal fade" id="deletePurchaseModal<?= $data['purchase_id']; ?>" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header d-flex align-items-center">
                  <h5 class="modal-title">Are you sure you want to delete this purchase?</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-footer justify-content-end">
                  <a href="<?= base_url('deletepurchase1/' . $base); ?>" class="btn btn-danger">Yes</a>
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                </div>
              </div>
            </div>
          </div>
        </td> -->
      </tr>
    <?php } ?>
  </tbody>
  <!-- <tfoot>
    <tr>
      <th>Asset Type</th>
      <th>Asset Make</th>
      <th>Specification</th>
      <th>Stock</th>
      <th>Delivery Status</th>
      <th>Actions</th> 
    </tr>
  </tfoot> -->
</table>
</div>
</div>


  <div class="dark-transparent sidebartoggler"></div>
  <script src="<?= base_url(); ?>/public/dist/assets/js/vendor.min.js"></script>
  <!-- Import Js Files -->
  <script src="<?= base_url(); ?>/public/dist/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/libs/simplebar/dist/simplebar.min.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/js/theme/app.init.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/js/theme/theme.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/js/theme/app.min.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/js/theme/sidebarmenu.js"></script>

  <!-- solar icons -->
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="<?= base_url(); ?>/public/dist/assets/js/datatable/datatable-api.init.js"></script>
 


</body>


</html>