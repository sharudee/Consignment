@extends('layouts.default')
@section('title_page') SKU @stop

@section('active_home') 
class='active'
@stop

@section('content')

<div class="col-sm-12">
	<form action="{{URL::to('sales/sku')}}"  method="GET" class="form-horizontal" role="form">
			<div class="form-group">
				<legend>Add SKU</legend>
			</div>
			
			<div class="container">
				<div class="row form-group">
					<div class="col-sm-2">
						<label>SKU</label>
					</div>
					<div class="col-sm-2">
						<input type="text" name="" id="input" class="form-control input-sm">
					</div>

										
				</div>
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label>รายละเอียด</label>
					</div>
					<div class="col-sm-5">
						<input type="text" name="" id="input" class="form-control input-sm">
					</div>
				</div>	
				<div class="row form-group">
					<div class="col-sm-2">
						<label>ประเภทส่วนลด</label>
					</div>
					<div class="col-sm-2">
						<select class="form-control input-sm" id="select">
						          <option value="N">ปกติ</option>
						          <option value="P">จัดรายการ</option>
						</select>
					</div>
				</div>	

				<div class="row form-group">
					<div class="col-sm-2">
						<label>ส่วนลด</label>
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