<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h4 class="modal-title">รายการสินค้า (Product Master)</h4>
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
							<input type="checkbox" name="product_popup[]" 	
								data-prodtname="{{$cs->prod_tname}}"  
								data-pdmodelcode="{{$cs->pdmodel_code}}"
								data-pdsizecode="{{$cs->pdsize_code}}"
								data-pdgrpcode="{{$cs->pdgrp_code}}"
								data-pdbrndcode="{{$cs->pdbrnd_code}}"
								data-pdcolorcode="{{$cs->pdcolor_code}}"
								data-pddsgncode="{{$cs->pddsgn_code}}"
								data-pdmodeldesc="{{$cs->pdmodel_desc}}"
								data-pdsizedesc="{{$cs->pdsize_desc}}"
								data-pdgrpdesc="{{$cs->pdgrp_desc}}"
								data-pdbrnddesc="{{$cs->pdbrnd_desc}}"
								data-pdcolordesc="{{$cs->pdcolor_desc}}"
								data-pddsgndesc="{{$cs->pddsgn_desc}}"
								value="{{$cs->prod_code}}">
							{{$cs->prod_code}}
						</label>
					</div>
				</td>
				<td>{{$cs->prod_tname}}</td>
				<td>{{$cs->pdmodel_desc}}</td>
				<td>{{$cs->pdsize_desc}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
<div class="modal-footer">
	<button type="button" id="submit_select_product" class="btn btn-primary">เลือก</button>
	<button type="button" class="btn btn-danger" data-dismiss="modal">ปิด</button>
</div>
