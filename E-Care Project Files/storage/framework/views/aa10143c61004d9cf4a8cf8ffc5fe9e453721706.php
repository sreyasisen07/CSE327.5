
<?php $__env->startSection('pagetitle', 'Appointments'); ?>
<?php $__env->startSection('styles'); ?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<link href="<?php echo e(asset('css/vendor/admin.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/patient/dashboard">
        <div class="sidebar-brand-icon">
          <i class="fas fa-user-secret fa-sm"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Control Panel</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
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
      <li class="nav-item active">
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
        <h1 class="h3 mb-2 text-gray-800 text-center">Appointments</h1>
        

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">All Appointment Informations</h6>
          </div>
          <div class="card-body">
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
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%;text-align:center!important;">
                  <thead class="small text-white" style="background:#4285F4 !important;">
                        <tr>
                            <th class="small-table">Appointment ID</th>
                            <th class="small-table">Doctor Name</th>
                            <th class="small-table">Designation</th>
                            <th class="small-table">Department</th>
                            <th class="small-table">Gender</th>
                            <th class="small-table">Status</th>
                            <th class="small-table">Action</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                      <?php $__currentLoopData = $appointments ?? ''; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appointment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <tr>
                          <td>10112<?php echo e($appointment->id); ?></td>
                          <td>Dr. <?php echo e($appointment->doctor_name); ?></td>
                          <td><?php echo e($appointment->doctor_designation); ?></td>
                          <td><?php echo e($appointment->department_name); ?></td>
                          <td><?php echo e($appointment->doctor_gender); ?></td>
                          <td><span style="background-color:#c8e6c9; color:#1b5e20;padding:0.5%;" class="font-weight-bold small"><?php echo e($appointment->status); ?></span></td>
                          <td>


                            <form action="/patient/appointment/view" method="GET">
                                          
                                <input type="hidden" name="appointment_id" value="<?php echo e($appointment->id); ?>">
                                <input class="small btn-indigo" title="View Details" type="submit" class="small" value="View">
                            </form>
                          </td>
                         

                        </tr>

                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       
                    </tbody>
                    <tfoot>
                        <tr>
                            <th class="small-table">Appointment ID</th>
                            <th class="small-table">Doctor Name</th>
                            <th class="small-table">Designation</th>
                            <th class="small-table">Department</th>
                            <th class="small-table">Gender</th>
                            <th class="small-table">Status</th>
                            <th class="small-table">Action</th>
                        </tr>
                    </tfoot>
                </table>

            </div>
          </div>
        </div>


              </div>
          </div>
    </div>
</div>
<?php $__env->startSection('scripts'); ?>
<script src="<?php echo e(asset('js/vendor/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/vendor/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/vendor/admin.js')); ?>"></script>
   
    <script type="text/javascript">
      $(document).ready(function() {
          $('#example').DataTable();
      } );
    </script>   
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\E-Care\resources\views//patient/appointments/all.blade.php ENDPATH**/ ?>