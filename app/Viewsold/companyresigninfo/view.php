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
                           <h1 style="font-size:25px;margin-top: 5px; " class="card-title">List of Resign Details</h1>
                        </div>
                        <div class="col-md-6 text-right">
                          <a href="<?= site_url('companyresigndetails');?>"><button type="submit" class="btn btn-info">+ New ResignInfo</button></a>
                        </div>
              </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead class="text-center" style="background-color: #82c4c4;">
                  <tr>
                    <th>S.No.</th>
                    <th>Letter Submit On</th>
                    <th>Notice Priod Completed On?</th>
                    <th>No Due Certificte Compeleted?</th>
                    <th>Bank Deatils</th>
                    <th>Amount</th>
                    <th>Date Of Leaving</th>
                  
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
                    <td><?= $value['company_resign_letter_subon'];?></td>
                    <td><?= $value['company_resign_noperiod_com'];?></td>
                    <td> <?= $value['company_resign_nodue_cert'];?></td>
                    <td><?= $value['company_resign_final_sett_bank'];?></td>
                    <td><?= $value['company_resign_final_sett_amount'];?></td>
                    <td><?= $value['company_resign_dateof_leaving'];?></td>
                   
                    <td> <?= $value['emp_id'];?></td>
                    <td><?= $value['company_resign_created_on'];?></td>
                    <td><?= $value['company_resign_updated_on'];?></td>
                    
                    <td>
                       <?php 
                            
                            $base=base64_encode(base64_encode(base64_encode($value['company_resign_id'])));
                            
                            
                       ?>    
                       <a href="<?php echo base_url('editcompanyresigndetails/'.$base);?>" class="btn btn-info btn-sm">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a href="<?php echo base_url('deletecompanyresigndetails/'.$base);?>" class="btn btn-sm" style="background-color: #0088cc;color: white;">
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
                    <th>Letter Submit On</th>
                    <th>Notice Priod Completed On?</th>
                    <th>No Due Certificte Compeleted?</th>
                    <th>Bank Deatils</th>
                    <th>Amount</th>
                    <th>Date Of Leaving</th>
                 
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