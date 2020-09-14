<?php $__env->startSection('content'); ?>
		
<form action="/create/todo" method="POST">
    <?php echo e(csrf_field()); ?>

    <div class="input-group form-group">
        <input type="text" class="form-control" name="todo" placeholder="Create a new todo " style="float: left">
     </div>
</form>
<!-- 
<form class="form-inline md-form mr-auto mb-4" action=""  role="search" method="get">
                   
		   <input class="form-control mr-sm-2" type="text" style="margin-left: 10px;" name="search" value="<?php echo e(request('search')); ?>" placeholder="Search by Name"  aria-label="Search">
		    <button class="btn btn-primary" type="submit">Search</button>
		   <a href="<?php echo e(url('user/management')); ?>" class="btn btn-danger" type="submit">Reset</a>
                   </form>
 -->
                   <!-- 

	<div class="row">

		<div class="col-lg-6 col-lg-offset-3 input-group">

			<form action="/create/todo" method="POST" class="form-control">
				<?php echo csrf_field(); ?>
		<input type="text" name="todo" class="form-control " placeholder="Create a new todo ">

			
		</form>

		</div>
		
	</div>
	 -->

		<!-- <hr>
            <?php $__currentLoopData = $todos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $todo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <?php echo e($todo->todo); ?>

            <a href="<?php echo e(route('todo.delete',['id'=> $todo->id])); ?>" class="btn btn-danger btn-sm">Delete</a>
            <a href="<?php echo e(route('todo.update',['id'=> $todo->id])); ?>" class="btn btn-info btn-sm">Update</a>
            <?php if(!$todo->completed): ?>
            <a href="<?php echo e(route('todos.completed',['id'=>$todo->id])); ?>" class="btn btn-xs btn-success">Mark as completed</a>
            <?php else: ?>

            <span class="text-success">Completed</span>

            <?php endif; ?>

            
            <hr>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         --><div class="container">
         <table class="table table-striped">
         	
         	<thead>
         		<tr>
         			<th>Todo Data</th>
         			<th colspan="3">Option</th>
         			
         		</tr>
         	</thead>
         	<tbody>
         		 <?php $__currentLoopData = $todos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $todo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         		<tr>
         			<td>  <?php echo e($todo->todo); ?> </td>
         			<td>  <a href="<?php echo e(route('todo.delete',['id'=> $todo->id])); ?>" class="btn btn-danger btn-sm">Delete</a></td>
         			<td><a href="<?php echo e(route('todo.update',['id'=> $todo->id])); ?>" class="btn btn-info btn-sm">Update</a></td>
         	<td>		 <?php if(!$todo->completed): ?>
           <a href="<?php echo e(route('todos.completed',['id'=>$todo->id])); ?>" class="btn btn-xs btn-success">Mark as completed</a>
            <?php else: ?>
              <span class="text-success">Completed</span>

            <?php endif; ?>
        </td>
         </tr>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         	</tbody>

         </table>
     </div>
         <br>
       <?php echo e($todos->links()); ?>


<?php $__env->stopSection(); ?>
           

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Todos\resources\views/todos.blade.php ENDPATH**/ ?>