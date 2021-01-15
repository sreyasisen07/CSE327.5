
<?php $__env->startSection('pagetitle', 'Check Status'); ?>
<?php $__env->startSection('styles'); ?>
<link href="<?php echo e(asset('css/vendor/admin.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
    <?php $__env->startSection('content'); ?>


    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin/dashboard">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-user-secret fa-sm"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Control Panel</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="/admin/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>DASHBOARD</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Manage
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#doctor" aria-expanded="true"
                    aria-controls="Branch">
                    <i class="fas fa-user-md"></i>
                    <span>DOCTOR</span>
                </a>
                <div id="doctor" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="py-2 collapse-inner rounded">

                        <a class="collapse-item" href="/admin/doctor/all"><i class="fas fa-list-ul"></i> &nbsp;All
                            Doctors</a>
                        <a class="collapse-item" href="/admin/doctor/add"><i class="fas fa-user-plus"></i> &nbsp;Add
                            Doctor</a>
                        <a class="collapse-item" href="/admin/doctor/remove"><i class="fas fa-user-minus"></i>
                            &nbsp;Remove Doctor</a>

                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#patient"
                    aria-expanded="true" aria-controls="Customer">
                    <i class="fas fa-fw fa-hospital-user"></i>
                    <span>PATIENT</span>
                </a>
                <div id="patient" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class=" py-2 collapse-inner rounded">

                        <a class="collapse-item" href="\admin\patient\all"><i class="fas fa-list-ul"></i> &nbsp;All
                            Patients</a>
                        <a class="collapse-item" href="\admin\patient\add"><i class="fas fa-user-plus"></i> &nbsp;Add
                            Patient</a>
                        <a class="collapse-item" href="\admin\patient\block"><i class="fas fa-user-times"></i>
                            &nbsp;Block Patient</a>

                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Operations
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#appointment"
                    aria-expanded="true" aria-controls="Shipment">
                    <i class="fas fa-prescription"></i>
                    <span>APPOINTMENTS</span>
                </a>
                <div id="appointment" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class=" py-2 collapse-inner rounded">
                        <a class="collapse-item" href="\admin\appointment\all"><i class="fas fa-file-prescription"></i>
                            &nbsp;All Appointments</a>
                        <a class="collapse-item" href="\admin\appointment\live"><i class="fas fa-eye"></i> &nbsp;Live
                            Status</a>
                        <a class="collapse-item" href="\admin\appointment\request"><i
                                class="fas fa-comment-medical"></i> &nbsp;Appointment Requests</a>

                    </div>
                </div>
            </li>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="\admin\departments">
                    <i class="fas fa-clinic-medical"></i>
                    <span>DEPARTMENTS</span>
                </a>

            </li>

            <li class="nav-item">
                <a class="nav-link" href="\admin\medicines">
                    <i class="fas fa-pills"></i>
                    <span>MEDICINES</span>
                </a>

            </li>


            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Account"
                    aria-expanded="true" aria-controls="Account">
                    <i class="fas fa-user-secret"></i>
                    <span>ACCOUNT</span></a>
                <div id="Account" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class=" py-2 collapse-inner rounded">
                        <a class="collapse-item" href="\admin\profile\view"><i class="fas fa-user-cog"></i>
                            &nbsp;Account Settings</a>
                        <a class="collapse-item" href="\admin\profile\password"><i class="fas fa-user-lock"></i>
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

                    <div class="card">
                        <div class="card-header">
                            <div class="row justify-content-center">
                                <span class="font-weight-bold small"></span>
                            </div>
                        </div>
                        <div class="card-body" style="padding-top:12%;height:80vh;">

                            <div class="row justify-content-center mb-4">
                                <h5 class="mdb-color-text"><i class="fas fa-search"></i> Check status</h5>
                            </div>
                            
                            <?php if(session('status')): ?>
                                <div class="alert alert-success alert-dismissible fade show text-center font-weight-bold small"
                                    role="alert">
                                    <?php echo e(session('status')); ?>

                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <?php endif; ?>

                            
                            <?php if(session('error')): ?>
                                <div class="row justify-content-center">
                                    <div class="col-md-4">
                                        <div class="alert alert-danger alert-dismissible fade show text-center font-weight-bold small"
                                            role="alert">
                                            <?php echo e(session('error')); ?>

                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>


                            <?php endif; ?>

                            <form action="/admin/appointment/live" method="POST">

                                <?php echo csrf_field(); ?>

                                <div class="form-group row mb-4">
                                    <label for="appointment_id"
                                        class="col-md-4 col-form-label text-md-right"><?php echo e(__('Appointment ID')); ?></label>

                                    <div class="col-md-4">
                                        <input id="appointment_id" type="text"
                                            class="form-control <?php $__errorArgs = ['appointment_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                            name="appointment_id" autofocus>

                                        <?php $__errorArgs = ['appointment_id'];
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

                                <div class="form-group row justify-content-center">

                                    <div class="col-md-4">
                                        <input type="submit" class="btn btn-indigo btn-block MyButton" value="Check">
                                    </div>

                                </div>

                            </form>

                            <div class="row justify-content-center">
                                <div class="col-md-4">
                                    <span class="mdb-color-text small">Enter appointment ID & view the current
                                        status</span>
                                </div>

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
        $(document).ready(function () {
            $('#example').DataTable();
        });

    </script>


    <?php $__env->stopSection(); ?>
        <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\E-Care\resources\views/admin/appointment/live.blade.php ENDPATH**/ ?>