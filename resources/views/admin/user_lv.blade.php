<table class="table solsoTable table-hover {{!empty($refresh) ? 'solsoRefresh' : '' }}" data-all="{{sizeof($data_obj_info)}}">
			<thead>
				<tr>
					<th class="col-xs-2 col-sm-2 col-md-2">รหัสผู้ใช้</th>
					<th class="col-xs-4 col-sm-4 col-md-4">ชื่อ</th>
					<th class="col-xs-1 col-sm-1 col-md-1">เบอร์โทร</th>
					<th class="col-xs-1 col-sm-1 col-md-1">Email</th>
					<th class="col-xs-1 col-sm-1 col-md-1"></th>
					<th class="col-xs-1 col-sm-1 col-md-1"></th>
				</tr>
			</thead>
	<tbody>
		@foreach($data_obj_info as $crt => $v)
		<tr>
			
			<td class="col-xs-2 col-sm-2 col-md-2">{{$v->username}}</td>
			<td class="col-xs-4 col-sm-4 col-md-4">{{$v->fullname}}</td>
			<td class="col-xs-1 col-sm-1 col-md-1">{{$v->tel}}</td>
			<td class="col-xs-1 col-sm-1 col-md-1">{{$v->email}}</td>
			<td class="col-xs-1 col-sm-1 col-md-1">
				<button type="button" class="btn btn-primary btn-sm solsoShowModal"  
				data-toggle="modal" data-target="#solsoCrudModal"   rel="editmenu"
				data-href="{{URL::to('edituserform/'.$v->id.'/')}}" data-modal-title="แก้ไข ข้อมูลผู้ใช้งานระบบ">
				<i class="fa fa-pencil"></i>แก้ไข</button>
			</td>
		<td class="col-xs-1 col-sm-1 col-md-1">

				<button type="button" class="btn btn-danger btn-sm solsoShowModal"  
				data-toggle="modal" data-target="#solsoCrudModal"   rel="editmenu"
				data-href="{{URL::to('deleteuserform/'.$v->id.'/')}}" data-modal-title="ลบข้อมูล ผู้ใช้งานระบบ">
				<i class="fa fa-trash"></i>ลบ</button>

		</td>
		</tr>
		@endforeach
	</tbody>
</table>

