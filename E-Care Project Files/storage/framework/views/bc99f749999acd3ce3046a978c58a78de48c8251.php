<?php $__env->startSection('pagetitle', 'Welcome'); ?>
<?php $__env->startSection('content'); ?>
<div class="container front-panel py-4">
    <div class="row justify-content-center">
        <div class="col-md welcome animated zoomIn text-center text-secondary" style="margin-top:10%">
            <h6>Welcome to</h6>
            <div class="row justify-content-center">
                <h1 class="brown-text">E-Care</h1>
            </div>
            <img style="max-width:20%" src="<?php echo e(asset('img/front.png')); ?>" alt="">
            <p style="margin-top:5%">An advanced online digital health service</p>
            <div class="row justify-content-center">
                <button onclick="window.location.href='/login'" class="btn btn-light-green">LOGIN</button>
                <button onclick="window.location.href='/patient/register'" class="btn btn-dark-green">REGISTER</button>
            </div>
        </div>
        <div class="col-md welcome">
            <div class="row justify-content-center">
                <img style="max-width:45%;margin-top:5%" class="animated slideInRight mb-4"
                    src="<?php echo e(asset('img/health.jpg')); ?>" alt="">
            </div>
            <h3 class="text-secondary text-center animated zoomIn">Your Health Our Services</h3>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\E-Care\resources\views/welcome.blade.php ENDPATH**/ ?>