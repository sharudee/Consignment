<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h4 class="modal-title"> (Product Design)</h4>
</div>
<div class="modal-body">
	<table class="table table-bordered">
		<tbody>
			@foreach($data_obj_info as $cs)
			<tr>
				<td>
					<div class="radio">
						<label>
							<input type="radio" name="radcus" 	data-pmtgroupname="{{$cs->pddsgn_desc}}" value="{{$cs->pddsgn_code}}">
							{{$cs->pddsgn_code}}
						</label>
					</div>
				</td>
				<td>{{$cs->pddsgn_desc}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
<div class="modal-footer">
	<button type="button" id="submit_select_pddsgn_code" class="btn btn-primary">เลือก</button>
	<button type="button" class="btn btn-danger" data-dismiss="modal">ปิด</button>
</div>
