
<?php $__env->startSection('pagetitle', 'Change Password'); ?>
<?php $__env->startSection('styles'); ?>
<link href="<?php echo e(asset('css/vendor/admin.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
    <?php $__env->startSection('content'); ?>
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
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#appointment"
                    aria-expanded="true" aria-controls="patient">
                    <i class="fas fa-prescription"></i>
                    <span>APPOINTMENTS</span>
                </a>
                <div id="appointment" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class=" py-2 collapse-inner rounded">


                        <a class="collapse-item" href="\doctor\appointments\all"><i class="fas fa-paste"></i> &nbsp;All
                            Appointments</a>
                        <a class="collapse-item" href="\doctor\appointments\requests"><i
                                class="fas fa-comment-medical"></i> &nbsp;Appointment Requests</a>
                        <a class="collapse-item" href="\doctor\appointments\status"><i class="fas fa-eye"></i>
                            &nbsp;Check Status</a>

                    </div>
                </div>
            </li>
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#doctor" aria-expanded="true"
                    aria-controls="patient">
                    <i class="fas fa-hospital-user"></i>
                    <span>PATIENTS</span>
                </a>
                <div id="doctor" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class=" py-2 collapse-inner rounded">

                        <a class="collapse-item" href="\doctor\patients\all"><i class="fas fa-hospital-user"></i>
                            &nbsp;All Patients</a>

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
            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Account"
                    aria-expanded="true" aria-controls="Account">
                    <i class="fas fa-user-secret"></i>
                    <span>ACCOUNT</span></a>
                <div id="Account" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class=" py-2 collapse-inner rounded">
                        <a class="collapse-item" href="\doctor\profile\settings"><i class="fas fa-user-cog"></i>
                            &nbsp;Account Settings</a>
                        <a class="collapse-item" href="\doctor\profile\password"><i class="fas fa-user-lock"></i>
                            &nbsp;Change Password</a>

                    </div>
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


                    <?php if(session('status')): ?>
                        <div class="alert alert-success text-center" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <?php if(session('error')): ?>
                        <div class="alert alert-danger text-center" role="alert">
                            <?php echo e(session('error')); ?>

                        </div>
                    <?php endif; ?>

                    <div class="jumbotron jumbotron-fluid"
                        style="padding-top:20px!important;padding-bottom:20px!important;">
                        <div class="container">
                            <h4 class="text-center">Change Account Password</h4>
                            <hr><br><br>
                            <form method="POST" action="\doctor\profile\password">
                                <?php echo csrf_field(); ?>

                                <div class="form-group row">
                                    <label for="Newpassword"
                                        class="col-md-4 col-form-label text-md-right"><?php echo e(__('New Password')); ?></label>

                                    <div class="col-md-4">
                                        <input id="Newpassword" type="password"
                                            class="form-control <?php $__errorArgs = ['Newpassword'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                            name="Newpassword" autofocus>

                                        <?php $__errorArgs = ['Newpassword'];
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
                                    <label for="Newpassword-confirm"
                                        class="col-md-4 col-form-label text-md-right"><?php echo e(__('Confirm New Password')); ?></label>

                                    <div class="col-md-4">
                                        <input id="Newpassword-confirm" type="password" class="form-control"
                                            name="Newpassword_confirmation" autocomplete="new-password">
                                        <span class="font-weight-bold small" id='message'>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password"
                                        class="col-md-4 col-form-label text-md-right text-danger"><?php echo e(__('Password')); ?></label>

                                    <div class="col-md-4">
                                        <input id="password" placeholder="Enter Account Password" type="password"
                                            class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password"
                                            autocomplete="new-password">

                                        <?php $__errorArgs = ['password'];
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

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <input type="hidden" name="id"
                                            value="<?php echo e(Auth::guard('doctor')->user()->id); ?>">
                                        <button type="submit" class="btn btn-unique MyButton">
                                            <?php echo e(__('Save Changes')); ?>

                                        </button>
                                    </div>
                                </div>

                            </form>

                            <div class="row justify-content-center" style="margin-top:5%; padding-bottom:10%;">
                                <div class="col-md-3">
                                    <a class="font-weight-bold text-danger small"
                                        href="/patient/profile/delete">Deactivate Account</a>
                                </div>
                                <div class="col-md-3">
                                    <a class="font-weight-bold text-primary small"
                                        href="/patient/profile/settings">Change Account Info</a>
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
        $('#Newpassword, #Newpassword-confirm').on('keyup', function () {
            if ($('#Newpassword').val() == $('#Newpassword-confirm').val()) {
                $('#message').html('Matched <i class="fas fa-check-circle"></i>').css('color', 'green');
            } else
                $('#message').html('Not Matching <i class="fas fa-times-circle"></i>').css('color', 'red');
        });

    </script>

    <?php $__env->stopSection(); ?>
        <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\E-Care\resources\views/doctor/profile/password.blade.php ENDPATH**/ ?>