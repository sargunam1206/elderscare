 <?=  $this->extend('layout/sidebar'); ?>

<?= $this->section('content'); ?>
<head>
  <title>Dynamically load content in Bootstrap Modal with AJAX, PHP MySQL - Clue Mediator</title>
  <!-- CSS -->
  <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
  <!-- Script -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' type='text/javascript'></script>
</head>      
 
<!-- /.card -->
<div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
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


              <div class="row mb-2">
                        <div class="col-md-6">
                           <h1 style="font-size:25px;margin-top: 5px; " class="card-title">List of Seniority Info</h1>
                        </div>
                        <div class="col-md-6 text-right">
                          <a href="<?= site_url('seniority');?>"><button type="submit" class="btn btn-info">+ New Info</button></a>
                        </div>
              </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead class="text-center" style="background-color: #82c4c4;">
                  <tr>
                    <th>S.No.</th>
                    <th>Employee Name</th>
                    <th>Qualfication</th>
                    <th>Department</th>
                    <th>Joined Position</th>
                    <th>Current Position</th>
                    <th>Total Experience</th>
                    <th>Seniority Status</th>
                    <th>Employee Id</th>
                    <th>Created On</th>
                    <th>Updated On</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>

                   <?php 
                    $i=1;
                   foreach ($users as $key => $value) { 
                      

                    ?>
                  <tr>
                    <td  class="text-center"><?= $i;?></td>
                    
                  
      
                    <td><?= $name[$i-1];?></td>
                    <td><?= $qualification[$i-1];?></td>
                    <td><?= $dept[$i-1];?></td>
                    <td><?= $desg[$i-1];?></td>
                    <td></td>
                    <td><?= $exp[$i-1]; ?></td>
                   
                    
                    <td><?= $value['seniority_status'];?></td>
                    <td><?= $value['emp_id'];?></td>
                    <td><?= $value['seniority_created_on'];?></td>
                    <td><?= $value['seniority_updated_on'];?></td>
                    
                    <td>
                       <?php 
                            
                            $base=base64_encode(base64_encode(base64_encode($value['seniority_info_id'])));
                            
                            
                       ?>    
                       <a href="<?php echo base_url('editseniority/'.$base);?>" class="btn btn-info btn-sm">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a href="<?php echo base_url('deleteseniority/'.$base);?>" class="btn btn-sm" style="background-color: #0088cc;color: white;">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                        
                    </td>
                  </tr>
                  <?php 
                  $i++;} ?>
       
                  </tbody>
                  <tfoot>
                  <tr> 
                    <th>S.No.</th>
                    <th>Employee Name</th>
                    <th>Qualfication</th>
                    <th>Department</th>
                    <th>Joined Position</th>
                    <th>Current Position</th>
                    <th>Total Experience</th>
                    <th>Seniority Status</th>
                    <th>Employee Id</th>
                    <th>Created On</th>
                    <th>Updated On</th>
                    <th>Actions</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
      
</div>
 
  <script type="text/javascript">
    $(document).ready(function () {
 
      $('.btn-popup').click(function () {
          
       $('#test').empty();
        var custId = $(this).data('id');
       
        $.ajax({
          url: 'http://freelance.neuralarc.com/digitalflow/register_data/'+custId,
          type: 'get',
          data: { custId: custId },
          success: function (response) {
          
            
             var dd = JSON.parse(response);
             var c=0;
            
             for (var i in dd) {
                 
                 var ipnews = '<div><i class="fas fa-clock " style="background-color:#669999;color:white"></i> <div class="timeline-item">';
                    ipnews +='<h3 class="timeline-header">'+dd[c].duration+'</h3>';      
                        
                
                 ipnews +='<div class="timeline-footer"><button style="background-color:#669999;color:white" class="form-control">'+dd[c].companyname+'</button></div>';
                  ipnews += '</div> '; 
                 
                 $('#test').append(ipnews);
                  
                 c++;
             }
             var endclock='<div><i class="fas fa-clock bg-gray"></i></div>';
            $('#test').append(endclock);
            $('#exampleModalCenter').modal('show');
          }
        });
      });
 
    });
  </script> 
  

  
  
  
    <?= $this->endSection();?>