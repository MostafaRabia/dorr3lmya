<?php $__env->startSection('center'); ?>
<?php echo Html::style(app('css').'/myExamsStyle.css'); ?>

<!-- Start Section Page -->
<section class="pageSection">
	<div class="container">
		<div class="row">
			<div class="asideLeft col s12 left">
				<h4><?php echo e(trans('Exam.Exams')); ?></h4>
				<table class="responsive-table">
					<thead>
						<tr>
							<th><?php echo e(trans('adminResults.nameOfMember')); ?></th>
						</tr>
					</thead>
					<tbody>
						<?php $__currentLoopData = $Users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $User): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td>
									<a href="<?php echo e(url('results')); ?>/<?php echo e($User->id); ?>">
										<?php echo e($User->username); ?>

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