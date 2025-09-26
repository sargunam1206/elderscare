            

<?=  $this->extend('layout/sidebar'); ?>

<?= $this->section('content'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<head>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"/>
</head>

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
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<div class="container-fluid">
			
		</div>
            <div class="row mb-2">
                  <div class="col-md-6">
                     <h3 class="card-title">Nature of Project Details</h3>
                  </div>
                  <div class="col-md-6 text-right">
                    <a href="<?= site_url('viewnatureproject');?>"><button type="button" class="btn btn-info">Nature of Project List</button></a>
                  </div>
        </div>
            <div class="card card-info" >
              <div class="card-header">
                <h3 class="card-title">Nature of Project Form</h3>
              </div>
             
              <form method="POST" action="<?= site_url('updatenatureproject');?>" class="form-horizontal" enctype="multipart/form-data" >
                <div class="card-body">
                    <input type="hidden" name="nature_of_project_id" value="<?= $user['nature_of_project_id']; ?>">
                     
                    <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Project Name</label>
                      <div class="col-sm-10">
                        <input list="project_id"  class="form-control" name="project_id"  value="<?= $project_name; ?>" id="check1" autocomplete="off"/>
                        <datalist  id="project_id">
                           
                            <?php foreach($project_id as $projectid){?>
                              <option value="<?php echo $projectid['project_name']; ?>"></option>
                              <?php } ?>
                                                      
                          </datalist>
                       </div>
                    </div>
                    
                     <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Project Type</label>
                      <div class="col-sm-10">
                         <input type="text"  class="form-control"  id="projecttype" value="<?= $project_type; ?>" placeholder="Designation" />
                        
                       </div>
                    </div>
                    
                    <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Project Work Type List</label>
                      <div class="col-sm-10">
                        
                        <select name="project_work_type" id="project_work_type_list" class="form-control">
                         <?php if(isset($user['project_work_type'])){?>
                         <option value="<?= $user['project_work_type']; ?>"><?= $user['project_work_type']; ?></option>
                         <?php }?>
                        <option value="">Select Type</option>
                        </select>
                       </div>
                    </div>
                    <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Employee Id</label>
                      <div class="col-sm-10">
                         <input list="glass_id"  class="form-control" name="emp_id"   value="<?= $user['emp_id']; ?>" id="check" autocomplete="off"/>
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
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Department</label>
                      <div class="col-sm-10">
                         <input type="text"  class="form-control"  id="dept" placeholder="Department" value="<?= $dept; ?>" readonly/>
                        
                       </div>
                    </div>
                   
                    
                    <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Employee Role</label>
                      <div class="col-sm-10">
                          <input type="text"  class="form-control" name="nature_of_project_emp_role" value="<?= $user['nature_of_project_emp_role']; ?>" placeholder="Role" />
                       </div>
                    </div>  
                     
                   
                </div>
                
                <div class="card-footer">
                    <button type="submit" name="submit" value="submit" class="btn btn-info">Save</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                    <button type="button" class="btn btn-default float-right" onclick="if (confirm('Are you sure you want to leave this page?')) 
                                            { window.location.href='<?= site_url('viewseniority') ?>'; }">Cancel</button>



                </div>
                <body>
                   
                

              </form>
            </div>
            
 
</body>
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
    
    $(document).ready(function () {
 
      $('#check1').change(function () {
           
       $('#test1').empty();
        var custId =$(this).val();
         
        $.ajax({
          url: 'http://freelance.neuralarc.com/digitalflow/projectinfo/'+custId,
          type: 'get',
          data: { custId: custId },
          success: function (response) {
            
            
             var dd = JSON.parse(response);
             
             var c=0;
            
             
            
            $('#projecttype').val(dd.project_type);
            var d = JSON.parse(dd.project_work_type_list);
            
           
            
            for (var i in d) {
                 
      
                     
                        
                
                 ipnews ='  <option value="'+d[c].project_work_type_list+'">'+d[c].project_work_type_list+'</option>';
             
                 
                 $('#project_work_type_list').append(ipnews);
                  
                 c++;
             }
           
           
          }
        });
      });
 
    });
  </script> 

</body>	
</html>
<?= $this->endSection();?>

