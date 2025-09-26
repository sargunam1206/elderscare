<!-- summernote -->


<?=  $this->extend('layout/sidebar'); ?>

<?= $this->section('content'); ?>


<div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
<div class="container">
  <div class="col-md-12">


    <div class="row mb-2">
                  <div class="col-md-6">
                     <h3 class="card-title">Man Power Request Details</h3>
                  </div>
                  <div class="col-md-6 text-right">
                    <a href="<?= site_url('viewmanpower');?>"><button type="submit" class="btn btn-info">Man Power Request List</button></a>
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
                <h3 class="card-title">Man Power Request Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="<?= site_url('manpower');?>" class="form-horizontal">
                <div class="card-body">
                    
                  
                    
                 <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Project Name</label>
                    <div class="col-sm-10">
                      <select name="project_id" class="form-control">
                              <option value="">Select Project</option>
                          <?php foreach($project as $projectdata){ ?>
                          
                         <option value="<?= $projectdata['project_id']?>"><?= $projectdata['project_name']?></option>
                         <?php } ?>
                     </select>
                    </div>
                  </div>
                  
                     
                 <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Department</label>
                    <div class="col-sm-10">
                     <select name="manpower_request_dept" class="form-control">
                         
                              <option value="">Select Department</option>
                          <?php foreach($department as $departmentdata){ ?>
                          
                         <option value="<?= $departmentdata['department_id']?>"><?= $departmentdata['department_name']?></option>
                         <?php } ?>
                   
                     </select>
                    </div>
                  </div>
                  
                   <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"> Job Title</label>
                    <div class="col-sm-10">
                      <input type="text" name="manpower_request_job_title" class="form-control" id="manpower_request_job_title">
                    </div>
                  </div>
                  
                    <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Job Type</label>
                    <div class="col-sm-10">
                     
                      <select name="manpower_request_job_type" class="form-control">
                         
                              <option value="">Select Type</option>
                               <option value="Technical">Technical</option>
                                <option value="Non Technical">Non Technical</option>
                    
                     </select>
                    </div>
                  </div>
               
                   <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Job Hiring Type </label>
                    <div class="col-sm-10">
                     <select name="manpower_request_job_hiretype" class="form-control">
                         <option value="">Select Type</option>
                               <option value="Replacement">Replacement</option>
                                <option value="New Hire">New Hire</option>
                     </select>
                    </div>
                  </div>
               
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Justification of Hiring </label>
                    <div class="col-sm-10">
                    <textarea name="manpower_request_justify" class="form-control"></textarea>
                    </div>
                  </div>
                  
                   <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Major Responsibility </label>
                    <div class="col-sm-10">
                    <textarea name="manpower_request_major_res" class="form-control"> </textarea>
                    </div>
                  </div>
                   <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Qualification</label>
                    <div class="col-sm-10">
                    <input type="text" name="manpower_request_qualification" class="form-control" id="manpower_request_qualification">
                    </div>
                  </div>
                  
                    <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Experience</label>
                    <div class="col-sm-10">
                    <input type="text" name="manpower_request_experience" class="form-control" id="manpower_request_experience">
                    </div>
                   </div>
                  
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Special Abilities</label>
                    <div class="col-sm-10">
                    <input type="text" name="manpower_request_special_apilites" class="form-control" id="manpower_request_special_apilites">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Personal Qualities</label>
                    <div class="col-sm-10">
                    <input type="text" name="manpower_request_personal_quality" class="form-control" id="manpower_request_personal_quality">
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

