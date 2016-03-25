<table class="table solsoTable table-hover {{!empty($refresh) ? 'solsoRefresh' : '' }}" data-all="{{sizeof($data_obj_info)}}">
			<thead>
				<tr>
					<th class="col-xs-12 col-sm-2 col-md-2">รหัสผู้ใช้</th>
					<th class="col-xs-12 col-sm-4 col-md-4">ชื่อ</th>
					<th class="col-xs-12 col-sm-1 col-md-1">สิทธิ์</th>
					<th class="col-xs-12 col-sm-2 col-md-2">รายละเอียด</th>
					<th class="col-xs-12 col-sm-2 col-md-2">ประเภท</th>
					<th class="col-xs-12 col-sm-1 col-md-1"></th>
				</tr>
			</thead>
	<tbody>
		@foreach($data_obj_info as $crt => $v)
		<tr>
			
			<td class="col-xs-12 col-sm-2 col-md-2">{{$v->username}}</td>
			<td class="col-xs-12 col-sm-4 col-md-4">{{$v->fullname}}</td>
			<td class="col-xs-12 col-sm-1 col-md-1">{{$v->RoleName}}</td>
			<td class="col-xs-12 col-sm-2 col-md-2">{{$v->RoleDescription}}</td>
			<td class="col-xs-12 col-sm-2 col-md-2">{{$v->PermissionsType}}</td>
			<td class="col-xs-12 col-sm-1 col-md-1">
				<button type="button" class="btn btn-primary btn-sm solsoShowModal"  
				data-toggle="modal" data-target="#solsoCrudModal" 
				data-href="{{URL::to('rolemenu_form/'.$v->Su_Role_id)}}" data-modal-title="กำหนดสิทธิ์ การเข้าใช้เมนู (สิทธิ์::{{$v->username}})" >
				<i class="fa fa-pencil"></i>แก้ไข</button>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

