<?php $__env->startSection('center'); ?>
<?php echo Html::style(app('css').'/Results.css?version=1.1.0'); ?>

<?php echo Html::script(app('js').'/materialize-pagination.min.js?version=1.1.0'); ?>

<!-- Start Section Page -->
<section class="pageSection">
	<div class="container">
		<div class="row">
			<div class="asideLeft col s12 left">
				<h4><?php echo e(trans('Results.Results')); ?></h4>
				<?php $__currentLoopData = $getResults; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Results): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<h5><?php echo e(trans('Results.Que')); ?> <?php echo e($Results->Ques->ques); ?></h5>
					<h5><?php echo e(trans('Results.Ans')); ?> <?php echo e($Results->answer); ?></h5>
					<h5>
						<?php echo e(trans('Results.Correct')); ?>

						<?php if($Results->Ques->correct==null): ?>
							<?php echo e(trans('Results.Null')); ?>

						<?php else: ?>
							<?php echo e($Results->Ques->correct); ?>

						<?php endif; ?>
					</h5>
					<h5>
						<?php echo e(trans('Results.resultQue')); ?>

						<?php if($Results->result==1): ?>
							<?php echo e(trans('Results.Success')); ?>

						<?php elseif($Results->result==2): ?>
							<?php echo e(trans('Results.Null')); ?>

						<?php else: ?>
							<?php echo e(trans('Results.Fail')); ?>

						<?php endif; ?>
					 </h5>
					 <h5>
					 	<?php echo e(trans('Results.Notes')); ?>

					 	<?php if($Results->Ques->trueNote!=null&&$Results->result==1): ?>
					 		<?php echo e($Results->Ques->trueNote); ?>

					 	<?php elseif($Results->Ques->falseNote!=null&&$Results->result==0): ?>
					 		<?php echo e($Results->Ques->falseNote); ?>

					 	<?php else: ?>
					 		<?php echo e(trans('Results.Null')); ?>

					 	<?php endif; ?>
					 </h5>
					 <hr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
		</div>
	</div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make(app('users').'.Index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>