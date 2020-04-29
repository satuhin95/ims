

@extends('layouts.app')

@section('content')
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
	<div class="card">
		<h5 class="card-header">Yearly  expense </h5>
		@php 
	
		$total = DB::table('expenses')->sum('amount');
		@endphp
		<h3 class="card-header">{{date(' Y')}} Total Expense = {{$total}}</h3>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-striped table-bordered first" id='myTable'>
					<thead>
						<tr>
							<th>Id</th>
							<th>Details</th> 
							<th>Amount </th>
							<th>Date</th>
						</tr>
					</thead>
					<tbody>
						@foreach($expense as $row)
						<tr>
							<td>{{$row->id}}</td>
							<td>{{$row->details}}</td>
							<td>{{$row->amount}}</td>
							<td>{{$row->date}}</td>

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