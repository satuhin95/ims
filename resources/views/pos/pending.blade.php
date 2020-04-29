@extends('layouts.app')

@section('content')
<div class="card">
	<h5 class="card-header">Pending Orders</h5>
	<div class="card-body p-0">
		<div class="table-responsive">
			<table class="table">
				<thead class="bg-light">
					<tr class="border-0">
						<th class="border-0">Sl</th>
						<th class="border-0">Customer</th>
						<th class="border-0">Order Date</th>
						<th class="border-0">Quantity</th>
						<th class="border-0">Price</th>
						<th class="border-0">Payment Status</th>
						<th class="border-0">Order Status</th>
						<th class="border-0">Action</th>
					</tr>
				</thead>
				<tbody>
					@php 
					$i= 1;
					@endphp
					@foreach($pending as $row)
					<tr>
						<td>{{$i++}}</td>
						<td>{{$row->name}} </td>
						<td>{{$row->order_date}}  </td>
						<td>{{$row->total_product}}  </td>
						<td>{{$row->total}} </td>
						<td>{{$row->payment_status}} </td>
						<td>{{$row->order_status}} </td>
						<td>
							<a href="{{url('/view-orders-status/'.$row->id)}}" class="btn btn-primary">View</a>
						</td>
					</tr>
					@endforeach

					<tr>
						<td colspan="9"><a href="#" class="btn btn-outline-light float-right">View Details</a></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection
