
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h4 class="modal-title">เพิ่ม การกำหนดโปรแกรม</h4>
</div>
<div class="modal-body">
	<form class="form-horizontal">
		<div class="form-group">
			<label class="col-sm-2 control-label">รหัส</label>
			<div class="col-sm-10">
				 <input type="text" class="form-control" name="ProgramCode" id="ProgramCode">
			</div>
		</div>


		<div class="form-group">
			<label class="col-sm-2 control-label">ชื่อโปรแกรม(ไทย)</label>
			<div class="col-sm-10">
	            <input type="text" name="ProgramDescription" id="ProgramDescription" required="required" class="form-control" data-message="กรุณาระบุ ชื่อโปรโมชั่น" >		
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Route Url</label>
					<div class="col-md-7">
						 <input type="text" class="form-control" name="RouteUrl" id="RouteUrl" >
					</div>
					<label class="col-sm-1 control-label">ลำดับ</label>
					<div class="col-md-2">
						 <input type="text" class="form-control" name="SortSeq" id="SortSeq" >
					</div>


		</div>

		<div class="form-group">
			<label class="col-sm-2 control-label">สถานะ</label>
			<div class="col-sm-2">
	
						        <select class="form-control required" id="txtRecStatusID" name="txtRecStatusID">
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
	<button type="button"  id="SaveNewProgram" class="btn btn-primary"><i class="fa fa-save"></i>บันทึก</button>
	<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>ปิด</button>
</div>
