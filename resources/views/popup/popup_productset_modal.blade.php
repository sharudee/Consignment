<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h4 class="modal-title">ชุดรายการสินค้า (Product Package Set)</h4>
</div>
<div class="modal-body">
	<table class="table table-bordered">
		<tbody>
			@foreach($data_obj_info as $cs)
			<tr>
				<td>
					<div class="radio">
						<label>
							<input type="radio" name="radcus"	
								data-pmtproductdesc="{{$cs->product_set_desc}}"  
								data-setqty="{{$cs->set_qty}}"
								data-unitpriceamt="{{$cs->unit_price_amt}}"
								data-setpriceamt="{{$cs->set_price_amt}}"
								data-uom="{{$cs->uom}}"
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
	<button type="button" id="submit_select_productset" class="btn btn-primary">เลือก</button>
	<button type="button" class="btn btn-danger" data-dismiss="modal">ปิด</button>
</div>
