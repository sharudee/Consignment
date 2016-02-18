<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h4 class="modal-title">กลุ่มข้อมูล</h4>
</div>
<div class="modal-body">
	<table class="table table-bordered">
		<tbody>
			@foreach($pmtgrpmast_obj as $cs)
			<tr>
				<td>
					<div class="radio">
						<label>
							<input type="radio" name="radcus" 	data-pmtgroupname="{{$cs->pmt_group_name}}" value="{{$cs->pmt_group_code}}">
							{{$cs->pmt_group_code}}
						</label>
					</div>
				</td>
				<td>{{$cs->pmt_group_name}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
<div class="modal-footer">
	<button type="button" id="submit_selectmstgrp" class="btn btn-primary">เลือก</button>
	<button type="button" class="btn btn-danger" data-dismiss="modal">ปิด</button>
</div>
