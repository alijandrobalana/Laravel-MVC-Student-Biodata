@extends('layouts.app')
@section('content')

	<div class = "container">
		<div class = "row">
			<div class = "col-lg-12">
				<h2>Edit Student Information</h2>
			</div>
		</div>

	@if ($errors->any())
		<div class = "alert alert-danger">
			<strong> Whoops! </strong> there where some problems with your input.<br>
			<ul>
				@foreach ($errors as $error)
					<li>{{ $error }} </li>
				@endforeach
			</ul>
		</div>
	@endif
@CSRF
	<form class = "{{ route('biodata.create') }}" method = "post">
		
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
				<a href = "{{ route('biodata.index') }}" class = "btn btn-sm btn-success"> Back </a>
				<button type = "submit" class = "btn btn-sm btn-primary">Submit</button>
			</div>
		</div>

	</form>
	</div>


@endsection