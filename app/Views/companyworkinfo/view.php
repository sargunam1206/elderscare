 <?=  $this->extend('layout/users_view'); ?>

<?= $this->section('content'); ?>
<div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
            <!-- /.card -->

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
                           <h1 style="font-size:25px;margin-top: 5px; " class="card-title">List of Work</h1>
                        </div>
                        <div class="col-md-6 text-right">
                          <a href="<?= site_url('companyworkdetails');?>"><button type="submit" class="btn btn-info">+ New Work</button></a>
                        </div>
              </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead class="text-center" style="background-color: #82c4c4;">
                  <tr>
                    <th>S.No.</th>
                    <th>Position in Last working Company</th>
                    <th>Interview Date</th>
                    <th>Offer Letter Sent On</th>
                    <th>Date of Join</th>
                    <th>Designation</th>
                    <th>Site</th>
                    <th>Department</th>
                    <th>Official Mail</th>
                    <th>Expreienced Duration</th>
                    <th>Expert in</th>
                    <th>Last Working day of Previous Company</th>
                    <th>Employee Id</th>
                    <th>Created On</th>
                    <th>Updated On</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>

                   <?php 
                    $i=1;
                    if(isset($users[0])){
                   foreach ($users as $key => $value) { 

                    ?>
                  <tr>
                    <td  class="text-center"><?= $i;?></td>
                    <td><?= $value['companywork_position_of_join'];?></td>
                    <td><?= $value['companywork_interview_date'];?></td>
                    <td> <?= $value['companywork_offerletter_senton'];?></td>
                    <td><?= $value['companywork_dateof_join'];?></td>
                    <td><?= $value['companywork_desg'];?></td>
                    
                    <td><?= $value['companywork_site'];?></td>
                    <td><?= $value['companywork_department'];?></td>
                    <td> <?= $value['companywork_official_email'];?></td>
                    <td><?= $value['companywork_exp_duration'];?></td>
                    <td><?= $value['companywork_expert_in'];?></td>
                    <td> <?= $value['emp_id'];?></td>
                    <td> <?= $value['companywork_last_working_day_date'];?></td>
                    <td><?= $value['companywork_created_on'];?></td>
                    <td><?= $value['companywork_updated_on'];?></td>
                    
                    <td>
                       <?php 
                            
                            $base=base64_encode(base64_encode(base64_encode($value['companywork_id'])));
                            
                            
                       ?>    
                       <a href="<?php echo base_url('editcompanyworkdetails/'.$base);?>" class="btn btn-info btn-sm">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a href="<?php echo base_url('deletecompanyworkdetails/'.$base);?>" class="btn btn-sm" style="background-color: #0088cc;color: white;">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                        
                    </td>
                  </tr>
                  <?php 
                  $i++;} } ?>
       
                  </tbody>
                  <tfoot>
                  <tr> 
                   <th>S.No.</th>
                    <th>Position in Last working Company</th>
                    <th>Interview Date</th>
                    <th>Offer Letter Sent On</th>
                    <th>Date of Join</th>
                    <th>Designation</th>
                    <th>Site</th>
                    <th>Department</th>
                    <th>Official Mail</th>
                    <th>Expreienced Duration</th>
                    <th>Expert in</th>
                     <th>Last Working day of Previous Company</th>
                    <th>Employee Id</th>
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