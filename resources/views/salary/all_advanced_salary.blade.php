@extends('layouts.app')

@section('content')
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
	<div class="card">
		<h5 class="card-header">All Advanced Salary</h5>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-striped table-bordered first" id='myTable'>
					<thead>
						<tr>
							<th>Id</th>
							<th>Employee Name</th>
							<th>Year </th>
							<th>Month</th>
							<th>Amount</th>
							<th>Salary</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($advanced as $row)
						<tr>
							<td>{{$row->id}}</td>
							<td>{{$row->name}}</td>
							<td>{{$row->year}}</td>
							<td>{{$row->month}}</td>
							<td>{{$row->amount}}</td>
							<td>{{$row->salary}}</td>
							<td>
								<a href="{{url('/view-advanced/'.$row->id)}}" class="btn btn-primary">View</a>
								<a href="{{url('/delete-advanced/'.$row->id)}}" id="delete" class="btn btn-danger">Delete</a>
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