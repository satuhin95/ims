@extends('layouts.app')

@section('content')
<div class="card">
	<h5 class="card-header">View Employee</h5>
	<div class="card-body">
		<div class="form-group">
				<label for="inputText3" class="col-form-label">Id</label>
				<h2>{{$employee->id}}</h2>
			</div>
			<div class="form-group">
				<label for="inputText3" class="col-form-label">Name</label>
				<h2>{{$employee->name}}</h2>
			</div>
			<div class="form-group">
				<label for="inputEmail">Email address</label>
				<h2>{{$employee->email}}</h2>
			</div>
			<div class="form-group">
				<label for="inputText3" class="col-form-label">Contact</label>
				<h2>{{$employee->contact}}</h2>
			</div>
			<div class="form-group">
				<label for="inputText3" class="col-form-label">Address</label>
				<h2>{{$employee->address}}</h2>
			</div>
			<div class="form-group">
				<label for="inputText3" class="col-form-label">Experience</label>
				<h2>{{$employee->experience}}</h2>
			</div>
			<div class="form-group">
				<label for="inputText3" class="col-form-label">Salary</label>
				<h2>{{$employee->salary}}</h2>
			</div>
			<div class="form-group">
				<label for="inputText3" class="col-form-label">Vacation</label>
				<h2>{{$employee->vacation}}</h2>
			</div>
			<div class="form-group">
				<label for="inputText3" class="col-form-label">Picture</label>
				<img id="image" src="{{URL::to($employee->picture)}}" width="60px">
			</div>
			
	</div>

</div>



@endsection