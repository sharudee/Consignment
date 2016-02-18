<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h4 class="modal-title">ประเภทรายการ </h4>
</div>
<div class="modal-body">
	<table class="table table-bordered">
		<tbody>
			@foreach($data_obj_info as $cs)
			<tr>
				<td>
					<div class="radio">
						<label>
							<input type="radio" name="radcus" 	data-trnsactionname="{{$cs->trnsaction_name}}" value="{{$cs->transaction_code}}">
							{{$cs->transaction_code}}
						</label>
					</div>
				</td>
				<td>{{$cs->trnsaction_name}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
<div class="modal-footer">
	<button type="button" id="submit_transmst" class="btn btn-primary">เลือก</button>
	<button type="button" class="btn btn-danger" data-dismiss="modal">ปิด</button>
</div>
