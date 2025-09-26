<?=  $this->extend('layout/users_view'); ?>
<div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
<?= $this->section('content'); ?>
<div class="container">
  <div class="col-md-10">


    <div class="row mb-2">
                  <div class="col-md-6">
                     <h3 class="card-title">Update Employee Resign  Details</h3>
                  </div>
                  <div class="col-md-6 text-right">
                    <a href="<?= site_url('viewcompanyresigndetails');?>"><button type="submit" class="btn btn-info">Employee Resign List</button></a>
                  </div>
        </div>

 			<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title"> User Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="<?= site_url('updatecompanyresigndetails');?>" class="form-horizontal">
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
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Letter Submit On</label>
                    <div class="col-sm-10">
                         <input type="hidden" name="company_resign_id"  value="<?php echo $user['company_resign_id']; ?>">
                      <input type="date" name="company_resign_letter_subon" value="<?php echo $user['company_resign_letter_subon']; ?>" class="form-control" id="company_resign_letter_subon" >
                    </div>
                  </div>
                  
                  
                  
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Notice Period Completed On?</label>
                         <div class="col-sm-10">
                                 
                                  <select name="company_resign_noperiod_com" class="form-control" >
                                    
                                  <?php  if($user['company_resign_noperiod_com']!=''){ ?>
                                    <option>Select Status</option>
                                    <?php  if($user['company_resign_noperiod_com']=='Yes'){ ?>
                                    <option value="Yes" selected>Yes</option>
                                    <?php }else{ ?>
                                    <option value="Yes" >Yes</option>
                                    <?php } ?>

                                 <?php  } ?>
                                  </select>
                        </div>
                   </div>


                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">No Due Certificte Compeleted?</label>
                         <div class="col-sm-10">
                                 
                                  <select name="company_resign_nodue_cert" class="form-control" >
                                     <?php  if($user['company_resign_nodue_cert']!=''){ ?>
                                    <option>Select Status</option>
                                    <?php  if($user['company_resign_nodue_cert']=='Yes'){ ?>
                                    <option value="Yes" selected>Yes</option>
                                    <?php }else{ ?>
                                    <option value="Yes" >Yes</option>
                                    <?php } ?>

                                 <?php  } ?>
                                  </select>
                        </div>
                   </div>
                   
                   <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label" >Full & Final Settlement</label>
                    </div>
                  <div class="form-group row">
                    
                    
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Bank Deatils</label>
                    <div class="col-sm-10">
                      <input type="text" name="company_resign_final_sett_bank" value="<?php echo $user['company_resign_final_sett_bank']; ?>" class="form-control" id="company_resign_final_sett_bank" placeholder="Enter Your Bank details" >
                    </div>
                  </div>
                  
                  
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Amount</b></label>
                    
                    <div class="col-sm-10">
                      <input type="text" name="company_resign_final_sett_amount" value="<?php echo $user['company_resign_final_sett_amount']; ?>" class="form-control" id="company_resign_final_sett_amount" placeholder="Enter Your Amount" >
                    </div>
                  </div> 
                  
                   <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Date Of Leaving</b></label>
                    
                    <div class="col-sm-10">
                      <input type="date" name="company_resign_dateof_leaving" value="<?php echo $user['company_resign_dateof_leaving']; ?>" class="form-control" id="company_resign_dateof_leaving" placeholder="Enter Your Amount" >
                    </div>
                  </div> 
                  
                 

                  
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Update</button>
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