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
							<th><?php echo e(trans('Exam.From')); ?></th>
							<th><?php echo e(trans('Exam.To')); ?></th>
							<th><?php echo e(trans('showEdit.Ques')); ?></th>
							<th><?php echo e(trans('showEdit.Ans1')); ?></th>
							<th><?php echo e(trans('showEdit.Ans2')); ?></th>
							<th><?php echo e(trans('showEdit.Ans3')); ?></th>
							<th><?php echo e(trans('showEdit.Ans4')); ?></th>
							<th><?php echo e(trans('showEdit.Correct')); ?></th>
							<th><?php echo e(trans('Exam.Edit')); ?></th>
							<th><?php echo e(trans('Exam.Delete')); ?></th>
						</tr>
					</thead>
					<tbody>
						<?php $__currentLoopData = $getQues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Ques): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td><?php echo e($getExam->name); ?></td>
								<td class="en">
									<?php if($Ques->Exam->dateFrom!=null): ?>
										<?php echo e($Ques->Exam->dateFrom); ?> <?php echo e($Ques->Exam->timeFrom); ?>

									<?php else: ?>
										<?php echo e(trans('myExams.notDate')); ?>

									<?php endif; ?>
								</td>
								<td class="en">
									<?php if($Ques->Exam->dateTo!=null): ?>
										<?php echo e($Ques->Exam->dateTo); ?> <?php echo e($Ques->Exam->timeTo); ?>

									<?php else: ?>
										<?php echo e(trans('myExams.notDate')); ?>

									<?php endif; ?>
								</td>
								<td><?php echo e($Ques->ques); ?></td>
								<td><?php if($Ques->ans1!=null): ?><?php echo e($Ques->ans1); ?><?php else: ?><?php echo e(trans('showEdit.nullCorrect')); ?><?php endif; ?></td>
								<td><?php if($Ques->ans2!=null): ?><?php echo e($Ques->ans2); ?><?php else: ?><?php echo e(trans('showEdit.nullCorrect')); ?><?php endif; ?></td>
								<td><?php if($Ques->ans3!=null): ?><?php echo e($Ques->ans3); ?><?php else: ?><?php echo e(trans('showEdit.nullCorrect')); ?><?php endif; ?></td>
								<td><?php if($Ques->ans4!=null): ?><?php echo e($Ques->ans4); ?><?php else: ?><?php echo e(trans('showEdit.nullCorrect')); ?><?php endif; ?></td>
								<td><?php if($Ques->correct!=null): ?><?php echo e($Ques->correct); ?><?php else: ?><?php echo e(trans('showEdit.nullCorrect')); ?><?php endif; ?></td>
								<td>
									<a class="btn-floating waves-effect waves-light 	teal lighten-1" href="<?php echo e(url('edit/exam/question')); ?>/<?php echo e($Ques->id); ?>">
										<i class="material-icons">send</i>
									</a>
								</td>
								<td>
									<a class="btn-floating waves-effect waves-light 	red lighten-2" href="<?php echo e(url('delete/question')); ?>/<?php echo e($Ques->id); ?>">
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