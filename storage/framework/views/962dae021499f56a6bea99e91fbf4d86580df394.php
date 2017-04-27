<?php $__env->startSection('fail'); ?>
    <p class='fail'><?php echo e(session()->get('fail')); ?></p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('/layouts/login_form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>