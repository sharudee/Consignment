<table class="table solsoTable table-hover {{!empty($refresh) ? 'solsoRefresh' : '' }}" data-all="{{sizeof($pmtgrpmast_obj)}}">
	<thead>
		<tr>
			<th class="col-xs-1 col-sm-1 col-md-3">รหัส</th>
			<th class="col-xs-6 col-sm-6 col-md-7">ชื่อกลุ่ม</th>
			<th class="col-xs-1 col-sm-1 col-md-1"></th>
			<th class="col-xs-1 col-sm-1 col-md-1"></th>
		</tr>
	</thead>
	<tbody>
		@foreach($pmtgrpmast_obj as $crt => $v)
		<tr>
			
			<td class="col-xs-3 col-sm-3 col-md-3">{{$v->pmt_group_code}}</td>
			<td class="col-xs-7 col-sm-7 col-md-7">{{$v->pmt_group_name}}</td>		

			<td class="col-xs-1 col-sm-1 col-md-1">
	
				<button type="button" class="btn btn-primary btn-sm solsoShowModal"  
				data-toggle="modal" data-target="#solsoCrudModal"   rel="editpmtgrpmast"
				data-href="{{URL::to('editpmtgrpmastform/'.$v->pmt_group_id.'/')}}" data-modal-title="Edit Entity">
				<i class="fa fa-pencil"></i>  Edit</button>

			</td>
	

		
		<td class="col-xs-1 col-sm-1 col-md-1">
			<form class="formDelete" method="POST"  action="pmtgrpmast-del" enctype="multipart/form-data">
				<input id= "_token" type="hidden" name="_token" value="{{ csrf_token() }}" />
				<input id= "deleteID" type="hidden" name="deleteID" value="{{$v->pmt_group_id}}" />
				<button type="submit" class="btn btn-danger btn-sm solsoConfirm"> <i class="fa fa-trash"></i> Del</button>	
			</form>

		</td>


</tr>

@endforeach
</tbody>
</table>