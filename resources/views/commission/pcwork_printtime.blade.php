<!--
/** 
  * === FORM CREATE ===
  * add solsoForm in form class
*/
-->


{!! Form::open(array('url'=>'printreport','role' => 'form','class' => 'solsoForm' , 'method'=>'GET'))!!}
	<div class="col-sm-12">
	
			<div class="container">
				<div class="row form-group">
					<div class="col-sm-2">
						<label>รหัสพนักงาน</label>
					</div>
					<div class="col-sm-2">
						<input type="text" name="emp_code" id="input" class="form-control input-sm" value="{{$emp_code }}" >
	
					</div>

										
				</div>
				

				<div class="row form-group">
					<div class="col-sm-2">
						<label>ปี </label>
					</div>
					<div class="col-sm-2">
						<input type="text" name="year" id="input" class="form-control input-sm required" value="<?php  if(isset($input['year'])) { echo $input['year']; } ?>">
						{!!$errors->first('year','<p class="error">:message</p>')!!}
					</div>

										
				</div>
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label>เดือน</label>
					</div>
					<div class="col-sm-2">
						<input type="text" name="month" id="input" class="form-control input-sm required" value="<?php  if(isset($input['month'])) { echo $input['month']; } ?>">
						{!!$errors->first('month','<p class="error">:message</p>')!!}
					</div>

				</div>	
				
				
			</div>

			
			<div class="form-group col-md-12">
				<button type="button" class="btn btn-success btn-lg solsoPrint" 
				data-message-title="Create notification" 
				data-message-error="Validation error messages" 
				data-message-success="Data was saved">
				<i class="fa fa-print"></i> Print
				</button>
				<a href="{{URL::to('printreport')}}" class="btn btn-sm btn-success" target="_blank"><i class="fa fa-print"></i>Print</a>
			</div>
	
</div>
	
{!! Form::close()!!}