@extends('layouts.app')

@section('content')
<div class="dashboard-ecommerce">
	<div class="container-fluid dashboard-content ">
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<h2>{{date('d F , Y ')}}</h2>
				<div class="page-header">
					<h2 class="pageheader-title bg-primary">Pos(Point of Sale) </h2>
					<p class="pageheader-text"></p>
					<div class="page-breadcrumb">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
								<li class="breadcrumb-item active" aria-current="page">POS</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div> 
		<div class="row">
			<div class="col-lg-6" >
				<div class="panel">
					<div class="card">
						<div class="card-body">
							<table class="table" >
								<tr>
									<th>Name</th>
									<th>Qty</th>
									<th>SinglePrice</th>
									<th>Sub Total</th>
									<th>Action</th>
								</tr>
								@php 
								$pdt = Cart::content();
								@endphp
								@foreach($pdt as $row)
								<tr>
									<td>{{$row->name}}</td>
									<td>
										<form action="{{url('/update-cart/'.$row->rowId)}}" method="post">
											@csrf
											<input style="width: 50px;" type="number" name="qty" value="{{$row->qty}}">
											<button type="submit" class="btn btn-sm"><i class="fas fa-check"></i></button>
										</form>
									</td>
									<td>{{$row->price}}</td>
									<td>{{$row->price * $row->qty}}</td>
									<td><a href="{{URL::to('/remove-cart/'.$row->rowId)}}"><i class="fas fa-trash-alt text-danger"></i></a></td>
								</tr>
								@endforeach
							</table>
						</div>
					</div>
					<div class="card bg-primary text-white text-center p-3">
						<div class="">
							<p  style="font-size: 20px;">Quentity: {{Cart::count()}}</p>
							<p  style="font-size: 20px;">Sub Total: {{Cart::subtotal()}}</p>
							<p  style="font-size: 20px;">Vat: {{Cart::tax()}}</p>
							<hr>
							<p style="font-size: 25px;">Total: {{Cart::total()}}</p>
						</div>
					</div>
					<form method="post" action="{{url('/create-invoice')}}">
						@csrf
						<div>
							<h3 class="text-info"  >Customer
								<a href="#"  class="btn btn-info btn-sm pull-right" data-toggle="modal" data-target="#myModal">Add Customer</a>
							</h3>
							<select class="form-control" name='customer_id' >
								<option disabled selected>Select Customer</option>
								@foreach($cst as $c)
								<option value="{{$c->id}}">{{$c->name}}</option>
								@endforeach
							</select>
						</div>
						<br>
						<input type="submit" name="submit" value="Create Invoice" class="btn btn-success text-center" >
					</form>	
				</div>
			</div>
			<div class="col-lg-6" >
				<table class="table table-striped table-bordered" id='myTable'  id="table_id" class="display">
					<thead>
						<tr>
							<th>Image</th>
							<th>Name</th>
							<th>Category</th>
							<th>Code</th>
						</tr>
					</thead>
					<tbody>
						@foreach($product as $row)
						<tr>
							<form action="{{url('/add-cart')}}" method="post">
								@csrf
								<input type="hidden" name="id" value="{{$row->id}}">
								<input type="hidden" name="name" value="{{$row->product_name}}">
								<input type="hidden" name="qty" value="1">
								<input type="hidden" name="price" value="{{$row->selling_price}}">
								<td>
									<img src="{{URL::to($row->product_image)}}" width="50px"> </td>
									<td>{{$row->product_name}}</td>
									<td>{{$row->cat_name}}</td>
									<td>{{$row->product_code}}</td>
									<td><button type="submit" class="btn btn-info btn-sm"><i class="fas fa-plus-square"></i></button> </td>
								</form>
							</tr>
							@endforeach
						</tbody>

					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="container">


		<!-- Modal -->
		<div class="modal fade" id="myModal" role="dialog">
			<div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="text-center">New Customer</h4>
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
						<form action="{{url('/save-customer')}}" method="post" enctype="multipart/form-data" >
							@csrf
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label for="name">Name </label>
										<input type="text" name="name" class="form-control" id="name">
									</div>

								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label for="email">Email address:</label>
										<input type="email" name="email" class="form-control" id="email">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label for="pwd">Contact:</label>
										<input type="text" name="contact" class="form-control" id="contact">
									</div>

								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label for="pwd">Address:</label>
										<input type="text" name="address" class="form-control" id="address">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label for="pwd">Shopname:</label>
										<input type="text" name="shopname" class="form-control" id="shopname">
									</div>

								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label for="pwd">Acount Name:</label>
										<input type="text" name="acount_name" class="form-control" id="acount_name">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">

									<div class="form-group">
										<label for="pwd">Acount Number:</label>
										<input type="text" name="acount_number" class="form-control" id="acount_number">
									</div>

								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label for="pwd">Bank Name:</label>
										<input type="text" name="bank_name"  class="form-control" id="bank_name">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label for="pwd">Bank Branch:</label>
										<input type="text" name="bank_branch" class="form-control" id="bank_branch">
									</div>

								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<img id="image" src="#">
										<label for="pwd">Image:</label>
										<input type="file" name="picture" class="form-control" id="image" accept="image/*" onchange="readURL(this)">
									</div>
								</div>
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

	</div>
	<script type="text/javascript">
	function readURL(input){
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e){
				$('#image')
				.attr('src',e.target.result)
				.width(80)
				.height(80);
			};
			reader.readAsDataURL(input.files[0]);
		}
	}
	</script>










	<script type="text/javascript">
	$(document).ready( function () {
		$('#table_id').DataTable();
	} );
	</script>
	@endsection
