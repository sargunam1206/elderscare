<?=  $this->extend('layout/users_view'); ?>

<?= $this->section('content'); ?>
<div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
<div class="container">
  <div class="col-md-10">


    <div class="row mb-2">
                  <div class="col-md-6">
                     <h3 class="card-title">Update User Details</h3>
                  </div>
                  <div class="col-md-6 text-right">
                    <a href="<?= site_url('viewemploymentdetails');?>"><button type="submit" class="btn btn-info">Users List</button></a>
                  </div>
        </div>

 			<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title"> User Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="<?= site_url('updateemploymentdetails');?>" class="form-horizontal">
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
                    <label for="inputEmail3" class="col-sm-2 col-form-label">PF No</label>
                    <div class="col-sm-10">
                          <input type="hidden" name="employment_id"  value="<?php echo $user['employment_id']; ?>">
                      <input type="text" name="employment_pf_no" value="<?php echo $user['employment_pf_no']; ?>" class="form-control" id="employment_pf_no" placeholder="Enter your PF No" >
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">ESI No</label>
                    <div class="col-sm-10">
                      <input type="text" name="employment_esi_no" value="<?php echo $user['employment_esi_no']; ?>" class="form-control" id="employment_esi_no" placeholder="Enter your ESI No" >
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">UAN No</label>
                    <div class="col-sm-10">
                      <input type="text" name="employment_uan_no"  value="<?php echo $user['employment_uan_no']; ?>" class="form-control" id="employment_uan_no" placeholder="Enter your UAN No" >
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Gratuity No</label>
                    <div class="col-sm-10">
                      <input type="text" name="employment_gratuity_no" value="<?php echo $user['employment_gratuity_no']; ?>"class="form-control" id="employment_gratuity_no" placeholder="Enter Your Gratuity No" >
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Gratuity DOJ</label>
                    <div class="col-sm-10">
                      <input type="date" name="employment_gratuity_doj" value="<?php echo $user['employment_gratuity_doj']; ?>" class="form-control" id="employment_gratuity_doj" placeholder="Enter Your date of joining" >
                    </div>
                  </div>
                  
                   
                  
                 	<div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Status of Form F Gratuity</label>
                         <div class="col-sm-10">
                                 
                                  <select name="employment_sts_of_formf_gratuity" class="form-control" >
                                   
                                    
                                    <?php  if($user['employment_sts_of_formf_gratuity']!=''){ ?>
                                    <option>Select Status</option>
                                    <?php  if($user['employment_sts_of_formf_gratuity']=='Yes'){ ?>
                                    <option value="Yes" selected>Yes</option>
                                    <?php }else{ ?>
                                    <option value="Yes" >Yes</option>
                                    <?php } ?>
                                    
                                     <?php  if($user['employment_sts_of_formf_gratuity']=='No'){ ?>
                                    <option value="No" selected>No</option>
                                    <?php }else{ ?>
                                    <option value="No" >No</option>
                                    <?php } ?>
                                     <?php  } ?>
                                  </select>
                        </div>
                   </div>
                  

          				<div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Status of Form 11</label>
                         <div class="col-sm-10">
                                 
                                  <select name="employment_sts_of_form11" class="form-control" >
                                      <?php  if($user['employment_sts_of_form11']!=''){ ?>
                                    <option>Select Status</option>
                                    <?php  if($user['employment_sts_of_form11']=='Yes'){ ?>
                                    <option value="Yes" selected>Yes</option>
                                    <?php }else{ ?>
                                    <option value="Yes" >Yes</option>
                                    <?php } ?>
                                    
                                     <?php  if($user['employment_sts_of_form11']=='No'){ ?>
                                    <option value="No" selected>No</option>
                                    <?php }else{ ?>
                                    <option value="No" >No</option>
                                    <?php } ?>
                                     <?php  } ?>
                                  </select>
                        </div>
                   </div>
                    <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Are you pre PF member?</label>
                         <div class="col-sm-10">
                                 
                                  <select name="employment_pf_pre_mem" class="form-control" >
                                       <?php  if($user['employment_pf_pre_mem']!=''){ ?>
                                    <option>Select Status</option>
                                    <?php  if($user['employment_pf_pre_mem']=='Yes'){ ?>
                                    <option value="Yes" selected>Yes</option>
                                    <?php }else{ ?>
                                    <option value="Yes" >Yes</option>
                                    <?php } ?>
                                    
                                     <?php  if($user['employment_pf_pre_mem']=='No'){ ?>
                                    <option value="No" selected>No</option>
                                    <?php }else{ ?>
                                    <option value="No" >No</option>
                                    <?php } ?>
                                     <?php  } ?>
                                  </select>
                        </div>
                   </div>
                    <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">PF Declaration</label>
                         <div class="col-sm-10">
                                 
                                  <select name="employment_pf_decl" class="form-control" >
                                       <?php  if($user['employment_pf_decl']!=''){ ?>
                                    <option>Select Status</option>
                                    <?php  if($user['employment_pf_decl']=='Yes'){ ?>
                                    <option value="Yes" selected>Yes</option>
                                    <?php }else{ ?>
                                    <option value="Yes" >Yes</option>
                                    <?php } ?>
                                    
                                     <?php  if($user['employment_pf_decl']=='No'){ ?>
                                    <option value="No" selected>No</option>
                                    <?php }else{ ?>
                                    <option value="No" >No</option>
                                    <?php } ?>
                                     <?php  } ?>
                                  </select>
                        </div>
                   </div>

                 
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Update</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                    <button type="button" class="btn btn-default float-right" onclick="if (confirm('Are you sure you want to leave this page?')) 
                                            { window.location.href='<?= site_url('viewemploymentdetails') ?>'; }">Cancel</button>



                </div>
                <!-- /.card-footer -->                               

              </form>
            </div>
</div>
</div>
</div>
<?= $this->endSection();?>