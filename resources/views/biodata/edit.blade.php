@extends('layouts.app')
@section('content')

	<div class = "container">
		<div class = "row">
			<div class = "col-lg-12">
				<h2>Input Student Information</h2>
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

	<form class = "{{ route('biodata.update', $biodata->id) }}" method = "post">
		@csrf
		@method('PUT')
		<div class = "row">
			<div class = "cold-md-12">
				<strong> Student Number: </strong>
				<input type = "text" name = "studentno" class = "form-control" value = "{{ $biodata->studentno }}" >
			</div>
			<div class = "cold-md-12">
				<strong> First Name: </strong>
				<input type = "text" name = "firstname" class = "form-control" value = "{{ $biodata->firstname }}">
			</div>
			<div class = "cold-md-12">
				<strong> Middle Name: </strong>
				<input type = "text" name = "middlename" class = "form-control" value = "{{ $biodata->middlename }}">
			</div>
			<div class = "cold-md-12">
				<strong> Last Name: </strong>
				<input type = "text" name = "lastname" class = "form-control" value = "{{ $biodata->lastname }}">
			</div>
			<div class = "cold-md-12">
				<strong> Course: </strong>
				<input type = "text" name = "course" class = "form-control" value = "{{ $biodata->course }}">
			</div>
			<div class = "cold-md-12">
				<strong> Address: </strong>
				<input type = "text" name = "address" class = "form-control" value = "{{ $biodata->address }}">
			</div>
			<div class = "cold-md-12">
				<strong> Gender[Male/Female]: </strong>
				<input type = "text" name = "gender" class = "form-control" value = "{{ $biodata->gender }}">
			</div>
			<div class = "cold-md-12">
				<strong> Cellphone Number: </strong>
				<input type = "text" name = "number" class = "form-control" value = "{{ $biodata->number }}">
			</div>

			<div class = "cold-md-12">	
				<a href = "{{ route('biodata.index') }}" class = "btn btn-sm btn-success"> Back </a>
				<button type = "submit" class = "btn btn-sm btn-primary">Submit</button>
			</div>
		</div>

	</form>
	</div>


@endsection
