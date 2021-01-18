<?php $__env->startSection('content'); ?>

	<div class = "container">
		<div class = "row">
			<div class = "col-lg-12">
				<h2>Input Student Information</h2>
			</div>
		</div>

	<?php if($errors->any()): ?>
		<div class = "alert alert-danger">
			<strong> Whoops! </strong> there where some problems with your input.<br>
			<ul>
				<?php $__currentLoopData = $errors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<li><?php echo e($error); ?> </li>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</ul>
		</div>
	<?php endif; ?>

	<form class = "<?php echo e(route('biodata.store')); ?>" method = "post">

		@csrf
		
		<div class = "row">
			<div class = "cold-md-12">
				<strong> Student Number: </strong>
				<input type = "text" name = "studentno" class = "form-control" placeholder = "Student Number">
			</div>
			<div class = "cold-md-12">
				<strong> First Name: </strong>
				<input type = "text" name = "firstname" class = "form-control" placeholder = "First Name">
			</div>
			<div class = "cold-md-12">
				<strong> Middle Name: </strong>
				<input type = "text" name = "middlename" class = "form-control" placeholder = "Middle Name">
			</div>
			<div class = "cold-md-12">
				<strong> Last Name: </strong>
				<input type = "text" name = "lastname" class = "form-control" placeholder = "Last Name">
			</div>
			<div class = "cold-md-12">
				<strong> Course: </strong>
				<input type = "text" name = "course" class = "form-control" placeholder = "Course">
			</div>
			<div class = "cold-md-12">
				<strong> Address: </strong>
				<input type = "text" name = "address" class = "form-control" placeholder = "Address">
			</div>
			<div class = "cold-md-12">
				<strong> Gender[Male/Female]: </strong>
				<input type = "text" name = "gender" class = "form-control" placeholder = "Gender">
			</div>
			<div class = "cold-md-12">
				<strong> Cellphone Number: </strong>
				<input type = "text" name = "number" class = "form-control" placeholder = "Cellphone Number">
			</div>

			<div class = "cold-md-12">	
				<a href = "<?php echo e(route('biodata.index')); ?>" class = "btn btn-sm btn-success"> Back </a>
				<button type = "submit" class = "btn btn-sm btn-primary">Submit</button>
			</div>
		</div>

	</form>
	</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>