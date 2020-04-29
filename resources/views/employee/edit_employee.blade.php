@extends('layouts.app')

@section('content')
<div class="card">
	<h5 class="card-header">Update Employee</h5>
	<div class="card-body">
		<form method="post" enctype="multipart/form-data" action="{{url('/update-employee/'.$emp->id)}}">
			@csrf
			<div class="form-group">
				<label for="inputText3" class="col-form-label">Name</label>
				<input id="inputText3" name="name" value="{{$emp->name}}"type="text" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="inputEmail">Email address</label>
				<input id="inputEmail" type="email" name="email" value="{{$emp->email}}"  class="form-control" required>
			</div>
			<div class="form-group">
				<label for="inputText3" class="col-form-label">Contact</label>
				<input id="inputText3" name="contact" type="text" value="{{$emp->contact}}" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="inputText3" class="col-form-label">Address</label>
				<input id="inputText3" name="address" type="text" value="{{$emp->address}}" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="inputText3" class="col-form-label">Experience</label>
				<input id="inputText3" name="experience" type="text" value="{{$emp->experience}}" class="form-control" >
			</div>
			<div class="form-group">
				<label for="inputText3" class="col-form-label">Salary</label>
				<input id="inputText3" name="salary" type="text" value="{{$emp->salary}}" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="inputText3" class="col-form-label">Vacation</label>
				<input id="inputText3" name="vacation" value="{{$emp->vacation}}" type="text" class="form-control" required>
			</div>
			<div class="form-group">
				<img  src="{{URL::to($emp->picture)}}" name="old_picture" width="60px">
				<label for="inputText3" class="col-form-label"> Old Picture</label>
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