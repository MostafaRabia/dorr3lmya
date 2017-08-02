<?php echo $__env->yieldContent('top'); ?>
<?php echo $__env->make(app('users').'.Header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->yieldContent('center'); ?>
<?php echo $__env->make(app('users').'.Footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->yieldContent('bottom'); ?>
