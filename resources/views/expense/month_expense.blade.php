@extends('layouts.app')

@section('content')
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
	<a href="{{URL::to('/expense-January')}}" class="btn btn-success" >Jun</a>
		<a href="{{URL::to('/expense-February')}}" class="btn btn-warning" >Feb</a>
		<a href="" class="btn btn-danger" >Mar</a>
		<a href="" class="btn btn-primary" >April</a>
		<a href="" class="btn btn-secondary" >May</a>
		<a href="" class="btn btn-info" >Jun</a>
		<a href="" class="btn btn-success" >July</a>
		<a href="" class="btn btn-warning" >Aug</a>
		<a href="" class="btn btn-defailt" >Sep</a>
		<a href="" class="btn btn-success" >Oct</a>
		<a href="" class="btn btn-danger" >Nov</a>
		<a href="" class="btn btn-secondary" >Dec</a>
	<div class="card">
		<h5 class="card-header"> Monthly  expense </h5>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-striped table-bordered first" id='myTable'>
					<thead>
						<tr>
							<th>Id</th>
							<th>Details</th>  
							<th>Amount </th>
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
				@php 
		$month = date('F');
		$total = DB::table('expenses')->where('month',$month)->sum('amount');
		@endphp
		<h3 class="text-center mt-3"> Total Expense = {{$total}}</h3>
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