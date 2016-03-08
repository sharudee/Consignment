<table class="table solsoTable table-hover {{!empty($refresh) ? 'solsoRefresh' : '' }}" data-all="{{sizeof($data_obj_info)}}">
			<thead>
				<tr>
					<th class="col-xs-1 col-sm-5 col-md-5">ชื่อโปรแกรม</th>
					<th class="col-xs-6 col-sm-1 col-md-1">Level</th>
					<th class="col-xs-1 col-sm-3 col-md-3">โปรแกรม</th>
					<th class="col-xs-1 col-sm-1 col-md-1">ชื่อ Icon</th>
					<th class="col-xs-1 col-sm-1 col-md-1"></th>
					<th class="col-xs-1 col-sm-1 col-md-1"></th>
				</tr>
			</thead>
	<tbody>
		@foreach($data_obj_info as $crt => $v)
		<tr>
			
			<td class="col-xs-1 col-sm-5 col-md-5">{{$v->MenuName}}</td>
			<td class="col-xs-6 col-sm-1 col-md-1">{{$v->MenuLevel}}</td>
			<td class="col-xs-1 col-sm-3 col-md-3">{{$v->ProgramCode}}</td>
			<td class="col-xs-1 col-sm-3 col-md-3">{{$v->icon_class_name}}</td>
			<td class="col-xs-1 col-sm-1 col-md-1">
	
				<button type="button" class="btn btn-primary btn-sm solsoShowModal"  
				data-toggle="modal" data-target="#solsoCrudModal"   rel="editmenu"
				data-href="{{URL::to('editmenuform/'.$v->Su_Menu_Id.'/')}}" data-modal-title="แก้ไข กำหนดเมนู">
				<i class="fa fa-pencil"></i>แก้ไข</button>

			</td>
	

		
		<td class="col-xs-1 col-sm-1 col-md-1">
			<form class="formDelete" method="POST"  action="system-del" enctype="multipart/form-data">
				<input id= "_token" type="hidden" name="_token" value="{{ csrf_token() }}" />
				<input id= "deleteID" type="hidden" name="deleteID" value="{{$v->Su_Menu_Id}}" />
				<button type="submit" class="btn btn-danger btn-sm solsoConfirm"> <i class="fa fa-trash"></i>ลบ</button>	
			</form>

		</td>

		</tr>
		@endforeach
	</tbody>
</table>

