
<?php $__env->startSection('pagetitle', 'Customer Login'); ?>
<?php $__env->startSection('content'); ?>
<div class="container py-4 Poppins" >
    <div class="row justify-content-center" >
        <div class="col-md-9">
          
            
                <div class="jumbotron" style="padding-top:10%;padding-bottom:10%; margin-bottom:0px;">


                
                            
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
                         <div class="row justify-content-center" style="margin-bottom:1%;">
                            <i class=" mdb-color-text fas fa-users fa-3x text-center"></i>
                        </div> 
                        <div class="row justify-content-center" style="margin-bottom:5%;">
                            <h4 class="mdb-color-text">Customer Login</h4>
                        </div>
                    <form method="POST" action="<?php echo e(route($loginRoute)); ?>">
                        <?php echo csrf_field(); ?>
                        
                        <div class="form-group row justify-content-center">
                           

                            <div class="col-md-5">
                                <input placeholder="Email" id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>

                                <?php $__errorArgs = ['email'];
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
                          

                            <div class="col-md-5">
                                <input placeholder="Password" id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password">

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

                        <div class="form-group row justify-content-center">
                            <div class="col-md-5">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>

                                    <label class="form-check-label mdb-color-text" for="remember">
                                        <?php echo e(__('Remember Me')); ?>

                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-4 justify-content-center">
                            <div class="col-md-5">
                                <button type="submit" class="btn btn-unique MyButton btn-block">
                                    <?php echo e(__('Login')); ?>

                                </button>

                                <?php if(Route::has('password.request')): ?>
                                    <a class="btn btn-link font-weight-bold" href="<?php echo e(route('password.request')); ?>"><small>
                                        <?php echo e(__('Forgot Your Password?')); ?></small>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group row justify-content-center">
                            <div class="col-md-5">
                              <a style="font-size:10px!important;" class="btn btn-sm btn-block btn-blue-grey text-white  waves-effect" onclick="window.location.href='/auth/google'" ><img src="https://img.icons8.com/color/16/000000/google-logo.png"> &nbsp;&nbsp;Sign in with Google&nbsp;&nbsp;</a> 
                            </div>
                            
                        </div>
                        <div class="form-group row justify-content-center">
                            <div class="col-md-5">
                                <a style="font-size:10px!important;" class="btn btn-sm btn-block  btn-indigo waves-effect" onclick="window.location.href='/auth/linkedin'"><img src=https://img.icons8.com/fluent/16/000000/linkedin.png> &nbsp;&nbsp;Sign in with Linkedin</a> 
                              </div>
                            
                        </div>
                       
                    </form>
                   
                </div>
                
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\E-Care\resources\views/customer/login.blade.php ENDPATH**/ ?>