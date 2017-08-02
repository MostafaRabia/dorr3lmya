<?php $__env->startSection('center'); ?>
<?php echo Html::style(app('css').'/createStyle.css'); ?>

<!-- Start Section Page -->
<section class="pageSection">
	<div class="container">
		<div class="row">
			<div class="asideLeft col s12 left">
				<h4><?php echo e(trans('Notes.H4')); ?></h4>
					<div class="input-field col s12"> 
						<h5><?php echo e(trans('Notes.Que')); ?></h5>
						<p class="flow-text"><?php echo e($getResult->Ques->ques); ?></p>
						<h5><?php echo e(trans('Notes.Ans')); ?></h5>
						<p class="flow-text"><?php echo e($getResult->answer); ?></p>
					</div>
					<?php echo Form::open(['url'=>'notes/'.$getResult->id,'method'=>'post']); ?>

						<div class="input-field col s12"> 
							<h5><?php echo e(trans('Notes.Notes')); ?></h5>
							<textarea id="textarea1" class="materialize-textarea validate" name='notes'><?php echo e($getResult->notes); ?></textarea>
						</div>
						<p>
						<div class="input-field col s12">
							<button class="btn waves-effect waves-light" type="submit">	 <?php echo e(trans('Notes.Submit')); ?>

								<i class="material-icons right">send</i>
							</button>
						</div>
					<?php echo Form::close(); ?>

			</div>
		</div>
	</div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make(app('users').'.Index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>