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
                           <h1 style="font-size:25px;margin-top: 5px; " class="card-title">List of Job Vacancy</h1>
                        </div>
                        <div class="col-md-6 text-right">
                          
                          <a href="<?= site_url('jobvacancy');?>"><button type="submit" class="btn btn-info">+ New Info</button></a>
                            <a href="<?= site_url('vacancy');?>"><button type="submit" class="btn btn-success">Vacancy View</button></a> 
                        </div>
              </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead class="text-center" style="background-color: #82c4c4;">
                  <tr>
                    <th>S.No.</th>
                    <th>Department</th>
                    <th>Role</th>
                    <th>Experience</th>
                    <th>Qualification</th>
                    <th>Total Vacancy</th>
                    <th>Validity From</th>
                    <th>Validity To</th>   
                    <th>Created On</th>
                    <th>Updated On</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>

                   <?php 
                    $i=1;
                   foreach ($users as $key => $value) { 

                    ?>
                  <tr>
                    <td  class="text-center"><?= $i;?></td>
                    <td><?= $value['job_vacancy_dept'];?></td>
                    <td><?= $value['job_vacancy_role'];?></td>
                    <td> <?= $value['job_vacancy_exp'];?></td>
                    <td><?= $value['job_vacancy_qualification'];?></td>
                    <td><?= $value['job_vacancy_totalvacancy'];?></td>
                    
                    <td><?= $value['job_vacancy_validity_from'];?></td>
                    <td><?= $value['job_vacancy_validity_to'];?></td>     
                
                   
             
                    <td><?= $value['job_created_on'];?></td>
                    <td><?= $value['job_updated_on'];?></td>
                    
                    <td>
                       <?php 
                            
                            $base=base64_encode(base64_encode(base64_encode($value['job_vacancy_id'])));
                            
                            
                       ?>    
                       <a href="<?php echo base_url('editjobvacancy/'.$base);?>" class="btn btn-info btn-sm">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a href="<?php echo base_url('deletejobvacancy/'.$base);?>" class="btn btn-sm" style="background-color: #0088cc;color: white;">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                        
                    </td>
                  </tr>
                  <?php 
                  $i++;} ?>
       
                  </tbody>
                  <tfoot>
                  <tr> 
                    <th>S.No.</th>
                    <th>Department</th>
                    <th>Role</th>
                    <th>Experience</th>
                    <th>Qualification</th>
                    <th>Total Vacancy</th>
                    <th>Validity From</th>
                    <th>Validity To</th>   
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