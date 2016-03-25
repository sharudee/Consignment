
@foreach($su_system_obj_data as $k)
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h4 class="modal-title">เมนู ระบบ::"{{$k->SystemNameThai}}" (Menu List)</h4>
</div>
@endforeach

<div class="modal-body">
	<table class="table table-bordered">
		<button type="button" id="submit_select_cus_all" class="btn btn-primary">เลือกทั้งหมด</button>
		<label>.</label>
		<button type="button" id="submit_unselect_cus_all" class="btn btn-warning">ไม่เลือก</button>
			<thead>
				<tr>
					<th class="col-xs-2 col-sm-2 col-md-2">Menu Id</th>
					<th class="col-xs-2 col-sm-2 col-md-2">MenuLevel</th>
					<th class="col-xs-8 col-sm-8 col-md-8">ชื่อเมนู</th>

				</tr>
			</thead>
		<tbody>
			@foreach($menu_obj_data as $cs)
			<tr>
				<td>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="Su_Menu[]" 	
								data-MenuName="{{$cs->MenuName}}"  
								data-MenuLevel="{{$cs->MenuLevel}}" 
								data-ProgramCode="{{$cs->ProgramCode}}" 
								value="{{$cs->Su_Menu_Id}}">
							{{$cs->Su_Menu_Id}}
						</label>
					</div>
				</td>
				<td>{{$cs->MenuLevel}}</td>
				<td>{{$cs->MenuName}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

<div class="modal-footer">
	<button type="button" id="submit_select_menu_for_role" class="btn btn-primary">เลือก</button>
	<button type="button" class="btn btn-danger" data-dismiss="modal">ปิด</button>
</div>
