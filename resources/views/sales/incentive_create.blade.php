<!--
/** 
  * === FORM CREATE ===
  * add solsoForm in form class
*/
-->

{!! Form::open(array('url'=>'incentive','role' => 'form','class' => 'solsoForm'))!!}
	<div class="col-sm-12">
	
			<div class="container">
				<div class="row form-group">
					<div class="col-sm-2">
						<label>รุ่นสินค้า</label>
					</div>
					<div class="col-sm-2">
						<div class="input-group ">

						
							<input type="text" name="pdmodel_code" id="pdmodel_code" class="form-control input-sm required" value="<?php  if(isset($input['pdmodel_code'])) { echo $input['pdmodel_code']; } ?>">
							{!!$errors->first('pdmodel_code','<p class="error">:message</p>')!!}
							<span class="input-group-btn">
							<a  href="#addmodel" rel="addmodel" class="btn btn-sm btn-primary">
								<span class="glyphicon glyphicon-triangle-bottom"></span></a>
							
							</span>
							
							
						
						</div>
						
						
					</div>
					

				</div>	
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label>วันที่เริ่มต้น</label>
					</div>
					<div class="col-sm-2">
						<input  type="date" date('Y-m-d')     name="start_date" id="start_date" class="form-control input-sm" value="<?php  if(isset($input['start_date'])) { echo Carbon::parse($input['start_date'])->format('d/m/Y'); } ?>">
						
						{!!$errors->first('start_date','<p class="error">:message</p>')!!}
					</div>

										
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label>วันที่สิ้นสุด</label>
					</div>
					<div class="col-sm-2">
						<input type="date" date('Y-m-d') name="end_date" id="end_date" class="form-control input-sm" value="<?php  if(isset($input['end_date'])) { echo $input['end_date']; } ?>">
						{!!$errors->first('end_date','<p class="error">:message</p>')!!}
					</div>

										
				</div>
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label>ค่า Incentive</label>
					</div>
					<div class="col-sm-2">
						<input type="text" name="incentive_amt" id="input" class="form-control input-sm required" value="<?php  if(isset($input['incentive_amt'])) { echo $input['incentive_amt']; } ?>">
						{!!$errors->first('incentive_amt','<p class="error">:message</p>')!!}
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