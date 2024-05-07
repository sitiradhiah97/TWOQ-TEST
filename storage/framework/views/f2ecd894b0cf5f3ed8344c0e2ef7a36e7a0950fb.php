
<?php $__env->startSection('content'); ?>


    <div class="card center">
        <div class="card-header text-center"><h1>TWO-Q</h1></div>
        <div class="card-bosy">

        <div class="col-md-12  ">
        <?php if(session('success')): ?>
        <p class="alert alert-success"><?php echo e(session('success')); ?></p>
        <?php endif; ?>
        <?php if($errors->any()): ?>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p class="alert alert-danger"><?php echo e($err); ?></p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>

        <form action="<?php echo e(route('check')); ?>" method="post" style="border:1px solid #ccc">
            <div class="px-5 mb-5 mt-5">
            <h2>Sign In</h2>
            <p>Please fill in this form to Sign In an account.</p>
            <hr>
            <?php echo csrf_field(); ?>

            

            <div class="mb-3">
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" id="email" class="form-cntrol" > <br>
            </div>

            <div class="mb-3">
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" id="password" class="form-cntrol" ></br>
            </div>

            <div class="clearfix">
            <button type="submit" class="btn btn-primary" value="Login">Sign In</button>
            </div>
            </div>
        </div>
        </form>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\twoq\resources\views/login/index.blade.php ENDPATH**/ ?>