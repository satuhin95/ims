@extends('layouts.app')

@section('content')
<div class="card">
	<h5 class="card-header">New Category</h5>
	<div class="card-body">
		<form method="post" enctype="multipart/form-data" action="{{url('/save-category')}}">
			@csrf
			<div class="form-group">
				<label for="inputText3" class="col-form-label">Category name</label>
				<input id="inputText3" name="cat_name" type="text" class="form-control" required>
			</div>
			<input  name="submit" value="Add" type="submit" class="btn btn-success">
		</form>
	</div>

</div>



@endsection