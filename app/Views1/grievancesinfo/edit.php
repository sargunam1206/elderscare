<?=  $this->extend('layout/sidebar'); ?>
<div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
<?= $this->section('content'); ?>
<div class="container">
  <div class="col-md-10">


    <div class="row mb-2">
                  <div class="col-md-6">
                     <h3 class="card-title">Update Grievances  Details</h3>
                  </div>
                  <div class="col-md-6 text-right">
                    <a href="<?= site_url('viewgrievances');?>"><button type="submit" class="btn btn-info">Grievances List</button></a>
                  </div>
        </div>

 			<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title"> Grievances Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="<?= site_url('updategrievances');?>" class="form-horizontal">
                <div class="card-body">
                  <input type="hidden" name="grievances_id" value="<?php echo $user['grievances_id']; ?>">
                  
                  
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Grievances Type</label>
                    <div class="col-sm-10">
                      <input type="text" name="grievances_type" class="form-control" id="grievances_type" value="<?php echo $user['grievances_type']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Grievances Detailed Description</label>
                    <div class="col-sm-10">
                      <textarea type="text" name="grievances_desc" class="form-control" id="grievances_desc" ><?php echo $user['grievances_desc']; ?></textarea>
                    </div>
                  </div>
                     
               
                 

                  
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Update</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                    <button type="button" class="btn btn-default float-right" onclick="if (confirm('Are you sure you want to leave this page?')) 
                                            { window.location.href='<?= site_url('viewcompanyresigndetails') ?>'; }">Cancel</button>



                </div>
                <!-- /.card-footer -->                               

              </form>
            </div>
</div>
</div>
</div>
<?= $this->endSection();?>