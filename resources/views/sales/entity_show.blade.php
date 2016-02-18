<!--
/** 
  * === FORM CREATE ===
  * add solsoForm in form class
*/
-->

	<div class="col-sm-12">
	
			<div class="container">
				<div class="row form-group">
					<div class="col-sm-2">
						<label>รหัสลูกค้า</label>
					</div>
					<div class="col-sm-2">
						<input type="text" name="entity_code" id="input" class="form-control" disabled  value="{{$entity->entity_code}}" >
						
					</div>

					<div class="col-sm-2 col-sm-offset-1">
						<label>หมายเลขเครื่อง</label>
					</div>

					<div class="col-sm-2">
						<input type="text" name="cos_no" id="input" class="form-control" disabled  value="{{$entity->cos_no}}">
						
					</div>
					
				</div>
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label>ชื่อลูกค้า (ไทย)</label>
					</div>
					<div class="col-sm-7">
						<input type="text" name="entity_tname" id="input" class="form-control" disabled  value="{{$entity->entity_tname}}">
						
					</div>
				</div>	
				<div class="row form-group">
					<div class="col-sm-2">
						<label>ชื่อลูกค้า (อังกฤษ)</label>
					</div>
					<div class="col-sm-7">
						<input type="text" name="entity_ename" id="input" class="form-control input-sm" disabled  value="{{$entity->entity_ename}}">
						
					</div>
				</div>	

				<div class="row form-group">
					<div class="col-sm-2">
						<label>กลุ่มลูกค้า</label>
					</div>
					<div class="col-sm-2">
						<input type="text" name="cust_grp" id="input" class="form-control" disabled  value="{{$entity->cust_grp}}">
						
					
						

					</div>
					<div class="col-sm-2 col-sm-offset-1">
						<label>อัตราภาษี</label>
					</div>

					<div class="col-sm-2">
						<input type="text" name="tax_rate" id="input" class="form-control" disabled  value="{{$entity->tax_rate}}">
						
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label>รหัสควบคุม</label>
					</div>
					<div class="col-sm-2">
						<input type="text" name="ent_ctrl" id="input" class="form-control input-sm" disabled  value="{{$entity->ent_ctrl}}">
						
					</div>
					<div class="col-sm-2 col-sm-offset-1">
						<label>ประเภทการ Group Bill</label>
					</div>

					<div class="col-sm-2">
						
							
						        <select class="form-control " id="select" name="dsgrp_type" disabled>
						          <option value="SKU" <?php if($entity->dsgrp_type=='SKU') { echo "selected"; } ?>>SKU - ตามรหัสสินค้าลูกค้า</option>
						          <option value="DISC" <?php if($entity->dsgrp_type=='DISC') { echo "selected"; } ?>>DISC - ตามส่วนลดลูกค้า + GP ห้าง</option>
						        </select>
						
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label>ประเภทการขาย</label>
					</div>
					<div class="col-sm-2">
						 <select class="form-control" id="select" name="sale_type" disabled>
						          <option value="CO" <?php if($entity->sale_type=='CO') { echo "selected"; } ?>>CO</option>
						          <option value="SO" <?php if($entity->sale_type=='SO') { echo "selected"; } ?>>SO</option>
						  </select>
					</div>
					<div class="col-sm-2 col-sm-offset-1">
						<label>ประเภทรับคืน</label>
					</div>
					
					<div class="col-sm-2">
						<input type="text" name="ret_type" id="input" class="form-control" disabled  value="{{$entity->ret_type}}" >
					
					</div>
				</div>

				

			</div>



			
</div>
	
