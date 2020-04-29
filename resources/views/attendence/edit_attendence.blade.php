@extends('layouts.app')

@section('content')
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
	<div class="card">
		<h5 class="card-header">Update Attendemce </h5>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-striped table-bordered first" id='myTable'>
					<thead>
						<tr>
							<th>Id</th>
							<th>Name</th>
							<th>Picture</th>
							<th>Attendece</th>
						</tr>
					</thead>
					<form method="post" action="{{url('/update-attendence')}}" >
						@csrf
						<tbody>

							@foreach($data as $row)
							<tr>
								<td>{{$row->id}}</td>
								<td>{{$row->name}}</td>
								<td>
									<img src="{{URL::to($row->picture)}}" width="50px">
								</td>
								<input type="hidden" name="id[]" value="{{$row->id}}" >
								<td>
									<label class="custom-control custom-radio custom-control-inline">
										<input type="radio" name="attendence[{{$row->id}}]" <?php if($row->status== 'present'){ echo 'checked';} ?> value="present"  class="custom-control-input"><span class="custom-control-label">Present</span>
									</label>
									<label class="custom-control custom-radio custom-control-inline">
										<input type="radio" name="attendence[{{$row->id}}]" value="absence" <?php if($row->status== 'absence'){ echo 'checked';} ?> class="custom-control-input"><span class="custom-control-label">Absence</span>
									</label>
								</td>
								<input type="hidden" name="date" value="{{date('d/m/y')}}" >
								<input type="hidden" name="year" value="{{date('Y')}}" >
								<input type="hidden" name="month" value="{{date('F')}}" >
							</tr>
							@endforeach


						</tbody>

					</table>
					<input type="submit" name="submit" class="btn btn-success text-center">
				</form>
			</form>
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