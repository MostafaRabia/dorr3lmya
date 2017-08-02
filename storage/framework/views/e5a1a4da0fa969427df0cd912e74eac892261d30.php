<?php $__env->startSection('center'); ?>
<?php echo Html::style(app('css').'/myExamsStyle.css?version=1.1.0'); ?>

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
							<th><?php echo e(trans('myExams.From')); ?></th>
							<th><?php echo e(trans('myExams.To')); ?></th>
							<th><?php echo e(trans('Exam.countQue')); ?></th>
							<th><?php echo e(trans('Exam.Setting')); ?></th>
						</tr>
					</thead>
					<tbody>
						<?php $__currentLoopData = $getExams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Exam): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td><?php echo e($Exam->name); ?></td>
								<td class="en">
									<?php if($Exam->dateFrom!=null): ?>
										<?php echo e($Exam->dateFrom); ?> <?php echo e($Exam->timeFrom); ?>

									<?php else: ?>
										<?php echo e(trans('myExams.notDate')); ?>

									<?php endif; ?>
								</td>
								<td class="en">
									<?php if($Exam->dateTo!=null): ?>
										<?php echo e($Exam->dateTo); ?> <?php echo e($Exam->timeTo); ?>

									<?php else: ?>
										<?php echo e(trans('myExams.notDate')); ?>

									<?php endif; ?>
								</td>
								<td><?php echo e($Exam->ques); ?></td>
								<td>
									<a class="btn-floating waves-effect waves-light teal lighten-1" href="<?php echo e(url('setting/exam')); ?>/<?php echo e($Exam->id); ?>">
										<i class="material-icons">send</i>
									</a>
								</td>
							</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make(app('users').'.Index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>