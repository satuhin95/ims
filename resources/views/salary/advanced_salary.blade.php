@extends('layouts.app')

@section('content')
<div class="card">
	<h5 class="card-header">Advanced</h5>
	<div class="card-body">
		<form method="post" enctype="multipart/form-data" action="{{url('/save-advanced')}}">
			@csrf
			<div class="form-group">
				<label for="inputText3" class="col-form-label">Employee Id</label>
				<select name="emp_id" class="form-control">
					<option value="">Select Employee</option>
					@foreach($emp as $e)
					<option value="{{$e->id}}">{{$e->name}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="inputEmail"> Year</label>
				<select name="year" class="form-control">
					<?php 
						for ($i=2010; $i < 2100 ; $i++) { 
						?>
						<option value="<?php echo $i; ?>"><?php echo $i; ?></option>

						<?php
						}
					?>
					
				</select>
			</div>
			<div class="form-group">
				<label for="inputEmail"> Month</label>
				<select name="month" class="form-control">
					<option value="janaury">Janaury</option>
					<option value="February">February</option>
					<option value="March">March</option>
					<option value="April">April</option>
					<option value="May">May</option>
					<option value="June">June</option>
					<option value="July">July</option>
					<option value="August">August</option>
					<option value="September">September</option>
					<option value="October">October</option>
					<option value="November">November</option>
					<option value="December">December</option>
				</select>
			</div>
			
			<div class="form-group">
				<label for="inputEmail">Amount</label>
				<input id="inputEmail" type="text" name="amount"  class="form-control" required>
			</div>

			<input  name="submit" value="Add" type="submit" class="btn btn-success">
		</form>
	</div>

</div>



@endsection