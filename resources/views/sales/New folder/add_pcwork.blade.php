@extends('include.index')
@section('title_page') Warehouse - @stop

@section('content')

<div class="col-sm-12">
	<form action="{{URL::to('sales/pcwork')}}"  method="GET" class="form-horizontal" role="form">
			<div class="form-group">
				<legend>Update</legend>
			</div>
			
			<div class="container">
				<div class="row form-group">
					<div class="col-sm-2">
						<label>วันที่ทำงาน</label>
					</div>
					<div class="col-sm-1">
						<input type="text" name="" id="input" class="form-control input-sm">
					</div>

										
				</div>
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label>วันทำงาน</label>
					</div>
					<div class="col-sm-2">
						<select class="form-control input-sm" id="select">
						          <option value="N">วันทำงาน</option>
						          <option value="P">วันหยุด</option>
						</select>
					</div>
				</div>	
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label>ประเภท</label>
					</div>
					<div class="col-sm-2">
						<select class="form-control input-sm" id="select">
						          <option value="N">ประจำ</option>
						          <option value="P">แทน</option>
						</select>
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