<?=  $this->extend('layout/users_view'); ?>

<?= $this->section('content'); ?>
<div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
<div class="container">
  <div class="col-md-10">


    <div class="row mb-2">
                  <div class="col-md-6">
                     <h3 class="card-title">Update Educational Details</h3>
                  </div>
                  <div class="col-md-6 text-right">
                    <a href="<?= site_url('vieweducationaldetails');?>"><button type="submit" class="btn btn-info">Educational List</button></a>
                  </div>
        </div>

 			<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title"> Educational Details Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="<?= site_url('updateeducationaldetails');?>" class="form-horizontal"  enctype="multipart/form-data">
                 <div class="card-body">
                     <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Employee Id</label>
                    <div class="col-sm-10">
                         <input list="glass_id"  class="form-control" name="emp_id" value="<?php echo $user['emp_id']; ?>" />
                        <datalist  id="glass_id">
                           
                            <?php foreach($emp_id as $empid){?>
                              <option value="<?php echo $empid['emp_company_ref_id']; ?>"> </option>
                              <?php } ?>
                                                      
                          </datalist>
                    </div>
                  </div>  
                     
                     
                     
                 <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Qualification</label>
                    <div class="col-sm-10">
                      <input type="hidden" name="edu_id"  value="<?php echo $user['edu_id']; ?>">    
                      <input type="text" name="edu_qualification"  value="<?php echo $user['edu_qualification']; ?>" class="form-control" id="edu_qualification" placeholder="Enter your Qualification" required>
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Year of Completion</label>
                    <div class="col-sm-10">
                      <input type="text" name="edu_year_of_completion" value="<?php echo $user['edu_year_of_completion']; ?>"  class="form-control" id="edu_year_of_completion" placeholder="Enter your year of completion" >
                    </div>
                  </div>
                  
                  <?php
                  $file=$user['edu_final_degree_cert_filename'];
                  $file_resume=$user['edu_resume_filename'];
                  ?>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Final Degree certificate</label>
                    
                    <div class="col-sm-10">
                      <a href="<?php if($file!=''){ echo base_url().$file; }  ?>"  target="_blank">Updated Degree Certficate</a>  
                      <input type="file" name="edu_final_degree_cert_filename"  class="form-control" id="edu_final_degree_cert_filename" placeholder="Enter Your Contact Number">
                    </div>
                  </div>

                   <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Resume</label>
                    
                    <div class="col-sm-10">
                      <a href="<?php if($file!=''){ echo base_url().$file; }  ?>"  target="_blank">Updated Resume</a>  
                      <input type="file" name="edu_resume_filename"  class="form-control" id="edu_resume_filename" placeholder="Enter Your Contact Number">
                    </div>
                  </div>
                  
                   <!--  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Experienced Company Name</label>
                    <div class="col-sm-10">
                      <input type="text" name="edu_exp_companyname" value="<?php echo $user['edu_exp_companyname']; ?>" class="form-control" id="edu_exp_companyname" placeholder="Enter your Experienced Company Name">
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Experienced Duration</label>
                    <div class="col-sm-10">
                      <input type="text" name="edu_exp_duration" value="<?php echo $user['edu_exp_duration']; ?>" class="form-control" id="edu_exp_duration" placeholder="Enter your Duration" >
                    </div>
                  </div>
                 
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Experienced Total Duration</label>
                    <div class="col-sm-10">
                      <input type="text" name="edu_total_experience" value="<?php echo $user['edu_total_experience']; ?>" class="form-control" id="edu_total_experience" placeholder="Enter your Total Experience" >
                    </div>
                  </div>

          		 <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Last Working day of Previous Company</label>
                    <div class="col-sm-10">
                      <input type="date" name="edu_last_working_day_date" value="<?php echo $user['edu_last_working_day_date']; ?>" class="form-control" id="edu_last_working_day_date" placeholder="Enter your Total Duration" >
                    </div>
                  </div>
	
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Expert In</label>
                    <div class="col-sm-10">
                      <input type="text" name="edu_expert_in" value="<?php echo $user['edu_expert_in']; ?>" class="form-control" id="edu _expert_in" placeholder="Enter your Expert details" >
                    </div>
                  </div>   -->


                
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Update</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                    <button type="button" class="btn btn-default float-right" onclick="if (confirm('Are you sure you want to leave this page?')) 
                                            { window.location.href='<?= site_url('vieweducationaldetails') ?>'; }">Cancel</button>



                </div>
                <!-- /.card-footer -->                               

              </form>
            </div>
</div>
</div>
</div>
<?= $this->endSection();?>