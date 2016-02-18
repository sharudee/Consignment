<!--

  * === FORM CREATE ===
  * add solsoForm in form class
*/
-->

<!-- {!! Form::open(array('url'=>'entity','role' => 'form','class' => 'solsoForm'))!!}  -->
{!! Form::open(array('url' => 'entity/' . Request::segment(2) , 'role' => 'form', 'method' => 'PUT', 'class' => 'solsoForm')) !!} 
	<div class="col-sm-12">
	
			<div class="container">
				<div class="row form-group">
					<div class="col-sm-2">
						<label>รหัสลูกค้า</label>
					</div>
					<div class="col-sm-2">
						<input type="text" name="entity_code" id="entity_code" class="form-control required"  value="{{ $entity['entity_code'] }}" >
						{!!$errors->first('entity_code','<p class="error">:message</p>')!!}
					</div>

					<div class="col-sm-2 col-sm-offset-1">
						<label>หมายเลขเครื่อง</label>
					</div>

					<div class="col-sm-2">
						<input type="text" name="cos_no" id="input" class="form-control required" value="{{ $entity['cos_no'] }}">
						{!!$errors->first('cos_no','<p class="error">:message</p>')!!}
					</div>
					
				</div>
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label>ชื่อลูกค้า (ไทย)</label>
					</div>
					<div class="col-sm-7">
						<input type="text" name="entity_tname" id="input" class="form-control required" value="{{ $entity['entity_tname'] }}">
						{!!$errors->first('entity_tname','<p class="error">:message</p>')!!}
					</div>
				</div>	
				<div class="row form-group">
					<div class="col-sm-2">
						<label>ชื่อลูกค้า (อังกฤษ)</label>
					</div>
					<div class="col-sm-7">
						<input type="text" name="entity_ename" id="input" class="form-control input-sm" value="{{ $entity['entity_ename'] }}">
						{!!$errors->first('entity_ename','<p class="error">:message</p>')!!}
					</div>
				</div>	

				<div class="row form-group">
					<div class="col-sm-2">
						<label>กลุ่มลูกค้า</label>
					</div>
					<div class="col-sm-2">
						<select class="form-control required" id="select" name="cust_grp">
						@foreach($custgrp as $crt => $v)
						          <option value="{{$v->custgrp_code}}" <?php if($v->custgrp_code == $entity['cust_grp'] ) { echo "selected"; } ?>>{{  $v->custgrp_name }}</option>
						@endforeach	          
						</select>
						<!-- <input type="text" name="cust_grp" id="input" class="form-control required"> 
						{!!$errors->first('cust_grp','<p class="error">:message</p>')!!}-->
					
						

					</div>
					<div class="col-sm-2 col-sm-offset-1">
						<label>อัตราภาษี</label>
					</div>

					<div class="col-sm-2">
						<input type="text" name="tax_rate" id="input" class="form-control required" value="{{ $entity['tax_rate'] }}">
						{!!$errors->first('tax_rate','<p class="error">:message</p>')!!}
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label>รหัสควบคุม</label>
					</div>
					<div class="col-sm-2">
						<input type="text" name="ent_ctrl" id="input" class="form-control input-sm" value="{{ $entity['ent_ctrl'] }}">
						{!!$errors->first('ent_ctrl','<p class="error">:message</p>')!!}
					</div>
					<div class="col-sm-2 col-sm-offset-1">
						<label>ประเภทการ Group Bill</label>
					</div>

					<div class="col-sm-2">
						
							
						        <select class="form-control required" id="select" name="dsgrp_type">
						          <option value="SKU" <?php if($entity['dsgrp_type'] =='SKU') { echo "selected"; } ?>>SKU - ตามรหัสสินค้าลูกค้า</option>
						          <option value="DISC" <?php if($entity['dsgrp_type']=='DISC') { echo "selected"; } ?>>DISC - ตามส่วนลดลูกค้า + GP ห้าง</option>
						        </select>
						
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label>ประเภทการขาย</label>
					</div>
					<div class="col-sm-2">
						 <select class="form-control required" id="select" name="sale_type">
						          <option value="CO" <?php if($entity['sale_type']=='CO') { echo "selected"; } ?>>CO</option>
						          <option value="SO" <?php if($entity['sale_type']=='SO') { echo "selected"; } ?>>SO</option>
						  </select>
					</div>
					<div class="col-sm-2 col-sm-offset-1">
						<label>ประเภทรับคืน</label>
					</div>
					
					<div class="col-sm-2">
						<input type="text" name="ret_type" id="input" class="form-control required" value="{{ $entity['ret_type'] }}">
						{!!$errors->first('ret_type','<p class="error">:message</p>')!!}
					</div>
				</div>

				

			</div>

			<input type ="hidden" name="_token"  value="{{csrf_token()}}">
				
			<div class="form-group col-md-12">
				<button type="button" class="btn btn-success btn-lg solsoEdit" 
				data-message-title="Edit notification" 
				data-message-error="Validation error messages" 
				data-message-success="Data was updated"
				>
				<i class="fa fa-save"></i> Save
				</button>
			</div>	
</div>
	
{!! Form::close()!!}