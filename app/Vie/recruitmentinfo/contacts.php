<?=  $this->extend('layout/sidebar'); ?>

<?= $this->section('content'); ?>


  <!-- Script -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Main content -->
 <div class="row mb-2">
     
     
                        <div class="col-md-6">
                           <h1 style="font-size:25px;margin-top: 5px; " class="card-title">Interview Candidate List</h1>
                        </div>
                        <div class="col-md-6 text-right">
                          
                          <a href="<?= site_url('vacancy');?>"><button type="submit" class="btn btn-success">Vacancy View</button></a> 
                        </div>
              </div>
              
    <div class="form-group row">
        <div class="col-sm-2" >
            <b>Department</b>
        </div>
        <div class="col-sm-2" >
            <b>Designation</b>
        </div> 
          <div class="col-sm-2" >
            <b>Candidate Selection Status</b>
        </div>
        <div class="col-sm-2" >
            <b>Interview Selection Status</b>
        </div> 
        <div class="col-sm-2" >
            <b>Joined Status</b>
        </div> 
    </div> 
        <form method="post" action="<?= site_url('candidates');?>">
        <div class="form-group row">
        <div class="col-sm-2" >
                        <select name="department" class="form-control" id="department">
                     
                        <option value="">Select Type</option>
                        <option value="All Department">All Department</option>
                         <?php if($department[0]['department_name']!='') { ?>
                        <?php foreach($department as $dept){ ?>
                             <option value="<?= $dept['department_name']?>"><?= $dept['department_name']; ?></option>
                         
                        <?php }}else{ ?>
                        
                        <?php }?>
                        </select>

        </div> 
          <div class="col-sm-2" >
                        <select name="designation" class="form-control" id="designation">
                             <option value="">Select Designation</option>
                            
                        </select>

        </div>
        <div class="col-sm-2" >
                         <select name="candidate_sts" class="form-control">
                            
                            <option value="">Select Status</option>
                            <option value="Selected">Selected</option>
                            <option value="Not Selected">Not Selected</option>
                            <option value="Hold">Hold</option>
                        </select>

        </div> 
          <div class="col-sm-2" >
            <select name="interview_sts" class="form-control">
                           
                            <option value="">Select Status</option>
                            <option value="Selected">Selected</option>
                            <option value="Not Selected">Not Selected</option>
                            <option value="Hold">Hold</option>
                            <option value="Not Attend">Not Attend</option>
            </select>
                          

        </div>
          <div class="col-sm-2" >
               <select name="joined_sts" class="form-control">
                   
                            <option value="">Select Status</option>
                            <option value="Joined">Joined</option>
                            <option value="Not Joined">Not Joined</option>
                            
               </select>
                          

        </div>
           <div class="col-sm-1" >
              <button type="submit" name="submit" value="submit" class="btn btn-success">Submit</button>           

        </div>
        <div class="col-sm-1" >
              <button type="submit" name="pdf" value="submit"  formaction="<?= site_url('pdfcandidates');?>" class="btn btn-success" id="fileLink"  target="_blank">Pdf</button>           

        </div>
        </form>
        
    </div>               
    <section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body pb-0">
          <div class="row  align-items-stretch">
              <?php if($users[0]['name']=='') { ?>
                <h3>There is no data</h3>
               <?php }else{ ?>
              
            <?php foreach($users as $data){ ?>  
            <div class="col-12 col-sm-6 col-md-4  align-items-stretch">
                
              <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                 <?= $data['role']; ?>
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b> <?= $data['name']; ?></b></h2>
                      <p class="text-muted text-sm"><b>Skills: </b> <?= $data['skills']; ?> </p>
                       <p class="text-muted text-sm"><b>Candidate Status: </b> <?= $data['candidate_sts']; ?>,<b>Interview Status: </b> <?= $data['interview_sts']; ?>,<b>Joined Status: </b> <?= $data['joined_sts']; ?>  </p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> <?= $data['address']; ?></li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>  <?= $data['mobileno']; ?></li>
                        
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <img src="../../dist/img/user1-128x128.jpg" alt="" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <?php $id=base64_encode(base64_encode(base64_encode($data['id'])));?>
                    <a href="profile/<?= $id ?>" class="btn btn-sm btn-info">
                      <i class="fas fa-user"></i> View Profile
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <?php }} ?>
         
            
            
           
            
            
            
           
          </div>
        </div>
        <!-- /.card-body -->
       <!-- <div class="card-footer">
          <nav aria-label="Contacts Page Navigation">
            <ul class="pagination justify-content-center m-0">
              <li class="page-item active"><a class="page-link" href="1">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">4</a></li>
              <li class="page-item"><a class="page-link" href="#">5</a></li>
              <li class="page-item"><a class="page-link" href="#">6</a></li>
              <li class="page-item"><a class="page-link" href="#">7</a></li>
              <li class="page-item"><a class="page-link" href="#">8</a></li>
            </ul>
          </nav>
        </div> -->
        <!-- /.card-footer -->
      </div>
      <!-- /.card -->

    </section>
    
 <script type="text/javascript">
    $(document).ready(function () {
 
      $('#department').change(function () {
          
       
       var custId = $('#department').val();
       
        //alert(dept); 
        $('#designation').empty();
        $.ajax({
          url: 'http://freelance.neuralarc.com/digitalflow/designation/'+custId,
          type: 'get',
          data: { custId: custId  },
          success: function (response) {
           
            var dd='';
             var dd = JSON.parse(response);
             
             var i=0;
              $('#designation').append('<option value="">Select Designation</option>'); 
             for (var i in dd) {
                 
                  ipnews ='<option value="'+dd[i].designation+'">'+dd[i].designation+'</option>';      
                 $('#designation').append(ipnews); 
                 
             }
             
            
          
          }
        });
      });
 
    });
  </script> 
      
    
    
<?= $this->endSection();?>
    
    