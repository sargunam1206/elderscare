 <?=  $this->extend('layout/sidebar'); ?>

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


              <div class="row mb-2">
                        <div class="col-md-6">
                           <h1 style="font-size:25px;margin-top: 5px; " class="card-title">List of Manpower Request</h1>
                        </div>
                        <div class="col-md-6 text-right">
                          <a href="<?= site_url('manpower');?>"><button type="submit" class="btn btn-info">+ New Manpower Request</button></a>
                        </div>
              </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead class="text-center" style="background-color: #82c4c4;">
                  <tr>
                    <th>S.No.</th>
                    <th>Project Name</th>
                    <th>Department</th>
                    <th>Job Title</th>
                    <th>Job Type</th>
                    <th>Job Hiring Type</th>
                    <th>Justification of Hiring</th>
                    <th>Major Responsibility</th>
                    <th>Qualification</th>
                    <th>Experience</th>
                    <th>Special Abilities</th>
                    <th>Personal Qualities</th> 
                     
                    <th>Employee Id</th>
                    <th>Pdf</th>
                    <th>Created On</th>
                    <th>Updated On</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>

                   <?php 
                    $i=1;
                 
                   
                   
                   foreach ($users as $key => $value) { 
                    if(isset($users[$i-1])){ 
                     $base=base64_encode(base64_encode(base64_encode($value['manpower_request_id'])));
                    ?>
                  <tr>
                    <td  class="text-center"><?= $i;?></td>
                    
                    <?php if(isset($project_name[$i-1])){?>
                    <td><?= $project_name[$i-1]['project_name'];?></td>
                    <?php }else{ ?>
                     <td  class="text-center"> </td>
                    <?php } ?>
                  
                    <?php if(isset($department_name[$i-1])){?>
                    <td><?= $department_name[$i-1]['department_name'];?></td>
                    <?php }else{ ?>
                     <td  class="text-center"> </td>
                    <?php } ?>
                    
                   
                    
                     <td><?= $value['manpower_request_job_title'];?></td>
                    <td><?= $value['manpower_request_job_type'];?></td>
                    <td><?= $value['manpower_request_job_hiretype'];?></td>
                    <td><?= $value['manpower_request_justify'];?></td>
                    <td><?= $value['manpower_request_major_res'];?></td>
                    
                    <td><?= $value['manpower_request_qualification'];?></td>
                    <td><?= $value['manpower_request_experience'];?></td>
                    <td><?= $value['manpower_request_special_apilites'];?></td>
                    <td><?= $value['manpower_request_personal_quality'];?></td>
                    
                    <td> <?= $value['emp_id'];?></td>
                     <?php $base=base64_encode(base64_encode(base64_encode($value['manpower_request_id']))); ?>
                        
                    <td><a href="<?php echo base_url('pdfmanpower/'.$base);?>"  target="_blank"><button class="btn btn-info" id="fileLink"  >Pdf</button></a></td></form>
                    <td><?= $value['manpower_request_created_on'];?></td>
                    <td><?= $value['manpower_request_updated_on'];?></td>
           
                     <?php ?>
                    <td>
                       <?php 
                            
                           
                            
                            
                       ?>    
                       <a href="<?php echo base_url('editmanpower/'.$base);?>" class="btn btn-info btn-sm">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a href="<?php echo base_url('deletemanpower/'.$base);?>" class="btn btn-sm" style="background-color: #0088cc;color: white;">
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
                    <th>Project Name</th>
                    <th>Department</th>
                    <th>Job Title</th>
                    <th>Job Type</th>
                    <th>Job Hiring Type</th>
                    <th>Justification of Hiring</th>
                    <th>Major Responsibility</th>
                    <th>Qualification</th>
                    <th>Experience</th>
                    <th>Special Abilities</th>
                    <th>Personal Qualities</th> 
                     
                    <th>Employee Id</th>
                     <th>Pdf</th>
                    <th>Created On</th>
                    <th>Updated On</th>
                    <th>Actions</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
</div>      

    <?= $this->endSection();?>