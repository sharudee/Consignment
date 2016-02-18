@extends('layouts.default')
@section('title_page') Promotion @stop

@section('active_home') 
class='active'
@stop

@section('content')

<div class="col-sm-12">
	<form action="{{URL::to('sales/docmast')}}"  method="GET" class="form-horizontal" role="form">
			<div class="form-group">
				<legend>บันทึกคลังสินค้า</legend>
			</div>
			
			<div class="container">
				<div class="row form-group">
					<div class="col-sm-2">
						<label>รหัสคลัง</label>
					</div>
					<div class="col-sm-2">
						<input type="text" name="" id="input" class="form-control input-sm">
					</div>

										
				</div>
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label>ชื่อคลัง (ไทย)</label>
					</div>
					<div class="col-sm-7">
						<input type="text" name="" id="input" class="form-control input-sm">
					</div>
				</div>	
				<div class="row form-group">
					<div class="col-sm-2">
						<label>ชื่อคลัง (อังกฤษ)</label>
					</div>
					<div class="col-sm-7">
						<input type="text" name="" id="input" class="form-control input-sm">
					</div>
				</div>	

				<div class="row form-group">
					<div class="col-sm-2">
						<label>ที่อยู่</label>
					</div>
					<div class="col-sm-7">
						<input type="text" name="" id="input" class="form-control input-sm">
					</div>
				</div>	
				<div class="row form-group">
					<div class="col-sm-2">
						<label></label>
					</div>
					<div class="col-sm-7">
						<input type="text" name="" id="input" class="form-control input-sm">
					</div>
				</div>	
				<div class="row form-group">
					<div class="col-sm-2">
					<label>โทรศัพท์</label>
					</div>
					<div class="col-sm-2">
						<input type="text" name="" id="input" class="form-control input-sm">
					</div>
					<div class="col-sm-2 col-sm-offset-1">
					<label>ชื่อผู้ติดต่อ</label>
					</div>

					<div class="col-sm-2">
						<input type="text" name="" id="input" class="form-control input-sm">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
					<label>สถานะ</label>
					</div>
					<div class="col-sm-2">
						<input type="text" name="" id="input" class="form-control input-sm">
					</div>
					<div class="col-sm-2 col-sm-offset-1">
					
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