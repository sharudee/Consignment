<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h4 class="modal-title">ชุดรายการ ของแถม(Premuim Package Set)</h4>
		
</div>
<div class="modal-body">
	<table class="table table-bordered">
	<button type="button" id="submit_select_product_all" class="btn btn-primary">เลือกทั้งหมด</button>
	<label>.</label>
	<button type="button" id="submit_unselect_product_all" class="btn btn-warning">ไม่เลือก</button>
		<tbody>
			@foreach($data_obj_info as $cs)
			<tr>
				<td>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="product_premuim_setcode[]" 	
								data-premuimsetdesc="{{$cs->product_set_desc}}"  
								data-premuimsetqty="{{$cs->set_qty}}"
								data-premuimsunitpriceamt="{{$cs->unit_price_amt}}"
								data-premuimsetpriceamt="{{$cs->set_price_amt}}"
								data-premuimsetuom="{{$cs->uom}}"
								value="{{$cs->product_set_code}}">
							{{$cs->product_set_code}}
						</label>
					</div>
				</td>
				<td>{{$cs->product_set_desc}}</td>
				<td>{{$cs->set_price_amt}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
<div class="modal-footer">
	<button type="button" id="submit_select_premuimset" class="btn btn-primary">เลือก</button>
	<button type="button" class="btn btn-danger" data-dismiss="modal">ปิด</button>
</div>
