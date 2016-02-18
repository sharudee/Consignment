		@foreach($pmt_mast_id_obj_info as $v) 
			<input type="hidden"  id= "pmt_mast_id" type="hidden" name="pmt_mast_id" value="{{$v->pmt_mast_id}}">
		@endforeach

<div class="modal-body">
@foreach($data_obj_package_mast_info as $h)  
<form class="form-horizontal">
	<div class="container" > 
		<input type="hidden"  id= "package_mast_id" type="hidden" name="package_mast_id" value="{{$h->package_mast_id}}">
				<div class="row form-group">
					<div class="col-sm-1">
						<label >รุ่น</label>
					</div>
			
					<div class="col-sm-2">
						<input type="text" id="pdmodel_code_package" name="pdmodel_code_package" class="form-control input-sm" readonly="ture"  value="{{$h->pdmodel_code}}" >
					</div> 
					<div class="col-sm-1">

						<a href="#" rel="click_model_popup99" class="btn btn-sm btn-info">
						<i class="fa fa-search"></i>..</a>

					</div>
					<div class="col-sm-1">
						<label >ขนาด</label>
					</div>
					<div class="col-sm-3">
						 <input type="text" class="form-control" name="pdsize_code_package" id="pdsize_code_package" readonly value="{{$h->pdsize_code}}">
					</div>

					<div class="col-sm-1">
						<a href="#" rel="click_pdsize_code_package" class="btn btn-sm btn-info">
						<i class="fa fa-search"></i>..</a>
					</div>


				</div>

				<div class="row form-group">
					<div class="col-sm-1">
						<label >ชุดเซ็ท</label>
					</div>

					<div class="col-sm-2">
						<input type="text" id="pmt_product_set" name="pmt_product_set" class="form-control input-sm" readonly="ture" value="{{$h->product_set_code}}" >
					</div> 
					<div class="col-sm-1">
						<a href="#" rel="click_product_set" class="btn btn-sm btn-info">
						<i class="fa fa-search"></i>..</a>
					</div>
					<div class="col-sm-5">
						<input type="text" id="pmt_product_set_desc" name="pmt_product_set_desc" class="form-control input-sm" readonly="ture" value="{{$h->product_set_desc}}">  
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-1">
						<label >ราคา</label>
					</div>

					<div class="col-sm-2">
						<input type="text" id="package_unit_price" name="package_unit_price" class="form-control input-sm" value="{{$h->package_unit_price}}" >
					</div> 
					<div class="col-sm-1">
					</div>
					<div class="col-sm-2">
						<input type="text" id="pdmodel_desc_h" name="pdmodel_desc_h" class="form-control input-sm" readonly value="{{$h->pdmodel_desc}}">
					</div> 
					<div class="col-sm-3">
						<input type="text" id="pdsize_desc_h" name="pdsize_desc_h" class="form-control input-sm" readonly value="{{$h->pdsize_desc}}">
					</div> 
				</div>
				<div class="row form-group">
					<div class="col-sm-1">
						<label >ราคาทั้งชุด</label>
					</div>

					<div class="col-sm-2">
						<input type="text" id="total_price_amt" name="total_price_amt" class="form-control input-sm" value="{{$h->total_price_amt}}" >
					</div> 
					<div class="col-sm-1">
						<label >ราคาพิเศษ</label>
					</div>
					<div class="col-sm-2">
						<input type="text" id="special1_price_amt" name="special1_price_amt" class="form-control input-sm" value="{{$h->special1_price_amt}}" >
					</div>
					<div class="col-sm-1">
						<label >ลดพิเศษ</label>
					</div>
					<div class="col-sm-2">
						<input type="text" id="special2_price_amt" name="special2_price_amt" class="form-control input-sm" value="{{$h->special2_price_amt}}"  >
					</div>
				</div>
	</div>


				<input type ="hidden" name="_token"  value="{{csrf_token()}}">
	<div class="row form-group top5">
		<div class="col-sm-2">
			<a href="#" rel="click_premuim_set" class="btn btn-primary"><i class="fa fa-search"></i>เลือก ชุดของแถม</a>
		</div>
	</div>
</form>	
@endforeach
	
	<div class="table-responsive" id="product_table">
		<table class='table table-hover' id='po_table'>
			<thead>	
				<tr>
					<th style="width:10%">รหัส</th>
					<th style="width:30%">รายการของแถม</th>
					<th style="width:10%">จำนวน</th>
					<th style="width:20%">มูลค่าของแถม</th>
					<th style="width:20%">หน่วย</th>
					<th style="width:10%"></th>
				</tr>
			</thead>	

			<tbody>
				@foreach($data_obj_package_det_info as $d)
				<tr class="po_table">
						<td>{{$d->product_set_code}}<input type='hidden' name='product_set_code[]' value="{{$d->product_set_code}}"></td>
						<td>{{$d->product_set_desc}}<input type='hidden' name='product_set_desc[]' value="{{$d->product_set_desc}}"></td>
						<td>{{$d->set_qty}}<input type='hidden' name='set_qty[]' value="{{$d->set_qty}}"></td>
						<td>{{$d->set_price_amt}}<input type='hidden' name='set_price_amt[]' value="{{$d->set_price_amt}}"></td>
						<td>{{$d->uom}}<input type='hidden' name='uom[]' value="{{$d->uom}}"></td>
						<td><a href="#delete" rel="pro_delete" class="btn btn-sm btn-danger">Del</a></td>
				</tr>				
				@endforeach	
			</tbody>
				
		</table>

	</div>
	
</div>

<div class="modal-footer">


	<button type="button"  id="submit_edit_package" class="btn btn-primary"><i class="fa fa-save"></i>บันทึก</button>

	<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>ปิด</button>
</div>



