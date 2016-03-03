<!--
/** 
  * === FORM Edit===
  * add solsoForm in form class
*/
-->

{!! Form::open(array('url' => 'whmast/' . Request::segment(2) , 'role' => 'form', 'method' => 'PUT', 'class' => 'solsoForm')) !!} 
	<div class="col-sm-12">
	
			<div class="container">
				<div class="row form-group">
					<div class="col-sm-2">
						<label>รหัสคลัง</label>
					</div>
					<div class="col-sm-2">
						<input type="text" name="wh_code" id="input" class="form-control input-sm required" value="{{ $whmast['wh_code'] }}">
						{!!$errors->first('wh_code','<p class="error">:message</p>')!!}
					</div>

										
				</div>
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label>ชื่อคลัง (ไทย)</label>
					</div>
					<div class="col-sm-7">
						<input type="text" name="wh_tdesc" id="input" class="form-control input-sm required" value="{{ $whmast['wh_tdesc'] }}">
						{!!$errors->first('wh_tdesc','<p class="error">:message</p>')!!}
					</div>
				</div>	
				<div class="row form-group">
					<div class="col-sm-2">
						<label>ชื่อคลัง (อังกฤษ)</label>
					</div>
					<div class="col-sm-7">
						<input type="text" name="wh_edesc" id="input" class="form-control input-sm" value="{{ $whmast['wh_edesc'] }}">
						{!!$errors->first('wh_edesc','<p class="error">:message</p>')!!}
					</div>
				</div>	

				<div class="row form-group">
					<div class="col-sm-2">
						<label>ที่อยู่</label>
					</div>
					<div class="col-sm-7">
						<input type="text" name="address1" id="input" class="form-control input-sm required" value="{{ $whmast['address1'] }}">
						{!!$errors->first('address1','<p class="error">:message</p>')!!}
					</div>
				</div>	
				<div class="row form-group">
					<div class="col-sm-2">
						<label></label>
					</div>
					<div class="col-sm-7">
						<input type="text" name="address2" id="input" class="form-control input-sm" value="{{ $whmast['address2'] }}">
					</div>
				</div>	
				<div class="row form-group">
					<div class="col-sm-2">
					<label>โทรศัพท์</label>
					</div>
					<div class="col-sm-2">
						<input type="text" name="tel" id="input" class="form-control input-sm" value="{{ $whmast['tel'] }}">
					</div>
					<div class="col-sm-2 col-sm-offset-1">
					<label>ชื่อผู้ติดต่อ</label>
					</div>

					<div class="col-sm-2">
						<input type="text" name="contact_name" id="input" class="form-control input-sm" value="{{ $whmast['contact_name'] }}">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
					<label>สถานะ</label>
					</div>
					<div class="col-sm-2">
						<select class="form-control required" id="select" name="status">
						          <option value="A" <?php if($whmast['status']=='A') echo "selected"; ?>>Active</option>
						          <option value="I" <?php if($whmast['status']=='I') echo "selected"; ?>>Inactive</option>
						</select>
					</div>
					


				</div>

			</div>

			<div class="form-group col-md-12">
				<button type="button" class="btn btn-success btn-lg solsoSave" 
				data-message-title="Create notification" 
				data-message-error="Validation error messages" 
				data-message-success="Data was saved">
				<i class="fa fa-save"></i> Save
				</button>
			</div>
	
		
</div>
	
{!! Form::close()!!}