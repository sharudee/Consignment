<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h4 class="modal-title">สร้าง โปรโมชั่น</h4>
</div>
<div class="modal-body">
	<form class="form-horizontal">
		<div class="form-group">
			<label class="col-sm-2 control-label">เลขที่โปรโมชั่น</label>
			<div class="col-sm-10">
				 <input type="text" class="form-control" name="txtPmtNo" id="txtPmtNoID" readonly>
			</div>
		</div>


		<div class="form-group">
			<label class="col-sm-2 control-label">ชื่อโปรโมชั่น</label>
			<div class="col-sm-10">

	            <input type="text" name="txtPmtName" id="txtPmtNameID" required="required" class="form-control" data-message="กรุณาระบุ ชื่อโปรโมชั่น" >
                <span class="k-invalid-message" data-message="txtPmtName"></span>			
			</div>
		</div>


		<div class="form-group">
			<label class="col-sm-2 control-label">วันที่เริ่ม</label>
			<div class="col-sm-6">
				<div class="row">
					<div class="col-md-6">
                      <div class='input-group date' >
                                                            <input type='text' class="form-control"   id='txtStartdateID' name='txtStartdateID' readonly />

                                                            <span class="input-group-addon">

                                                                <span class="glyphicon glyphicon-calendar" style="font-size:35px;color:blue"></span>
                                                            </span>

                      </div>
					</div>
					<div class="col-md-6">
                      <div class='input-group date' >
                                                            <input type='text' class="form-control" id='txtenddateID'  name ='txtenddateID' readonly />

                                                            <span class="input-group-addon">

                                                                <span class="glyphicon glyphicon-calendar" style="font-size:35px;color:blue"></span>
                                                            </span>

                      </div>
					</div>
				</div>
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-2 control-label">เอกสารอ้างอิง</label>
			<div class="col-sm-6">
				 <input type="text" class="form-control" name="txtDocRef" id="textDocRefID">
			</div>
			<label class="col-sm-2 control-label">GP(%)</label>
			<div class="col-sm-2">
				<input type="text" name="txtGpAmt" id="txtGpAmtID" class="form-control required">		
			</div>
		</div>
		<div class="form-group">
				<label class="col-sm-2  control-label">ประเภท</label>
				<div class="col-sm-6">
				    <label class="radio-inline">
				        <input type="radio" name="txtPmtType" id="txtPmtTypeID" value="PROMOTION" checked>
				    Promotion </label>
				    <label class="radio-inline">
				        <input type="radio" name="txtPmtType" id="txtPmtTypeID" value="CAMPAIGN">
				    Campaign </label>
			    </div>

			<label class="col-sm-2 control-label">สถานะ</label>
			<div class="col-sm-2">
	
						        <select class="form-control required" id="txtRecStatusID" name="txtRecStatus">
						          <option value="ACTIVE">Active</option>
						          <option value="INACTIVE">Inactive</option>
						        </select>	
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-2 control-label">รายละเอียด</label>
			<div class="col-sm-10">
				 <textarea type="text" class="form-control" name="txtPmtDesc" id="txtPmtDescID" rows="10"></textarea>
			</div>
		</div>


		<!-- <a href="#addtr" rel="testprepend" class="btn btn-primary">Add Rows</a> -->

		<input type="hidden" name="_token" value="{{csrf_token()}}">
	
	</form>


</div>
<div class="modal-footer">
	<button type="button"  id="AddNewPromotion" class="btn btn-primary"><i class="fa fa-save"></i>บันทึก</button>
	<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>ปิด</button>
</div>


