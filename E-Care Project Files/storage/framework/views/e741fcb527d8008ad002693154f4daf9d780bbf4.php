<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'E-Care')); ?> | <?php echo $__env->yieldContent('pagetitle'); ?></title>
    <link rel="icon" href="<?php echo e(asset('img/front.png')); ?>" type="image/x-icon">
    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

    <?php echo $__env->yieldContent('styles'); ?>
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/responsive.css')); ?>" rel="stylesheet">
    <script src="https://kit.fontawesome.com/753fbd11bf.js" crossorigin="anonymous"></script>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm sticky-top"
            style=" color:white!important; background:rgb(255, 255, 255);">
            <div class="container">
                <a class="navbar-brand" href="/"><img class="navbar-brand"
                        src="<?php echo e(asset('img/logo.png')); ?>" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item">
                            <a class="nav-link" href="/services"><?php echo e(__('Services')); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about"><?php echo e(__('About')); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact"><?php echo e(__('Contact')); ?></a>
                        </li>

                        <!-- Authentication Links -->
                        <?php if(Auth::guard('doctor')->check()): ?>
                            <li class="nav-item dropdown">
                                <a id="adminDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::guard('doctor')->user()->name); ?><small>
                                        (DOCTOR)</small> <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="adminDropdown">
                                    <a href="<?php echo e(route('doctor.dashboard')); ?>"
                                        class="dropdown-item">Dashboard</a>
                                    <a class="dropdown-item" href="#"
                                        onclick="event.preventDefault();document.querySelector('#doctor-logout-form').submit();">
                                        Logout
                                    </a>
                                    <form id="doctor-logout-form"
                                        action="<?php echo e(route('doctor.logout')); ?>" method="post"
                                        style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>

                        <?php elseif(Auth::guard('admin')->check()): ?>
                            <li class="nav-item dropdown">
                                <a id="adminDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::guard('admin')->user()->name); ?><small>
                                        (ADMIN)</small> <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="adminDropdown">
                                    <a href="<?php echo e(route('admin.dashboard')); ?>"
                                        class="dropdown-item">Dashboard</a>
                                    <a class="dropdown-item" href="#"
                                        onclick="event.preventDefault();document.querySelector('#admin-logout-form').submit();">
                                        Logout
                                    </a>
                                    <form id="admin-logout-form" action="<?php echo e(route('admin.logout')); ?>"
                                        method="post" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>

                        <?php elseif(Auth::guard('patient')->check()): ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::guard('patient')->user()->name); ?><small>
                                        (PATIENT)</small><span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a href="<?php echo e(route('patient.dashboard')); ?>"
                                        class="dropdown-item">Dashboard</a>
                                    <a class="dropdown-item" href="#"
                                        onclick="event.preventDefault();document.querySelector('#patient-logout-form').submit();">
                                        Logout
                                    </a>
                                    <form id="patient-logout-form"
                                        action="<?php echo e(route('patient.logout')); ?>" method="POST"
                                        style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php else: ?>
                            <li class="nav-item">
                                <a class="nav-link" href="/login">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="<?php echo e(route('patient.register')); ?>">Register</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            <?php echo $__env->yieldContent('content'); ?>
        </main>
        <!-- Footer -->
        <footer class="page-footer mdb-color font-small">

            <!-- Footer Links -->
            <div class="container">

                <!-- Grid row-->
                <div class="row text-center d-flex justify-content-center pt-5 mb-3">

                    <!-- Grid column -->
                    <div class="col-md-2 mb-3">
                        <span class="text-uppercase font-weight-bold small">
                            <a href="/services">Services</a>
                        </span>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 mb-3">
                        <span class="text-uppercase font-weight-bold small">
                            <a href="/about">About</a>
                        </span>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 mb-3">
                        <span class="text-uppercase font-weight-bold small">
                            <a href="#!">Contact</a>
                        </span>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 mb-3">
                        <span class="text-uppercase font-weight-bold small">
                            <a href="#!">Privacy Policy</a>
                        </span>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 mb-3">
                        <span class="text-uppercase font-weight-bold small">
                            <a href="#!">Terms of Service</a>
                        </span>
                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row-->
                <hr class="rgba-white-light" style="margin: 0 15%;">


                <!-- Grid row-->
                <hr class="clearfix d-md-none rgba-white-light" style="margin: 10% 15% 5%;">

                <!-- Grid row-->
                <div class="row pb-3">

                    <!-- Grid column -->
                    <div class="col-md-12">

                        <div class="mb-5 flex-center">

                            <!-- Facebook -->
                            <a class="fb-ic">
                                <i class="fab fa-facebook-f fa-lg white-text mr-4"> </i>
                            </a>
                            <!-- Twitter -->
                            <a class="tw-ic">
                                <i class="fab fa-twitter fa-lg white-text mr-4"> </i>
                            </a>
                            <!-- Google +-->
                            <a class="gplus-ic">
                                <i class="fab fa-google-plus-g fa-lg white-text mr-4"> </i>
                            </a>
                            <!--Linkedin -->
                            <a class="li-ic">
                                <i class="fab fa-youtube fa-lg white-text mr-4"> </i>
                            </a>
                            <!--Instagram-->
                            <a class="ins-ic">
                                <i class="fab fa-instagram fa-lg white-text mr-4"> </i>
                            </a>
                            <!--Pinterest-->
                            <a class="pin-ic">
                                <i class="fab fa-pinterest fa-lg white-text"> </i>
                            </a>

                        </div>

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row-->

            </div>
            <!-- Footer Links -->

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">
                <div class="row justify-content-center">
                    <p>All Rights Reserved by E-Care Inc ©2021</p>

                </div>

            </div>
            <!-- Copyright -->

        </footer>
        <!-- Footer -->
    </div>
    <?php echo $__env->yieldContent('scripts'); ?>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\E-Care\resources\views/layouts/app.blade.php ENDPATH**/ ?>