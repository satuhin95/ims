@extends('layouts.app')

@section('content')
<div class="card">
	<h5 class="card-header">New Supplier</h5>
	<div class="card-body">
		<form method="post" enctype="multipart/form-data" action="{{url('/update-supplier/'.$supplier->id)}}">
			@csrf
			<div class="form-group">
				<label for="inputText3" class="col-form-label">Name</label>
				<input id="inputText3" name="name" value="{{$supplier->name}}" type="text" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="inputEmail">Email address</label>
				<input id="inputEmail" type="email"  value="{{$supplier->email}}" name="email"  class="form-control" >
			</div>
			<div class="form-group">
				<label for="inputText3" class="col-form-label">Contact</label>
				<input id="inputText3" name="contact"  value="{{$supplier->contact}}" type="text" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="inputText3" class="col-form-label">Address</label>
				<input id="inputText3" name="address"  value="{{$supplier->address}}" type="text" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="inputText3" class="col-form-label">Shop</label>
				<input id="inputText3" name="shop"  value="{{$supplier->shop}}" type="text" class="form-control" >
			</div>
			<div class="form-group">
				<label for="inputText3" class="col-form-label">Type</label>
				<select name="type" class="form-control">
					<option vvalue="{{$supplier->type}}">{{$supplier->type}}</option>
					<option value="distributor">Distributor</option>
					<option value="whole_seller">Whole Seller</option>
					<option value="brochure">Brochure</option>
				</select>
			</div>
			<div class="form-group">
				<label for="inputText3" class="col-form-label">Acount Name</label>
				<input id="inputText3" name="acount_name"  value="{{$supplier->acount_name}}" type="text" class="form-control" >
			</div>
			<div class="form-group">
				<label for="inputText3" class="col-form-label">Acount Number</label>
				<input id="inputText3" name="acount_number"  value="{{$supplier->acount_number}}" type="text" class="form-control" >
			</div>
			<div class="form-group">
				<label for="inputText3" class="col-form-label">Bank Name</label>
				<input id="inputText3" name="bank_name"  value="{{$supplier->bank_name}}" type="text" class="form-control" >
			</div>
			<div class="form-group">
				<label for="inputText3" class="col-form-label">Bank Branch</label>
				<input id="inputText3" name="bank_branch"  value="{{$supplier->bank_branch}}" type="text" class="form-control" >
			</div>
			<input  name="submit" value="Add" type="submit" class="btn btn-success">
		</form>
	</div>

</div>


@endsection