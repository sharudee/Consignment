@extends('include.index')
@section('title_page') PC - @stop

@section('content')

	<div class="col-md-12">
		<h1><i class="fa fa-list"></i> บันทึกเวลาทำงาน</h1>	
		

	</div>

	<div class="col-md-12 top40">
			
			
		

<div class="col-sm-12">
	<form class="form-horizontal" role="form">
			
			
			<div class="container">
				<div class="row form-group">
					<div class="col-sm-2">
						<label>วันที่ทำงาน</label>
					</div>
					<div class="col-sm-1"> <?php echo date('d/m/Y'); ?>				
					</div>

										
				</div>
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label>รหัสพนักงาน</label>
					</div>
					<div class="col-sm-2">
						<input type="text" name="emp_code" id="emp_code" class="form-control input-sm">
						<p><span id='emp_code'></span></p>
					</div>
				</div>	
				


				<input type ="hidden" name="_token"  value="{{csrf_token()}}">

			</div>
			
			<br>
			<div class="form-group">
				<div class="col-sm-10 col-sm-offset-2">
					<button type="button" class="btn btn-success" id="SubmitIn">In</button>
					<button type="button" class="btn btn-danger" id="SubmitOut">Out</button>
				</div>
			</div>
	</form>
</div>
</div>
@stop