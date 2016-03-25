<table class="table solsoTable table-hover {{!empty($refresh) ? 'solsoRefresh' : '' }}" data-all="{{sizeof($data_obj_info)}}">
			<thead>
				<tr>
					<th class="col-xs-12 col-sm-2 col-md-2">รหัส</th>
					<th class="col-xs-12 col-sm-4 col-md-4">ชื่อโปรแกรม</th>
					<th class="col-xs-12 col-sm-3 col-md-3">ชื่อโปรแกรม</th>
					<th class="col-xs-12 col-sm-1 col-md-1">สถานะ</th>
					<th class="col-xs-12 col-sm-1 col-md-1"></th>
					<th class="col-xs-12 col-sm-1 col-md-1"></th>
				</tr>
			</thead>
	<tbody>
		@foreach($data_obj_info as $crt => $v)
		<tr>
			
			<td class="col-xs-12 col-sm-2 col-md-2">{{$v->ProgramCode}}</td>
			<td class="col-xs-12 col-sm-4 col-md-4">{{$v->ProgramDescription}}</td>
			<td class="col-xs-12 col-sm-3 col-md-3">{{$v->RouteUrl}}</td>
			<td class="col-xs-12 col-sm-1 col-md-1">{{$v->RecordStatus}}</td>
			<td class="col-xs-12 col-sm-1 col-md-1">
	
				<button type="button" class="btn btn-primary btn-sm solsoShowModal"  
				data-toggle="modal" data-target="#solsoCrudModal"   rel="editpmtgrpmast"
				data-href="{{URL::to('editprogramform/'.$v->Su_ProgramList_Id.'/')}}" data-modal-title="แก้ไข การกำหนดโปรแกรม">
				<i class="fa fa-pencil"></i>แก้ไข</button>

			</td>
	

		
		<td class="col-xs-12 col-sm-1 col-md-1">
				<button type="button" class="btn btn-danger btn-sm solsoShowModal"  
				data-toggle="modal" data-target="#solsoCrudModal"  
				data-href="{{URL::to('deleteprogramform/'.$v->Su_ProgramList_Id.'/')}}" data-modal-title="ลบข้อมูล การกำหนดโปรแกรม">
				<i class="fa fa-trash"></i>ลบ</button>
		</td>

		</tr>
		@endforeach
	</tbody>
</table>

