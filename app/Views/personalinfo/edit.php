

<?=  $this->extend('layout/users_view'); ?>

<?= $this->section('content'); ?>
<div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
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
//$session->destroy();
?>

</div>

          <div class="container" style="width:100%">
            
            <div class="card card-info " style="width:100%">
              <div class="card-header">
                 <div class="row">
                  <div class="col-md-6 mt-2">
                     <h3 class="card-title">Update Employee Personal Details</h3>
                  </div>
                  <div class="col-md-6 text-right">
                    <a href="<?= site_url('viewempperdetails');?>"><button type="submit" class="btn btn-success">Personal
                     List</button></a>
                  </div>
                 </div>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
              <form method="POST" action="<?= site_url('updateempperdetails');?>" class="form-horizontal" enctype="multipart/form-data">
                <div class="card-body">
                <div class="row">
                <div class="col-md-6"> 
                 <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Employee Id</label>
                    <div class="col-sm-10">
                        <input type="hidden" name="emp_id"  value="<?php echo $user['emp_id']; ?>">
                      <input type="text" name="emp_company_ref_id" value="<?php echo $user['emp_company_ref_id']; ?>" class="form-control" id="inputEmail3" placeholder="Enter Employee id" >
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                      <input type="text" name="emp_name"  value="<?php echo $user['emp_name']; ?>" class="form-control" id="inputEmail3" placeholder="Enter Employe Name" >
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Date of Birth</label>
                    <div class="col-sm-10">
                      <input type="date" name="emp_dob"  value="<?php echo $user['emp_dob']; ?>" class="form-control" id="inputEmail3" placeholder="Enter Your Contact Number" >
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Contact No</label>
                    <div class="col-sm-10">
                      <input type="phone" name="emp_mobile_no"  value="<?php echo $user['emp_mobile_no']; ?>" class="form-control" id="inputEmail3" placeholder="Enter Your Contact No" >
                    </div>
                  </div>
                  
                 
                  <div class="form-group row">
                  	 <label for="inputPassword3" class="col-sm-2 col-form-label">Personal Email Id</label>
                    <div class="col-sm-10">
                      <input type="email" name="emp_personal_emailid" value="<?php echo $user['emp_personal_emailid']; ?>" class="form-control" id="inputPassword3" placeholder="Please Enter Personal Email Id" >
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Aaadhar No</label>
                    <div class="col-sm-10">
                      <input type="number" name="emp_aadharno"  value="<?php echo $user['emp_aadharno']; ?>" class="form-control" id="inputPassword3" placeholder="Please Enter Aadhar No" >
                    </div>
                  </div>
                       <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Name as Per Aadhar Card</label>
                    <div class="col-sm-10">
                      <input type="name" name="emp_name_asper_aadhar"  value="<?php echo $user['emp_name_asper_aadhar']; ?>" class="form-control" id="inputPassword3" placeholder="Please Enter Name" >
                    </div>
                  </div>
                    <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Pan No</label>
                    <div class="col-sm-10">
                      <input type="text" name="emp_panno" value="<?php echo $user['emp_panno']; ?>" class="form-control" id="inputPassword3" placeholder="Please Enter Pan No" >
                    </div>
                  </div>
               
               <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Name as Per Pan Card</label>
                    <div class="col-sm-10">
                      <input type="text" name="emp_name_asper_pan" value="<?php echo $user['emp_name_asper_pan']; ?>" class="form-control" id="inputPassword3" placeholder="Please Enter Name" >
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"> Father Name</label>
                    <div class="col-sm-10">
                      <input type="text" name="emp_father_name"  value="<?php echo $user['emp_father_name']; ?>" class="form-control" id="inputPassword3" placeholder="Please Enter Name">
                    </div>
                  </div>
                  
                 
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                          <label for="inputPassword3" class="col-sm-3 col-form-label">Present Address</label>
                    </div>
                     <div class="form-group row">
                    
                    <div class="col-sm-6 mb-1">
                      <input type="text" name="emp_present_address_1" value="<?php echo $user['emp_father_name']; ?>" class="form-control" id="emp_present_address_1" placeholder="Enter Your Street Name" >
                    </div>
                    <div class="col-sm-6">
                      <input type="text" name="emp_present_address_2" value="<?php echo $user['emp_present_address_2']; ?>" class="form-control" id="emp_present_address_2" placeholder="Enter Your City" >
                    </div>
                     <div class="col-sm-6">
                      <input type="text" name="emp_present_address_3" value="<?php echo $user['emp_present_address_3']; ?>" class="form-control" id="emp_present_address_3" placeholder="Enter Your State" >
                    </div>
                    <div class="col-sm-6">
                      <input type="text" name="emp_present_address_4" value="<?php echo $user['emp_present_address_4']; ?>" class="form-control" id="emp_present_address_4" placeholder="Enter Your Postal COde" >
                    </div>
                  </div>
                    <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-3 col-form-label">Permanent Address</label>
                    </div>
                    <div class="form-group row">
                   
                    <div class="col-sm-6 mb-1">
                      <input type="text" name="emp_permanent_address_1" value="<?php echo $user['emp_permanent_address_1']; ?>"class="form-control" id="emp_permanent_address_1" placeholder="Enter Your Street Name" >
                    </div>
                    <div class="col-sm-6">
                      <input type="text" name="emp_permanent_address_2" value="<?php echo $user['emp_permanent_address_2']; ?>" class="form-control" id="emp_permanent_address_2" placeholder="Enter Your City" >
                    </div>
                     <div class="col-sm-6">
                      <input type="text" name="emp_permanent_address_3" value="<?php echo $user['emp_permanent_address_3']; ?>" class="form-control" id="emp_permanent_address_3" placeholder="Enter Your State" >
                    </div>
                    <div class="col-sm-6">
                      <input type="text" name="emp_permanent_address_4" value="<?php echo $user['emp_permanent_address_4']; ?>" class="form-control" id="emp_permanent_address_4" placeholder="Enter Your Postal COde" >
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Martial Status</label>
                    <div class="col-sm-10">
                                  <select name="emp_martial_status" class="form-control" >
                                  
                                    
                                    <?php  if($user['emp_martial_status']!=''){ ?>
                                    <option>Select Status</option>
                                    <?php  if($user['emp_martial_status']=='Admin'){ ?>
                                    <option value="Married" selected>Married</option>
                                    <?php }else{ ?>
                                    <option value="Married" >Married</option>
                                    <?php } ?>
                                    <?php  if($user['emp_martial_status']=='UnMarried'){ ?>
                                    <option value="UnMarried" selected>UnMarried</option>
                                    <?php }else{ ?>
                                    <option value="UnMarried" >UnMarried</option>
                                    <?php } ?>
                                     <?php  } ?>
                                  </select>
                    </div>
                  </div>
                  
                    <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"> Marriage Date</label>
                    <div class="col-sm-10">
                      <input type="date" name="emp_marriage_date" value="<?php echo $user['emp_marriage_date']; ?>" class="form-control" id="emp_marriage_date" placeholder="Please Enter Marriage Date" >
                    </div>
                  </div>
                  
                    <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Blood Group</label>
                    <div class="col-sm-10">
                      <select name="emp_blood_group" class="form-control" >
                               
                                    
                                     <?php  if($user['emp_blood_group']!=''){ ?>
                                    <option>Select Status</option>
                                    <?php  if($user['emp_blood_group']=='A+'){ ?>
                                    <option value="A+" selected>A+</option>
                                    <?php }else{ ?>
                                    <option value="A+" >A+</option>
                                    <?php } ?>
                                     <?php  if($user['emp_blood_group']=='A-'){ ?>
                                    <option value="A-" selected>A-</option>
                                    <?php }else{ ?>
                                    <option value="A-" >A-</option>
                                    <?php } ?>
                                    <?php  if($user['emp_blood_group']=='B+'){ ?>
                                    <option value="B+" selected>B+</option>
                                    <?php }else{ ?>
                                    <option value="B+" >B+</option>
                                    <?php } ?>
                                     <?php  if($user['emp_blood_group']=='B-'){ ?>
                                    <option value="B-" selected>B-</option>
                                    <?php }else{ ?>
                                    <option value="B-" >B-</option>
                                    <?php } ?>
                                     <?php  if($user['emp_blood_group']=='O+'){ ?>
                                    <option value="O+" selected>O+</option>
                                    <?php }else{ ?>
                                    <option value="O+" >O+</option>
                                    <?php } ?>
                                     <?php  if($user['emp_blood_group']=='O-'){ ?>
                                    <option value="O-" selected>O-</option>
                                    <?php }else{ ?>
                                    <option value="O-" >O-</option>
                                    <?php } ?>
                                     <?php  if($user['emp_blood_group']=='AB+'){ ?>
                                    <option value="AB+" selected>AB+</option>
                                    <?php }else{ ?>
                                    <option value="AB+" >AB+</option>
                                    <?php } ?>
                                     <?php  if($user['emp_blood_group']=='AB-'){ ?>
                                    <option value="AB-" selected>AB-</option>
                                    <?php }else{ ?>
                                    <option value="AB-" >AB-</option>
                                    <?php } ?>
                                     <?php  if($user['emp_blood_group']=='A-'){ ?>
                                    <option value="A-" selected>A-</option>
                                    <?php }else{ ?>
                                    <option value="A-" >A-</option>
                                    <?php } ?>
                                     <?php  } ?>
                                  </select>
                    </div>
                    </div>
                  
                  
                   <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"> Photo </label>
                   
                    
                    <div class="col-sm-10">
                        <?php if(isset($user['emp_photo_filename'])){ if($user['emp_photo_filename']!=''){ ?>
                        <img src="<?= site_url($user['emp_photo_filename']);?>" width="100px" height="100px" class="mb-1">
                        <?php }} ?>
                      <input type="file" name="emp_photo_filename" class="form-control" id="emp_photo_filename"  >
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Aadhar </label>
                     
                    <div class="col-sm-10">
                        <?php if(isset($user['emp_aadhar_filename'])){ if($user['emp_aadhar_filename']!=''){ ?>
                        <img src="<?= site_url($user['emp_aadhar_filename']);?>" width="100px" height="100px" class="mb-1">
                        <?php }} ?>
                      <input type="file" name="emp_aadhar_filename" class="form-control" id="emp_aadhar_filename"  >
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Pan </label>
                    <div class="col-sm-10">
                          <?php if(isset($user['emp_pan_filename'])){ if($user['emp_pan_filename']!=''){ ?>
                        <img src="<?= site_url($user['emp_pan_filename']);?>" width="100px" height="100px" class="mb-1">
                        <?php }} ?>
                      <input type="file" name="emp_pan_filename" class="form-control" id="emp_pan_filename"  >
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Employee Status</label>
                         <div class="col-sm-10">
                                 
                                  <select name="company_resign_empsts" class="form-control" >
                                       <option>Select Status</option>
                                  
                                 
                                    <?php  if($user['company_resign_empsts']=='Working'){ ?>
                                    <option value="Working" selected>Working</option>
                                    <?php }else{ ?>
                                    <option value="Working">Working</option>
                                    <?php } ?>
                                    <?php  if($user['company_resign_empsts']=='Left'){ ?>
                                    <option value="Left" selected>Left</option>
                                    <?php }else{ ?>
                                    <option value="Left" >Left</option>
                                    <?php } ?>
                                    <?php  if($user['company_resign_empsts']=='Notice Period'){ ?>
                                    <option value="Notice Period" selected>Notice Period</option>
                                    <?php }else{ ?>
                                    <option value="Notice Period" >Notice Period</option>
                                    <?php } ?>
                                    
                                
                                  </select>
                        </div>
                   </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Update</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                  <button type="button" class="btn btn-default float-right" onclick="if (confirm('Are you sure you want to leave this page?')) 
                                            { window.location.href='<?= site_url('viewempperdetails') ?>'; }">Cancel</button>



                </div>
                </div>
                </div>
                </div>
                </div>
                <!-- /.card-footer -->                               

              </form>
            </div>

</div>
<?= $this->endSection();?>

