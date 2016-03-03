	<div class="col-sm-12">
	
			<div class="container">
				<div class="row form-group">
					<div class="col-sm-2">
						<label>รหัสคลัง</label>
					</div>
					<div class="col-sm-2">
						<input type="text" name="wh_code" id="input" class="form-control input-sm" disabled  value="{{$whmast->wh_code}}">
						
					</div>

										
				</div>
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label>ชื่อคลัง (ไทย)</label>
					</div>
					<div class="col-sm-7">
						<input type="text" name="wh_tdesc" id="input" class="form-control input-sm" disabled  value="{{$whmast->wh_tdesc}}">
						
					</div>
				</div>	
				<div class="row form-group">
					<div class="col-sm-2">
						<label>ชื่อคลัง (อังกฤษ)</label>
					</div>
					<div class="col-sm-7">
						<input type="text" name="wh_edesc" id="input" class="form-control input-sm" disabled  value="{{$whmast->wh_edesc}}">
						
					</div>
				</div>	

				<div class="row form-group">
					<div class="col-sm-2">
						<label>ที่อยู่</label>
					</div>
					<div class="col-sm-7">
						<input type="text" name="address1" id="input" class="form-control input-sm" disabled  value="{{$whmast->address1}}">
						
					</div>
				</div>	
				<div class="row form-group">
					<div class="col-sm-2">
						<label></label>
					</div>
					<div class="col-sm-7">
						<input type="text" name="address2" id="input" class="form-control input-sm" disabled  value="{{$whmast->address2}}">
					</div>
				</div>	
				<div class="row form-group">
					<div class="col-sm-2">
					<label>โทรศัพท์</label>
					</div>
					<div class="col-sm-2">
						<input type="text" name="tel" id="input" class="form-control input-sm" disabled  value="{{$whmast->tel}}">
					</div>
					<div class="col-sm-2 col-sm-offset-1">
					<label>ชื่อผู้ติดต่อ</label>
					</div>

					<div class="col-sm-2">
						<input type="text" name="contact_name" id="input" class="form-control input-sm" disabled  value="{{$whmast->contact_name}}">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
					<label>สถานะ</label>
					</div>
					<div class="col-sm-2">
						<select class="form-control" id="select" name="status" disabled>
						          <option value="A" <?php if($whmast->status=='A') echo "selected" ?>>Active</option>
						          <option value="I" <?php if($whmast->status=='I') echo "selected" ?>>Inactive</option>
						</select>
					</div>
					


				</div>

			</div>

			
	
		
</div>
	
