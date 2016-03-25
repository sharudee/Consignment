@foreach($result_data_obj as $crt => $v)
<div class="modal-body">
	<form class="form-horizontal">
	<input type="hidden"  id= "txtpmt_mast_id" type="hidden" name="txtpmt_mast_id" value="{{$v->pmt_mast_id}}"  />

		<div class="form-group">
			<label class="col-sm-2 control-label">เลขที่โปรโมชั่น</label>
			<div class="col-sm-10">
				 <input type="text" class="form-control" name="txtPmtNoID" id="txtPmtNoID" value="{{$v->pmt_no}}" readonly>
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-2 control-label">ชื่อโปรโมชั่น</label>
			<div class="col-sm-10">
				
				<input type="text"  class="form-control placeholder has-error" type="text" name="txtPmtNameID" id="txtPmtNameID" value="{{$v->pmt_name}}" required="required" 
		      	 data-bind="value: txtPmtNameID" 
		      	 title="กรุณาระบุ ชื่อโปรโมชั่น" >		
		      	 <span data-bind="validationMessage: txtPmtNameID"></span>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">วันที่เริ่ม</label>
			<div class="col-sm-6">
				<div class="row">
					<div class="col-md-5">
                      <div class='form-group date' >
                    
                  		<div class="col-xs-12 col-sm-12 col-md-12">
                        	<input type="text"  name="txteditStartdateID" id="txteditStartdateID" class="form-control input-sm required" value="{{Carbon::parse($v->start_date)->format('d/m/Y') }}" readonly >
 								
						</div>
					<script type="text/javascript">

								$(function(){
								$("#txteditStartdateID").datepicker({
								dateFormat: 'dd/mm/yy'
								});

							});
					</script>
                      </div>
					</div>
					<div class="col-md-2">
						<label class="control-label">ถึงวันที่</label>
					</div>
					<div class="col-md-5">
                      <div class='form-group date' >
                                                        
                  		<div class="col-xs-12 col-sm-12 col-md-12">
                        	<input type="text"  name="txteditenddateID" id="txteditenddateID" class="form-control input-sm required" value="{{Carbon::parse($v->end_date)->format('d/m/Y') }}" readonly>

						</div>
					<script type="text/javascript">
								$(function(){
								$("#txteditenddateID").datepicker({
								dateFormat: 'dd/mm/yy'
								});
							});
					</script>						
                      </div>
					</div>
				</div>
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-2 control-label">เอกสารอ้างอิง</label>
			<div class="col-sm-6">
				 <input type="text" class="form-control" name="textDocRefID" id="textDocRefID" value="{{$v->ref_doc_no}}" >
			</div>
			<label class="col-sm-2 control-label">GP(%)</label>
			<div class="col-sm-2">
				<input type="text" name="txtGpAmtID" id="txtGpAmtID" class="form-control required" value="{{$v->gp_amt}}" >		
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


