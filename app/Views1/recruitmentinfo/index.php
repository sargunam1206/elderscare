<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>AdminLTE 3 | Top Navigation + Sidebar</title>

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
<body class="hold-transition sidebar-collapse layout-top-nav">

  
    <!-- /.content-header -->

    <!-- Main content -->
 

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
  <div class="col-md-12">


    <div class="row mb-3  mt-5">
                  <div class="col-md-6">
                     <h2 ><b> SAPL Recruitment Details</b></h2>
                  </div>
                
        </div>
        

            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="<?= site_url('recruitment');?>" class="form-horizontal">
                <div class="card-body">
                    
                 <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                      <input type="text" name="name" class="form-control" id="name" placeholder="Enter Your Name" >
                    </div>
                  </div>
                    
                    <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Date of birth</label>
                    <div class="col-sm-10">
                      <input type="date" name="dob" class="form-control" id="dob" >
                    </div>
                  </div>  
                    
                   <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Eamil Id</label>
                    <div class="col-sm-10">
                      <input type="text" name="emailid" class="form-control" id="emailid" >
                    </div>
                  </div>
                  
                   <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Mobile No</label>
                    <div class="col-sm-10">
                      <input type="text" name="mobileno" class="form-control" id="mobileno" >
                    </div>
                  </div>  
                  
                    <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                      <textarea  name="address" class="form-control" id="address" ></textarea>
                    </div>
                  </div>  
                  
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Qualification</label>
                    <div class="col-sm-10">
                      <input type="text"  name="qualification" class="form-control" id="qualification" ></textarea>
                    </div>
                  </div> 
                  
                   <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Gender</label>
                    <div class="col-sm-10">
                      <select name="gender" class="form-control">
                          <option value="">Select Gender</option>
                          <option value="Male" >Male</option>
                          <option value="Female">Female</option>
                      </select>
                    </div>
                  </div>
                  
                  
                       <table class="table" id="autocomplete_table" style="margin-left:2px;border:0">
										<thead>
												<tr id="row_0">
													<th>
													Experienced Company Name
													</th>
													<th>
													Experienced Duration
													</th>
												  <th>
													Position
													</th>
												</tr>
											</thead>
											<tbody>
												<tr>
												
													<td>
                                                      <input  type="text" name="edu_exp_companyname[]" class="form-control"  placeholder=" Experienced Company Name" style="width:60%">
													</td>
													<td>
													
                                                      <input  type="text" name="edu_exp_duration[]" class="form-control"  placeholder=" Experienced Duration" style="width:60%">
													</td>
													<td>
													
                                                      <input  type="text" name="position[]" class="form-control"  placeholder=" position" style="width:60%">
													</td>
													<td>
														<button type="button" class="btn btn-primary" onclick="addRow()" style="border-radius:50px">
															<i class="fa fa-plus-circle" style="font-size:20px"></i>
														</button>
													</td>
												</tr>
											</tbody>
											
										</table>
                  
               
     
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info" value="submit" name="submit">Save</button>
                  <button type="cancel" class="btn btn-warning float-right">Cancel</button>


                </div>
                <!-- /.card-footer -->                               

              </form>
            </div>
</div>
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
	
	html = '<tr id="row_'+rowcount+'"><td><input  type="text" name="edu_exp_companyname[]" class="form-control"  placeholder=" Experienced Company Name" style="width:60%"></td>';
	html +='<td><input  type="text" name="edu_exp_duration[]" class="form-control"  placeholder=" Experienced Duration" style="width:60%"></td>';
	html +='<td> <input  type="text" name="position[]" class="form-control"  placeholder=" position" style="width:60%"></td>';
	html +='<td><button type="button" class="btn btn-danger" onclick="removeProductRow('+rowcount+')" style="border-radius:50px"><i class="fa fa-minus-circle" style="font-size:20px"></i></button></td></tr>';
	rowcount++;
	return html;
}
function removeProductRow(id) {
	rowNo = id; 
	$("#row_"+rowNo).remove();
}
</script>
 
              

<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->

</body>
</html>
