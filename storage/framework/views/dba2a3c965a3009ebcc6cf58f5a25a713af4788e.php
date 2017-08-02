<?php $__env->startSection('center'); ?>
<?php echo Html::style(app('css').'/Results.css?version=1.1.0'); ?>

<?php echo Html::script(app('js').'/materialize-pagination.min.js?version=1.1.0'); ?>

<?php echo Html::script(app('js').'/ResultsJs.min.js?version=1.1.0'); ?>

<!-- Start Section Page -->
<section class="pageSection">
	<div class="container">
		<div class="row">
			<div class="asideLeft col s12 left">
				<h4><?php echo e(trans('adminResults.Results')); ?></h4>
				<?php $__currentLoopData = $getResults; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Results): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<h5><?php echo e(trans('adminResults.nameOfMember')); ?>: <?php echo e($Results->User->username); ?></h5>
					<h5><?php echo e(trans('adminResults.Que')); ?>: <?php echo e($Results->Ques->ques); ?></h5>
					<h5><?php echo e(trans('adminResults.Ans')); ?>: <?php echo e($Results->answer); ?></h5>
					<h5>
						<?php echo e(trans('adminResults.Correct')); ?>: 
						<?php if($Results->Ques->correct!=null): ?>
							<?php echo e($Results->Ques->correct); ?>

						<?php else: ?>
							<?php echo e(trans('Results.nullCorrect')); ?>

						<?php endif; ?>
					</h5>
					<h5>
						<?php echo e(trans('adminResults.Result')); ?>: 
						<?php if($Results->result==1): ?>
							<?php echo e(trans('Results.Success')); ?>

						<?php elseif($Results->result==2): ?>
							<?php echo e(trans('Results.Pending')); ?>

						<?php else: ?>
							<?php echo e(trans('Results.Fail')); ?>

						<?php endif; ?>
					</h5>
					<h5><?php echo e(trans('adminResults.Notes')); ?>: <?php echo e($Results->notes); ?></h5>
					<h5>
						<?php echo e(trans('adminResults.addResult')); ?>: 
						<a class="btn-floating waves-effect waves-light red lighten-2" href="<?php echo e(url('notes/')); ?>/<?php echo e($Results->id); ?>">
							<i class="material-icons">send</i>
						</a>
					</h5>
					<h5>
						<?php echo e(trans('adminResults.Right/Flase')); ?>: 
						<div class="switch">
							<label>
								صح
								<input type="checkbox" id="<?php echo e($Results->id); ?>" value="<?php echo e($Results->result); ?>">
								<span class="lever"></span>
								خطأ
							</label>
						</div>
					</h5>
					<hr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
		</div>
	</div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make(app('users').'.Index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>