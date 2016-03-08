


<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h4 class="modal-title">รายชื่อ ห้าง-รา้น (Customer List)</h4>
</div>
<div class="modal-body">
	<table class="table table-bordered">
		<button type="button" id="submit_select_cus_all" class="btn btn-primary">เลือกทั้งหมด</button>
		<label>.</label>
		<button type="button" id="submit_unselect_cus_all" class="btn btn-warning">ไม่เลือก</button>
		<tbody>
			@foreach($data_obj_info as $cs)
			<tr>
				<td>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="entity_code_popup[]" 	
								data-entitytname="{{$cs->entity_tname}}"  
								value="{{$cs->entity_code}}">
							{{$cs->entity_code}}
						</label>
					</div>
				</td>
				<td>{{$cs->entity_tname}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
<div class="modal-footer">
	<button type="button" id="submit_select_cus" class="btn btn-primary">เลือก</button>
	<button type="button" class="btn btn-danger" data-dismiss="modal">ปิด</button>
</div>
