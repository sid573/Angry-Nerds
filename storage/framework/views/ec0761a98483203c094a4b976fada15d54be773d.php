    <?php $__env->startSection('content'); ?>
         <h1>
            <?php echo e($tasks->body); ?>

         </h1>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>