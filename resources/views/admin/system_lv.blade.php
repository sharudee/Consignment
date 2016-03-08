<table class="table solsoTable table-hover {{!empty($refresh) ? 'solsoRefresh' : '' }}" data-all="{{sizeof($data_obj_info)}}">
			<thead>
				<tr>
					<th class="col-xs-1 col-sm-1 col-md-2">รหัส</th>
					<th class="col-xs-6 col-sm-6 col-md-6">ชื่อระบบ</th>
					<th class="col-xs-1 col-sm-1 col-md-1">ลำดับ</th>
					<th class="col-xs-1 col-sm-1 col-md-1">สถานะ</th>
					<th class="col-xs-1 col-sm-1 col-md-1"></th>
					<th class="col-xs-1 col-sm-1 col-md-1"></th>
				</tr>
			</thead>
	<tbody>
		@foreach($data_obj_info as $crt => $v)
		<tr>
			
			<td class="col-xs-1 col-sm-1 col-md-2">{{$v->SystemCode}}</td>
			<td class="col-xs-6 col-sm-6 col-md-6">{{$v->SystemNameThai}}</td>
			<td class="col-xs-1 col-sm-1 col-md-1">{{$v->SystemSeq}}</td>
			<td class="col-xs-1 col-sm-1 col-md-1">{{$v->RecordStatus}}</td>

			<td class="col-xs-1 col-sm-1 col-md-1">
	
				<button type="button" class="btn btn-primary btn-sm solsoShowModal"  
				data-toggle="modal" data-target="#solsoCrudModal"  
				data-href="{{URL::to('editsystemform/'.$v->Su_System_Id.'/')}}" data-modal-title="แก้ไขข้อมูล การกำหนดหมวดระบบ">
				<i class="fa fa-pencil"></i>แก้ไข</button>

			</td>
	

		
		<td class="col-xs-1 col-sm-1 col-md-1">

				<button type="button" class="btn btn-danger btn-sm solsoShowModal"  
				data-toggle="modal" data-target="#solsoCrudModal"  
				data-href="{{URL::to('deletesystemform/'.$v->Su_System_Id.'/')}}" data-modal-title="ลบข้อมูล การกำหนดหมวดระบบ">
				<i class="fa fa-pencil"></i>ลบ</button>

		</td>

		</tr>
		@endforeach
	</tbody>
</table>

deletesystemform