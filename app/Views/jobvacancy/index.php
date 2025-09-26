<?=  $this->extend('layout/sidebar'); ?>

<?= $this->section('content'); ?>

<div class="container">
  <div class="col-md-12">


        
                 <?php 
$session=\Config\Services::session();


  
      
     
      
 



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



            <div class="card card-info">
              <div class="card-header">
                  <div class="row ">
                <div class="col-md-6 mt-2">
                     <h3 class="card-title">Job Vacancy Details</h3>
                  </div>
                  <div class="col-md-6 text-right">
                    <a href="<?= site_url('viewjobvacancy');?>"><button type="submit" class="btn btn-success">Job Vacancy List</button></a>
                  </div>
                  </div>
              </div>
              
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="<?= site_url('jobvacancy');?>" class="form-horizontal">
                <div class="card-body">
                  
                    
                 <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Department</label>
                    <div class="col-sm-10">
                      <input type="text" name="job_vacancy_dept" class="form-control" id="job_vacancy_dept" >
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Role</label>
                    <div class="col-sm-10">
                      <input type="text" name="job_vacancy_role" class="form-control" id="job_vacancy_role" >
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Total Years Of Experience</label>
                    <div class="col-sm-10">
                      <input type="text" name="job_vacancy_exp" class="form-control" id="job_vacancy_exp" >
                    </div>
                  </div>
                  
                   <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Qualification</label>
                    <div class="col-sm-10">
                      <input type="text" name="job_vacancy_qualification" class="form-control" id="job_vacancy_qualification" >
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Total Vacancy</label>
                    <div class="col-sm-10">
                      <input type="number" name="job_vacancy_totalvacancy" class="form-control" id="job_vacancy_totalvacancy" >
                    </div>
                  </div>
               
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Validity From</label>
                    <div class="col-sm-10">
                      <input type="date" name="job_vacancy_validity_from" class="form-control" id="job_vacancy_validity_from" >
                    </div>
                  </div>
                    <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Validity To</label>
                    <div class="col-sm-10">
                      <input type="date" name="job_vacancy_validity_to" class="form-control" id="job_vacancy_validity_to" >
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Save</button>
                  <button type="submit" class="btn btn-default float-right">Cancel</button>


                </div>
                <!-- /.card-footer -->                               

              </form>
            </div>
</div>
</div>

<?= $this->endSection();?>

