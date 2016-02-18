@extends('layouts.default')
@section('title_page') Promotion @stop

@section('active_home') 
class='active'
@stop

@section('content')

<div class="col-sm-12">
	<form action="{{URL::to('sales/promotion')}}"  method="GET" class="form-horizontal" role="form">
			<div class="form-group">
				<legend>บันทึก Promotion</legend>
			</div>
			
			<div class="container">
				<div class="row form-group">
					<div class="col-sm-2">
						<label>เลขที่ Promotion</label>
					</div>
					<div class="col-sm-2">
						<input type="text" name="" id="input" class="form-control input-sm">
					</div>
					<div class="col-sm-2 col-sm-offset-1">
						<label>วันที่ Promotion</label>
					</div>

					<div class="col-sm-2">
						<input type="text" name="" id="input" class="form-control input-sm">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label>รายละเอียด</label>
					</div>
					<div class="col-sm-7">
						<input type="text" name="" id="input" class="form-control input-sm">
					</div>
				</div>	

				<div class="row form-group">
					<div class="col-sm-2">
						<label>วันที่เริ่ม</label>
					</div>
					<div class="col-sm-2">
						<input type="date" name="" id="input" class="form-control input-sm">
					</div>
					<div class="col-sm-2 col-sm-offset-1">
						<label>วันที่สิ้นสุด</label>
					</div>

					<div class="col-sm-2">
						<input type="date" name="" id="input" class="form-control input-sm">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label>เลขที่อ้างอิง</label>
					</div>
					<div class="col-sm-2">
						<input type="text" name="" id="input" class="form-control input-sm">
					</div>
					<div class="col-sm-2 col-sm-offset-1">
						<label>GP</label>
					</div>

					<div class="col-sm-2">
						<input type="text" name="" id="input" class="form-control input-sm">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label>หมายเหตุ</label>
					</div>
					<div class="col-sm-7">
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