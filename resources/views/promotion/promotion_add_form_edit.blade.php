@foreach($result_data_obj as $crt => $v)
<div class="modal-body">
	<form class="form-horizontal">
	<input type="hidden"  id= "txtpmt_mast_id" type="hidden" name="txtpmt_mast_id" value="{{$v->pmt_mast_id}}"  />

		<div class="form-group">
			<label class="col-sm-2 control-label">เลขที่โปรโมชั่น</label>
			<div class="col-sm-10">
				 <input type="text" class="form-control" name="txtPmtNo" id="txtPmtNo" value="{{$v->pmt_no}}" readonly>
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-2 control-label">ชื่อโปรโมชั่น</label>
			<div class="col-sm-10">
				
				<input id="personName" class="form-control placeholder has-error" type="text" name="txtPmtName" id="txtPmtName" value="{{$v->pmt_name}}" required="required" 
		      	 data-bind="value: txtPmtName" 
		      	 title="กรุณาระบุ ชื่อโปรโมชั่น" >		
		      	 <span data-bind="validationMessage: txtPmtName"></span>
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-2 control-label">วันที่เริ่ม</label>
			<div class="col-sm-10">
				<div class="row">
					<div class="col-md-6">
                      <div class='input-group ' >
                                                            <input type='text' class="form-control"   id='txtStartdateID' name='txtStartdateID' readonly value="{{($v->start_date)}}" />

                                                            <span class="input-group-addon">

                                                                <span class="glyphicon glyphicon-calendar" style="font-size:35px;color:blue"></span>
                                                            </span>

                      </div>
					</div>
	


					<div class="col-md-6">
                      <div class='input-group ' >
                                                            <input type='text' class="form-control" id='txtenddateID'  name ='txtenddateID' readonly value="{{($v->end_date)}}" />

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
				 <input type="text" class="form-control" name="txtDocRef" id="txtDocRef" value="{{$v->ref_doc_no}}" >
			</div>
			<label class="col-sm-2 control-label">GP(%)</label>
			<div class="col-sm-2">
				<input type="text" name="txtGpAmt" id="txtGpAmt" class="form-control required" value="{{$v->gp_amt}}" >		
			</div>
		</div>
		<div class="form-group">
				<label class="col-sm-2  control-label">ประเภท</label>
				<div class="col-sm-6">
				    <label class="radio-inline">
				       <input type="radio" name="txtPmtType" id="txtPmtType" value="PROMOTION" <?php if($v->pmt_type == "PROMOTION" ) { echo "checked"; } ?>> Promotion </label>
				    <label class="radio-inline">
				        <input type="radio" name="txtPmtType" id="txtPmtType" value="CAMPAIGN" <?php if($v->pmt_type == "CAMPAIGN" ) { echo "checked"; } ?>> Campaign </label>
			    </div>

			<label class="col-sm-2 control-label">สถานะ</label>
			<div class="col-sm-2">
										      <select class="form-control required" id="txtRecStatusID" name="txtRecStatus">
									          <option value="ACTIVE" <?php if($v->rec_status == "ACTIVE" ) { echo "selected"; } ?>>Active</option>
									          <option value="INACTIVE" <?php if($v->rec_status == "INACTIVE" ) { echo "selected"; } ?>>Inactive</option>
									        </select>
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-2 control-label">รายละเอียด</label>
			<div class="col-sm-10">
				 <textarea type="text" class="form-control" name="txtPmtDesc" id="txtPmtDesc" rows="10" >{{$v->pmt_desc}}</textarea>
			</div>
		</div>
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	
	</form>


</div>


@endforeach


