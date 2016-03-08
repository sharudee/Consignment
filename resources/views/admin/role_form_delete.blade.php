
@foreach($data_obj as $crt => $v)

<div class="modal-body">
	<form class="form-horizontal">
		<input type="hidden"  id= "Su_Role_id" type="hidden" name="Su_Role_id" value="{{$v->Su_Role_id}}"  />
		<div class="form-group">
			<label class="col-sm-2 control-label">รหัส</label>
			<div class="col-sm-10">
				 <input type="text" class="form-control" name="RoleName" id="RoleName" value="{{$v->RoleName}}" readonly>
			</div>
		</div>


		<div class="form-group">
			<label class="col-sm-2 control-label">ชื่อสิทธิ์(ไทย)</label>
			<div class="col-sm-10">
	            <input type="text" name="RoleDescription" id="RoleDescription" value="{{$v->RoleDescription}}"  required="required" class="form-control" data-message="กรุณาระบุ ชื่อโปรโมชั่น" readonly>		
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">ประเภทสิทธิ์</label>
			<div class="col-sm-10">
	            <input type="text" name="PermissionsType" id="PermissionsType" value="{{$v->PermissionsType}}" required="required" class="form-control" data-message="กรุณาระบุ ชื่อโปรโมชั่น" readonly>		
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-2 control-label">สถานะ</label>
			<div class="col-sm-2">
									        <select class="form-control required" id="txtRecStatusID" name="txtRecStatusID" readonly>
									          <option value="ACTIVE" <?php if($v->RecordStatus == "ACTIVE" ) { echo "selected"; } ?>>Active</option>
									          <option value="INACTIVE" <?php if($v->RecordStatus == "INACTIVE" ) { echo "selected"; } ?>>Inactive</option>
									        </select>
			</div>
		</div>
	

		<!-- <a href="#addtr" rel="testprepend" class="btn btn-primary">Add Rows</a> -->

		<input type="hidden" name="_token" value="{{csrf_token()}}">
	
	</form>


</div>
<div class="modal-footer">
	<button type="button"  id="SaveDeleteRole" class="btn btn-primary"><i class="fa fa-save"></i>บันทึก</button>
	<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>ปิด</button>
</div>
@endforeach