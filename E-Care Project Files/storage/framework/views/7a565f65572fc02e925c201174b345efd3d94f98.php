
<?php $__env->startSection('pagetitle', 'Conversation'); ?>
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
        <i class="fas fa-hospital-user fa-sm"></i>
      </div>
      <div class="sidebar-brand-text mx-3">Patient Panel</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item ">
      <a class="nav-link" href="/patient/dashboard">
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
          
          <a class="collapse-item" href="\patient\appointments\create"><i class="fas fa-file-medical"></i> &nbsp;Make Appointment</a>
          <a class="collapse-item" href="\patient\appointments\all"><i class="fas fa-paste"></i> &nbsp;All Appointments</a>
          <a class="collapse-item" href="\patient\appointments\status"><i class="fas fa-eye"></i> &nbsp;Check Status</a>
         
          
        </div>
      </div>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="\patient\messages" aria-expanded="true" aria-controls="patient">
          <i class="fab fa-facebook-messenger"></i>
        <span>MESSAGES</span>
      </a>

    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#department" aria-expanded="true" aria-controls="Branch">
          <i class="fas fa-clinic-medical"></i>
        <span>DEPARTMENTS</span>
      </a>
      <div id="department" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="py-2 collapse-inner rounded">
          
          <a class="collapse-item" href="/patient/department/medicine"><i class="fas fa-pills"></i>&nbsp; Medicine</a>
          <a class="collapse-item" href="/patient/department/cardiology"><i class="fas fa-heartbeat"></i>&nbsp; Cardiology</a>
          <a class="collapse-item" href="/patient/department/cancer"><i class="fas fa-bacterium"></i>&nbsp; Cancer</a>
          <a class="collapse-item" href="/patient/department/diabetics"><i class="fas fa-burn"></i>&nbsp; Diabetics</a>
          <a class="collapse-item" href="/patient/department/neurology"><i class="fas fa-brain"></i>&nbsp; Neurology</a>
          <a class="collapse-item" href="/patient/department/gynaecology"><i class="fas fa-baby"></i>&nbsp; Gynaecology</a>
          <a class="collapse-item" href="/patient/department/child"><i class="fas fa-child"></i>&nbsp; Child/Pediatric</a>
          <a class="collapse-item" href="/patient/department/dermatology"><i class="fas fa-allergies"></i>&nbsp; Dermatology</a>
          <a class="collapse-item" href="/patient/department/urology"><i class="fas fa-bacteria"></i>&nbsp; Urology</a>
          <a class="collapse-item" href="/patient/department/ophthalmology"><i class="fas fa-eye"></i>&nbsp; Ophthalmology</a>
          <a class="collapse-item" href="/patient/department/all"><i class="fas fa-list"></i>&nbsp; All Departments</a>
          
          
        </div>
      </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#doctor" aria-expanded="true" aria-controls="patient">
          <i class="fas fa-user-md"></i>
        <span>DOCTORS</span>
      </a>
      <div id="doctor" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class=" py-2 collapse-inner rounded">
          
          <a class="collapse-item" href="\patient\doctors\all"><i class="fas fa-user-md"></i> &nbsp;All Doctors</a>
         
          
        </div>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="\patient\medicines" aria-expanded="true" aria-controls="patient">
          <i class="fas fa-pills"></i>
        <span>MEDICINES</span>
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
      <a class="nav-link" href="\patient\history">
        <i class="fas fa-history"></i>
        <span>HISTORY</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="\patient\reports">
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
            <a class="collapse-item" href="\patient\profile\settings"><i class="fas fa-user-cog"></i> &nbsp;Account Settings</a>
            <a class="collapse-item" href="\patient\profile\password"><i class="fas fa-user-lock"></i> &nbsp;Change Password</a>
            
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
    
        <h4 class="text-center"> Appointment#10112<?php echo e($id); ?></h4>

          <div class="card-body branch_add">
         
            <?php if(session('status')): ?>
            <div class="alert alert-success alert-dismissible fade show text-center font-weight-bold small" role="alert">
                <?php echo e(session('status')); ?> <i class="far fa-check-circle"></i>
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

        <?php $__currentLoopData = $conversations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $conversation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <hr>
        <div class="row">
            
                <span class="indigo-text font-weight-bold"><?php echo e($conversation->sender); ?></span>
                
            
        </div>
        <div class="row">
            <span><?php echo e($conversation->message); ?></span>
        </div>
                <div class="row mb-4">
            <span class="text-secondary" style="font-size:10px;"><?php echo e($conversation->created_at); ?></span>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         
            <form action="/patient/appointments/conversation" method="POST">
            <?php echo csrf_field(); ?>
                <div class="form-group">
                    
                    <textarea placeholder="Type your message . . ." name="message" class="form-control" id="exampleFormControlTextarea1" rows="2"autofocus></textarea>
                  </div>
            <div class="form-group-row">
                <input type="hidden" name="sender" value="<?php echo e(Auth::guard('patient')->user()->name); ?>">
                <input type="hidden" name="appointment_id" value="<?php echo e($id); ?>">
                <input type="hidden" name="receiver" value="<?php echo e($receiver); ?>">
                <input type="submit" class="btn btn-unique MyButton" value="SEND"/>
            </div>
             </form>
        
        




       
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\E-Care\resources\views/patient/appointments/conversation.blade.php ENDPATH**/ ?>