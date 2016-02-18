
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h4 class="modal-title">สร้าง กลุ่มข้อมูล</h4>
</div>
<div class="modal-body">
	<form class="form-horizontal">
		<div class="form-group">
			<label class="col-sm-2 control-label">รหัส</label>
			<div class="col-sm-10">
				 <input type="text" class="form-control" name="txt_pmt_group_code" id="txt_pmt_group_code_ID">
			</div>
		</div>


		<div class="form-group">
			<label class="col-sm-2 control-label">ชื่อกลุ่มข้อมูล</label>
			<div class="col-sm-10">

	            <input type="text" name="txt_pmt_group_name" id="txt_pmt_group_name_ID" required="required" class="form-control" data-message="กรุณาระบุ ชื่อโปรโมชั่น" >
                <span class="k-invalid-message" data-for="txtPmtName"></span>			
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
	<button type="button"  id="savepmtgrpmast" class="btn btn-sm btn-primary"><i class="fa fa-save"></i>บันทึก</button>
	<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fa fa-times"></i>ปิด</button>
</div>
