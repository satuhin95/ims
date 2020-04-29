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
							<th>Shop Name</th>
							<th>Picture</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($customers as $row)
						<tr>
							<td>{{$row->id}}</td>
							<td>{{$row->name}}</td>
							<td>{{$row->email}}</td>
							<td>{{$row->contact}}</td>
							<td>{{$row->address}}</td>
							<td>{{$row->shopname}}</td>
							<td>
								<img src="{{$row->picture}}" width="50px">
							</td>
							<td>
								<a href="{{url('/view-customer/'.$row->id)}}" class="btn btn-primary">View</a>
								<a href="{{url('/edit-customer/'.$row->id)}}" class="btn btn-success">Edit</a>
								<a href="{{url('/delete-customer/'.$row->id)}}" id="delete" class="btn btn-danger">Delete</a>
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