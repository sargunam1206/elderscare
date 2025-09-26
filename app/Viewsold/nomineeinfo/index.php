 <head>
  <title>Dynamically load content in Bootstrap Modal with AJAX, PHP MySQL - Clue Mediator</title>
  <!-- CSS -->
  <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
  <!-- Script -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' type='text/javascript'></script>
</head>      
 
 
 <?=  $this->extend('layout/users_view'); ?>

<?= $this->section('content'); ?>

<!-- /.card -->
<div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
            
                  
                  
                  
                       <?php 
$session=\Config\Services::session();


  

 



if(isset($session->failed)):?>


<div class="container">
  <div class="offset-md-3 col-md-6 offset-md-3 mt-2 pt-3 pb-3 ">
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong> <?=  $session->failed; ?></strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
</div>
</div>        


<?php endif; ?>
<div class="card">
              <div class="card-header" style="background-color:#2596be;color:white">
                  
 
              <div class="row ">
                  
                        <div class="col-md-6">
                           <h3 class="card-title" style="margin-top: 5px;">Nominee Form</h3>
                        </div>
                        <div class="col-md-6 text-right">
                          <a href="<?= site_url('viewnominee');?>"><button type="submit" class="btn btn-success">Nominee List</button></a>
                        </div>
              </div>
              </div>
              <!-- /.card-header -->
                  <form method="POST" action="<?= site_url('nominee');?>" class="form-horizontal" enctype="multipart/form-data">
                <div class="card-body">
                    
                    <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Employee Id</label>
                      <div class="col-sm-10">
                         <input list="glass_id"  class="form-control" name="emp_id" autocomplete="off"/>
                        <datalist  id="glass_id">
                           
                            <?php foreach($emp_id as $empid){?>
                              <option value="<?php echo $empid['emp_company_ref_id']; ?>"></option>
                              <?php } ?>
                                                      
                          </datalist>
                       </div>
                    </div>  
                    
                    
                    
              
                   
    	                         <table class="table" id="autocomplete_table" style="margin-left:2px;border:0">
										<thead>
												<tr id="row_0">
													<th>
													 Name
													</th>
													<th>
													Adderss
													</th>
													<th>
													Mobile No
													</th>
													<th>
													Bank Name
													</th>
													<th>
													Account No
													</th>
													<th>
													IFSC No
													</th>
													<th>
													Branch Name
													</th>
													
												
												</tr>
											</thead>
											<tbody>
												<tr>
												
													<td>
                                                      <input  type="text" name="nominee_info_name[]" class="form-control"  >
													</td>
													<td>
													
                                                      <input  type="text" name="nominee_info_address[]" class="form-control"   >
													</td>
													
													<td>
                                                      <input  type="text" name="nominee_info_mobileno[]" class="form-control"   >
													</td>
													<td>
													
                                                      <input  type="text" name="nominee_info_bankname[]" class="form-control"   >
													</td>
													
													
													<td>
                                                      <input  type="text" name="nominee_info_accno[]" class="form-control"  >
													</td>
													<td>
													
                                                      <input  type="text" name="nominee_info_ifcno[]" class="form-control"   >
													</td>
													
													<td>
                                                      <input  type="text" name="nominee_info_branchname[]" class="form-control"   >
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
                
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Save</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                    <button type="button" class="btn btn-default float-right" onclick="if (confirm('Are you sure you want to leave this page?')) 
                                            { window.location.href='<?= site_url('viewnominee') ?>'; }">Cancel</button>



                </div>
                <body>
                   
                

              </form>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
      
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
	
	html = '<tr id="row_'+rowcount+'"><td><input  type="text" name="nominee_info_name[]" class="form-control"  ></td>';
	html +='<td><input  type="text" name="nominee_info_address[]" class="form-control"></td>';
   	html +='<td><input  type="text" name="nominee_info_mobileno[]" class="form-control"></td>';
   	html +='<td><input  type="text" name="nominee_info_bankname[]" class="form-control"></td>';
   	html +='<td><input  type="text" name="nominee_info_accno[]" class="form-control"></td>';
   	html +='<td><input  type="text" name="nominee_info_ifcno[]" class="form-control"></td>';
   	html +='<td><input  type="text" name="nominee_info_branchname[]" class="form-control"></td>';
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