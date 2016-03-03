<?php
	$sdate = explode('-',$incentive['start_date']);
	$edate = explode('-',$incentive['end_date']);

	$start_date = $sdate[2] . "/" . $sdate[1] . "/" . $sdate[0];
	$end_date = $edate[2] . "/" . $edate[1] . "/" . $edate[0];



?>

{!! Form::open(array('url' => 'incentive/' . Request::segment(2) , 'role' => 'form', 'method' => 'PUT', 'class' => 'solsoForm')) !!} 
	<div class="col-sm-12">
	
			<div class="container">
				<div class="row form-group">
					<div class="col-sm-2">
						<label>รุ่นสินค้า</label>
					</div>
					<div class="col-sm-2">
						<div class="input-group ">

							

							<input type="text" name="pdmodel_code" id="pdmodel_code" class="form-control input-sm required" value="{{ $incentive['pdmodel_code'] }}">
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
						
						<input id="start_date"  name="start_date" type="text" class="form-control input-sm" value="{{ $start_date }}" >
						{!!$errors->first('start_date','<p class="error">:message</p>')!!}
						
					</div>
					  
					<script type="text/javascript">

								$(function(){
								$("#start_date").datepicker({
								dateFormat: 'dd/mm/yy'
								});

							});
					</script>

										
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label>วันที่สิ้นสุด</label>
					</div>
					<div class="col-sm-2">
						<input type="text" name="end_date" id="end_date" class="form-control input-sm" value="{{ $end_date }}">
						{!!$errors->first('end_date','<p class="error">:message</p>')!!}
					</div>
					
					<script type="text/javascript">

								$(function(){
								$("#end_date").datepicker({
								dateFormat: 'dd/mm/yy'
								});

							});
					</script>
										
				</div>
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label>ค่า Incentive</label>
					</div>
					<div class="col-sm-2">
						<input type="text" name="incentive_amt" id="input" class="form-control input-sm required" value="{{$incentive['incentive_amt'] }} ">
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