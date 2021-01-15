
<?php $__env->startSection('pagetitle', 'Confirm Request'); ?>
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
          
            
          <div class="card Poppins">
            <div class="card-header font-weight-bold"></div>
              <div class="card-body branch_add">
             
                <div class="row mb-4">
                  <div class="col-md-10">
                    <img style="max-width:20%!important;text-align:left;" src="<?php echo e(asset('img/logo.png')); ?>" alt="">
                  </div>
                  <div class="col-md-2 small">
                  <span>REQUEST ID :</span><span class="mdb-color-text" style="font-weight:bold;"> &nbsp;<?php echo e($parcel_id); ?></span>
                  </div>
                </div>
                <div class="row justify-content-center Poppins mb-4">

                  <h5 class="mdb-color-text font-weight-bold">Request Summary</h5>

                </div>
                <div class="row justify-content-center">
                  <div class="barcode">
                  
                    <?php echo DNS1D::getBarcodeHTML($parcel_id, "C128",1.4,22); ?>

                    <p class="small text-center"><?php echo e($parcel_id); ?></p>
                </div>
                </div>
                <hr>
                <div class="row justify-content-center mb-4">
                  <div class="col-md-4">
                    <h6 class="font-weight-bold" ><i class="fas fa-user-check"></i> Sender Informations</h6><hr>
                    <div class="small">
                    <span class="font-weight-bold"> Name : </span><span><?php echo e($sender_name); ?></span><br>
                    <span class="font-weight-bold"> Phone : </span><span><?php echo e($sender_phone); ?></span><br>
                    <span class="font-weight-bold"> Address : </span><span><?php echo e($sender_address); ?></span>
                    <hr>
                    </div>
                  </div>
                  <div class="col-md-4">
                    
                    <h6 class="font-weight-bold" ><i class="fas fa-user-tag"></i> Recipient Informations</h6><hr>
                    <div class="small">
                      <span class="font-weight-bold"> Name : </span><span><?php echo e($recipient_name); ?></span><br>
                      <span class="font-weight-bold"> Phone : </span><span><?php echo e($recipient_phone); ?></span><br>
                      <span class="font-weight-bold"> Address : </span><span><?php echo e($recipient_address); ?></span>
                      <hr>
                      </div>
                  </div>
                  <div class="col-md-4">
                    <h6 class="font-weight-bold" ><i class="fas fa-box-open"></i> Parcel Informations</h6><hr>
                    <div class="small">
                      <span class="font-weight-bold"> Zone : </span><span><?php echo e($zone); ?></span><br>
                    <span class="font-weight-bold"> Description : </span><span><?php echo e($details); ?></span><br>
                    <span class="font-weight-bold"> Type : </span><span><?php echo e($type); ?></span><br>
                    
                    <hr>
                    </div>
                  </div>
                </div>
                <div class="row mb-4">
                  <div class="col-md-6">
                      <span class="h6 raleway"> Delivery : </span><span class="h6 font-weight-bold red-text"><?php echo e($delivery); ?></span>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    
                       <span class="h5 raleway">Charge : </span><span class="h5 font-weight-bold mdb-color-text"> &nbsp;<?php echo e($amount); ?>.00৳</span>
                    
                  </div>
                  <div class="col-md-6">
                    <div class="d-flex flex-row-reverse">
                      <div class="p-6">
                       
                        <form action="/customer/parcel/confirm" method="GET">
                          <?php echo csrf_field(); ?>
                        <input type="hidden" name="parcel_id" value="<?php echo e($parcel_id); ?>">
                          <input type="hidden" name="sender_name" value="<?php echo e($sender_name); ?>">
                          <input type="hidden" name="sender_phone" value="<?php echo e($sender_phone); ?>">
                          <input type="hidden" name="sender_address" value="<?php echo e($sender_address); ?>">
                          <input type="hidden" name="recipient_name" value="<?php echo e($recipient_name); ?>">
                          <input type="hidden" name="recipient_phone" value="<?php echo e($recipient_phone); ?>">
                          <input type="hidden" name="recipient_address" value="<?php echo e($recipient_address); ?>">
                          <input type="hidden" name="zone" value="<?php echo e($zone); ?>">
                          <input type="hidden" name="type" value="<?php echo e($type); ?>">
                          <input type="hidden" name="delivery" value="<?php echo e($delivery); ?>">
                          <input type="hidden" name="details" value="<?php echo e($details); ?>">
                          <input type="hidden" name="status" value="Requested,Pending Approval">
                          <input type="hidden" name="notes" value="<?php echo e($notes); ?>">
                          <input type="hidden" name="amount" value="<?php echo e($amount); ?>">



                          <input type="submit" class="btn btn-dark-green"   value="CONFIRM"/>
                        </form>
                      </div>
                      
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
   
    
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Parcel-Manager\resources\views/customer/parcel/confirm.blade.php ENDPATH**/ ?>