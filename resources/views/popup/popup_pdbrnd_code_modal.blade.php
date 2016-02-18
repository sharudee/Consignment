<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h4 class="modal-title">ยี่ห้อสินค้า (Product Brand)</h4>
</div>
<div class="modal-body">
	<table class="table table-bordered">
		<tbody>
			@foreach($data_obj_info as $cs)
			<tr>
				<td>
					<div class="radio">
						<label>
							<input type="radio" name="radcus" 	data-pmtgroupname="{{$cs->pdbrnd_desc}}" value="{{$cs->pdbrnd_code}}">
							{{$cs->pdbrnd_code}}
						</label>
					</div>
				</td>
				<td>{{$cs->pdbrnd_desc}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
<div class="modal-footer">
	<button type="button" id="submit_select_pdbrnd_code" class="btn btn-primary">เลือก</button>
	<button type="button" class="btn btn-danger" data-dismiss="modal">ปิด</button>
</div>
