<?=  $this->extend('layout/sidebar'); ?>

<?= $this->section('content'); ?>
<?php



?>
<head>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
<div class="container">
  <div class="col-md-12">


    <div class="row mb-2">
                  <div class="col-md-6">
                     <h3 class="card-title">Department Details</h3>
                  </div>
                  <div class="col-md-6 text-right">
                    <a href="<?= site_url('viewdepartment');?>"><button type="submit" class="btn btn-info">Department Details List</button></a>
                  </div>
        </div>
        
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



            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title"> Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="<?= site_url('department');?>" class="form-horizontal">
                <div class="card-body">
             
                  
                  
                  
                

                   
                  
                  <div class="form-group row">
                    
                    
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Department Name</label>
                    <div class="col-sm-10">
                      <input type="text" name="department_name" class="form-control" id="department_name" placeholder="Enter Your Department" >
                    </div>
                  </div>
                  
                  
               
    	                         <table class="table" id="autocomplete_table" style="margin-left:2px;border:0">
										<thead>
												<tr id="row_0">
													<th>
											   	Role Type
													</th>
												
												
												</tr>
											</thead>
											<tbody>
												<tr>
												
													<td>
                                                      <input  type="text" name="department_roletype[]" class="form-control"  placeholder="Enter the role type" style="width:60%">
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
                  <button type="submit" class="btn btn-info">Save</button>
                  <button type="submit" class="btn btn-default float-right">Cancel</button>


                </div>
                <!-- /.card-footer -->                               

              </form>
            </div>
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
	
	html = '<tr id="row_'+rowcount+'"><td><input  type="text" name="department_roletype[]" class="form-control"  placeholder="Enter the role type" style="width:60%"></td>';

	html +='<td><button type="button" class="btn btn-danger" onclick="removeProductRow('+rowcount+')" style="border-radius:50px"><i class="fa fa-minus-circle" style="font-size:20px"></i></button></td></tr>';
	rowcount++;
	return html;
}
function removeProductRow(id) {
	rowNo = id; 
	$("#row_"+rowNo).remove();
}
</script>

<?= $this->endSection();?>

