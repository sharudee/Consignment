@extends('include.index')
@section('title_page') PC - @stop

@section('content')

	<div class="col-md-12">
		<h1><i class="fa fa-list"></i> ค้นหาตารางการทำงาน</h1>	
		

	</div>

	<div class="col-md-12 top40">
			
			
		

<div class="col-sm-12">
	<form class="form-horizontal" role="form" action="pcworksearch_process" method="POST">
			
			
			<div class="container">
				<div class="row form-group">
					<div class="col-sm-2">
						<label>รหัสพนักงาน</label>
					</div>
					<div class="col-sm-2">
						<input type="text" name="emp_code" id="input" class="form-control input-sm" value="{{$emp_code }}" >
	
					</div>

										
				</div>
				

				<div class="row form-group">
					<div class="col-sm-2">
						<label>ปี </label>
					</div>
					<div class="col-sm-2">
						<input type="text" name="year" id="year" class="form-control input-sm required" value="<?php  if(isset($input['year'])) { echo $input['year']; } ?>">
						{!!$errors->first('year','<p class="error">:message</p>')!!}
					</div>

										
				</div>
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label>เดือน</label>
					</div>
					<div class="col-sm-2">
						<input type="text" name="month" id="month" class="form-control input-sm required" value="<?php  if(isset($input['month'])) { echo $input['month']; } ?>">
						{!!$errors->first('month','<p class="error">:message</p>')!!}
					</div>

				</div>	
				
				
			</div>
			<input type ="hidden" name="_token"  value="{{csrf_token()}}">
			<br>
			<div class="form-group">
				<div class="col-sm-10 col-sm-offset-2">
					<button type="submit" class="btn btn-primary" id="SubmitSearch"><i class="fa fa-search"></i>Search</button>
					<!--<button type="button" class="btn btn-primary" id="SubmitPrint"><i class="fa fa-sign-out"></i>Print</button>-->
				</div>
			</div>
	</form>
</div>
</div>
@stop