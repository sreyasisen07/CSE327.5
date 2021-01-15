
<?php $__env->startSection('pagetitle', 'Parcel Info'); ?>
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
            
            <a class="collapse-item" href="\customer\branch\parcels"><i class="fas fa-list-ul"></i> &nbsp;All Branches</a>
           
            
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

                 
                       
                        
                    <div class="card Poppins">
                        
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
                        
                        <?php $__currentLoopData = $shipments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shipment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <div class="card Poppins mb-4">
                            <div class="card-header small">
                                <div class="row">
                                    <div class="col-md-6" style="text-align:left;">
                                        <span>Request Date : </span></span><span class="font-weight-bold mdb-color-text"> <?php echo e($shipment->created_at); ?></span>
                                     </div>
                                 <div class="col-md-6" style="text-align:right;">
                                     <span>Parcel ID :</span><span class="font-weight-bold mdb-color-text"> <?php echo e($shipment->parcel_id); ?></span>
                                 </div>
                                </div>
                                
                               
                            </div>
                            <div class="card-body" style="padding:7%;">
                                <div class="row">
                                    <div class="col-md-6">
                                        <span class=" h5 blue-grey-text"><i class="fas fa-user-tag"></i> Recipient Info</span><hr>
                                    </div>
                                    <div class="col-md-6">
                                        <span class=" h5 blue-grey-text"><i class="fas fa-box-open"></i> Shipment Info</span><hr>
                                    </div>

                                </div>
                                <div class="row small">
                                    <div class="col-md-6 parcel">
                                        <span class="font-weight-bold">Name : </span><span><?php echo e($shipment->recipient_name); ?></span><hr>
                                    </div>
                                    <div class="col-md-6 parcel">
                                        <span class="font-weight-bold">Details : </span><span><?php echo e($shipment->details); ?></span><hr>
                                    </div>

                                </div>
                                <div class="row small">
                                    <div class="col-md-6 parcel">
                                        <span class="font-weight-bold">Phone : </span><span><?php echo e($shipment->recipient_phone); ?></span><hr>
                                    </div>
                                    <div class="col-md-6 parcel">
                                        <span class="font-weight-bold"> Delivery Type : </span><span><?php echo e($shipment->delivery); ?></span><hr>
                                    </div>

                                </div>
                                <div class="row small">
                                    <div class="col-md-6 parcel">
                                        <span class="font-weight-bold">Address : </span><span><?php echo e($shipment->recipient_address); ?></span><hr>
                                    </div>
                                    <div class="col-md-6 parcel">
                                        <span class="font-weight-bold">Catagory : </span><span><?php echo e($shipment->type); ?></span><hr>
                                    </div>

                                </div>
                                <div class="row small">
                                    <div class="col-md-6 parcel">
                                        <span class="font-weight-bold">Zone : </span><span><?php echo e($shipment->zone); ?></span><hr>
                                        
                                    </div>
                                    <div class="col-md-6 parcel">
                                        <span class="font-weight-bold"> Notes : </span><span><?php echo e($shipment->notes); ?></span><hr>
                                    </div>

                                </div>
                                <div class="row small mb-4">
                                    <div class="col-md-6 parcel">
                                        <span class="font-weight-bold"> Date : </span><span><?php echo e($shipment->created_at); ?></span><hr>
                                        
                                    </div>
                                    <div class="col-md-6 parcel">
                                        <span class="font-weight-bold"> Pickup Address : </span><span><?php echo e($shipment->sender_address); ?></span><hr>
                                    </div>

                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-6 parcel">
                                        <span class="font-weight-bold">Parcel Status : </span><span style="background-color:#c8e6c9; color:#1b5e20;padding:0.5%;" class="font-weight-bold small">&nbsp;&nbsp; <?php echo e($shipment->status); ?> &nbsp;&nbsp;</span>
                                    </div>
                                    <div class="col-md-6 parcel">
                                        <span class="font-weight-bold raleway">Charge : </span><span class="h5 font-weight-bold mdb-color-text"> &nbsp;<?php echo e($shipment->amount); ?>৳</span>
                                    </div>

                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <span class="font-weight-bold">Payment Status : </span><span style="background-color:#c8e6c9; color:#1b5e20;padding:0.5%;" class="font-weight-bold small">&nbsp;<?php echo e($order->payment_status); ?>&nbsp;</span>
                                       
                                      
                                    </div>
                                    <div class="col-md-6">
                                        <div class="barcode">
                  
                                            <?php echo DNS1D::getBarcodeHTML($shipment->parcel_id, "C128",1.4,22); ?>

                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-end">
                                    <div class="col-md-9">
                                       
                                    </div>
                                    <div class="col-md-3">
                                    <form action="/customer/parcel/view?parcel_id=<?php echo e($shipment->parcel_id); ?>" method="POST">

                                            <?php echo csrf_field(); ?>
                                            <input type="hidden" name="parcel_id" value="<?php echo e($shipment->parcel_id); ?>">
                                          <input type="submit" class="btn btn-unique btn-sm" value="Delete Request">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>



                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                    
                            
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Parcel-Manager\resources\views/customer/parcel/view.blade.php ENDPATH**/ ?>