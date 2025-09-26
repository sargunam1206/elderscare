<?=  $this->extend('layout/users_view'); ?>

<?= $this->section('content'); ?>

<div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
<div class="container">
  <div class="col-md-12">


    <div class="row mb-2">
                  <div class="col-md-6">
                     <h3 class="card-title">Employee Reports</h3>
                  </div>
                  
        </div>
        
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
                <h3 class="card-title">Reports Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="<?= site_url('reportsdefault');?>" class="form-horizontal">
                  
                  
                  
                  
                  
                <div class="card-body">
                    
                    
                  
                  
                  
                      
                
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Employee Id</label>
                    <div class="col-sm-10">
                         <input list="glass_id"  class="form-control" name="emp_company_ref_id"  />
                        <datalist  id="glass_id">
                           
                            <?php foreach($emp_id as $empid){?>
                              <option value="<?php echo $empid['emp_company_ref_id']; ?>"><?php echo $empid['emp_company_ref_id']; ?></option>
                              <?php } ?>
                                                      
                          </datalist>
                    </div>
                    
                  </div>   
            
                     


               
                 
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Generate Report</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                    <button type="button" class="btn btn-default float-right" onclick="if (confirm('Are you sure you want to leave this page?')) 
                                            { window.location.href='<?= site_url('reportslist') ?>'; }">Cancel</button>



                </div>
                <!-- /.card-footer -->                               

              </form>
            </div>
</div>
</div>
</div>
<?= $this->endSection();?>

