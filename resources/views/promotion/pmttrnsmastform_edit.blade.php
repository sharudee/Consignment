@foreach($result_data_obj as $crt => $v)
<div class="modal-body">
	<form class="form-horizontal">
	<input type="hidden"  id= "txtedittransactionid" type="hidden" name="txtedittransactionid" value="{{$v->transaction_id}}"  />
		<div class="form-group">
			<label class="col-sm-2 control-label">รหัส</label>
			<div class="col-sm-10">
				 <input type="text" class="form-control" name="txt_transaction_code " id="txt_transaction_code" value="{{$v->transaction_code}}" readonly >
			</div>
		</div>


		<div class="form-group">
			<label class="col-sm-2 control-label">ชื่อประเภทรายการ</label>
			<div class="col-sm-10">
	            <input type="text" name="txt_trnsaction_name" id="txt_trnsaction_name" required="required" class="form-control" value="{{$v->trnsaction_name}}">		
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-2 control-label">กลุ่ม</label>
					<div class="col-md-3">
						 <input type="text" class="form-control" name="txt_pmt_group_code" id="txt_pmt_group_code" value="{{$v->pmt_group_code}}" readonly>
					</div>
					<div class="col-md-1">
						<a href="#" rel="clickmstgrp_modal2" class="btn btn-sm btn-info">
						<i class="fa fa-plus-square-o"></i>..</a>
					</div>
					<div class="col-md-6">
						 <input type="text" class="form-control" name="txt_pmtgrp_name" id="txt_pmtgrp_name" value="{{$v->pmt_group_name}}" readonly>
					</div>


		</div>

		<div class="form-group">
			<label class="col-sm-2 control-label">สถานะ</label>
			<div class="col-sm-2">
									        <select class="form-control required" id="txtRecStatusID" name="txtRecStatus">
									          <option value="ACTIVE" <?php if($v->rec_status == "ACTIVE" ) { echo "selected"; } ?>>Active</option>
									          <option value="INACTIVE" <?php if($v->rec_status == "INACTIVE" ) { echo "selected"; } ?>>Inactive</option>
									        </select>
			</div>
		</div>
	

		<!-- <a href="#addtr" rel="testprepend" class="btn btn-primary">Add Rows</a> -->

		<input type="hidden" name="_token" value="{{csrf_token()}}">
	
	</form>


</div>


@endforeach



