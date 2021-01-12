
<?php $__env->startSection('pagetitle', 'Create Prescription'); ?>
<?php $__env->startSection('styles'); ?>
<link href="<?php echo e(asset('css/vendor/admin.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


 <!-- Page Wrapper -->
 <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
          <div class="sidebar-brand-icon">
            <i class="fas fa-user-md fa-sm"></i>
          </div>
          <div class="sidebar-brand-text mx-3">Doctor Panel</div>
        </a>
  
        <!-- Divider -->
        <hr class="sidebar-divider my-0">
  
        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
          <a class="nav-link" href="/">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>DASHBOARD</span></a>
        </li>
  
        <!-- Divider -->
        <hr class="sidebar-divider">
  
        <!-- Heading -->
        <div class="sidebar-heading">
          Service
        </div>
        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item active">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#appointment" aria-expanded="true" aria-controls="patient">
              <i class="fas fa-prescription"></i>
            <span>APPOINTMENTS</span>
          </a>
          <div id="appointment" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class=" py-2 collapse-inner rounded">
              
              
              <a class="collapse-item" href="\doctor\appointments\all"><i class="fas fa-paste"></i> &nbsp;All Appointments</a>
              <a class="collapse-item" href="\doctor\appointments\requests"><i class="fas fa-comment-medical"></i> &nbsp;Appointment Requests</a>
              <a class="collapse-item" href="\doctor\appointments\status"><i class="fas fa-eye"></i> &nbsp;Check Status</a>
             
              
            </div>
          </div>
        </li>
    
  
        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#doctor" aria-expanded="true" aria-controls="patient">
              <i class="fas fa-hospital-user"></i>
            <span>PATIENTS</span>
          </a>
          <div id="doctor" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class=" py-2 collapse-inner rounded">
              
              <a class="collapse-item" href="\doctor\patients\all"><i class="fas fa-hospital-user"></i> &nbsp;All Patients</a>
             
              
            </div>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="\doctor\messages" aria-expanded="true" aria-controls="patient">
              <i class="fab fa-facebook-messenger"></i>
            <span>MESSAGES</span>
          </a>
   
        </li>
        <li class="nav-item">
          <a class="nav-link" href="\doctor\prescriptions" aria-expanded="true" aria-controls="patient">
              <i class="fas fa-file-prescription"></i>
            <span>PRESCRIPTIONS</span>
          </a>
   
        </li>
  
        <!-- Divider -->
        <hr class="sidebar-divider">
  
        <!-- Heading -->
        <div class="sidebar-heading">
          Operations
        </div>
  
     
  
        <!-- Nav Item - Charts -->
        <li class="nav-item">
          <a class="nav-link" href="\doctor\history">
            <i class="fas fa-history"></i>
            <span>HISTORY</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="\doctor\reports">
            <i class="fas fa-file-invoice"></i>
            <span>REPORTS</span></a>
        </li>
  
        <!-- Nav Item - Tables -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Account" aria-expanded="true" aria-controls="Account">
            <i class="fas fa-user-secret"></i>
            <span>ACCOUNT</span></a>
            <div id="Account" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
              <div class=" py-2 collapse-inner rounded">
                <a class="collapse-item" href="\doctor\profile\settings"><i class="fas fa-user-cog"></i> &nbsp;Account Settings</a>
                <a class="collapse-item" href="\doctor\profile\password"><i class="fas fa-user-lock"></i> &nbsp;Change Password</a>
                
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
      
        
      <div class="jumbotron" style="padding-top:4%;">
       <?php $__currentLoopData = $appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appointment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
        

    
        
      
          <div class="card-body branch_add">
         
          
        <div class="row">
            <div class="row mb-4">
                <div class="col-md-9">
                  <img style="max-width:20%!important;text-align:left;" src="<?php echo e(asset('img/logo.png')); ?>" alt="">
                </div>
                <div class="col-md-3 small">
                <span>Appointment ID </span><span class="mdb-color-text" style="font-weight:bold;"> &nbsp;#10112<?php echo e($appointment->id); ?></span>
                </div>
              </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-4 prescription">
                <span class="h5 text-danger">Dr. <?php echo e(Auth::guard('doctor')->user()->name); ?></span><br>
                <span><?php echo e(Auth::guard('doctor')->user()->designation); ?></span><br>
                <span>Department of <?php echo e(Auth::guard('doctor')->user()->department); ?></span><br>
                <span><?php echo e(Auth::guard('doctor')->user()->degree); ?></span><br>
                <span>BMDC REG No. : <?php echo e(Auth::guard('doctor')->user()->reg_no); ?></span><br>

            </div>
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
              <div class="row justify-content-center">
                <form action="/doctor/appointments/checkout" method="get">
              
                  <input type="hidden" name="id" value="<?php echo e($appointment->id); ?>">
  
                  <button style="font-size:11px!important;" type="submit" class=" btn btn-unique">Checkout <i class="fas fa-sign-out-alt"></i></button>
  
                </form>
              </div>

            </div>
        

        </div>
        <hr>
   
       
            
       
         <div class="row mb-4">
             <div class="col-md-4">
                 <span>Patient Name : </span><span class="font-weight-bold"><?php echo e($appointment->patient_name); ?></span> 
             </div>
             <div class="col-md-3">
                <span>Age : </span><span class="font-weight-bold"><?php echo e($appointment->patient_age); ?></span> 
            </div>
            <div class="col-md-2">
                <span>Gender : </span><span class="font-weight-bold"><?php echo e($appointment->patient_gender); ?></span> 
            </div>
            <div class="col-md-3">
                <span>Blood Group : </span><span class="font-weight-bold"><?php echo e($appointment->patient_blood); ?></span> 
            </div>
         </div>
       
         <hr>
         <i class="fas fa-prescription fa-2x"></i>
         <div class="row justify-content-center mb-4">
            <span class="h5 text-center">Prescribe Medicines</span>
         </div>
         <?php if(!empty($status)): ?>
         <div class="alert alert-success alert-dismissible fade show text-center font-weight-bold small" role="alert">
          <?php echo e($status); ?> <i class="far fa-check-circle"></i>
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

         <hr>
         
         
             <form action="/doctor/appointments/prescription" method="POST">
            
                <?php echo csrf_field(); ?>
              
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right font-weight-bold"><?php echo e(__('Name')); ?></label>

                    <div class="col-md-4">
                        <input id="name" type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name"autofocus>
                        
                        <?php $__errorArgs = ['name'];
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
                <fieldset class="form-group">
                    <div class="row">
                      <legend class="col-form-label col-md-4 text-md-right font-weight-bold pt-0">Type</legend>
                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="type" id="tab" value="Tablet" checked>
                          <label class="form-check-label" for="tab">
                            Tablet
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="type" id="cap" value="Capsule">
                          <label class="form-check-label" for="cap">
                            Capsule
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="type" id="liq" value="Liquid">
                          <label class="form-check-label" for="liq">
                            Liquid
                          </label>
                        </div>
                      </div>
                    </div>
                  </fieldset>

                  <div class="form-group row">
                    <label for="dosage" class="col-md-4 col-form-label text-md-right font-weight-bold"><?php echo e(__('Dosage')); ?></label>

                    <div class="col-md-4">
                        <input id="dosage" type="number" class="form-control <?php $__errorArgs = ['dosage'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="dosage">
                        <span class="small text-danger">(in mg,ml)</span>
                        <?php $__errorArgs = ['dosage'];
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

                  <fieldset class="form-group">
                    <div class="row">
                      <legend class="col-form-label col-md-4 text-md-right pt-0 font-weight-bold">Frequency</legend>
                      <div class="col-md-6">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" name="frequency[]" type="checkbox" id="morning" value="Morning">
                            <label class="form-check-label" for="morning">Morning</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" name="frequency[]" type="checkbox" id="noon" value="Noon">
                            <label class="form-check-label" for="noon">Noon</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" name="frequency[]" type="checkbox" id="night" value="Night">
                            <label class="form-check-label" for="night">Night</label>
                          </div>
                      </div>
                    </div>
                  </fieldset>
                  <div class="form-group row">
                    <label for="duration" class="col-md-4 col-form-label text-md-right font-weight-bold"><?php echo e(__('Duration')); ?></label>

                    <div class="col-md-4">
                        <input id="duration" type="number" class="form-control <?php $__errorArgs = ['duration'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="duration">
                        <span class="small text-danger">(in Days)</span>
                        <?php $__errorArgs = ['duration'];
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
                <div class="form-group row">
                    <div class="col-md-4">

                    </div>

                    <div class="col-md-4">
                        <input type="hidden" name="patient_id" value="<?php echo e($appointment->patient_id); ?>">
                        <input type="hidden" name="doctor_name" value="Dr. <?php echo e($appointment->doctor_name); ?>">
                        <input type="hidden" name="appointment_id" value="<?php echo e($appointment->id); ?>">
                        <input  type="submit" class="btn btn-primary btn-block" value="Add">
                        
                    </div>
                </div>

            </form>
         
        
        




       
              </div>  
                     
                    
         
   

           

              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            
        </div>


    
          




      
            
              </div>
              </div>
            </div>
          </div>

          </div>

  </div>
  <!-- End of Page Wrapper -->



 



<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(asset('js/vendor/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/vendor/admin.js')); ?>"></script>

    <script>  function goBack() {
        window.history.back();
          }</script>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\E-Care\resources\views/doctor/appointments/prescription.blade.php ENDPATH**/ ?>