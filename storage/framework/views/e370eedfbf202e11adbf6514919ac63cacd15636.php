<?php $__env->startSection('center'); ?>
	<?php echo Html::style(app('css').'/homeStyle.css?version=1.1.0'); ?>

	<script type="text/javascript">
		$(document).ready(function(){
			<?php if(session()->has('Error')): ?>
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

	<!-- Start Section Info -->
	<section class="infoSection">
		<div class="container">
			<div class="row">
				<div class="infoDiv col s12 left">
					<h4><?php echo e(trans('Home.Info')); ?> <?php echo e(trans('Titles.nameOfWebSite')); ?></h4>
					<p class="flow-text"><?php echo trans('Home.Login'); ?></p>
					<p class="flow-text"><?php echo e(trans('Home.examNow')); ?> <?php if($getExams): ?> <a href='<?php echo e(url("exam/".$getExams->name)); ?>'><?php echo e($getExams->name); ?></a> <?php else: ?> <?php echo e(trans('Home.noExam')); ?> <?php endif; ?></p>
					<p class="flow-text"><?php echo trans('Home.Rules'); ?></ul></p>
					<img src="<?php echo e(app('image')); ?>/home.png" />
				</div>
			</div>
		</div>
	</section>
	<!-- End Section Info -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make(app('users').'.Index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>