<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url();?>/public/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url();?>/public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url();?>/public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url();?>/public/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   
  
</head>
<body class="hold-transition login-page">
<div class="col-md-7 mt-2" >
  <div class="login-logo">
    <img src="<?= base_url();?>/public/dist/img/new-logo-sapl.png"  alt="User Image" style="height:100px;width:200px">
  </div>
  
 <?php 
$session=\Config\Services::session();


if(isset($session->success)):?>


<div class="container">
<div class="offset-md-1 col-md-8 offset-md-2  pt-3 pb-3 ">
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong> <?=  $session->success; ?></strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
</div>
</div>  



<?php endif; ?>

  <?php if(isset($validation)):?>
  <?php foreach($validation as $errors): ?>
  <div class="container">
  <div class="offset-md-1 col-md-8 offset-md-2  pt-3 pb-3 ">
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong> <?=  $errors; ?></strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
</div>
</div>  
<?php endforeach; ?>
<?php endif; 
?>



<?php if(isset($session->failed)):?>


<div class="container">
 <div class="offset-md-1 col-md-8 offset-md-2  pt-3 pb-3 ">
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong> <?=  $session->failed; ?></strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
</div>
</div>        

<?php endif; ?>   
              
  
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <h2 class="login-box-msg">SAPL Recruitment Details</h2>

      <form action="<?= site_url('recruitment');?>" method="post" enctype="multipart/form-data">
       
        <input type="hidden" name="job_vacancy_id" class="form-control" value="<?= $job_vacancy_id; ?>"> 
        <div class="input-group mb-3">
            
       <label for="inputEmail3" class="col-sm-2 col-form-label">Name *</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Enter Your Name" >
          <div class="input-group-append">
            <div class="input-group-text">
              
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Date of birth *</label>
           <input type="date" name="dob" class="form-control" id="dob" >
          <div class="input-group-append">
            <div class="input-group-text">
            
            </div>
          </div>
        </div>
        
        <div class="input-group mb-3">
           <label for="inputEmail3" class="col-sm-2 col-form-label">Eamil Id *</label>
           <input type="text" name="emailid" class="form-control" id="emailid" >
          <div class="input-group-append">
            <div class="input-group-text">
              
            </div>
          </div>
        </div>
        
          <div class="input-group mb-3">
           <label for="inputEmail3" class="col-sm-2 col-form-label">Mobile No *</label>   
           <input type="text" name="mobileno" class="form-control" id="mobileno" >
          <div class="input-group-append">
            <div class="input-group-text">
 
            </div>
          </div>
        </div>
         <div class="input-group mb-3">
             <label for="inputEmail3" class="col-sm-2 col-form-label">Address *</label>
           <textarea  name="address" class="form-control" id="address"></textarea>
          <div class="input-group-append">
            <div class="input-group-text">
        
            </div>
          </div>
        </div>
        
        <div class="input-group mb-3">
             <label for="inputEmail3" class="col-sm-2 col-form-label">Skills *</label>
           <textarea  name="skills" class="form-control" id="skills" ></textarea>
          <div class="input-group-append">
            <div class="input-group-text">
        
            </div>
          </div>
        </div>
        
          <div class="input-group mb-3">
             <label for="inputEmail3" class="col-sm-2 col-form-label">Qualification *</label>    
           <input type="text"  name="qualification" class="form-control" id="qualification"></textarea>
          <div class="input-group-append">
            <div class="input-group-text">
              
            </div>
          </div>
        </div>
        
        <div class="input-group mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Gender *</label>
            <select name="gender" class="form-control" >
                          <option value="">Select Gender</option>
                          <option value="Male" >Male</option>
                          <option value="Female">Female</option>
                      </select>
          <div class="input-group-append">
            <div class="input-group-text">
             
            </div>
          </div>
        </div>
        
        <div class="input-group mb-3">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Resume *</label>
            <input type="file" name="resume" class="form-control" id="edu_resume_filename" placeholder="Enter Your Contact Number" >
          <div class="input-group-append">
            <div class="input-group-text">
             
            </div>
          </div>
        </div>
     
          <div class="input-group mb-1">
          <label for="inputEmail3" class="col-sm-4 col-form-label" style="color:blue">Experience Information </label>        
          </div> 
          <table class="table" id="autocomplete_table" style="margin-left:2px;border:0" >
										<thead>
												<tr id="row_0">
													<th>
													Company Name
													</th>
													<th>
													Working Period From
													</th>
														<th>
													Working Period From
													</th>
													<th>
													 Duration
													</th>
												  <th>
													Position
													</th>
												</tr>
											</thead>
											<tbody>
												<tr>
												
													<td>
                                                      <input  type="text" name="edu_exp_companyname[]" class="form-control"  placeholder=" Experienced Company Name" style="width:100%">
													</td>
													
														<td>
													
                                                      <input  type="month" name="edu_exp_from[]" class="form-control"   style="width:100%">
													</td>
														<td>
													
                                                      <input  type="month" name="edu_exp_to[]" class="form-control"   style="width:100%">
													</td>
													<td>
													
                                                      <input  type="text" name="edu_exp_duration[]" class="form-control"  placeholder=" Experienced Duration" style="width:100%">
													</td>
													<td>
													
                                                      <input  type="text" name="position[]" class="form-control"  placeholder="position" style="width:100%">
													</td>
													<td>
														<button type="button" class="btn btn-primary" onclick="addRow()" style="border-radius:50px">
															<i class="fa fa-plus-circle" style="font-size:20px"></i>
														</button>
													</td>
												</tr>
											</tbody>
											
										</table>
										
										
        
    <div class="row">      
      <div class="col-sm-6">
         <button type="submit" class="btn btn-info " name="submit"value="submit">Save</button>
      </div>
      <div class="col-sm-6">
        <button type="cancel" class="btn btn-default float-right">Cancel</button>
      </div>
    </div>   
       
      </form>

     
      <!-- /.social-auth-links -->

      <!--<p class="mb-1">
        <a href="">I forgot my password</a>
      </p>-->
     
    <!-- /.login-card-body -->
  </div>
  
 <script>										
function addRow()
{
	var tableBody = $("#autocomplete_table tbody");
	tableBody.append(addRowContent());  
}

function addRowContent()
{
	var rowcount;
	rowcount = $("#autocomplete_table tbody tr").length+1;
	if(rowcount>=6){
	    alert('Five Experience is enough!');
	}else{
	html = '<tr id="row_'+rowcount+'"><td><input  type="text" name="edu_exp_companyname[]" class="form-control"  placeholder=" Experienced Company Name" style="width:100%"></td>';
	html +='<td><input  type="month" name="edu_exp_from[]" class="form-control"   style="width:100%"></td>';
	html +='<td><input  type="month" name="edu_exp_to[]" class="form-control"   style="width:100%"></td>';
	html +='<td><input  type="text" name="edu_exp_duration[]" class="form-control"  placeholder=" Experienced Duration" style="width:100%"></td>';
	html +='<td> <input  type="text" name="position[]" class="form-control"  placeholder=" position" style="width:100%"></td>';
	html +='<td><button type="button" class="btn btn-danger" onclick="removeProductRow('+rowcount+')" style="border-radius:50px"><i class="fa fa-minus-circle" style="font-size:20px"></i></button></td></tr>';
	rowcount++;
	return html;
	}
	
}
function removeProductRow(id) {
	rowNo = id; 
	$("#row_"+rowNo).remove();
}
</script>
 
           
  
</div>
<!-- /.login-box -->
<script src="<?= base_url();?>/public/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url();?>/public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="<?= base_url();?>/public/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url();?>/public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url();?>/public/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url();?>/public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url();?>/public/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url();?>/public/dist/js/demo.js"></script>


</body>
</html>
