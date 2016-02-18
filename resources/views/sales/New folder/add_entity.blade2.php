@extends('layouts.default')
@section('title_page') Promotion @stop

@section('active_home') 
class='active'
@stop

@section('content')
<br>
<p class="breadcrumb">บันทึก Entity</p>
<div class="col-sm-12">
	<form action="{{URL::to('sales/promotion')}}"  method="GET" class="form-horizontal" role="form">
			<!--<div class="form-group">
				<legend>บันทึก  Entity</legend>
			</div>-->
			
			
			<div class="container">
				<div class="row form-group">
					<div class="col-sm-2">
						<label>รหัสลูกค้า</label>
					</div>
					<div class="col-sm-2">
						<input type="text" name="entity_code" id="input" class="form-control input-sm">
					</div>

					<div class="col-sm-2 col-sm-offset-1">
						<label>หมายเลขเครื่อง</label>
					</div>

					<div class="col-sm-2">
						<input type="text" name="cos_no" id="input" class="form-control input-sm">
					</div>
					
				</div>
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label>ชื่อลูกค้า (ไทย)</label>
					</div>
					<div class="col-sm-7">
						<input type="text" name="entity_tname" id="input" class="form-control input-sm">
					</div>
				</div>	
				<div class="row form-group">
					<div class="col-sm-2">
						<label>ชื่อลูกค้า (อังกฤษ)</label>
					</div>
					<div class="col-sm-7">
						<input type="text" name="entity_ename" id="input" class="form-control input-sm">
					</div>
				</div>	

				<div class="row form-group">
					<div class="col-sm-2">
						<label>กลุ่มลูกค้า</label>
					</div>
					<div class="col-sm-2">
						<input type="text" name="cust_grp" id="input" class="form-control input-sm">

					</div>
					<div class="col-sm-2 col-sm-offset-1">
						<label>อัตราภาษี</label>
					</div>

					<div class="col-sm-2">
						<input type="text" name="tax_rate" id="input" class="form-control input-sm">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label>รหัสควบคุม</label>
					</div>
					<div class="col-sm-2">
						<input type="text" name="ent_ctrl" id="input" class="form-control input-sm">
					</div>
					<div class="col-sm-2 col-sm-offset-1">
						<label>ประเภทการ Group Bill</label>
					</div>

					<div class="col-sm-2">
						
							
						        <select class="form-control input-sm" id="select">
						          <option value="SKU">SKU - ตามรหัสสินค้าลูกค้า</option>
						          <option value="DISC">DISC - ตามส่วนลดลูกค้า + GP ห้าง</option>
						        </select>
						
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label>ประเภทการขาย</label>
					</div>
					<div class="col-sm-2">
						 <select class="form-control input-sm" id="select">
						          <option value="CO">CO</option>
						          <option value="SO">SO</option>
						  </select>
					</div>
					<div class="col-sm-2 col-sm-offset-1">
						<label>ประเภทรับคืน</label>
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