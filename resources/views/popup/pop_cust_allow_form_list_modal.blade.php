

<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h4 class="modal-title">Entity ,ห้าง-รา้น ที่มีสิทธิ์เข้าถึง</h4>
</div>
<div class="modal-body">
	<table class="table table-bordered">
		<tbody>
			@foreach($entity_obj as $cs)
			<tr>
				<td>
					<div class="radio">
						<label>
							<input type="radio" name="radcus" 	data-CustomerCode="{{$cs->CustomerCode}}"  data-entitytname="{{$cs->entity_tname}}" value="{{$cs->Entity_code}}">
							{{$cs->Entity_code}}
						</label>
					</div>
				</td>
				<td>{{$cs->CustomerCode}}</td> 
				<td>{{$cs->entity_tname}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
<div class="modal-footer">
	<button type="button" id="submit_select_entitycust_allow_list" class="btn btn-primary">เลือก</button>
	<button type="button" class="btn btn-danger" data-dismiss="modal">ปิด</button>
</div>
