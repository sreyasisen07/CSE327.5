
<?php $__env->startSection('pagetitle', 'Calculator'); ?>
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
      <li class="nav-item">
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
      <li class="nav-item active">
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

                <div class="card Poppins">
                    <div class="card-body" style="height:80vh;padding-top:10%;padding-left:10%;padding-right:10%;">
                        <h5 class="text-center">iParcel Charge Calculator</h5><hr>
                       
                        <div class="card border-left-primary shadow py-2">
                            <div class="card-body Poppins">
                                <div class="table-responsive">
                                <table class="table table-striped table-bordered table-sm" style="text-align:center!important;">
                                    <thead class="primary-color white-text text-xsmall">
                                      <tr>
                                        <th scope="col">Weight</th>
                                        <th scope="col">Delivery</th>
                                        <th scope="col">Charge</th>
                                        
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        
                                      <td><?php echo e($weight); ?> KG</td>
                                      <td><?php echo e($delivery); ?></td>
                                      <td><?php echo e($charge); ?>.00৳</td>
                                      </tr>
                                      
                                    </tbody>
                                  </table>
                                </div>
                                   
                      <div class="row justify-content-center mb-4">
                        <button onclick="goBack()" class="btn btn-primary btn-sm">Calculate Again</button>
                      </div>
                            </div>
                        </div>

                      

                    
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
    
    function goBack() {
       window.history.back();
         }
  </script>

<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Parcel-Manager\resources\views/customer/charge.blade.php ENDPATH**/ ?>