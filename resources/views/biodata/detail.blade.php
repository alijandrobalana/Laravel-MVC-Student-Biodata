@extends('layouts.app')
@section('content')

<div class = "container">
		<div class = "row">
			<div class = "col-lg-12">
				<h2>Student Data</h2>
			<hr>
			</div>	
		</div>

	<div class = "row">
		<div class = "col-md-12">
			<div class = "form-group">
				<strong>Student Number: </strong> {{$biodata->studentno}}
			</div>
		</div>
		<div class = "col-md-12">
			<div class = "form-group">
				<strong>First Name: </strong> {{$biodata->firstname}}
			</div>
		</div>
		<div class = "col-md-12">
			<div class = "form-group">
				<strong>Middle Name: </strong> {{$biodata->middlename}}
			</div>
		</div>
		<div class = "col-md-12">
			<div class = "form-group">
				<strong>Last Name: </strong> {{$biodata->lastname}}
			</div>
		</div>
		<div class = "col-md-12">
			<div class = "form-group">
				<strong>Course: </strong> {{$biodata->course}}
			</div>
		</div>
		<div class = "col-md-12">
			<div class = "form-group">
				<strong>Address: </strong> {{$biodata->address}}
			</div>
		</div>
		<div class = "col-md-12">
			<div class = "form-group">
				<strong>Gender: </strong> {{$biodata->gender}}
			</div>
		</div>
		<div class = "col-md-12">
			<div class = "form-group">
				<strong>Number: </strong> {{$biodata->number}}
			</div>
		</div>

		<div class = "col-md-12">
			<a href = "{{ route('biodata.index') }}" class = "btn btn-sm btn-success">Back</a>
		</div>	

	</div>
</div>


@endsection