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
							<h3 class="text-dark mb-1">{{$orders->name}}</h3>                                            
							<div>{{$orders->address}}</div>
							<div>Email: {{$orders->email}}</div>
							<div>Phone: +{{$orders->contact}}</div>

						</div>
					</div>
					<div class="table-responsive-sm">
						<table class="table table-striped">
							<thead>
								<tr>
									<th class="center">#</th>
									<th>Product Name</th>
									<th>Product Code</th>
									<th class="right">Price</th>
									<th class="center">Qty</th>
									<th class="right">Total</th>
								</tr>
							</thead>
							<tbody>
								@foreach($orders_details as $row)
								<tr>
									<td class="center">{{$row->id}}</td>
									<td class="left strong">{{$row->product_name}}</td>
									<td class="left">{{$row->product_code}}</td>

									<td class="center">{{$row->unitcost }}</td>
									<td class="center">{{$row->quentity}}</td>
									<td class="right">${{$row->unitcost  * $row->quentity}}</td>
								</tr>
								@endforeach

							</tbody>
						</table>
					</div>
					<br><br>
					<div class="row">
						<div class="col-lg-4 col-sm-5">
							<h3>Payment Status: {{$orders->payment_status}}</h3>
							<h3>Pay           : {{$orders->pay}}</h3>
							<h3>Due           :{{$orders->due}}</h3>
						</div>
						<div class="col-lg-4 col-sm-5 ml-auto">
							<table class="table table-clear">
								<tbody>
									<tr>
										<td class="left">
											<strong class="text-dark">Subtotal</strong>
										</td>
										<td class="right">${{$orders->sub_total}}</td>
									</tr>
									<tr>
										<td class="left">
											<strong class="text-dark">VAT (10%)</strong>
										</td>
										<td class="right">${{$orders->vat}}</td>
									</tr>
									<tr>
										<td class="left">
											<strong class="text-dark">Total</strong>
										</td>
										<td class="right">
											<strong class="text-dark">${{$orders->total}}</strong>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="card-footer bg-white">
					<p class="mb-0"><a href="" style="font-size: 30px;" onclick="window.print()"><i class="fas fa-print"></i></a></p>
					<p><a href="{{URL::to('/pos-done/'.$orders->id)}}"  class="btn btn-info btn-sm pull-right" >Done</a></p>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal -->
	

	@endsection