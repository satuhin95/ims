@extends('layouts.app')

@section('content')
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
	<div class="card">
		<h1 class="card-header">Pay Salary</h1>
		<h2 class="text-center">{{date('F Y')}}</h2>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-striped table-bordered first" id='myTable'>
					<thead>
						<tr>
							<th>Id</th>
							<th>Employee Name</th>
							<th>Salary</th>
							<th>Month</th>
							<th>Action</th>
						</tr>
					</thead>
			


					<tbody>

						@foreach($emp as $row)
						<tr>
							<td>{{$row->id}}</td>
							<td>{{$row->name}}</td>
							<td>{{$row->salary}}</td>
							<td>{{ date('F',strtotime('-1 months'))}}</td>
							<td>
								<a href="" class="btn btn-primary">Pay Now</a>
								
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