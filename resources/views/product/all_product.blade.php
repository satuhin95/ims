@extends('layouts.app')

@section('content')
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
	<div class="card">
		<h5 class="card-header">All Product</h5>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-striped table-bordered first" id='myTable'>
					<thead>
						<tr>
							<th>Id</th>
							<th>Product Name</th>
							<th>Category Name</th>
							<th>Supplier Name</th>
							<th>Buying Price</th>
							<th>Selling Price</th>
							<th>Picture</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($product as $row)
						<tr>
							<td>{{$row->id}}</td>
							<td>{{$row->product_name}}</td>
							<td>{{$row->cat_name}}</td>
							<td>{{$row->name}}</td>
							<td>{{$row->buying_price}}</td>
							<td>{{$row->selling_price}}</td>
							<td>
								<img src="{{$row->product_image}}" width="60px">
							</td>
							<td>
								<a href="{{url('/view-product/'.$row->id)}}" class="btn btn-primary">View</a>
								<a href="{{url('/edit-product/'.$row->id)}}" class="btn btn-success">Edit</a>
								<a href="{{url('/delete-product/'.$row->id)}}" id="delete" class="btn btn-danger">Delete</a>
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