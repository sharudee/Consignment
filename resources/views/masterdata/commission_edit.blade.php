<!--
/** 
  * === FORM CREATE ===
  * add solsoForm in form class
*/
-->

{!! Form::open(array('url' => 'commission/' . Request::segment(2) , 'role' => 'form', 'method' => 'PUT', 'class' => 'solsoForm')) !!} 
	<div class="col-sm-12">
	
			<div class="container">
				<div class="row form-group">
					<div class="col-sm-2">
						<label>Class</label>
					</div>
					<div class="col-sm-2">
						<input type="text" name="class" id="input" class="form-control input-sm required" value="{{ $commission['class'] }}">
						{!!$errors->first('class','<p class="error">:message</p>')!!}
					</div>

										
				</div>
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label>ยอดขายเริ่มต้น</label>
					</div>
					<div class="col-sm-2">
						<input type="text" name="sale_start" id="input" class="form-control input-sm required" value="{{ $commission['sale_start'] }}">
						{!!$errors->first('sale_start','<p class="error">:message</p>')!!}
					</div>
				</div>	
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label>ยอดขายสิ้นสุด</label>
					</div>
					<div class="col-sm-2">
						<input type="text" name="sale_end" id="input" class="form-control input-sm required" value="{{ $commission['sale_end'] }}">
						{!!$errors->first('sale_end','<p class="error">:message</p>')!!}
					</div>
					
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label>Commission</label>
					</div>
					<div class="col-sm-2">
						<input type="text" name="commission_rate" id="input" class="form-control input-sm required" value="{{ $commission['commission_rate'] }}">
						{!!$errors->first('commission_rate','<p class="error">:message</p>')!!}
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