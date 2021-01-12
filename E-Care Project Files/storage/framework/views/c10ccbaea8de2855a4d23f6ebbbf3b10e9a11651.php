<?php $__env->startSection('pagetitle', 'Welcome'); ?>
<?php $__env->startSection('content'); ?>
<div class="container front-panel py-4">
    <div class="row justify-content-center">
        <div class="col-md welcome">
            <div class="row justify-content-center">
                <img style="max-width:60%;margin-top:10%" class="animated slideInLeft mb-4" src="<?php echo e(asset('img/front.png')); ?>" alt="">
            </div>
            
            <h3 class="text-secondary text-center animated zoomIn">Your Parcel Our Services</h3>
        </div>
        <div class="col-md welcome animated zoomIn text-center text-secondary" style="margin-top:9%">
            
            <h6>Welcome to</h6>
            <div class="row justify-content-center">
            
                <h1 class="brown-text">iParcel</h1>
            </div>
        <img style="max-width:10%" src="<?php echo e(asset('img/icon.png')); ?>" alt="">
            <p style="margin-top:5%">An advanced online digital parcel service</p>
            <div class="row justify-content-center">
                <button onclick="window.location.href='/login'" class="btn btn-unique">LOGIN</button>
                <button onclick="window.location.href='/customer/register'" class="btn btn-mdb-color">REGISTER</button>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Parcel-Manager\resources\views/welcome.blade.php ENDPATH**/ ?>