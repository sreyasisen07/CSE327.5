
<?php $__env->startSection('pagetitle', 'Payment'); ?>
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

                <div class="card Poppins">
                    <div class="card-body" style="height:100vh;padding-left:5%;padding-right:5%;">
                        <h3 class="text-center">Payment</h3><hr>
                        <div class="row justify-content-center">
                            <div class="col-md-4">
                                <div class="row justify-content-center">
                                    <h6 class="text-center">Payable Amount : </h6><h6 class="font-weight-bold mdb-color-text"> &nbsp;<?php echo e($amount); ?>.00৳</h6>
                                </div>
                                
                            </div>
                            <div class="col-md-4">
                               
                            </div>
                            <div class="col-md-4 small">
                                <div class="row justify-content-center">
                                    <span>REQUEST ID :</span><span class="mdb-color-text" style="font-weight:bold;"> &nbsp;<?php echo e($parcel_id); ?></span>
                                </div>
                                
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <img style="max-width:15%" src="<?php echo e(asset('img/Bkash.svg')); ?>" alt="">
                           </div>
                           <div class="row justify-content-center">
                            <div class="col">
                              <h6 class="text-center">Please Pay <?php echo e($amount); ?>.00৳ to the below bKash merchant number</h6>
                            </div>
                          
                           
                            
                         </div>
                         <div class="row justify-content-center mb-4">
                            
                          <h5 class="font-weight-bold">01675613100</h5>
                          
                           
                        </div>
                       <form action="/customer/parcel/confirm" method="POST">
                        <?php echo csrf_field(); ?>
                       
                        <div class="row justify-content-center" style="margin-top:5%;">
                          <div class="col-md-4">
                            <div class="form-group">
                              <input id="bkash_number" type="text"  name="bkash_number" class="form-control <?php $__errorArgs = ['bkash_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="bKash Account Number"autofocus  />
                              <?php $__errorArgs = ['bkash_number'];
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
                        </div>
                        
                        <div class="row justify-content-center mb-4">
                          <div class="col-md-4">
                            <div class="form-group">
                              <input id="trxid" type="text"  name="trxid" class="form-control <?php $__errorArgs = ['trxid'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="TrxID Number"  />
                              <?php $__errorArgs = ['trxid'];
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
                        </div>

                        
                           <div class="row justify-content-center mb-2">
                             <div class="col-md-4">
                                
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
                                <input type="hidden" name="payment_status" value="Paid">
                                <input type="hidden" name="amount" value="<?php echo e($amount); ?>">
                                <input type="hidden" name="customer_shipment" value="<?php echo e(Auth::guard('customer')->user()->shipments); ?>">
                                <input type="hidden" name="balance" value="<?php echo e(Auth::guard('customer')->user()->balance); ?>">
                                <input type="hidden" name="id" value="<?php echo e(Auth::guard('customer')->user()->id); ?>">

                              <button type="submit" name="paid" class="btn btn-unique btn-block">SUBMIT</button>
                             </div>
                             
                             
                           </div>
                          </form>
                          <div class="row justify-content-center">
                            <div class="col-md-4">
                              <form action="/customer/parcel/confirm" method="POST">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="trxid" value="N/A">
                                <input type="hidden" name="bkash_number" value="N/A">
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
                                <input type="hidden" name="payment_status" value="Unpaid">
                                <input type="hidden" name="amount" value="<?php echo e($amount); ?>">
                                <input type="hidden" name="due" value="<?php echo e(Auth::guard('customer')->user()->due); ?>">
                                <input type="hidden" name="id" value="<?php echo e(Auth::guard('customer')->user()->id); ?>">
                              <button type="submit" name="unpaid" class="small_btn">Procced without payment <i class="fas fa-sign-out-alt"></i></button>
                              
                            </form>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Parcel-Manager\resources\views/customer/parcel/payment.blade.php ENDPATH**/ ?>