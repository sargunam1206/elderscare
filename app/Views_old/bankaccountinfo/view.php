 <?=  $this->extend('layout/users_view'); ?>

<?= $this->section('content'); ?>

            <!-- /.card -->
   <div class="tab-pane fade show active" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                   
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
                           <h1 style="font-size:25px;margin-top: 5px; " class="card-title">List of BankInfo</h1>
                        </div>
                        <div class="col-md-6 text-right">
                          <a href="<?= site_url('bankaccountdetails');?>"><button type="submit" class="btn btn-info">+ New Details</button></a>
                        </div>
              </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead class="text-center" style="background-color: #82c4c4;">
                  <tr>
                    <th>S.No.</th>
                    <th>Name as per Bank</th>
                    <th>Account No</th>
                    <th>IFSC No</th>
                    <th>Bank Name</th>
                    <th>Branch Name</th>
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
                    <td><?= $value['bankaccount_name_as_per_bank'];?></td>
                    <td><?= $value['bankaccount_accountno'];?></td>
                    <td> <?= $value['bankaccount_ifscno'];?></td>
                    <td><?= $value['bankaccount_bankname'];?></td>
                    <td><a href="<?php 
                            if($value['bankaccount_passbookcheck_filename'] != '') { 
                                echo base_url() . $value['bankaccount_passbookcheck_filename']; 
                            } else { 
                                echo 'pdfbankaccountdetails?filename=' . $value['bankaccount_passbookcheck_filename'];
                            }  
                        ?>" class="btn btn-info" id="fileLink"  target="_blank">Bank Passbook/cheaque leaf</a></td>
                    <td> <?= $value['emp_id'];?></td>
                    <td><?= $value['bankaccount_created_on'];?></td>
                    <td><?= $value['bankaccount_updated_on'];?></td>
                    
                    <td>
                       <?php 
                            
                            $base=base64_encode(base64_encode(base64_encode($value['bankaccount_id'])));
                            
                            
                       ?>    
                       <a href="<?php echo base_url('editbankaccountdetails/'.$base);?>" class="btn btn-info btn-sm">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a href="<?php echo base_url('deletebankaccountdetails/'.$base);?>" class="btn btn-sm" style="background-color: #0088cc;color: white;">
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
                    <th>Name as per Bank</th>
                    <th>Account No</th>
                    <th>IFSC No</th>
                    <th>Bank Name</th>
                    <th>Branch Name</th>
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