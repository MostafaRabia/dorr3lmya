<?php $__env->startSection('center'); ?>
<?php echo Html::style(app('css').'/myExamsStyle.css?version=1.1.0'); ?>

<?php echo Html::script(app('js').'/myExamsJs.min.js?version=1.1.0'); ?>

<!-- Start Modal -->
<div id="modal1" class="modal">
	<div class="modal-content">
		<h4><?php echo e(trans('Modal.h4ModalEnter')); ?></h4>
		<p><?php echo trans('Modal.pModalEnter'); ?></p>
	</div>
	<div class="modal-footer">
    	<a href="javascript:;" class="modal-action enter-modal waves-effect waves-green btn-flat"><?php echo e(trans('Modal.Agree')); ?></a>
    	<a href="javascript:;" class="modal-action modal-close waves-effect waves-red btn-flat"><?php echo e(trans('Modal.Disagree')); ?></a>
    </div>
</div>
<!-- End Modal -->
<!-- Start Section Page -->
<section class="pageSection">
	<div class="container">
		<div class="row">
			<div class="asideLeft col s12 left">
				<h4><?php echo e(trans('myExams.myExams')); ?></h4>
				<table class="responsive-table">
					<thead>
						<tr>
							<th><?php echo e(trans('myExams.Name')); ?></th>
							<th><?php echo e(trans('myExams.From')); ?></th>
							<th><?php echo e(trans('myExams.To')); ?></th>
							<th><?php echo e(trans('myExams.countQue')); ?></th>
							<th><?php echo e(trans('myExams.countAns')); ?></th>
							<th><?php echo e(trans('myExams.Result')); ?></th>
							<th><?php echo e(trans('myExams.enterExam')); ?></th>
							<th><?php echo e(trans('myExams.enterAnswer')); ?></th>
						</tr>
					</thead>
					<tbody>
						<?php $__currentLoopData = $getExams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Exam): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<?php 
								$countAns = App\Results::where('id_user',auth()->user()->id)->where('id_exam',$Exam->id)->where('result',1)->count(); 
								$getPermission = App\Permission::where('id_exam',$Exam->id)->where('id_user',auth()->user()->id_user)->first();
							 ?>
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
								<td><?php echo e($countAns); ?></td>
								<td><?php echo e($countAns); ?>/<?php echo e($Exam->ques); ?></td>
								<?php if($getPermission): ?>
									<?php if($getPermission->ban==1): ?>
										<td><?php echo e(trans('myExams.Ban')); ?></td>
									<?php elseif($getPermission->ban==0&&$getPermission->enter==0&&$getPermission->finish==0&&$Exam->avil==1): ?>
										<td><a class="btn-floating waves-effect waves-light teal lighten-1 enter" href="<?php echo e(url('exam')); ?>/<?php echo e($Exam->name); ?>">
											<i class="material-icons">send</i>
										</a></td>
									<?php elseif($getPermission->finish==1&&$getPermission->ban==0): ?>
										<td></td>
										<td><a class="btn-floating waves-effect waves-light teal lighten-1" href="<?php echo e(url('results')); ?>/<?php echo e($Exam->name); ?>">
											<i class="material-icons">send</i>
										</a></td>
									<?php endif; ?>
								<?php endif; ?>
								<?php if($Exam->avil==0): ?>
									<td></td>
									<td><a class="btn-floating waves-effect waves-light teal lighten-1" href="<?php echo e(url('results')); ?>/<?php echo e($Exam->name); ?>">
										<i class="material-icons">send</i>
									</a></td>
								<?php endif; ?>
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