@extends('layouts.app')

@section('content')
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
	<div class="card">
		<h5 class="card-header">Basic Table</h5>
		   @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
       @endif
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-striped table-bordered first" id='myTable'>
					<thead>
						<tr>
							<th>Id</th>
							<th>NameName</th>
							<th>Email</th>
							<th>Contact</th>
							<th>Address</th>
							<th>Shop Name</th>
							<th>Type</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($suppliers as $supplier)
						<tr>
							<td>{{$supplier->id}}</td>
							<td>{{$supplier->name}}</td>
							<td>{{$supplier->email}}</td>
							<td>{{$supplier->contact}}</td>
							<td>{{$supplier->address}}</td>
							<td>{{$supplier->shop}}</td>
							<td>{{$supplier->type}}</td>
							<td>
								<a href="{{url('/view-supplier/'.$supplier->id)}}" class="btn btn-primary">View</a>
								<a href="{{url('/edit-supplier/'.$supplier->id)}}" class="btn btn-success">Edit</a>
								<a href="{{url('/delete-supplier/'.$supplier->id)}}" id="delete" class="btn btn-danger">Delete</a>
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