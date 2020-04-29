@extends('layouts.app')

@section('content')
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
	<div class="card">
		<h5 class="card-header">All Attendemce </h5>
		<h3 class="text-center">Todat{{date('d/m/Y')}} </h3>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-striped table-bordered first" id='myTable'>
					<thead>
						<tr>
							<th>Sl</th>
							<th>Edit Date</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							$i = 1;
						?>

						@foreach($data as $row)
						<tr>
							<td>{{$i++}}</td>
							<td>{{$row->edit_date}}</td>
							<td>
								<a href="{{url('/view-attendence/'.$row->edit_date)}}" class="btn btn-primary">View</a>
								<a href="{{url('/edit-attendence/'.$row->edit_date)}}" class="btn btn-success">Edit</a>
								<a href="{{url('/delete-attendence/'.$row->edit_date)}}" id="delete" class="btn btn-danger">Delete</a>
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