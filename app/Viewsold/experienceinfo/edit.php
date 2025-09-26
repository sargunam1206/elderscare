<?=  $this->extend('layout/users_view'); ?>

<?= $this->section('content'); ?>
<div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
<div class="container">
  <div class="col-md-10">


    <div class="row mb-2">
                  <div class="col-md-6">
                     <h3 class="card-title">Update Experience Details</h3>
                  </div>
                  <div class="col-md-6 text-right">
                    <a href="<?= site_url('viewexperience');?>"><button type="submit" class="btn btn-info">Educational List</button></a>
                  </div>
        </div>

 			<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title"> Experience Details Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <form method="POST" action="<?= site_url('updateexperience');?>" class="form-horizontal" enctype="multipart/form-data">
                <div class="card-body">
                    <input type="hidden" name="experience_id" value="<?php echo $user['experience_id']; ?>">
                    <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Employee Id</label>
                      <div class="col-sm-10">
                         <input list="glass_id"  class="form-control" name="emp_id"  value="<?php echo $user['emp_id']; ?>"/>
                        <datalist  id="glass_id">
                           
                            <?php foreach($emp_id as $empid){?>
                              <option value="<?php echo $empid['emp_company_ref_id']; ?>"></option>
                              <?php } ?>
                                                      
                          </datalist>
                       </div>
                    </div>  
                    
                    
                    
              
                   
    	                         <table class="table" id="autocomplete_table" style="margin-left:2px;border:0">
										<thead>
												<tr>
													<th>
													Experienced Company Name
													</th>
													<th>
													Experienced Duration
													</th>
												
												</tr>
											</thead>
											<tbody>
											    <?php 
											    $list=json_decode($user['experience_list']);
											    $i=1;
											    foreach($list as $one){  ?>
												<tr id="row_<?php echo $i ?>">
												
													<td>
                                                      <input  type="text" name="edu_exp_companyname[]" class="form-control"  placeholder=" Experienced Company Name"  value="<?= $one->companyname; ?>" style="width:60%">
													</td>
													<td>
													
                                                      <input  type="text" name="edu_exp_duration[]" class="form-control"  placeholder=" Experienced Duration"   value="<?= $one->duration; ?>"style="width:60%">
													</td>
												
													<td>
													    	<?php if($i==1){ ?>
														<button type="button" class="btn btn-primary" onclick="addRow()" style="border-radius:50px">
															<i class="fa fa-plus-circle" style="font-size:20px"></i>
														</button>
														<?php  }else{?>
														
															<button type="button" class="btn btn-danger" onclick="removeProductRow(<?php echo $i ?>);" style="border-radius:50px">
															<i class="fa fa-minus-circle" style="font-size:20px"></i>
														</button>
														<?php } ?>
													</td>
													
												</tr>
												
												<?php $i++; } ?>
											</tbody>
											
										</table>
                     
                   
                </div>
                
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-info">Update</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                    <button type="button" class="btn btn-default float-right" onclick="if (confirm('Are you sure you want to leave this page?')) 
                                            { window.location.href='<?= site_url('viewexperience') ?>'; }">Cancel</button>



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
	
	html = '<tr id="row_'+rowcount+'"><td><input  type="text" name="edu_exp_companyname[]" class="form-control"  placeholder=" Experienced Company Name" style="width:60%"></td>';
	html +='<td><input  type="text" name="edu_exp_duration[]" class="form-control"  placeholder=" Experienced Duration" style="width:60%"></td>';
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