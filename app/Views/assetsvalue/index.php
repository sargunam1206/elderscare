<?= $this->include('layout/sidebar') ?>
<?= $this->include('layout/head') ?>
<?= $this->include('layout/foot') ?>





      <div class="body-wrapper">
        <div class="container-fluid">
          <div class="card card-body py-3">
            <div class="row align-items-center">
              <div class="col-12">
                <div class="d-sm-flex align-items-center justify-space-between">
                  <h4 class="mb-4 mb-md-0 card-title">Assets Value</h4>
                  <nav aria-label="breadcrumb" class="ms-auto">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item d-flex align-items-center">
                        <a class="text-muted text-decoration-none d-flex" href="<?= base_url(); ?>/public/dist/main/index.html">
                          <iconify-icon icon="solar:home-2-line-duotone" class="fs-6"></iconify-icon>
                        </a>
                      </li>
                      <li class="breadcrumb-item" aria-current="page">
                        <span class="badge fw-medium fs-2 bg-primary-subtle text-primary">
                          Form Actions
                        </span>
                      </li>
                    </ol>
                  </nav>
                </div>
              </div>
            </div>
          </div>

          <!-- row -->
          <div class="row">
            
            
            
            
            <div class="col-12">
              <!-- start Event Registration -->
              <div class="card">
                <form  method="post" action="<?= base_url('assetsvalue'); ?>">
                  <div class="card-body">
                    <h4 class="card-title">Add Assets Value</h4>
<?php 
$session=\Config\Services::session();
if(isset($session->success)):?>



                    <div class="alert bg-primary-subtle text-info alert-dismissible fade show" role="alert">
                      <div class="d-flex align-items-center text-primary ">
                        <i class="ti ti-info-circle me-2 fs-4"></i>
                       <?=  $session->success; ?>
                      </div>
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    
<?php endif; ?>                    
                  </div>
                  <div class="card-body border-top">
                    <div class="row">
                      <div class="col-12">
                        <div class="mb-3">
                          <label for="fname3" class="form-label">GRN No</label>
                          <select name="assets_grn_no" class="form-control" >
                              <option value="">Select GRN No</option>
                              <?php foreach($assets_info as $info){ ?>
                              <option value="<?=$info['assets_grn_no'];?>"><?=$info['assets_grn_no'];?></option>
                              <?php } ?>
                          </select>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="mb-3">
                          <label for="title2" class="form-label">Value</label>
                          <input type="text" class="form-control" name="assetsvalue_value" id="title2" placeholder="Enter the Asset Value" />
                        </div>
                      </div>
                      
                      
                    </div>
                  </div>
                  
                  
                  <div class="p-3 border-top">
                    <div class="d-flex flex-wrap gap-6 align-items-center">
                      <div>
                        <div class="text-center">
                          <button type="submit" name="submit" value="submit" class="btn btn-primary">
                            Save
                          </button>
                          <button type="submit" class="btn bg-danger-subtle text-danger ms-6 px-4">
                            Cancel
                          </button>
                        </div>
                      </div>
                      
                
                      
                      
                    </div>
                  </div>
                </form>
              </div>
              <!-- end Event Registration -->
            </div>
            
            
            
            
            
            
            
          </div>
          <!-- End row -->
        </div>
      </div>
      

      
     
    </div>



  </div>
  
  