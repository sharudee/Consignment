@extends('include.index')
@section('title_page') Document Control - @stop

@section('content')

<div class="col-sm-12">
	<form action="{{URL::to('sales/docmast')}}"  method="GET" class="form-horizontal" role="form">
			<div class="form-group">
				<legend>บันทึกควบคุมเอกสาร</legend>
			</div>
			
			<div class="container">
				<div class="row form-group">
					<div class="col-sm-2">
						<label>Doc Code</label>
					</div>
					<div class="col-sm-2">
						<input type="text" name="" id="input" class="form-control input-sm">
					</div>

										
				</div>
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label>Doc Name (Thai)</label>
					</div>
					<div class="col-sm-7">
						<input type="text" name="" id="input" class="form-control input-sm">
					</div>
				</div>	
				<div class="row form-group">
					<div class="col-sm-2">
						<label>Doc Name (English)</label>
					</div>
					<div class="col-sm-7">
						<input type="text" name="" id="input" class="form-control input-sm">
					</div>
				</div>	

				<div class="row form-group">
					<div class="col-sm-2">
						<label>Doc Ctrl</label>
					</div>
					<div class="col-sm-2">
						<input type="text" name="" id="input" class="form-control input-sm">
					</div>
					<div class="col-sm-2 col-sm-offset-1">
						<label>Stock Code</label>
					</div>

					<div class="col-sm-2">
						<input type="text" name="" id="input" class="form-control input-sm">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label>Post Type</label>
					</div>
					<div class="col-sm-2">
						<input type="text" name="" id="input" class="form-control input-sm">
					</div>
					
				</div>

				

				<input type ="hidden" name="_token"  value="{{csrf_token()}}">

			</div>
			
			<br>
			<div class="form-group">
				<div class="col-sm-10 col-sm-offset-2">
					<button type="submit" class="btn btn-primary">Save</button>
					<button type="submit" class="btn btn-danger">Cancel</button>
				</div>
			</div>
	</form>
</div>

@stop