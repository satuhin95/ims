@extends('layouts.app')

@section('content')
<div class="row">
	<div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
		<div class="card">
			<div class="card-header p-4">
				<a class="pt-2 d-inline-block" href="index.html">Concept</a>

				<div class="float-right"> <h3 class="mb-0">Invoice #1</h3>
					Date: {{date('d F , Y')}}</div>
				</div>
				<div class="card-body">
					<div class="row mb-4">
						<div class="col-sm-6">
							<h5 class="mb-3">From:</h5>                                            
							<h3 class="text-dark mb-1">Gerald A. Garcia</h3>

							<div>2546 Penn Street</div>
							<div>Sikeston, MO 63801</div>
							<div>Email: info@gerald.com.pl</div>
							<div>Phone: +573-282-9117</div>
						</div>
						<div class="col-sm-6">
							<h5 class="mb-3">To:</h5>
							<h3 class="text-dark mb-1">{{$customer->name}}</h3>                                            
							<div>{{$customer->address}}</div>
							<div>Email: {{$customer->email}}</div>
							<div>Phone: +{{$customer->contact}}</div>

						</div>
					</div>
					<div class="table-responsive-sm">
						<table class="table table-striped">
							<thead>
								<tr>
									<th class="center">#</th>
									<th>Item</th>
									<th class="right">Unit Cost</th>
									<th class="center">Qty</th>
									<th class="right">Total</th>
								</tr>
							</thead>
							<tbody>
								@foreach($data as $row)
								<tr>
									<td class="center">{{$row->id}}</td>
									<td class="left strong">{{$row->name}}</td>
									<td class="left">{{$row->price}}</td>

									<td class="center">{{$row->qty}}</td>
									<td class="right">${{$row->price * $row->qty}}</td>
								</tr>
								@endforeach

							</tbody>
						</table>
					</div>
					<div class="row">
						<div class="col-lg-4 col-sm-5">
						</div>
						<div class="col-lg-4 col-sm-5 ml-auto">
							<table class="table table-clear">
								<tbody>
									<tr>
										<td class="left">
											<strong class="text-dark">Subtotal</strong>
										</td>
										<td class="right">${{Cart::subtotal()}}</td>
									</tr>
									<tr>
										<td class="left">
											<strong class="text-dark">VAT (10%)</strong>
										</td>
										<td class="right">${{Cart::tax()}}</td>
									</tr>
									<tr>
										<td class="left">
											<strong class="text-dark">Total</strong>
										</td>
										<td class="right">
											<strong class="text-dark">${{Cart::total()}}</strong>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="card-footer bg-white">
					<p class="mb-0"><a href="" style="font-size: 30px;" onclick="window.print()"><i class="fas fa-print"></i></a></p>
					<p><a href="#"  class="btn btn-info btn-sm pull-right" data-toggle="modal" data-target="#myModal">Submit</a></p>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="text-center">Invoice of {{$customer->name}}</h4>
					@if ($errors->any())
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
					@endif
				</div>
				<div class="modal-body">
					<form action="{{url('/final-invoice')}}" method="post" >
						@csrf
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label for="name">Payment </label>
									<select class="form-control" name="payment_status">
										<option value="HandCash">HandCash</option>
										<option value="Bkash">Bkash</option>
										<option value="Bank">Bank</option>
										<option value="Due">Due</option>
									</select>
								</div>

							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label for="pat">Pay</label>
									<input type="text" name="pay" class="form-control" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label for="pwd">Due:</label>
									<input type="text" name="due" class="form-control" id="contact">
								</div>
							</div>
					<input type="hidden" name="customer_id" value="{{$customer->id}}" >
					<input type="hidden" name="order_status" value="pending" >
					<input type="hidden" name="total_product" value="{{Cart::count()}}" >
					<input type="hidden" name="subtotal" value="{{Cart::subtotal()}}" >
					<input type="hidden" name="vat" value="{{Cart::tax()}}" >
					<input type="hidden" name="total" value="{{Cart::total()}}" >
						</div>						
						<button type="submit" class="btn btn-info">Add</button>
					</form> 
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				</div>
			</div>

		</div>
	</div>

	@endsection