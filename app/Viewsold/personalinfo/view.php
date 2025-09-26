  <style>
      @media (min-width: 1200px) {
    .table{
        max-width: 1200px;
    }
}
  </style>
 

 <?=  $this->extend('layout/users_view'); ?>

<?= $this->section('content'); ?>

            <!-- /.card -->
<div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
    
  
      
            <div class="card">
              <div class="card-header">
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



<?php if(isset($session->failed)):?>


<div class="container">
  <div class="offset-md-3 col-md-6 offset-md-3 mt-5 pt-3 pb-3 ">
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong> <?=  $session->failed; ?></strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
</div>
</div>        

<?php endif; 
//$session->destroy();
?>   
              



              <div class="row mb-2">
                        <div class="col-md-6">
                           <h1 style="font-size:25px;margin-top: 5px; " class="card-title">List of Personal Details</h1>
                        </div>
                        <div class="col-md-6 text-right">
                          <a href="<?= site_url('personaldetails');?>"><button type="submit" class="btn btn-info">+ New Details</button></a>
                        </div>
              </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped table-responsive">
                  <thead class="text-center" style="background-color: #82c4c4;">
                  <tr>
                    <th>S.No.</th>
                    <th>Employee Id</th>
                    <th>Name</th>
                    <th>Date of Birth</th>
                    <th>Contact No</th>
                    <th>Personal Email Id</th>
                     <th>Aaadhar No</th>
                    <th>Name as Per Aadhar Card</th>
                    <th>Pan No</th>
                    <th>Name as Per Pan Card</th>
                    <th>Father Name</th>
                       <th>Present Address</th>
                    <th>Permanent Address</th>
                    <th>Martial Status</th>
                    <th>Marriage Date</th>
                    <th>Blood Group</th>
                    
                    <th>Photo</th>
                    <th>Aadhar</th>
                    <th>Pan</th>
                    <th>Employee Status</th> 
                   
                    
                    <th>Created On</th>
                    <th>Updated On</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>

                   <?php 
                    $i=1;
                   if(isset($info[0])){
                   foreach ($info as $key => $value) { 

                    ?>
                  <tr>
                    <td  class="text-center"><?= $i;?></td>
                    <td><?= $value['emp_company_ref_id'];?></td>
                    <td><?= $value['emp_name'];?></td>
                    <td> <?= $value['emp_dob'];?></td>
                    <td><?= $value['emp_mobile_no'];?></td>
                    <td><?= $value['emp_personal_emailid'];?></td>
                    
                     <td><?= $value['emp_aadharno'];?></td>
                    <td><?= $value['emp_name_asper_aadhar'];?></td>
                    <td> <?= $value['emp_panno'];?></td>
                    <td><?= $value['emp_name_asper_pan'];?></td>
                    <td><?= $value['emp_father_name'];?></td>
                    
                     <td><?= $value['emp_present_address_1'];?>
                         <?= $value['emp_present_address_2'];?>
                         <?= $value['emp_present_address_3'];?>
                         <?= $value['emp_present_address_4'];?>
                     </td>
                   
                   
                    
                     <td><?= $value['emp_permanent_address_1'];?>
                     <?= $value['emp_permanent_address_2'];?>
                     <?= $value['emp_permanent_address_3'];?>
                     <?= $value['emp_permanent_address_4'];?>
                     </td>
                   
                    
                    <td><?= $value['emp_martial_status'];?></td>
                    <td><?= $value['emp_marriage_date'];?></td>
                    <td><?= $value['emp_blood_group'];?></td>
                    <td><a href="<?php 
                            if($value['emp_photo_filename'] != '') { 
                                echo base_url() . $value['emp_photo_filename']; 
                            } else { 
                                echo 'pdfempperdetails?filename=' . $value['emp_photo_filename'];
                            }  
                        ?>" class="btn btn-info"  target="_blank">Photo</a></td>
                        
                    <td><a href="<?php 
                            if($value['emp_aadhar_filename'] != '') { 
                                echo base_url() . $value['emp_aadhar_filename']; 
                            } else { 
                                echo 'pdfempperdetails?filename=' . $value['emp_aadhar_filename'];
                            }  
                        ?>" class="btn btn-info"  target="_blank">Aadhar</a></td>
                        
                    <td><a href="<?php 
                            if($value['emp_pan_filename'] != '') { 
                                echo base_url() . $value['emp_pan_filename']; 
                            } else { 
                                echo 'pdfempperdetails?filename=' . $value['emp_pan_filename'];
                            }  
                        ?>" class="btn btn-info"  target="_blank">Pan</a></td>
                     <td><?= $value['company_resign_empsts'];?></td>
                    <td><?= $value['emp_created_on'];?></td>
                    <td><?= $value['emp_updated_on'];?></td>
                   
                    <td>
                       <?php 
                            
                            $base=base64_encode(base64_encode(base64_encode($value['emp_id'])));
                            
                            
                       ?>    
                       <a href="<?php echo base_url('editempperdetails/'.$base);?>" class="btn btn-info btn-sm">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a href="<?php echo base_url('deleteempperdetails/'.$base);?>" class="btn btn-sm" style="background-color: #0088cc;color: white;">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                        
                    </td>
                  </tr>
                  <?php 
                  $i++;}} ?>
       
                  </tbody>
                  <tfoot>
                  <tr> 
                     <th>S.No.</th>
                    <th>Employee Id</th>
                    <th>Name</th>
                    <th>Date of Birth</th>
                    <th>Contact No</th>
                    <th>Personal Email Id</th>
                    <th>Aaadhar No</th>
                    <th>Name as Per Aadhar Card</th>
                    <th>Pan No</th>
                    <th>Name as Per Pan Card</th>
                    <th>Father Name</th>
                    <th>Present Address</th>
                    <th>Permanent Address</th>
                    <th>Martial Status</th>
                    <th>Marriage Date</th>
                    <th>Blood Group</th>
                    
                    <th>Photo</th>
                    <th>Aadhar</th>
                    <th>Pan</th>
                    <th>Employee Status</th> 
                    
                    <th>Created On</th>
                    <th>Updated On</th>
                   
                    <th>Actions</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            
            </div>
            <!-- /.card -->
      

    <?= $this->endSection();?>