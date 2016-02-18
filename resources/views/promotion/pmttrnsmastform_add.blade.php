
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h4 class="modal-title">สร้าง ประเภทรายการ</h4>
</div>
<div class="modal-body">
	<form class="form-horizontal">
		<div class="form-group">
			<label class="col-sm-2 control-label">รหัส</label>
			<div class="col-sm-10">
				 <input type="text" class="form-control" name="txt_transaction_code " id="txt_transaction_code">
			</div>
		</div>


		<div class="form-group">
			<label class="col-sm-2 control-label">ชื่อประเภทรายการ</label>
			<div class="col-sm-10">
	            <input type="text" name="txt_trnsaction_name" id="txt_trnsaction_name" required="required" class="form-control" data-message="กรุณาระบุ ชื่อโปรโมชั่น" >		
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-2 control-label">กลุ่ม</label>
					<div class="col-md-3">
						 <input type="text" class="form-control" name="txt_pmt_group_code" id="txt_pmt_group_code" readonly>
					</div>
					<div class="col-md-1">
						<a href="#" rel="clickmstgrp_modal" class="btn btn-sm btn-info">
						<i class="fa fa-plus-square-o"></i>..</a>
					</div>
					<div class="col-md-6">
						 <input type="text" class="form-control" name="txt_pmtgrp_name" id="txt_pmtgrp_name" readonly>
					</div>


		</div>

		<div class="form-group">
			<label class="col-sm-2 control-label">สถานะ</label>
			<div class="col-sm-2">
	
						        <select class="form-control required" id="txtRecStatusID" name="txtRecStatus">
						          <option value="ACTIVE">Active</option>
						          <option value="INACTIVE">Inactive</option>
						        </select>	
			</div>
		</div>
	

		<!-- <a href="#addtr" rel="testprepend" class="btn btn-primary">Add Rows</a> -->

		<input type="hidden" name="_token" value="{{csrf_token()}}">
	
	</form>


</div>
<div class="modal-footer">
	<button type="button"  id="SavePmtTransMastModel" class="btn btn-primary"><i class="fa fa-save"></i>บันทึก</button>
	<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>ปิด</button>
</div>
