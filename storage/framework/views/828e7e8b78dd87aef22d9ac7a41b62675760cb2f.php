<?php $__env->startSection('center'); ?>
<?php echo Html::style(app('css').'/myExamsStyle.css?version=1.1.0'); ?>

<?php echo Html::script(app('js').'/Students.min.js?version=1.0.0'); ?>

<!-- Start Section Page -->
<section class="pageSection">
	<div class="container">
		<div class="row">
			<div class="asideLeft col s12 left">
				<h4><?php echo e(trans('Students.Header')); ?></h4>
				<table id='table'>
					<thead>
						<tr>
							<th onclick="sortTable(0)"><?php echo e(trans('Students.Username')); ?></th>
							<th onclick="sortTable(1)"><?php echo e(trans('Students.Result')); ?></th>
						</tr>
					</thead>
					<tbody>
						<?php for($i=0;$i<count($usersFinish);$i++): ?>
							<tr>
								<td><?php echo e($usersFinish[$i]['username']); ?></td>
								<td><?php echo e($getResults[$i]); ?>/<?php echo e($getExam->ques); ?></td>
							</tr>
						<?php endfor; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make(app('users').'.Index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>