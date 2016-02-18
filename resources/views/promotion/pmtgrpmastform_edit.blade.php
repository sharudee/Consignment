


@foreach($pmtgrpmast_obj as $crt => $v)

			<div class="modal-body">
				<form class="form-horizontal">
					<div class="form-group">
						<label class="col-sm-2 control-label">รหัส</label>
						<div class="col-sm-10">
							 <input type="text" class="form-control" name="txt_pmt_group_code" id="txt_pmt_group_code_ID"    value="{{$v->pmt_group_code}}" readonly>
						</div>
					</div>


					<div class="form-group">
						<label class="col-sm-2 control-label">ชื่อกลุ่มข้อมูล</label>
						<div class="col-sm-10">

				            <input type="text" name="txt_pmt_group_name" id="txt_pmt_group_name_ID" required="required" class="form-control" data-message="กรุณาระบุ ชื่อโปรโมชั่น" value="{{$v->pmt_group_name}}" >
			                <span class="k-invalid-message" data-for="txtPmtName"></span>			
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

