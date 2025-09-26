<?=  $this->extend('layout/users_view'); ?>

<?= $this->section('content'); ?>
<div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
<div class="container">
  <div class="col-md-12">


    <div class="row mb-2">
                  <div class="col-md-6">
                     <h3 class="card-title">Leave Details</h3>
                  </div>
                  <div class="col-md-6 text-right">
                    <a href="<?= site_url('viewleavedetails');?>"><button type="submit" class="btn btn-info">Leave Details List</button></a>
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
                <h3 class="card-title">Leave Details Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="<?= site_url('leavedetails');?>" class="form-horizontal">
                <div class="card-body">
                
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Employee Id</label>
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
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Casual leave</label>
                    <div class="col-sm-10">
                      <input type="text" name="leave_cl" class="form-control" id="leave_cl" placeholder="Enter your Casual Leave" required>
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Sick Leave</label>
                    <div class="col-sm-10">
                      <input type="text" name="leave_sl" class="form-control" id="leave_sl" placeholder="Enter your Sick Leave" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Earned Leave</label>
                    <div class="col-sm-10">
                      <input type="text" name="leave_el" class="form-control" id="leave_el" placeholder="Enter your  Earned Leave" required>
                    </div>
                  </div>

               
                 
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Save</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                    <button type="button" class="btn btn-default float-right" onclick="if (confirm('Are you sure you want to leave this page?')) 
                                            { window.location.href='<?= site_url('viewleavedetails') ?>'; }">Cancel</button>



                </div>
                <!-- /.card-footer -->                               

              </form>
            </div>
</div>
</div>

</div>
<?= $this->endSection();?>

