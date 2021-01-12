
<?php $__env->startSection('pagetitle', 'New Parcel'); ?>
<?php $__env->startSection('styles'); ?>
<link href="<?php echo e(asset('css/vendor/admin.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/customer/dashboard">
        <div class="sidebar-brand-icon">
          <i class="fas fa-user-secret fa-sm"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Control Panel</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="/customer/dashboard">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>DASHBOARD</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Service
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Parcel" aria-expanded="true" aria-controls="Branch">
            <i class="fas fa-box-open"></i>
          <span>PARCEL</span>
        </a>
        <div id="Parcel" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="py-2 collapse-inner rounded">
            
            <a class="collapse-item" href="/customer/parcel/request"><i class="fas fa-calendar-plus"></i> &nbsp;Request Parcel</a>
            <a class="collapse-item" href="/customer/parcel/check"><i class="fas fa-eye"></i> &nbsp;Check Status</a>
            <a class="collapse-item" href="/customer/parcel/all"><i class="fas fa-list-ul"></i> &nbsp;All Parcels</a>
            
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Branch" aria-expanded="true" aria-controls="Customer">
            <i class="fas fa-code-branch"></i>
          <span>BRANCHES</span>
        </a>
        <div id="Branch" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class=" py-2 collapse-inner rounded">
            
            <a class="collapse-item" href="\customer\branch\all"><i class="fas fa-list-ul"></i> &nbsp;All Branches</a>
           
            
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Operations
      </div>

   

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="\customer\payments">
          <i class="fas fa-fw fa-dollar-sign"></i>
          <span>PAYMENT HISTORY</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="\customer\calculate">
          <i class="fas fa-coins"></i>
          <span>CALCULATE CHARGE</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Account" aria-expanded="true" aria-controls="Account">
          <i class="fas fa-user-secret"></i>
          <span>ACCOUNT</span></a>
          <div id="Account" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class=" py-2 collapse-inner rounded">
              <a class="collapse-item" href="\customer\profile\settings"><i class="fas fa-user-cog"></i> &nbsp;Account Settings</a>
              <a class="collapse-item" href="\customer\profile\password"><i class="fas fa-user-lock"></i> &nbsp;Change Password</a>
              
          </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

 <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
         <div id="content">

     

               <!-- Begin Page Content -->
              <div class="container-fluid py-4">

                 
                    <!-- Page Heading -->
         <div class="card shadow mb-2 Poopins" style="padding:2%; background-image: radial-gradient( circle 788px at 14.5% 19.3%,  rgba(81,109,179,1) 0%, rgba(178,98,152,1) 100.2% );">
          <h4 class="h4 text-white text-center" style="padding-top:5px;">Create Parcel Delivery Request</h4>
         </div>
         
            
          <div class="card Poppins">
            <div class="card-header font-weight-bold">Request Form</div>
              <div class="card-body branch_add">
                 
              <?php if(session('status')): ?>
              <div class="alert alert-success alert-dismissible fade show text-center font-weight-bold small" role="alert">
                  <?php echo e(session('status')); ?>

                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                 </button>
               </div>
           <?php endif; ?>

           
           <?php if(session('error')): ?>
                <div class="alert alert-danger alert-dismissible fade show text-center font-weight-bold small" role="alert">
                    <?php echo e(session('error')); ?>

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
           <?php endif; ?>
          
                <form method="POST" action="/customer/parcel/request">
                <?php echo csrf_field(); ?>
                  <h5 class="font-weight-bold">Parcel Informations</h5><HR>
                  <div class="row register-form mb-2">
                 
                     
                    
                      <div class="col-md-4">
                       
                          <div class="form-group">
                            <select class="form-control" name="zone"required>
                                <option class="hidden"  selected disabled>Select Zone</option>
                                <option value="Dhaka">Dhaka</option>
                                <option value="Chittagong">Chittagong</option>
                                <option value="Sylhet">Sylhet</option>
                                <option value="Comilla">Comilla</option>
                                <option value="Khulna">Khulna</option>
                                <option value="Barishal">Barishal</option>
                                <option value="Rangpur">Rangpur</option>
                                
                            </select>
                          </div>
                         
                        
                          
                      </div>
                      <div class="col-md-4">
                         
                        <div class="form-group">
                          <select class="form-control" name="delivery"required>
                            <option class="hidden"  selected disabled>Delivery Type</option>
                            <option value="Regular">Regular (10 Days)</option>
                            <option value="Express">Express (5 Days)</option>
                            <option value="Super Express">Super Express (2 Days)</option>
                            
                            
                        </select>
                          </div>
                        
                          
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <select class="form-control" name="type"required>
                            <option class="hidden"  selected disabled>Parcel Type</option>
                            <option value="Small">Small (< 5Kg)</option>
                            <option value="Medium">Medium (< 10Kg)</option>
                            <option value="Large">Large (10Kg+)</option>
                            
                            
                        </select>
                        </div>
                         
                       
                      </div>
                      
                        <div class="col-md-6">
                          <div class="form-group">
                            <textarea id="details" class="form-control  <?php $__errorArgs = ['details'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" rows=2 type="text" name="details" placeholder="Parcel Description (What's inside,color,condition etc.)"autofocus></textarea>
                          
                            <?php $__errorArgs = ['details'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                           
                            <div class="row">
                              <div class="col">
                                <input id="sender_address" class="form-control <?php $__errorArgs = ['sender_address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" placeholder="Pickup Address"name="sender_address"/>
                                <?php $__errorArgs = ['sender_address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                                 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                              </div>
                             
                            </div>
                            <div class="row justify-content-center">
                              <div class="col">
                                <button type="button" class="small_btn" onclick="myFunction()">SELECT DEFAULT ADDRESS</button>
                              </div>
                             
                            </div>


                        </div>
                      </div>
                     
                      
                     
                       

                     
                    </div>




                    <h5 class="font-weight-bold">Recipient Informations</h5><HR>
                      <div class="row register-form mb-2">

                        <div class="col-md-6">
                          <div class="form-group">
                            <input id="recipient_name" placeholder="Recipient Name" type="text" class="form-control <?php $__errorArgs = ['recipient_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="recipient_name" value="<?php echo e(old('recipient_name')); ?>"autocomplete="recipient_name">
                            <?php $__errorArgs = ['recipient_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                          </div>
                          <div class="form-group">
                            <textarea id="recipient_address" class="form-control <?php $__errorArgs = ['recipient_address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" rows=2 type="text" name="recipient_address" placeholder="Recipient Address"></textarea>
                          
                            <?php $__errorArgs = ['recipient_address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                          </div>
                          
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <input id="recipient_phone" type="number"  name="recipient_phone" class="form-control <?php $__errorArgs = ['recipient_phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Recipient Phone"  />
                            <?php $__errorArgs = ['recipient_phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                          </div>
                          <div class="form-group">
                            <textarea class="form-control" rows=2 type="text" name="notes" placeholder="Notes (Optional)"></textarea>
                          </div>
                        </div>
                       <input type="hidden" name="sender_name" value="<?php echo e(Auth::guard('customer')->user()->name); ?>">
                       <input type="hidden" name="sender_phone" value="<?php echo e(Auth::guard('customer')->user()->phone); ?>">
                      

                      </div>
                    <div class="d-flex flex-row-reverse">
                      <div class="p-6">
                       
                          <input type="submit" class="btn btn-unique" style="margin-top:20%;"  value="SUBMIT"/>
                      </div>
                      
                    </div>

                    </form>
                    
                  </div>
                  </div>
                  
                </div>
              </div>

              </div>
          </div>
   
<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(asset('js/vendor/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/vendor/admin.js')); ?>"></script>
   
    <script>
      function myFunction() {
        document.getElementById("sender_address").defaultValue ="<?php echo e(Auth::guard('customer')->user()->address); ?>";
      }
      </script>
        
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Parcel-Manager\resources\views/customer/parcel/request.blade.php ENDPATH**/ ?>