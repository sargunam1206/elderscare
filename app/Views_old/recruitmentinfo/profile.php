<?=  $this->extend('layout/sidebar'); ?>

<?= $this->section('content'); ?>


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">

          <!-- /.col -->
      
          <div class="col-md-12">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Profile</a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Experience</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Resume</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                       <form class="form-horizontal" method="post" action="<?= site_url('updateprofile');?>">
                           <input type="hidden" name="id" value="<?= $users['id']?>">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                           <input type="email" class="form-control" id="inputName" placeholder="Name" value="<?= $users['name']?>" readonly>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Date of Birth</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail" placeholder="Email"  value="<?= $users['dob']?>" readonly>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Email ID</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName2" placeholder="Name" value="<?= $users['emailid']?>" readonly>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Mobile No</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName2" placeholder="Name" value="<?= $users['mobileno']?>" readonly>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputSkills" placeholder="Skills" value="<?= $users['address']?>" readonly>
                        </div>
                      </div>
                     <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Qualification</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputSkills" placeholder="Skills" value="<?= $users['qualification']?>" readonly>
                        </div>
                      </div>
                       <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Gender</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputSkills" placeholder="Skills" value="<?= $users['gender']?>" readonly>
                        </div>
                      </div>
                       <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputSkills" placeholder="Skills" value="<?= $users['skills']?>" readonly>
                        </div>
                      </div>
                        <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Candidate Selection Status</label>
                        <div class="col-sm-10">
                            
                        <select name="candidate_sts" class="form-control">
                            <option value="<?= $users['candidate_sts']?>"><?= $users['candidate_sts']?></option>
                            <option value="">Select Status</option>
                            <option value="Selected">Selected</option>
                            <option value="Not Selected">Not Selected</option>
                            <option value="Hold">Hold</option>
                        </select>
                          
                        </div>
                      </div>
                      
                      
                       <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Interview Selection Status</label>
                        <div class="col-sm-10">
                            
                        <select name="interview_sts" class="form-control">
                            <option value="<?= $users['interview_sts']?>"><?= $users['interview_sts']?></option>
                            <option value="">Select Status</option>
                            <option value="Selected">Selected</option>
                            <option value="Not Selected">Not Selected</option>
                            <option value="Hold">Hold</option>
                            <option value="Not Attend">Not Attend</option>
                        </select>
                          
                        </div>
                      </div>
                       <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Joined Status</label>
                        <div class="col-sm-10">
                            
                        <select name="joined_sts" class="form-control">
                            <option value="<?= $users['joined_sts']?>"><?= $users['joined_sts']?></option>
                            <option value="">Select Status</option>
                            <option value="Joined">Joined</option>
                            <option value="Not Joined">Not Joined</option>
                            
                        </select>
                          
                        </div>
                      </div>
                      
                        <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Remarks</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" name="remarks" id="remarks" placeholder="Give some Commands" value="<?= $users['remarks']?>"><?= $users['remarks']?></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                      </div>
                    </form>
                    <!-- /.post -->
                    
                    
                  </div>
                  <!-- /.tab-pane -->
    <div class="tab-pane" id="timeline">
                 
     <!-- The timeline -->
                    <div class="timeline timeline-inverse">
                      <!-- timeline time label -->
                      
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <?php 
                      $data=json_decode($users['experiencelist']);
                      $i=1;
                      foreach($data as $one){
                      
                      ?>
                      
                      <div>
                        <i class="fas fa-clock bg-primary"></i>

                        <div class="timeline-item">
                       

                          <h3 class="timeline-header"><a href="#"><?= $one->edu_exp_from; ?> to <?= $one->edu_exp_to; ?></a> </h3>

                          <div class="timeline-body">
                           <?= $one->companyname; ?>
                          </div>
                          <div class="timeline-footer">
                            <a href="#" class="btn btn-primary btn-sm"><?= $one->position; ?></a>
                           
                          </div>
                        </div>
                      </div>
                  <?php   
 
                      } ?>
                    
                      <!-- END timeline item -->
                      <div>
                        <i class="far fa-clock bg-gray"></i>
                      </div>
                    </div>
                 
                 
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                   <embed src="<?= base_url().$users['resume']; ?>" type="application/pdf"   height="1000" width="100%">
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          
         
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

<!-- ./wrapper -->

<?= $this->endSection();?>