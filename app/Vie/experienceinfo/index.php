            

<?=  $this->extend('layout/users_view'); ?>

<?= $this->section('content'); ?>
<head>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"/>
</head>

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
                     <h3 class="card-title">Experience Details</h3>
                  </div>
                  <div class="col-md-6 text-right">
                    <a href="<?= site_url('viewexperience');?>"><button type="submit" class="btn btn-info">Experience List</button></a>
                  </div>
        </div>
            <div class="card card-info" >
              <div class="card-header">
                <h3 class="card-title">Experience Details Form</h3>
              </div>
             
              <form method="POST" action="<?= site_url('experience');?>" class="form-horizontal" enctype="multipart/form-data">
                <div class="card-body">
                    
                    <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Employee Id</label>
                      <div class="col-sm-10">
                         <input list="glass_id"  class="form-control" name="emp_id" autocomplete="off" />
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
													Experienced Company Name
													</th>
													<th>
													Experienced Duration
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
                                            { window.location.href='<?= site_url('viewexperience') ?>'; }">Cancel</button>



                </div>
                <body>
                   
                

              </form>
            </div>
            
 
</body>
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

</body>	
</html>
<?= $this->endSection();?>

