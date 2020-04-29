@extends('layouts.app')

@section('content')
<div class="card">
	<h5 class="card-header">New Supplier</h5>
	<div class="card-body">
		<form method="post" enctype="multipart/form-data" action="{{url('/save-supplier')}}">
			@csrf
			<div class="form-group">
				<label for="inputText3" class="col-form-label">Name</label>
				<input id="inputText3" name="name" type="text" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="inputEmail">Email address</label>
				<input id="inputEmail" type="email" name="email"  class="form-control" >
			</div>
			<div class="form-group">
				<label for="inputText3" class="col-form-label">Contact</label>
				<input id="inputText3" name="contact" type="text" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="inputText3" class="col-form-label">Address</label>
				<input id="inputText3" name="address" type="text" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="inputText3" class="col-form-label">Shop</label>
				<input id="inputText3" name="shop" type="text" class="form-control" >
			</div>
			<div class="form-group">
				<label for="inputText3" class="col-form-label">Type</label>
				<select name="type" class="form-control">
					<option value="distributor">Distributor</option>
					<option value="whole_seller">Whole Seller</option>
					<option value="brochure">Brochure</option>
				</select>
			</div>
			<div class="form-group">
				<label for="inputText3" class="col-form-label">Acount Name</label>
				<input id="inputText3" name="acount_name" type="text" class="form-control" >
			</div>
			<div class="form-group">
				<label for="inputText3" class="col-form-label">Acount Number</label>
				<input id="inputText3" name="acount_number" type="text" class="form-control" >
			</div>
			<div class="form-group">
				<label for="inputText3" class="col-form-label">Bank Name</label>
				<input id="inputText3" name="bank_name" type="text" class="form-control" >
			</div>
			<div class="form-group">
				<label for="inputText3" class="col-form-label">Bank Branch</label>
				<input id="inputText3" name="bank_branch" type="text" class="form-control" >
			</div>
			<input  name="submit" value="Add" type="submit" class="btn btn-success">
		</form>
	</div>

</div>


@endsection