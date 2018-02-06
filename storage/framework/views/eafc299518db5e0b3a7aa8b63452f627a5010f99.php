<?php $__env->startSection('body'); ?>
<div class="col-lg-4 col-lg-offset-4">
	<center><h1>Create New Item</h1></center>
	<a href="/todo" class="btn btn-info">Back</a>
	<form action="/todo" method="post">
  <fieldset>
  <?php echo e(csrf_field()); ?>

      <textarea class="form-control" name="body" id="exampleTextarea" rows="5"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    
  </fieldset>
</form>	
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>