<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | DataTables</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url();?>/public/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url();?>/public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url();?>/public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url();?>/public/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

   <style>
        .fixed-height {
            height:500px; /* Set a fixed height */
            width:800px;
            overflow-y: auto; /* Enable vertical scrolling */
        }
    </style>
 
   <style>
    
  #intro {
    position: relative;
    width: 100%;
    height: 100vh;
    background-size: cover;
    width: 100%;
    height: 100vh;
    background: url('<?= base_url();?>/public/hire5.jpg') no-repeat center center;
    background-size: cover;
   }
   


  
      @media (min-width: 1200px) {
    .container{
        max-width: 1200px;
    }
}
  

  </style>
 
 <?php 
$session=\Config\Services::session();


if(isset($session->success)):?>


<div class="container">
<div class="offset-md-1 col-md-8 offset-md-2  pt-3 pb-3 ">
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong> <?=  $session->success; ?></strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
</div>
</div>  



<?php endif; ?>

  <?php if(isset($validation)):?>
  <?php foreach($validation as $errors): ?>
  <div class="container">
  <div class="offset-md-1 col-md-8 offset-md-2  pt-3 pb-3 ">
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong> <?=  $errors; ?></strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
</div>
</div>  
<?php endforeach; ?>
<?php endif; 
?>



<?php if(isset($session->failed)):?>


<div class="container">
 <div class="offset-md-1 col-md-8 offset-md-2  pt-3 pb-3 ">
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong> <?=  $session->failed; ?></strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
</div>
</div>        

<?php endif; ?>   
              

<body id="intro">
 <div class="container" style="margin-left:5%;margin-top:5%">
        <div class="row mb-1">
          <div class="col-sm-5">
            <h1 class="m-0 " style="color:#6e7123;font-weight:bold" id="head">SAPL Job Vacancy</h1>
          </div><!-- /.col -->
          
          
          </div>
</div>
 <div class="container mt-5"  style="margin-left:5%;margin-top:5%">
        <div class="fixed-height border p-3">
            
            <?php foreach($users as $data=>$value){?>
           <div class="row mt-3" >
          <div class="col-lg-12">
          <div class="card " >
              <div class="card-header">
                <h5 class="card-title "><b>Job Role :</b>&nbsp;&nbsp;<?= $value["job_vacancy_role"]; ?></h5>
                <h5 class="card-title float-right"><b>Valid Period :</b>&nbsp;&nbsp;<?= $value["job_vacancy_validity_from"]; ?>&nbsp;&nbsp;to&nbsp;&nbsp;<?= $value["job_vacancy_validity_to"]; ?></h5>
              </div>
           
                
              
              <div class="card-body">
                
                 <p class="card-text"><b>Department :</b>&nbsp;&nbsp;<?= $value["job_vacancy_dept"]; ?></p>
                <p class="card-text"><b>Experience :</b>&nbsp;&nbsp;<?= $value["job_vacancy_exp"]; ?>  </p>
                <p class="card-text"><b>Qualification :</b>&nbsp;&nbsp;<?= $value["job_vacancy_qualification"]; ?></p>
                <p class="card-text"><b>Total Vacancy :</b>&nbsp;&nbsp;<?= $value["job_vacancy_totalvacancy"]; ?></p>
                
                <?php $id=base64_encode(base64_encode(base64_encode($value['job_vacancy_id'])));?>
                <a href="recruitment/<?= $id ?>" class="btn btn-primary">Apply Job</a>
              </div>
            </div>

         
          </div>
          <!-- /.col-md-6 -->
      
         
          <!-- /.col-md-6 -->
        </div>
       <?php  } ?>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>



 
   
  

   




<!-- jQuery -->
<script src="<?= base_url();?>/public/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url();?>/public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="<?= base_url();?>/public/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url();?>/public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url();?>/public/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url();?>/public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url();?>/public/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url();?>/public/dist/js/demo.js"></script>
<!-- page script -->




</body>
</html>
