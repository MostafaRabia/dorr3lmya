<?php $__env->startSection('center'); ?>
<?php echo Html::style(app('css').'/myExamsStyle.css?version=1.1.0'); ?>

<?php echo Html::script(app('js').'/myExamsScript.min.js?version=1.1.0'); ?>

<!-- Start Section Page -->
<section class="pageSection">
	<div class="container">
		<div class="row">
			<div class="asideLeft col s12 left">
				<h4><?php echo e(trans('Exam.Exams')); ?></h4>
				<table class="responsive-table">
					<thead>
						<tr>
							<th><?php echo e(trans('Exam.Name')); ?></th>
							<th><?php echo e(trans('Exam.View')); ?></th>
							<th><?php echo e(trans('Exam.Edit')); ?></th>
							<th><?php echo e(trans('Exam.Results')); ?></th>
							<th><?php echo e(trans('Exam.Stop')); ?></th>
							<th><?php echo e(trans('Exam.Students')); ?></th>
							<th><?php echo e(trans('Exam.deleteExam')); ?></th>
							<th><?php echo e(trans('Exam.addQue')); ?></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><?php echo e($getExam->name); ?></td>
							<td>
								<a class="btn-floating waves-effect waves-light teal lighten-1" href="<?php echo e(url('show/exam')); ?>/<?php echo e($getExam->name); ?>">
									<i class="material-icons">send</i>
								</a>
							</td>
							<td>
								<a class="btn-floating waves-effect waves-light 	red lighten-2" href="<?php echo e(url('edit/exam')); ?>/<?php echo e($getExam->id); ?>">
									<i class="material-icons">send</i>
								</a>
							</td>
							<td>
								<a class="btn-floating waves-effect waves-light 	deep-purple lighten-2" href="<?php echo e(url('results/exam/')); ?>/<?php echo e($getExam->id); ?>">
									<i class="material-icons">send</i>
								</a>
							</td>
							<td>
								<div class="switch">
									<label>
										Off
										<input type="checkbox" id="<?php echo e($getExam->id); ?>" value="<?php echo e($getExam->avil); ?>">
										<span class="lever"></span>
										On
									</label>
								</div>
							</td>
							<td>
								<a class="btn-floating waves-effect waves-light blue darken-4" href="<?php echo e(url('students/exam/')); ?>/<?php echo e($getExam->id); ?>">
									<i class="material-icons">send</i>
								</a>
							</td>
							<td>
								<a class="btn-floating waves-effect waves-light orange darken-4" href="<?php echo e(url('delete/exam/')); ?>/<?php echo e($getExam->id); ?>">
									<i class="material-icons">send</i>
								</a>
							</td>
							<td>
								<a class="btn-floating waves-effect waves-light green darken-4" href="<?php echo e(url('create/exam/')); ?>/<?php echo e($getExam->id); ?>">
									<i class="material-icons">send</i>
								</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make(app('users').'.Index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>