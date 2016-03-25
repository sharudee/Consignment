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
						<label >ขนาด</label>
					</div>
					<div class="col-sm-5">
						 <input type="text" class="form-control" name="pdsize_code_package" id="pdsize_code_package" readonly value="{{$h->pdsize_code}}">
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
						<label ></label>
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
						<input type="text" id="package_unit_price" name="package_unit_price" class="form-control input-sm" value="{{$h->package_unit_price}}" readonly>
					</div> 

					<div class="col-sm-1">
						<label >รุ่น</label>
					</div>
					<div class="col-sm-2">
						<input type="text" id="pdmodel_desc_h" name="pdmodel_desc_h" class="form-control input-sm" readonly value="{{$h->pdmodel_desc}}" readonly>
					</div> 
					<div class="col-sm-3">
						<input type="text" id="pdsize_desc_h" name="pdsize_desc_h" class="form-control input-sm" readonly value="{{$h->pdsize_desc}}" readonly>
					</div> 
				</div>
				<div class="row form-group">
					<div class="col-sm-1">
						<label >ราคาทั้งชุด</label>
					</div>

					<div class="col-sm-2">
						<input type="text" id="total_price_amt" name="total_price_amt" class="form-control input-sm" value="{{$h->total_price_amt}}" readonly>
					</div> 
					<div class="col-sm-1">
						<label >ราคาพิเศษ</label>
					</div>
					<div class="col-sm-2">
						<input type="text" id="special1_price_amt" name="special1_price_amt" class="form-control input-sm" value="{{$h->special1_price_amt}}" readonly>
					</div>
					<div class="col-sm-1">
						<label >ลดพิเศษ</label>
					</div>
					<div class="col-sm-2">
						<input type="text" id="special2_price_amt" name="special2_price_amt" class="form-control input-sm" value="{{$h->special2_price_amt}}"  readonly>
					</div>
				</div>
				<div class="row form-group">	
					 <div class="col-sm-1">
						<label >มูลค่าของแถม</label>
					</div>

					<div class="col-sm-2">
						<input type="text" id="pm_total_price" name="pm_total_price" class="form-control input-sm" value="{{$h->pm_total_price}}" readonly >
					</div> 

				</div>
	</div>


				<input type ="hidden" name="_token"  value="{{csrf_token()}}">
</form>	
@endforeach
	
	<div class="table-responsive" id="product_table">
		<table class='table table-hover' id='po_table'>
			<thead>	
				<tr>
					<th style="width:10%">รหัส</th>
					<th style="width:40%">รายการของแถม</th>
					<th style="width:10%">จำนวน</th>
					<th style="width:20%">มูลค่าของแถม</th>
					<th style="width:20%">หน่วย</th>

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
				</tr>				
				@endforeach	
			</tbody>
				
		</table>

	</div>
	
</div>

<div class="modal-footer">


	<button type="button"  id="submit_delete_package" class="btn btn-danger"><i class="fa fa-trash"></i>ลบ</button>

	<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i>ปิด</button>
</div>



