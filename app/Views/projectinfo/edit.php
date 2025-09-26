<?=  $this->extend('layout/sidebar'); ?>

<?= $this->section('content'); ?>
<div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
<div class="container">
  <div class="col-md-10">


    <div class="row mb-2">
                  <div class="col-md-6">
                     <h3 class="card-title">Update Project Details</h3>
                  </div>
                  <div class="col-md-6 text-right">
                    <a href="<?= site_url('viewproject');?>"><button type="submit" class="btn btn-info">Project List</button></a>
                  </div>
        </div>

 			<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title"> project Details Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <form method="POST" action="<?= site_url('updateproject');?>" class="form-horizontal" enctype="multipart/form-data">
                <div class="card-body">
                    <input type="hidden" name="project_id" value="<?php echo $user['project_id']; ?>">
                
                    
                      <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                      <input type="text" name="project_name" class="form-control" id="project_name" value="<?php echo $user['project_name']; ?>">
                    </div>
                  </div>
                  
                     
                 <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Type</label>
                    <div class="col-sm-10">
                         <input type="text" name="project_type" class="form-control" id="project_type" value="<?php echo $user['project_type']; ?>">
                    </div>
                  </div>
                  
                    
              
                   
    	                         <table class="table" id="autocomplete_table" style="margin-left:2px;border:0">
										<thead>
												<tr>
												<th>
											Work Type List
													</th>
												</tr>
											</thead>
											<tbody>
											    <?php 
											    $list=json_decode($user['project_work_type_list']);
											    $i=1;
											    foreach($list as $one){  ?>
												<tr id="row_<?php echo $i ?>">
												
													<td>
                                                      <input  type="text" name="project_work_type_list[]" class="form-control"  value="<?= $one->project_work_type_list; ?>"  placeholder="Work Type" style="width:60%">
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
                                            { window.location.href='<?= site_url('viewproject') ?>'; }">Cancel</button>



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
	
	html = '<tr id="row_'+rowcount+'"><td><input  type="text" name="project_work_type_list[]" class="form-control"  placeholder="Work Type" style="width:60%"></td>';

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