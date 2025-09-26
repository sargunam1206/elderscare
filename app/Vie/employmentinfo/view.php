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


              <div class="row mb-2">
                        <div class="col-md-6">
                           <h1 style="font-size:25px;margin-top: 5px; " class="card-title">List of Employment Details</h1>
                        </div>
                        <div class="col-md-6 text-right">
                          <a href="<?= site_url('employmentdetails');?>"><button type="submit" class="btn btn-info">+ New Details</button></a>
                        </div>
              </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead class="text-center" style="background-color: #82c4c4;">
                  <tr>
                    <th>S.No.</th>
                    <th>PF No</th>
                    <th>ESI No</th>
                    <th>UAN No</th>
                    <th>Gratuity No</th>
                    
                    
                    <th>Gratuity DOJ</th>
                    <th>Status of Form F Gratuity</th>
                    <th>Status of Form 11</th>
                    <th>Are you pre PF member?</th>
                    <th>PF Declaration</th>
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
                   foreach ($users as $key => $value){ 

                    ?>
                  <tr>
                    <td  class="text-center"><?= $i;?></td>
                    <td><?= $value['employment_pf_no'];?></td>
                    <td><?= $value['employment_esi_no'];?></td>
                    <td> <?= $value['employment_uan_no'];?></td>
                    <td><?= $value['employment_gratuity_no'];?></td>
                    <td><?= $value['employment_gratuity_doj'];?></td>
                       <td> <?= $value['employment_sts_of_formf_gratuity'];?></td>
                    <td><?= $value['employment_sts_of_form11'];?></td>
                    <td><?= $value['employment_pf_pre_mem'];?></td>
                     <td><?= $value['employment_pf_decl'];?></td>
                     
                     <td> <?= $value['emp_id'];?></td>
                    <td><?= $value['employment_created_on'];?></td>
                    <td><?= $value['employment_updated_on'];?></td>
                    
                    <td>
                       <?php 
                            $base=base64_encode(base64_encode(base64_encode($value['employment_id'])));
                            
                            
                       ?>    
                       <a href="<?php echo base_url('editemploymentdetails/'.$base);?>" class="btn btn-info btn-sm">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a href="<?php echo base_url('deleteemploymentdetails/'.$base);?>" class="btn btn-sm" style="background-color: #0088cc;color: white;">
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
                    <th>PF No</th>
                    <th>ESI No</th>
                    <th>UAN No</th>
                    <th>Gratuity No</th>
                    
                    
                    <th>Gratuity DOJ</th>
                    <th>Status of Form F Gratuity</th>
                    <th>Status of Form 11</th>
                    <th>Are you pre PF member?</th>
                    <th>PF Declaration</th>
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