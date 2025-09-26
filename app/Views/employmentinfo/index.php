<?=  $this->extend('layout/users_view'); ?>

<?= $this->section('content'); ?>
<div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
<div class="container">
  <div class="col-md-12">


    <div class="row mb-2">
                  <div class="col-md-6">
                     <h3 class="card-title">Employment Details</h3>
                  </div>
                  <div class="col-md-6 text-right">
                    <a href="<?= site_url('viewemploymentdetails');?>"><button type="submit" class="btn btn-info">Employment Details
                     List</button></a>
                  </div>
        </div>
        
                 <?php 
$session=\Config\Services::session();


  
      
     
      
 



if(isset($session->failed)):?>


<div class="container">
  <div class="offset-md-3 col-md-6 offset-md-3 mt-2 pt-3 pb-3 ">
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong> <?=  $session->failed; ?></strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
</div>
</div>        

<?php endif; ?>



            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Employment Details Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="<?= site_url('employmentdetails');?>" class="form-horizontal" >
                <div class="card-body">
                 <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Employee Id</label>
 <div class="col-sm-10">
                         <input list="glass_id"  class="form-control" name="emp_id" autocomplete="off" />
                        <datalist  id="glass_id">
                           
                            <?php foreach($emp_id as $empid){ ?>
                              <option value="<?php echo $empid['emp_company_ref_id']; ?>"></option>
                              <?php } ?>
                                                      
                          </datalist>
                    </div>
</div>        
                    
                    
                 <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">PF No</label>
                    <div class="col-sm-10">
                      <input type="text" name="employment_pf_no" class="form-control" id="employment_pf_no" placeholder="Enter your PF No" >
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">ESI No</label>
                    <div class="col-sm-10">
                      <input type="text" name="employment_esi_no" class="form-control" id="employment_esi_no" placeholder="Enter your ESI No" >
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">UAN No</label>
                    <div class="col-sm-10">
                      <input type="text" name="employment_uan_no" class="form-control" id="employment_uan_no" placeholder="Enter your UAN No" >
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Gratuity No</label>
                    <div class="col-sm-10">
                      <input type="text" name="employment_gratuity_no" class="form-control" id="employment_gratuity_no" placeholder="Enter Your Gratuity No" >
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Gratuity DOJ</label>
                    <div class="col-sm-10">
                      <input type="date" name="employment_gratuity_doj" class="form-control" id="employment_gratuity_doj" placeholder="Enter Your date of joining" >
                    </div>
                  </div>
                  
                   
                  
                 	<div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Status of Form F Gratuity</label>
                         <div class="col-sm-10">
                                 
                                  <select name="employment_sts_of_formf_gratuity" class="form-control" >
                                    <option >Select Status</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                  </select>
                        </div>
                   </div>
                  

          				<div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Status of Form 11</label>
                         <div class="col-sm-10">
                                 
                                  <select name="employment_sts_of_form11" class="form-control" >
                                    <option >Select Status</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                  </select>
                        </div>
                   </div>
                  
                    <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Are you pre PF member?</label>
                         <div class="col-sm-10">
                                 
                                  <select name="employment_pf_pre_mem" class="form-control" >
                                    <option >Select Status</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                  </select>
                        </div>
                   </div>
                  
                    <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">PF Declaration</label>
                         <div class="col-sm-10">
                                 
                                  <select name="employment_pf_decl" class="form-control" >
                                    <option >Select Status</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                  </select>
                        </div>
                   </div>

                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Save</button>
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

