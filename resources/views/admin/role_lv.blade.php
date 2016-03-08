<table class="table solsoTable table-hover {{!empty($refresh) ? 'solsoRefresh' : '' }}" data-all="{{sizeof($data_obj_info)}}">
			<thead>
				<tr>
					<th class="col-xs-1 col-sm-1 col-md-2">รหัส</th>
					<th class="col-xs-6 col-sm-6 col-md-6">ชื่อสิทธิ์</th>
					<th class="col-xs-6 col-sm-6 col-md-1">ประเภท</th>
					<th class="col-xs-1 col-sm-1 col-md-1">สถานะ</th>
					<th class="col-xs-1 col-sm-1 col-md-1"></th>
					<th class="col-xs-1 col-sm-1 col-md-1"></th>
				</tr>
			</thead>
	<tbody>
		@foreach($data_obj_info as $crt => $v)
		<tr>
			
			<td class="col-xs-1 col-sm-1 col-md-2">{{$v->RoleName}}</td>
			<td class="col-xs-6 col-sm-6 col-md-6">{{$v->RoleDescription}}</td>
			<td class="col-xs-1 col-sm-1 col-md-1">{{$v->PermissionsType}}</td>
			<td class="col-xs-1 col-sm-1 col-md-1">{{$v->RecordStatus}}</td>
			<td class="col-xs-1 col-sm-1 col-md-1">
	
				<button type="button" class="btn btn-primary btn-sm solsoShowModal"  
				data-toggle="modal" data-target="#solsoCrudModal"   rel="editrole"
				data-href="{{URL::to('editroleform/'.$v->Su_Role_id.'/')}}" data-modal-title="แก้ไข กำหนดสิทธิ์">
				<i class="fa fa-pencil"></i>แก้ไข</button>

			</td>
	

		
		<td class="col-xs-1 col-sm-1 col-md-1">
				<button type="button" class="btn btn-danger btn-sm solsoShowModal"  
				data-toggle="modal" data-target="#solsoCrudModal"  
				data-href="{{URL::to('deleteroleform/'.$v->Su_Role_id.'/')}}" data-modal-title="ลบข้อมูล กำหนดสิทธิ์">
				<i class="fa fa-pencil"></i>ลบ</button>


		</td>

		</tr>
		@endforeach
	</tbody>
</table>

