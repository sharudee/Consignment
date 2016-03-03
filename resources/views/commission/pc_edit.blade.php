<!--
/** 
  * === FORM CREATE ===
  * add solsoForm in form class
*/
-->

{!! Form::open(array('url' => 'pc/' . Request::segment(2) , 'role' => 'form', 'method' => 'PUT', 'class' => 'solsoForm')) !!} 
	<div class="col-sm-12">
	
			<div class="container">
				<div class="row form-group">
					<div class="col-sm-2">
						<label>รหัสพนักงาน</label>
					</div>
					<div class="col-sm-2">
						<input type="text" name="emp_code" id="input" class="form-control input-sm required" value="{{ $pc['emp_code'] }}">
						{!!$errors->first('emp_code','<p class="error">:message</p>')!!}
					</div>

										
				</div>
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label>ชื่อพนักงาน</label>
					</div>
					<div class="col-sm-2">
						<input type="text" name="emp_name" id="input" class="form-control input-sm required" value="{{ $pc['emp_name'] }}">
						{!!$errors->first('emp_name','<p class="error">:message</p>')!!}
					</div>
				</div>	
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label>เบอร์โทรศัพท์</label>
					</div>
					<div class="col-sm-2">
						<input type="text" name="tel" id="input" class="form-control input-sm required" value="{{ $pc['tel'] }}">
						{!!$errors->first('tel','<p class="error">:message</p>')!!}
					</div>
					
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label>Email</label>
					</div>
					<div class="col-sm-2">
						<input type="text" name="email" id="input" class="form-control input-sm" value="{{ $pc['email'] }}">
						{!!$errors->first('email','<p class="error">:message</p>')!!}
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