<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h4 class="modal-title">ระบบงาน (System List)</h4>
</div>
<div class="modal-body">
	<table class="table table-bordered">
		<tbody>
			@foreach($data_obj_info as $cs)
			<tr>
				<td>
					<div class="radio">
						<label>
							<input type="radio" name="radcus" 	data-SystemCode="{{$cs->SystemCode}}" data-SystemNameThai="{{$cs->SystemNameThai}}" value="{{$cs->Su_System_Id}}">
							{{$cs->SystemCode}}
						</label>
					</div>
				</td>
				<td>{{$cs->SystemNameThai}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
<div class="modal-footer">
	<button type="button" id="submit_select_system" class="btn btn-primary">เลือก</button>
	<button type="button" class="btn btn-danger" data-dismiss="modal">ปิด</button>
</div>
