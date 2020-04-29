@extends('layouts.app')

@section('content')
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
	<div class="card">
		<h5 class="card-header">All Category</h5>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-striped table-bordered first" id='myTable'>
					<thead>
						<tr>
							<th>Id</th>
							<th>Name</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($catagory as $row)
						<tr>
							<td>{{$row->id}}</td>
							<td>{{$row->cat_name}}</td>
							<td>
								<a href="{{url('/edit-employee/'.$row->id)}}" class="btn btn-success">Edit</a>
								<a href="{{url('/delete-employee/'.$row->id)}}" id="delete" class="btn btn-danger">Delete</a>
							</td>

						</tr>
						@endforeach
					</tbody>

				</table>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready( function () {
		$('#myTable').DataTable();
	} );
</script>
@endsection