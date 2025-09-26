<!-- summernote -->


<?=  $this->extend('layout/sidebar'); ?>

<?= $this->section('content'); ?>


<div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
<div class="container">
  <div class="col-md-12">


    <div class="row mb-2">
                  <div class="col-md-6">
                     <h3 class="card-title">Grievances Details</h3>
                  </div>
                  <div class="col-md-6 text-right">
                    <a href="<?= site_url('viewgrievances');?>"><button type="submit" class="btn btn-info">Grievances List</button></a>
                  </div>
        </div>
<?php 
$session=\Config\Services::session();


 ini_set('display_errors', '1');
 ini_set('display_startup_errors', '1');
      
     
      
         
if(isset($session->success)):?>


<div class="container">
  <div class="offset-md-3 col-md-6 offset-md-3 mt-2 pt-3 pb-3 ">
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong> <?=  $session->success; ?></strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
</div>
</div>        

<?php endif; ?>


<div class="container">
    <?php if(isset($validation)):?>
  <?php foreach($validation as $errors): ?>
  <div class="offset-md-1 col-md-8 offset-md-2  pt-3 pb-3 ">
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong> <?=  $errors; ?></strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
</div>
<?php endforeach; ?>
<?php endif; 

$session->remove('success');
$session->remove('failed');
?>



            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Grievances Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="<?= site_url('grievances');?>" class="form-horizontal">
                <div class="card-body">
                    
                  
                    
                 <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Grievances Type</label>
                    <div class="col-sm-10">
                      <input type="text" name="grievances_type" class="form-control" id="grievances_type">
                    </div>
                  </div>
                  
                     
                 <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Grievances Detailed Description </label>
                    <div class="col-sm-10">
                      <textarea name="grievances_desc" class="form-control" id="grievances_desc"></textarea>
                    </div>
                  </div>
                  
               
               
                  
               
                  
                  
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Save</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                    <button type="button" class="btn btn-default float-right" onclick="if (confirm('Are you sure you want to leave this page?')) 
                                            { window.location.href='<?= site_url('viewcompanyresigndetails') ?>'; }">Cancel</button>



                </div>
                <!-- /.card-footer -->                               

              </form>
            </div>
</div>
</div>
</div>


<?= $this->endSection();?>

