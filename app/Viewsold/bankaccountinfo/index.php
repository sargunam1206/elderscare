<?=  $this->extend('layout/users_view'); ?>

<?= $this->section('content'); ?>
 <div class="tab-pane fade show active" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
   
<div class="container">
  <div class="col-md-12">


    <div class="row mb-2">
                  <div class="col-md-6">
                     <h3 class="card-title">Manage Bank Account Details</h3>
                  </div>
                  <div class="col-md-6 text-right">
                    <a href="<?= site_url('viewbankaccountdetails');?>"><button type="submit" class="btn btn-info">Bank Details
                     List</button></a>
                  </div>
        </div>
        
                 <?php 
$session=\Config\Services::session();



if(isset($session->failed)):?>


<div class="container">
  <div class="offset-md-3 col-md-6 offset-md-3 mt-2 pt-3 pb-3 ">
<div class="alert alert-warning alert-dismissible fade show" role="alert">
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
                <h3 class="card-title">Bank  Details Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="<?= site_url('addbankaccountdetails');?>" class="form-horizontal" enctype="multipart/form-data">
                <div class="card-body">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Employee Id</label>
 <div class="col-sm-10">
                         <input list="glass_id"  class="form-control" name="emp_id"  />
                        <datalist  id="glass_id">
                           
                            <?php foreach($emp_id as $empid){?>
                              <option value="<?php echo $empid['emp_company_ref_id']; ?>"></option>
                              <?php } ?>
                                                      
                          </datalist>
                    </div>
</div>    
                    
                    
                 <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Name as per Bank</label>
                    <div class="col-sm-10">
                      <input type="text" name="bankaccount_name_as_per_bank" class="form-control" id="bankaccount_name_as_per_bank" placeholder="Enter your  Name" >
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Account No</label>
                    <div class="col-sm-10">
                      <input type="text" name="bankaccount_accountno" class="form-control" id="bankaccount_accountno" placeholder="Enter your Account No" >
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">IFSC No</label>
                    <div class="col-sm-10">
                      <input type="text" name="bankaccount_ifscno" class="form-control" id="bankaccount_ifscno" placeholder="Enter Your IFSC no" >
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Bank Name</label>
                    <div class="col-sm-10">
                      <input type="text" name="bankaccount_bankname" class="form-control" id="bankaccount_bankname" placeholder="Enter Your Bank Name" >
                    </div>
                  </div>
                  
                   <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Branch Name</label>
                    <div class="col-sm-10">
                      <input type="text" name="bankaccount_branchname" class="form-control" id="bankaccount_branchname" placeholder="Enter Your Branch Name" >
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Bank Passbook/Cheaque leaf</label>
                    <div class="col-sm-10">
                      <input type="file" name="bankaccount_passbookcheck_filename" class="form-control" id="bankaccount_passbookcheck_filename"  >
                    </div>
                  </div>

                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-info">Save</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                    <button type="button" class="btn btn-default float-right" onclick="if (confirm('Are you sure you want to leave this page?')) 
                                            { window.location.href='<?= site_url('viewbankaccountdetails') ?>'; }">Cancel</button>

                </div>
                <!-- /.card-footer -->                               

              </form>
            </div>
</div>
</div>
</div>
<?= $this->endSection();?>

