@extends('layouts.app')

@section('content')
<div class="card">
	<h5 class="card-header">New Expense</h5>
	<div class="card-body">
		<form method="post" enctype="multipart/form-data" action="{{url('/save-expense')}}">
			@csrf
			
			<div class="form-group">
				<label for="inputEmail"> Details</label>
				<input id="inputEmail" type="text" name="details"  class="form-control" required>
			</div>
			<div class="form-group">
				<label for="inputText3" class="col-form-label">Amount</label>
				<input id="inputEmail" type="text" name="amount"  class="form-control" required>
			</div>
			<div class="form-group">
				<label for="inputEmail"> Month</label>
				<select name="month" class="form-control">
					<option value="janaury">January</option>
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
				<label for="inputEmail">Date</label>
				<input id="inputEmail" type="date" name="date"  class="form-control" required>
			</div>

			<input  name="submit" value="Add" type="submit" class="btn btn-success">
		</form>
	</div>

</div>



@endsection