<?php $__env->startSection('content'); ?>
  
    <div class="col-sm-8 blog-main" style="color: white;">

          <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <?php echo $__env->make('posts.post', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="/">Move to Top</a>
            
          </nav>


   </div><!-- /.blog-main -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>