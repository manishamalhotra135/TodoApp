<?php $__env->startSection('content'); ?>
		


	<div class="row">

		<div class="col-lg-12">

			<form action="<?php echo e(route('todos.save',['id'=>$todo->id])); ?>" method="POST">
				<?php echo csrf_field(); ?>
		<input type="text"  name="todo" class="form-control input-lg " value="<?php echo e($todo->todo); ?>" placeholder="Create a new todo ">
		
			
		</form>

		</div>
		
	</div>

	
<?php $__env->stopSection(); ?>
           

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Todos\resources\views/update.blade.php ENDPATH**/ ?>