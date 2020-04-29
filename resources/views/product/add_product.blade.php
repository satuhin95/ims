@extends('layouts.app')

@section('content')
<div class="card">
	<h5 class="card-header">New Category</h5>
	<div class="card-body">
		<form method="post" enctype="multipart/form-data" action="{{url('/save-product')}}">
			@csrf
			<div class="form-group">
				<label for="inputText3" class="col-form-label">Product name</label>
				<input id="inputText3" name="product_name" type="text" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="inputText3" class="col-form-label">Product Code</label>
				<input id="inputText3" name="product_code" type="text" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="inputText3" class="col-form-label">Category</label>
				<select name="cat_id" class="form-control">
					@php
						$cat = DB::table('catagories')->get()
					@endphp
					@foreach($cat as $row)
					<option value="{{$row->id}}">{{$row->cat_name}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="inputText3" class="col-form-label">Supplier</label>
				<select name="sup_id" class="form-control">
					@php
						$sup = DB::table('suppliers')->get()
					@endphp
					@foreach($sup as $row)
					<option value="{{$row->id}}">{{$row->name}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="inputText3" class="col-form-label">Product Godaon</label>
				<select name="product_godaon" class="form-control">
					<option value="">Select Godaon</option>
					<option value="1">Comilla</option>
					<option value="2">Dhaka</option>
					<option value="3">Khulne</option>
				</select>
			</div>
			<div class="form-group">
				<label for="inputText3" class="col-form-label">Product Route</label>
				<input id="inputText3" name="product_route" type="text" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="inputText3" class="col-form-label">Buy Date</label>
				<input id="inputText3" name="buy_date" type="date" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="inputText3" class="col-form-label">Expire Date</label>
				<input id="inputText3" name="expire_date" type="date" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="inputText3" class="col-form-label">Buying Price</label>
				<input id="inputText3" name="buying_price" type="text" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="inputText3" class="col-form-label">Selling Price</label>
				<input id="inputText3" name="selling_price" type="text" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="inputText3" class="col-form-label">Product Images</label>
				<input id="inputText3" name="product_image" type="file" class="form-control" required>
			</div>

			<input  name="submit" value="Add" type="submit" class="btn btn-success">
		</form>
	</div>

</div>



@endsection