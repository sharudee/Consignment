
<div class="modal-body">
	<form class="form-horizontal">
		@foreach($obj_mt_product_set as $h)
		<input type="hidden"  id= "txtpmt_product_set_id" type="hidden" name="txtpmt_product_set_id" value="{{$h->pmt_product_set_id}}">
		<div class="form-group">
			<label class="col-sm-2 control-label">รหัสชุด</label>
			<div class="col-sm-4">
				 <input type="text" class="form-control required" name="product_set_code" id="product_set_code" value="{{$h->product_set_code}}" readonly="true">
			</div>

			<label class="col-sm-2 control-label">กลุ่ม</label>
			<div class="col-sm-4">
				<div class="row">
					<div class="col-sm-8">
						 <input type="text" class="form-control required" name="pmt_group_code" id="pmt_group_code" value="{{$h->pmt_group_code}}">
					</div>
					<div class="col-sm-4">
						<a href="#" rel="clickmstgrpmodal" class="btn btn-sm btn-info">
						<i class="fa fa-search"></i>..</a>
					</div>
				</div>
			</div>

		</div>

		<div class="form-group">
			<label class="col-sm-2 control-label">ชื่อรายการ</label>
			<div class="col-sm-10">
				 <input type="text" class="form-control required" name="product_set_desc" id="product_set_desc" value="{{$h->product_set_desc}}">
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-2 control-label">จำนวน</label>
			<div class="col-sm-4">
				 <input type="text" class="form-control required" name="set_qty" id="set_qty" value="{{$h->set_qty}}">
			</div>

			<label class="col-sm-2 control-label">หน่วย</label>
			<div class="col-sm-4">
			
				 <select name="uom" id="uom" class="form-control">
				 	@foreach($mst_uom as $cg)
						<option value="{{$cg->uom_code}}" <?php if($cg->uom_code == $h->uom) { echo "selected"; } ?>>{{$cg->uom_name }}</option>
					@endforeach 
				 </select>
			
				
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-2 control-label">ราคาต่อหน่วย</label>
			<div class="col-sm-4">
				 <input type="text" class="form-control" name="unit_price_amt" id="unit_price_amt" value="{{$h->unit_price_amt}}">
			</div>

			<label class="col-sm-2 control-label">ราคาทั้งชุด</label>
			<div class="col-sm-4">
				  <input type="text" class="form-control required" name="set_price_amt" id="set_price_amt" value="{{$h->set_price_amt}}">
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-2 control-label">ประเภทส่วนลด</label> 
			<div class="col-sm-4">

										    <select class="form-control required" id="discount_type" name="discount_type">
									          <option value="BAHT" <?php if($h->discount_type == "BAHT" ) { echo "selected"; } ?>>Baht</option>
									          <option value="PERCEN" <?php if($h->discount_type == "PERCEN" ) { echo "selected"; } ?>>Percen</option>
									        </select>

			</div>

			<label class="col-md-2 control-label">ส่วนลด</label>
			<div class="col-md-4">
				<input type="text" class="form-control" name="discount_amt" id="discount_amt" value="{{$h->discount_amt}}">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">สถานะ</label>
			<div class="col-sm-2">
	
									        <select class="form-control required" id="txtRecStatusID" name="txtRecStatus">
									          <option value="ACTIVE" <?php if($h->rec_status == "ACTIVE" ) { echo "selected"; } ?>>Active</option>
									          <option value="INACTIVE" <?php if($h->rec_status == "INACTIVE" ) { echo "selected"; } ?>>Inactive</option>
									        </select>
			</div>
		</div>
		<legend></legend>


		<div class="form-group">
			<label class="col-sm-1 control-label">รุ่น(Model)</label>
			<div class="col-sm-3">
					<div class="col-md-8">
						 <input type="text" class="form-control" name="txtpdmodelmodal" id="txtpdmodelmodal">
					</div>
					<div class="col-md-4">
						<a href="#" rel="click_txtpdmodelmodal" class="btn btn-sm btn-info">
						<i class="fa fa-search"></i>..</a>
					</div>
			</div>


			<label class="col-sm-1 control-label">ขนาด(Size)</label>
			<div class="col-sm-3">
					<div class="col-md-8">
						 <input type="text" class="form-control" name="pdsize_code" id="pdsize_code">
					</div>
					<div class="col-md-4">
						<a href="#" rel="click_pdsize_code" class="btn btn-sm btn-info">
						<i class="fa fa-search"></i>..</a>
					</div>
			</div>

			<label class="col-sm-1 control-label">แบบ(Design)</label>
			<div class="col-sm-3">
					<div class="col-md-8">
						 <input type="text" class="form-control" name="pddsgn_code" id="pddsgn_code">
					</div>
					<div class="col-md-4">
						<a href="#" rel="click_pddsgn_code" class="btn btn-sm btn-info">
						<i class="fa fa-search"></i>..</a>
					</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-1 control-label">สี(color)</label>
			<div class="col-sm-3">
					<div class="col-md-8">
						 <input type="text" class="form-control" name="pdcolor_code" id="pdcolor_code">
					</div>
					<div class="col-md-4">
						<a href="#" rel="click_pdcolor_code" class="btn btn-sm btn-info">
						<i class="fa fa-search"></i>..</a>
					</div>
			</div>


			<label class="col-sm-1 control-label">กลุ่ม(group)</label>
			<div class="col-sm-3">
					<div class="col-md-8">
						 <input type="text" class="form-control" name="pdgrp_code" id="pdgrp_code">
					</div>
					<div class="col-md-4">
						<a href="#" rel="click_pdgrp_code" class="btn btn-sm btn-info">
						<i class="fa fa-search"></i>..</a>
					</div>
			</div>

			<label class="col-sm-1 control-label">แบนด์(brand)</label>
			<div class="col-sm-3">
					<div class="col-md-8">
						 <input type="text" class="form-control" name="pdbrnd_code" id="pdbrnd_code">
					</div>
					<div class="col-md-4">
						<a href="#" rel="click_pdbrnd_code" class="btn btn-sm btn-info">
						<i class="fa fa-search"></i>..</a>
					</div>
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-2 control-label">Scan Barcode</label>
			<div class="col-sm-10">
				<div class="row">
					<div class="col-sm-10">
						 <input type="text" class="form-control" name="bar_code" id="bar_code">
					</div>
					<div class="col-sm-2">
						<a href="#" rel="click_product" class="btn btn-block btn-primary">
						<i class="fa fa-search"></i>เลือก</a>
					</div>
				</div>
			</div>
		</div>

		<!-- <a href="#addtr" rel="testprepend" class="btn btn-primary">Add Rows</a> -->

		<input type="hidden" name="_token" value="{{csrf_token()}}">
		@endforeach
	</form>

	<div id="product_table">
		<table class='table table-bordered' id='po_table'>
			<thead>
				<tr>
					<th style="width:20%">รหัสสินค้า</th>
					<th style="width:43%">ชื่อสินค้า</th>
					<th style="width:10%">รุ่น</th>
					<th style="width:10%">ขนาด</th>
					<th style="width:10%">สี</th>
					<th style="width:7%"></th>
				</tr>
			</thead>
			<tbody>
				@foreach($obj_pmt_product as $v)
				<tr class="po_table">
						<td>{{$v->prod_code}}<input type='hidden' name='prod_code[]' value="{{$v->prod_code}}"></td>
						<td>{{$v->prod_tname}}<input type='hidden' name='prodtname[]' value="{{$v->prod_tname}}"></td>
						<td>{{$v->pdmodel_code}}<input type='hidden' name='pdmodelcode[]' value="{{$v->pdmodel_code}}"></td>
						<td>{{$v->pdsize_code}}<input type='hidden' name='pdsizecode[]' value="{{$v->pdsize_code}}"></td>
						<td>{{$v->pdcolor_code}}<input type='hidden' name='pdcolorcode[]' value="{{$v->pdcolor_code}}"></td>
						<td><a href="#delete" rel="pro_delete" class="btn btn-sm btn-danger">Del</a></td>
				</tr>				
				@endforeach			
			</tbody>
		</table>
	</div>

</div>
<div class="modal-footer">
	<button type="button" id="submitedit" class="btn btn-primary">บันทึกข้อมูล</button>
	<button type="button" class="btn btn-danger" data-dismiss="modal">ปิดหน้าจอ</button>
</div>