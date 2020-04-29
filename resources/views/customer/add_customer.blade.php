@extends('layouts.app')

@section('content')
<div class="card">
	<h5 class="card-header">New Customer</h5>
	<div class="card-body">
		<form method="post" enctype="multipart/form-data" action="{{url('/save-customer')}}">
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
				<label for="inputText3" class="col-form-label">Shopname</label>
				<input id="inputText3" name="shopname" type="text" class="form-control" >
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
			<div class="form-group">
				<img id="image" src="#">
				<label for="inputText3" class="col-form-label">Picture</label>
				<input id="inputText3" name="picture" type="file" class="form-control upload" accept="image/*" onchange="readURL(this)" required>
			</div>
			<input  name="submit" value="Add" type="submit" class="btn btn-success">
		</form>
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


@endsection