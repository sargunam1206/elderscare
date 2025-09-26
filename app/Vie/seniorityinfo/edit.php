<?=  $this->extend('layout/sidebar'); ?>

<?= $this->section('content'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
<div class="container">
  <div class="col-md-10">


    <div class="row mb-2">
                  <div class="col-md-6">
                     <h3 class="card-title">Update Seniority Details</h3>
                  </div>
                  <div class="col-md-6 text-right">
                    <a href="<?= site_url('viewseniority');?>"><button type="submit" class="btn btn-info">Seniority List</button></a>
                  </div>
        </div>

 			<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title"> Seniority Details Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <form method="POST" action="<?= site_url('updateseniority');?>" class="form-horizontal" enctype="multipart/form-data">
                 <div class="card-body">
                    
                    <input type="hidden" value="<?php echo $user['seniority_info_id']; ?>" name="seniority_info_id">
                    <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Employee Id</label>
                      <div class="col-sm-10">
                         <input list="glass_id"  class="form-control" name="emp_id"   value="<?php echo $user['emp_id']; ?>" id="check" autocomplete="off"/>
                        <datalist  id="glass_id">
                           
                            <?php foreach($emp_id as $empid){?>
                              <option value="<?php echo $empid['emp_company_ref_id']; ?>"></option>
                              <?php } ?>
                                                      
                          </datalist>
                       </div>
                    </div> 
                    
                    <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Employee Name</label>
                      <div class="col-sm-10">
                         <input type="text"  class="form-control"  id="name" placeholder="Name" value="<?= $name; ?>" readonly/>
                        
                       </div>
                    </div> 
                      <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Qualfication</label>
                      <div class="col-sm-10">
                         <input type="text"  class="form-control"  id="qualification" placeholder="Qualfication" value="<?= $qualification; ?>" readonly/>
                        
                       </div>
                    </div>
                    <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Department</label>
                      <div class="col-sm-10">
                         <input type="text"  class="form-control"  id="dept" placeholder="Department"  value="<?= $dept; ?>" readonly/>
                        
                       </div>
                    </div>
                    
                   
                     
                    <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Joined Position</label>
                      <div class="col-sm-10">
                         <input type="text"  class="form-control"  id="desg" placeholder="Designation" value="<?= $desg; ?>" readonly/>
                        
                       </div>
                    </div>
                    
                     <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Current Position</label>
                      <div class="col-sm-10">
                         <input type="text"  class="form-control"  id="desg" placeholder="Designation" value=""  readonly/>
                        
                       </div>
                    </div>
                    
                    <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Total Experience</label>
                      <div class="col-sm-10">
                         <input type="text"  class="form-control"  id="exp" placeholder="Experience" value="<?= $exp; ?>" readonly/>
                        
                       </div>
                    </div>
                    <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label" >Seniority Status</label>
                      <div class="col-sm-10">
                         <input list="seniority_status"  class="form-control" name="seniority_status"  value="<?php echo $user['seniority_status']; ?>" autocomplete="off"/>
                        <datalist  id="seniority_status">
                           
                              <option value="Seniority"></option>
                               <option value="Not Seniority"></option>
                                                      
                          </datalist>
                       </div>
                    </div>  
                     
                   
                </div>
                
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-info">Update</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                    <button type="button" class="btn btn-default float-right" onclick="if (confirm('Are you sure you want to leave this page?')) 
                                            { window.location.href='<?= site_url('viewseniority') ?>'; }">Cancel</button>



                </div>
                <!-- /.card-footer -->                               

              </form>
            </div>
</div>
</div>
</div>


<script type="text/javascript">
    $(document).ready(function () {
 
      $('#check').change(function () {
           
       $('#test').empty();
        var custId =$(this).val();
         
        $.ajax({
          url: 'http://freelance.neuralarc.com/digitalflow/userdata/'+custId,
          type: 'get',
          data: { custId: custId },
          success: function (response) {
          
            
             var dd = JSON.parse(response);
             var c=0;
            
             
            
            $('#dept').val(dd.dept);
            $('#desg').val(dd.desg);
            $('#name').val(dd.name);
            
            $('#qualification').val(dd.qualification);
            $('#exp').val(dd.exp);
            $('#exampleModalCenter').modal('show');
          }
        });
      });
 
    });
  </script> 
<?= $this->endSection();?>