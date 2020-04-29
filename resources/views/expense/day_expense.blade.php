@extends('layouts.app')

@section('content')
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
	<div class="card">
		<h5 class="card-header">Day Expense</h5>
		@php 
		$date = date('Y/m/d');
		$total = DB::table('expenses')->where('date',$date)->sum('amount');
		@endphp
		<h3 class="card-header">{{date('d F, Y')}} Total Expense = {{$total}}</h3>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-striped table-bordered first" id='myTable'>
					<thead>
						<tr>
							<th>Id</th>
							<th>Details</th>
							<th>Amount </th>
							<th>Month</th>
							<th>Date</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($expense as $row)
						<tr>
							<td>{{$row->id}}</td>
							<td>{{$row->details}}</td>
							<td>{{$row->amount}}</td>
							<td>{{$row->month}}</td>
							<td>{{$row->date}}</td>
							<td>
								<a href="{{url('/view-advanced/'.$row->id)}}" class="btn btn-primary">View</a>
								<a href="{{url('/edit-advanced/'.$row->id)}}" class="btn btn-primary">Edit</a>
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