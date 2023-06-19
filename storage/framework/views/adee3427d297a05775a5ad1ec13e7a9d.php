<?php $__env->startSection('content'); ?>
<body>
    <div class="container mt-4 mb-4">
      <div class="row">
        <div class="col-3">
        <img src="<?php echo e(Vite::asset('resources/images/laily.jpg')); ?>" alt="image" class="img-thumbnail rounded-circle">
        </div>
        <div class="col-9">
          <div class="container text-dark">
          <h4>About me</h4>
            <p> <?php echo e($desc); ?> </p>
          <h4>Contact</h4>
            <p><i class="fa fa-instagram"></i> <?php echo e($instagram); ?> </p>
            <p><i class="fa fa-facebook"></i> <?php echo e($namaa); ?></p>
            <p><i class="fa fa-envelope"></i> <?php echo e($email); ?></p>
          </div>
      </div>
    </div>
</div>
</body>
<script src="https://kit.fontawesome.com/206142bfe3.js" crossorigin="anonymous"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\framework\laravel-application\aaa\resources\views/profile.blade.php ENDPATH**/ ?>