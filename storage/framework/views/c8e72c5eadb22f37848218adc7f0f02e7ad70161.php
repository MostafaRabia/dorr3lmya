<?php $__env->startSection('center'); ?>
<?php echo Html::style(app('css').'/createStyle.css?version=1.1.0'); ?>

<?php echo Html::script(app('js').'/createJs.min.js?version=1.1.0'); ?>

<script type="text/javascript">
	$(document).ready(function(){
		<?php if(count($errors)>0||session()->has('pModal')): ?>
			$('.modal').modal('open');
		<?php endif; ?>
	});
</script>
<!-- Start Modal -->
<div id="modal1" class="modal">
	<div class="modal-content">
		<h4><?php echo e(trans('Modal.h4Modal')); ?></h4>
		<p><?php echo e(session()->get('pModal')); ?></p>
	</div>
</div>
<!-- End Modal -->
<!-- Start Section Page -->
<section class="pageSection">
	<div class="container">
		<div class="row">
			<div class="asideLeft col s12 left">
				<h4><?php echo e(trans('createExam.H4')); ?></h4>
				<?php if($id==null): ?>
						<?php echo Form::open(['url'=>'create/exam','method'=>'post']); ?>

							<div class="input-field col s12"> 
								<h5><?php echo e(trans('createExam.Name')); ?></h5>
								<?php echo Form::text('name','',['class'=>'validate']); ?>

							</div>
							<div class="input-field col s12"> 
								<h5><?php echo e(trans('createExam.dateFrom')); ?></h5>
								<input type="text" class="datepicker" name='dateFrom'>
							</div>
							<div class="input-field col s12"> 
								<h5><?php echo e(trans('createExam.dateTo')); ?></h5>
								<input type="text" class="datepicker" name="dateTo">
							</div>
							<div class="input-field col s12"> 
								<h5><?php echo e(trans('createExam.timeFrom')); ?></h5>
								<input type="text" class="timepicker" name="timeFrom">
							</div>
							<div class="input-field col s12"> 
								<h5><?php echo e(trans('createExam.timeTo')); ?></h5>
								<input type="text" class="timepicker" name="timeTo">
							</div>
							<div class="input-field col s12">
								<h5><?php echo e(trans('createExam.Time')); ?></h5>
								<input type="number" name="time">
							</div>
							<div class="input-field col s12">
								<button class="btn waves-effect waves-light" type="submit">	 <?php echo e(trans('createExam.Submit')); ?>

									<i class="material-icons right">send</i>
								</button>
							</div>
						<?php echo Form::close(); ?>

					<?php elseif($id!=null): ?>
						<?php echo Form::open(['url'=>'create/exam/'.$id,'method'=>'post']); ?>

							<div class="input-field col s12">
								<h5><?php echo e(trans('createExam.Ques')); ?></h5>
								<?php echo Form::text('ques','',['class'=>'validate']); ?>

							</div>
							<?php for($i=1;$i<=4;$i++): ?>
								<div class="input-field col s12 ans">
									<h5><?php echo e(trans('createExam.Ans')); ?></h5>
									<?php echo Form::text('ans'.$i,'',['class'=>'validate']); ?>

								</div>
							<?php endfor; ?>
							<div class="input-field col s12">
								<h5><?php echo e(trans('createExam.Correct')); ?></h5>
								<?php echo Form::text('correct','',['class'=>'validate']); ?>

							</div>
							<div class="input-field col s12">
								<h5><?php echo e(trans('createExam.trueNote')); ?></h5>
								<?php echo Form::text('truenote','',['class'=>'validate']); ?>

							</div>
							<div class="input-field col s12">
								<h5><?php echo e(trans('createExam.falseNote')); ?></h5>
								<?php echo Form::text('falsenote','',['class'=>'validate']); ?>

							</div>
							<div class="input-field col s12">
								<button class="btn waves-effect waves-light" type="submit">	 <?php echo e(trans('createExam.Submit')); ?>

									<i class="material-icons right">send</i>
								</button>
							</div>
						<?php echo Form::close(); ?>

				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make(app('users').'.Index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>