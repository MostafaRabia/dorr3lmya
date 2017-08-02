<?php $__env->startSection('center'); ?>
<?php echo Html::style(app('css').'/showExamStyle.css?version=1.1.0'); ?>

<!-- Start Section Page -->
<section class="pageSection">
	<div class="container">
		<div class="row">
			<div class="asideLeft col s12 left">
				<h4><?php echo e($name); ?> <span><i class="material-icons">timer</i> <span><?php echo e($getId->time); ?>:00</span></span></h4>
				<?php  $i=0; $b=0;  ?>
				<?php $__currentLoopData = $getQues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Ques): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php  $i++; $b++;  ?>
					<h5><?php echo e(trans('showExam.Que')); ?><?php echo e($b); ?>: <?php echo e($Ques->ques); ?></h5>
					<h5><?php echo e(trans('showExam.Ans')); ?></h5>
					<?php if($Ques->ans1!=null&&$Ques->ans2!=null): ?>
						<p>
							<input name="ans.<?php echo e($Ques->id_query); ?>" type="radio" id="<?php echo e($i); ?>" value="<?php echo e($Ques->ans1); ?>" />
							<label for="<?php echo e($i); ?>"><?php echo e($Ques->ans1); ?></label>
							<?php  $i++  ?>
						</p>
						<p>
							<input name="ans.<?php echo e($Ques->id_query); ?>" type="radio" id="<?php echo e($i); ?>" value="<?php echo e($Ques->ans2); ?>" />
							<label for="<?php echo e($i); ?>"><?php echo e($Ques->ans2); ?></label>
							<?php  $i++  ?>
						</p>
					<?php elseif($Ques->correct==null): ?>
						<textarea id="textarea1" name='ans.<?php echo e($Ques->id_query); ?>' class="materialize-textarea"></textarea>
					<?php endif; ?>
					<?php if($Ques->ans3!=null): ?>
						<p>
							<input name="ans.<?php echo e($Ques->id_query); ?>" type="radio" id="<?php echo e($i); ?>" value="<?php echo e($Ques->ans3); ?>" />
							<label for="<?php echo e($i); ?>"><?php echo e($Ques->ans3); ?></label>
							<?php  $i++  ?>
						</p>
					<?php endif; ?>
					<?php if($Ques->ans4!=null): ?>
						<p>
							<input name="ans.<?php echo e($Ques->id_query); ?>" type="radio" id="<?php echo e($i); ?>" value="<?php echo e($Ques->ans4); ?>" />
							<label for="<?php echo e($i); ?>"><?php echo e($Ques->ans4); ?></label>
							<?php  $i++  ?>
						</p>
					<?php endif; ?>
					<hr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
		</div>
	</div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make(app('users').'.Index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>