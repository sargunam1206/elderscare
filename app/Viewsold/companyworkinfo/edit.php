<?=  $this->extend('layout/users_view'); ?>

<?= $this->section('content'); ?>
<div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
<div class="container">
  <div class="col-md-10">


    <div class="row mb-2">
                  <div class="col-md-6">
                     <h3 class="card-title">Update CompanyInfo Details</h3>
                  </div>
                  <div class="col-md-6 text-right">
                    <a href="<?= site_url('users_view');?>"><button type="submit" class="btn btn-info">CompanyInfo  List</button></a>
                  </div>
        </div>

 			<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title"> User Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="<?= site_url('updatecompanyworkdetails');?>" class="form-horizontal" >
                <div class="card-body">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Employee Id</label>
                    <div class="col-sm-10">
                         <input list="glass_id"  class="form-control" name="emp_id" value="<?php echo $user['emp_id']; ?>" />
                        <datalist  id="glass_id">
                           
                            <?php foreach($emp_id as $empid){?>
                              <option value="<?php echo $empid['emp_company_ref_id']; ?>"></option>
                              <?php } ?>
                                                      
                          </datalist>
                    </div>
                  </div>     
                    
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Position in Last working Company</label>
                    <div class="col-sm-10">
                         <input type="hidden" name="companywork_id" value="<?php echo $user['companywork_id']; ?>"class="form-control" id="companywork_position_of_join"  >
                      <input type="text" name="companywork_position_of_join" value="<?php echo $user['companywork_position_of_join']; ?>" class="form-control" id="companywork_position_of_join"  >
                    </div>
                  </div>   
                    
                 <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Interview Date</label>
                    <div class="col-sm-10">
                      <input type="date" name="companywork_interview_date" value="<?php echo $user['companywork_interview_date']; ?>"  class="form-control" id="companywork_interview_date" placeholder="Enter Employee id" >
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Offer Letter Sent On</label>
                    <div class="col-sm-10">
                      <input type="date" name="companywork_offerletter_senton"  value="<?php echo $user['companywork_offerletter_senton']; ?>" class="form-control" id="companywork_offerletter_senton" >
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Date of Join</label>
                    <div class="col-sm-10">
                      <input type="date" name="companywork_dateof_join"  value="<?php echo $user['companywork_dateof_join']; ?>" class="form-control" id="companywork_dateof_join"  >
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Designation</label>
                    <div class="col-sm-10">
                      <input type="text" name="companywork_desg" value="<?php echo $user['companywork_desg']; ?>" class="form-control" id="companywork_desg" placeholder="Enter Your Desgination" >
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Site</label>
                    <div class="col-sm-10">
                      <input type="text" name="companywork_site"  value="<?php echo $user['companywork_site']; ?>" class="form-control" id="companywork_site" placeholder="Enter Your Site" >
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Department</label>
                    <div class="col-sm-10">
                      <input type="text" name="companywork_department" value="<?php echo $user['companywork_department']; ?>" class="form-control" id="companywork_department" placeholder="Enter Your Department" >
                    </div>
                  </div>
                 
                   <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Official Mail</label>
                    <div class="col-sm-10">
                      <input type="mail" name="companywork_official_email" value="<?php echo $user['companywork_official_email']; ?>" class="form-control" id="companywork_official_email"  >
                    </div>
                  </div>
          			
                    <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Expreienced Duration</label>
                    <div class="col-sm-10">
                      <input type="mail" name="companywork_exp_duration" value="<?php echo $user['companywork_exp_duration']; ?>" class="form-control" id="companywork_exp_duration"  >
                    </div>
                  </div>
          			 
                    <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Expert in</label>
                    <div class="col-sm-10">
                      <input type="text" name="companywork_expert_in"  value="<?php echo $user['companywork_expert_in']; ?>" class="form-control" id="companywork_expert_in"  >
                    </div>
                  </div>
                  
                  	 <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Last Working day of Previous Company</label>
                    <div class="col-sm-10">
                      <input type="date" name="companywork_last_working_day_date" value="<?php echo $user['companywork_last_working_day_date']; ?>" class="form-control" id="companywork_last_working_day_date" placeholder="Enter your Total Duration" >
                    </div>
                  </div>
                 
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Update</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                    <button type="button" class="btn btn-default float-right" onclick="if (confirm('Are you sure you want to leave this page?')) 
                                            { window.location.href='<?= site_url('viewcompanyworkdetails') ?>'; }">Cancel</button>



                </div>
                <!-- /.card-footer -->                               

              </form>
            </div>
</div>
</div>
</div>
<?= $this->endSection();?>