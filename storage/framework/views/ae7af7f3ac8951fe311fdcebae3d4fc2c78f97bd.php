<?php $__env->startSection('body'); ?>
	<br>
	<br>
	<a href="todo/create" class="btn btn-info">Add New</a>
	<div class="col-lg-4 col-lg-offset-4">
		<center><h1>ToDo Lists</h1></center>
		<ul class="list-group">
		  	<li class="list-group-item ">
		    	<?php $__currentLoopData = $todos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $todo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		    	<?php echo e($todo->body); ?>

		    	<span class="pull-right"><?php echo e($todo->created_at->diffForHumans()); ?></span>
		    	</li>
		    	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		    
		</ul>

	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>