
<?php $__env->startSection('pagetitle', 'Prescription'); ?>
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
        <li class="nav-item">
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
        <li class="nav-item active">
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
                <span class="h5 text-danger">Dr. <?php echo e($appointment->doctor_name); ?></span><br>
                <span><?php echo e($appointment->doctor_designation); ?></span><br>
                <span>Department of <?php echo e($appointment->department_name); ?></span><br>
              

            </div>
            <div class="col-md-4">

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
            <span class="h5 text-center">Prescribed Medicines</span>
         </div>
    

         <hr>
         <div class="table-responsive mb-4">
            <table class="table table-striped table-bordered table-sm small-table" style="text-align:center!important;">
              <thead class="primary-color white-text text-xsmall">
                <tr>
                  <th class="small-table" scope="col">Type</th>
                  <th class="small-table" scope="col">Name</th>
                  <th class="small-table" scope="col">Dosage</th>
                  <th class="small-table" scope="col">Frequency</th>
                  <th class="small-table" scope="col">Duration</th>
                </tr>
              </thead>
              <tbody>
                  <?php $__currentLoopData = $medicines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $medicine): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      
                 
                <tr>
                  <th class="small-table" scope="row"><?php echo e($medicine->type); ?></th>
                  <td class="small-table"><?php echo e($medicine->name); ?></td>
                  <td class="small-table"><?php echo e($medicine->dosage); ?>Mg/Ml</td>
                  <td class="small-table"><?php echo e($medicine->frequency); ?></td>
                  <td class="small-table"><?php echo e($medicine->duration); ?> Days</td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           
              </tbody>
            </table>
          </div>
         
          
              

                        
                       
             
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
        




       
              </div>  
                     
                    
         
   

           

              

            
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\E-Care\resources\views/doctor/prescription.blade.php ENDPATH**/ ?>