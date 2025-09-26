            

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
<script type="text/javascript">
/*$(document).ready(function() {
    var max_fields = 10;
    var wrapper = $(".inputContainer");
    var add_button = $(".add_form_field");

    var x = 1;
    $(add_button).click(function(e) {
        e.preventDefault();
        if (x < max_fields) {
            x++;
            $(wrapper).append('<div><input type="text" name="mytext[]"/><input type="text" name="mytext[]"/><input type="text" name="mytext[]"/><input type="text" name="mytext[]"/><a href="#" class="delete">Delete</a></div>'); //add input box
        } else {
            alert('You Reached the limits')
        }
    });

    $(wrapper).on("click", ".delete", function(e) {
        e.preventDefault();
        $(this).parent('div').remove();
        x--;
    })
});*/
</script>

<div class="container-fluid">
			
		</div>
            <div class="row mb-2">
                  <div class="col-md-6">
                     <h3 class="card-title">Seniority Details</h3>
                  </div>
                  <div class="col-md-6 text-right">
                    <a href="<?= site_url('viewseniority');?>"><button type="button" class="btn btn-info">Seniority List</button></a>
                  </div>
        </div>
            <div class="card card-info" >
              <div class="card-header">
                <h3 class="card-title">Seniority Details Form</h3>
              </div>
             
              <form method="POST" action="<?= site_url('seniority');?>" class="form-horizontal" enctype="multipart/form-data" >
                <div class="card-body">
                    
                    
                    <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Employee Id</label>
                      <div class="col-sm-10">
                         <input list="glass_id"  class="form-control" name="emp_id"   id="check" autocomplete="off"/>
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
                         <input type="text"  class="form-control"  id="name" placeholder="Name" readonly/>
                        
                       </div>
                    </div> 
                      <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Qualfication</label>
                      <div class="col-sm-10">
                         <input type="text"  class="form-control"  id="qualification" placeholder="Department" readonly/>
                        
                       </div>
                    </div>
                    <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Department</label>
                      <div class="col-sm-10">
                         <input type="text"  class="form-control"  id="dept" placeholder="Department" readonly/>
                        
                       </div>
                    </div>
                    
                    <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Joined Position</label>
                      <div class="col-sm-10">
                         <input type="text"  class="form-control"  id="desg" placeholder="Designation" readonly/>
                        
                       </div>
                    </div>
                    
                     <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Current Position</label>
                      <div class="col-sm-10">
                         <input type="text"  class="form-control"  id="desg" placeholder="Designation" readonly/>
                        
                       </div>
                    </div>
                    
                    <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Total Experience</label>
                      <div class="col-sm-10">
                         <input type="text"  class="form-control"  id="exp" placeholder="Designation" readonly/>
                        
                       </div>
                    </div>
                    
                    <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Seniority Status</label>
                      <div class="col-sm-10">
                         <input list="seniority_status"  class="form-control" name="seniority_status"  autocomplete="off"/>
                        <datalist  id="seniority_status">
                           
                              <option value="Seniority"></option>
                               <option value="Not Seniority"></option>
                                                      
                          </datalist>
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
  </script> 

</body>	
</html>
<?= $this->endSection();?>

