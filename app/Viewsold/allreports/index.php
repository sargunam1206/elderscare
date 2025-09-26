


<?=  $this->extend('layout/users_view'); ?>

<?= $this->section('content'); ?>

<div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">

     
 <?=  $this->extend('layout/users_view'); ?>

<?= $this->section('content'); ?>



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

<script>
 
    function rep(){
       var reportstype=document.getElementById("reportstype").value;
       if(reportstype =='Department'){
           document.getElementById("department").style.display="block";
           document.getElementById("department_label").style.display="block";
       }else{
           document.getElementById("department").style.display="none";
           document.getElementById("department_label").style.display="none";
       }
    }
</script>


 
               

                    <form method="POST" action="<?= site_url('allreports');?>" class="form-horizontal">
      
                        
                    <div class="form-group row">
                    <div class="col-sm-4">
                     <b>Reports Type</b>
                     </div> 
                      <div class="col-sm-4" id="department_label" style="display:none">
                     <b>Department</b>
                     </div> 
                     
                    <div class="col-sm-4" >
                     <b>Employee Status</b>
                     </div>  
                  </div> 
                  
                      
                
                  <div class="form-group row">
                    
                    <div class="col-sm-4">
                        
                        <select name="reportstype" class="form-control" id="reportstype" onchange="rep();">
                             <option value="">Select Type</option>
                             <option value="Department">Department</option>
                             <option value="Experience">Experience</option>
                             <option value="Designation">Designation</option>
                             <option value="Qualification">Qualification</option>
                             <option value="Seniority">Seniority</option>
                        </select>

                    </div>
   
                    <div class="col-sm-4" id="department" style="display:none">
                        
                        
                             
                            
                            
                        <input list="glass_id"  class="form-control" name="department" autocomplete="off" />
                        <datalist  id="glass_id">
                           
                            <?php foreach($company as $empid){?>
                              <option value="<?php echo $empid; ?>"></option>
                              <?php } ?>
                                                      
                          </datalist>
                          

                    </div>
                     <div class="col-sm-4">
                        
                        <select name="employeetype" class="form-control">
                             <option value="">Select Type</option>
                             <option value="Working">Working</option>
                             <option value="Left">Left</option>
                             <option value="Notice Period">Notice Period</option>
                            
                        </select>

                    </div>
                     </div> 
                    <div class="form-group row">
                         <div class="col-sm-1">
                         <button type="submit" class="btn btn-info" name="reports" value="reports">Search</button>
                         
                         </div> 
                          <div class="col-sm-1">
                         <button type="submit" class="btn btn-info" name="reports" value="reports" formaction="<?= site_url('allreportsdefault');?>">Reports</button>
                         
                         </div> 
                        
                    </div> 
                    
                 
                
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
                 
                <table id="example1" class="table table-bordered table-striped" style="border:1px">
                      
                  <thead class="text-center" style="background-color: #82c4c4;">
                  <tr style="border:1px">
                    <th>S.No.</th>
                    <th>Employee Id</th>
                    <th>Name</th>
                    <th>Personal Email ID</th>
                    <th>Designation</th>
                    <th>Department</th>
                    <th>Site</th>
                    <th>Official Mail</th>
                    <th>Total Experience</th>
                    <th>Qualification</th>
                    <th>PF No</th>
                    <th>Bank Name</th>
                    <th>Employee Status</th>
                   
                  </tr>
                  </thead>
                  <tbody style="border:1px">
                    <?php 
                    
                    
                   $count=$count-1;
                  $i=0;
                   
                  for($i=0;$i<=$count;$i++) { 
                      
                     $sno=$i+1;
                     $previous=$educational[$i]['edu_total_experience'];
                     $current=$department[$i]['companywork_exp_duration'];
                     $total_exp=(int)$previous+(int)$current;
                    ?>
                  <tr>
                      <td  class="text-center"><?= $sno;?></td>
                        <td><?= $info[$i]['emp_company_ref_id'];?></td>
                       <td><?= $info[$i]['emp_name'];?></td>
                       <td><?= $info[$i]['emp_personal_emailid'];?></td>
                       <td><?= $department[$i]['companywork_desg'];?></td>
                       <td><?= $department[$i]['companywork_department'];?></td>
                       <td><?= $department[$i]['companywork_site'];?></td>
                       <td><?= $department[$i]['companywork_official_email'];?></td>
                       <td><?= $total_exp;?></td>
                       <td><?= $educational[$i]['edu_qualification'];?></td>
                       <td><?= $employment[$i]['employment_pf_no'];?></td>
                       <td><?= $bank[$i]['bankaccount_bankname'];?></td>
                       <td><?= $info[$i]['company_resign_empsts'];?></td>
                    
                       
                       
                  </tr>
                  <?php 
                  } ?>
       
                  </tbody>
                  <tfoot>
                  <tr> 
                    
                    <th>S.No.</th>
                    <th>Employee Id</th>
                    <th>Name</th>
                    <th>Personal Email ID</th>
                    <th>Designation</th>
                    <th>Department</th>
                    <th>Site</th>
                    <th>Official Mail</th>
                    <th>Total Experience</th>
                    <th>Qualification</th>
                    <th>PF No</th>
                    <th>Bank Name</th>
                    <th>Employee Status</th>
                    
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
      

    <?= $this->endSection();?>

</div>
<?= $this->endSection();?>

