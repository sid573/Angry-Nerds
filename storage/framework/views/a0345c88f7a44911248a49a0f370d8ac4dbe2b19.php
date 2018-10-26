<?php $__env->startComponent('mail::message'); ?>

# Introduction

The body of your message.

- one 
- two 
- three

<?php $__env->startComponent('mail::button', ['url' => '']); ?>
Button Text
<?php echo $__env->renderComponent(); ?>

<?php $__env->startComponent('mail::panel', ['url' => '']); ?>
Lorem ipsum dolor sit amet.
<?php echo $__env->renderComponent(); ?>

Thanks,<br>
<?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>
