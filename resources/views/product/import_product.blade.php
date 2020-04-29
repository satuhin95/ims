@extends('layouts.app')

@section('content')
<div class="card">
	<h2 class="card-header ">Import Product</h2>
	<h2 class="card-header">
		<a href="{{route('export')}}" class="text-right bg-warning">Download Xlsx</a>
	</h2>
	<div class="card-body">
		<form method="post" enctype="multipart/form-data" action="{{route('import')}}">
			@csrf
			<div class="form-group">
				<label for="inputText3" class="col-form-label">Xlsx File Import </label>
				<input id="inputText3" name="import_file" type="file" class="form-control" required>
			</div>
			<input  name="submit" value="Upload" type="submit" class="btn btn-success">
		</form>
	</div>

</div>



@endsection