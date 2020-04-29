@extends('layouts.app')

@section('content')
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
	<div class="card">
		<h5 class="card-header">Basic Table</h5>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-striped table-bordered first" id='myTable'>
					<thead>
						<tr>
							<th>Id</th>
							<th>NameName</th>
							<th>Email</th>
							<th>Contact</th>
							<th>Address</th>
							<th>Salary</th>
							<th>Picture</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($employees as $emp)
						<tr>
							<td>{{$emp->id}}</td>
							<td>{{$emp->name}}</td>
							<td>{{$emp->email}}</td>
							<td>{{$emp->contact}}</td>
							<td>{{$emp->address}}</td>
							<td>{{$emp->salary}}</td>
							<td>
								<img src="{{$emp->picture}}" width="50px">
							</td>
							<td>
								<a href="{{url('/view-employee/'.$emp->id)}}" class="btn btn-primary">View</a>
								<a href="{{url('/edit-employee/'.$emp->id)}}" class="btn btn-success">Edit</a>
								<a href="{{url('/delete-employee/'.$emp->id)}}" id="delete" class="btn btn-danger">Delete</a>
							</td>

						</tr>
						@endforeach
					</tbody>

				</table>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready( function () {
		$('#myTable').DataTable();
	} );
</script>
@endsection