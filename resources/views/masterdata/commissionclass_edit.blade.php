<!--
/** 
  * === FORM CREATE ===
  * add solsoForm in form class
*/
-->

{!! Form::open(array('url' => 'comclass/' . Request::segment(2) , 'role' => 'form', 'method' => 'PUT', 'class' => 'solsoForm')) !!} 
	<div class="col-sm-12">
	
			<div class="container">
				<div class="row form-group">
					<div class="col-sm-2">
						<label>ลูกค้า</label>
					</div>
					<div class="col-sm-2">
						<div class="input-group ">

						
							<input type="text" name="cust_code" id="cust_code" class="form-control input-sm required" value="{{ $commissionclass['cust_code'] }}" readonly>
							{!!$errors->first('cust_code','<p class="error">:message</p>')!!}
							
							
							
						
						</div>
						
						
					</div>
					<div class="col-sm-3">
						<input type="text" name="cust_name" id="cust_name" class="form-control input-sm" value="{{ $commissionclass['cust_name'] }}" readonly>
						{!!$errors->first('cust_name','<p class="error">:message</p>')!!}
					</div>

				</div>	
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label>Class</label>
					</div>
					<div class="col-sm-2">
						<select class="form-control required" id="select" name="class">
						@foreach($commission as $crt => $v)
						          <option value="{{$v->class}}" <?php if($v->class==$commissionclass['class']) { echo "selected"; } ?>>{{ $v->class }}</option>
						@endforeach	          
						</select>
						{!!$errors->first('class','<p class="error">:message</p>')!!}
					</div>

										
				</div>
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label>เป้ายอดขาย</label>
					</div>
					<div class="col-sm-2">
						<input type="text" name="sale_target" id="input" class="form-control input-sm required" value="{{ $commissionclass['sale_target'] }}">
						{!!$errors->first('sale_target','<p class="error">:message</p>')!!}
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