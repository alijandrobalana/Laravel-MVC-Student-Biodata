@extends('layouts.app')
@section('content')

<div class = "container">
		<div class = "row">
			<div class = "col-md-10">
				<h2>Student Information</h2>
			</div>
			<div class = "col-sm-2">
				<a class = "btn btn-sm btn-success" href = "{{ route('biodata.create') }}"> Input New Student </a>
			</div>
		</div>

		@if ($message = Session::get('success'))
			<div class = "alert alert-success">
				<p>{{ $message }}</p>
			</div>

		@endif

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

			@foreach ($biodatas as $biodata)
				<tr>
					<td><b>{{ ++$i }}.</b></td>
					<td><b>{{ $biodata->studentno }}</b></td>
					<td><b>{{ $biodata->firstname }}</b></td>
					<td><b>{{ $biodata->middlename }}</b></td>
					<td><b>{{ $biodata->lastname }}</b></td>
					<td><b>{{ $biodata->course }}</b></td>
					<td><b>{{ $biodata->address }}</b></td>
					<td><b>{{ $biodata->gender }}</b></td>
					<td><b>{{ $biodata->number }}</b></td>
					<td>
						<form class = "" action = "{{ route('biodata.destroy', $biodata->id) }}" method = "post">
						<a class = "btn btn-sm btn-success" href = "{{ route('biodata.show', $biodata->id) }}">Show</a>
						<a class = "btn btn-sm btn-warning" href = "{{ route('biodata.edit', $biodata->id) }}">Edit</a>

						@csrf
						@method('DELETE')
						<button type = "submit" class = "btn btn-sm btn-danger"> Delete </button>


						</form>
					</td>
				</tr>
			@endforeach
		</table>
{!! $biodatas->links() !!}
	</div>		
@endsection