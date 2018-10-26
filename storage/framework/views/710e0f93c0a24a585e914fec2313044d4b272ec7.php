	<?php $__env->startSection('content'); ?>
	    <ul>
	        <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
	            <li> <a href="task/<?php echo e($task->id); ?>">
	             <?php echo e($task->body); ?>  
	         </a>
	            </li>
	        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	    </ul>
	<?php $__env->stopSection(); ?>

	

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>