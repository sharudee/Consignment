<table class="table solsoTable table-hover {{!empty($refresh) ? 'solsoRefresh' : '' }}" data-all="{{sizeof($data_obj_info)}}">
			<thead>
				<tr>
					<th class="col-xs-3 col-sm-3 col-md-3">รหัส</th>
					<th class="col-xs-5 col-sm-5 col-md-5">ชื่อสิทธิ์</th>
					<th class="col-xs-2 col-sm-2 col-md-2">ประเภท</th>
					<th class="col-xs-1 col-sm-1 col-md-1">สถานะ</th>
					<th class="col-xs-1 col-sm-1 col-md-1"></th>

				</tr>
			</thead>
	<tbody>

		@foreach($data_obj_info as $crt => $v)
		<tr>
			
			<td class="col-xs-3 col-sm-3 col-md-3">{{$v->RoleName}}</td>
			<td class="col-xs-5 col-sm-5 col-md-5">{{$v->RoleDescription}}</td>
			<td class="col-xs-2 col-sm-2 col-md-2">{{$v->PermissionsType}}</td>
			<td class="col-xs-1 col-sm-1 col-md-1">{{$v->RecordStatus}}</td>
			<td class="col-xs-1 col-sm-1 col-md-1">

					<button type="button" class="btn btn-primary btn-sm solsoShowModal"  
					data-toggle="modal" data-target="#solsoCrudModal"   rel="editrole"
					data-href="{{URL::to('rolemenu_form/'.$v->Su_Role_id.'/')}}" data-modal-title="กำหนดสิทธิ์ การเข้าใช้งานเมนู ::{{$v->RoleName}}">
					<i class="fa fa-pencil"></i>กำหนดเมนู</button>
	
			</td>
	
		</tr>
		@endforeach
	</tbody>
</table>

@include('modals.modal-crud-comm')