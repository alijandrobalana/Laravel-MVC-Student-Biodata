<?php $__env->startSection('content'); ?>

<div class = "container">
		<div class = "row">
			<div class = "col-md-10">
				<h2>Student Information</h2>
			</div>
			<div class = "col-sm-2">
				<a class = "btn btn-sm btn-success" href = "<?php echo e(route('biodata.create')); ?>"> Input New Student </a>
			</div>
		</div>

		<?php if($message = Session::get('success')): ?>
			<div class = "alert alert-success">
				<p><?php echo e($message); ?></p>
			</div>

		<?php endif; ?>

		<table class = "table table-hover table-sm">
			<tr>
				<th width= "50px"><b> Id </b></th>
				<th width= "110px"><b> Student Number </b></th>
				<th width= "100px"><b> First Name </b></th>
				<th width= "100px"><b> Middle Name </b></th>
				<th width= "100px"><b> Last Name </b></th>
				<th width= "100px"><b> Course </b></th>
				<th width= "200px"><b> Address </b></th>
				<th width= "50px"><b> Gender </b></th>
				<th width= "100px"><b> Number </b></th>
				<th width= "100px"><b> Action </b></th>
			</tr>

			<?php $__currentLoopData = $biodatas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $biodata): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td><b><?php echo e(++$i); ?>.</b></td>
					<td><b><?php echo e($biodata->studentno); ?></b></td>
					<td><b><?php echo e($biodata->firstname); ?></b></td>
					<td><b><?php echo e($biodata->middlename); ?></b></td>
					<td><b><?php echo e($biodata->lastname); ?></b></td>
					<td><b><?php echo e($biodata->course); ?></b></td>
					<td><b><?php echo e($biodata->address); ?></b></td>
					<td><b><?php echo e($biodata->gender); ?></b></td>
					<td><b><?php echo e($biodata->number); ?></b></td>
					<td>
						<form class = "" action = "<?php echo e(route('biodata.destroy', $biodata->id)); ?>" method = "post">
						<a class = "btn btn-sm btn-success" href = "<?php echo e(route('biodata.show', $biodata->id)); ?>">Show</a>
						<a class = "btn btn-sm btn-warning" href = "<?php echo e(route('biodata.edit', $biodata->id)); ?>">Edit</a>

						@csrf
						@method('DELETE')
						<button type = "submit" class = "btn btn-sm btn-danger"> Delete </button>


						</form>
					</td>
				</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</table>
<?php echo $biodatas->links(); ?>

	</div>		
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>