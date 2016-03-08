<table class="table solsoTable table-hover {{!empty($refresh) ? 'solsoRefresh' : '' }}" data-all="{{sizeof($promotion_obj)}}">
			<thead>
				<tr>
					<th class="col-xs-1 col-sm-1 col-md-1">เลขที่โปรโมชั่น</th>
					<th class="col-xs-6 col-sm-6 col-md-3">ชื่อโปรโมชั่น</th>
					<th class="col-xs-6 col-sm-6 col-md-2">ประเภท</th>
					<th class="col-xs-6 col-sm-6 col-md-2">สถานะ</th>
					<th class="col-xs-1 col-sm-1 col-md-1">วันที่เริ่ม</th>
					<th class="col-xs-1 col-sm-1 col-md-1">วันที่สิ้นสุด</th>
					<th class="col-xs-1 col-sm-1 col-md-1"></th>
					<th class="col-xs-1 col-sm-1 col-md-1"></th>

				</tr>
			</thead>
	<tbody>
		@foreach($promotion_obj as $crt => $v)
		<tr>
			
			<td class="col-xs-1 col-sm-1 col-md-1">{{$v->pmt_no}}</td>
			<td class="col-xs-6 col-sm-6 col-md-4">{{$v->pmt_name}}</td>
			<td class="col-xs-6 col-sm-6 col-md-2">{{$v->pmt_type}}</td>
			<td class="col-xs-6 col-sm-6 col-md-2">{{$v->rec_status}}</td>
			<td class="col-xs-1 col-sm-1 col-md-1">{{$v->start_date}}</td>
			<td class="col-xs-1 col-sm-1 col-md-1">{{$v->end_date}}</td>
			
			<td class="col-xs-1 col-sm-1 col-md-1">
				<button type="button" class="btn btn-primary btn-sm solsoShowModal"  
				data-toggle="modal" data-target="#solsoCrudModal"   rel="editpromotionform" data-editpromotionid="{{$v->pmt_mast_id}}"
				data-href="{{URL::to('editpromotionform/'.$v->pmt_mast_id.'/')}}" data-modal-title="Edit Entity">
				<i class="fa fa-pencil"></i>  Edit</button>
			</td>



		<td class="col-xs-1 col-sm-1 col-md-1">
			<form class="formDelete" method="POST"  action="promotion-del" enctype="multipart/form-data">
				<input id= "_token" type="hidden" name="_token" value="{{ csrf_token() }}" />
				<input id= "deleteID" type="hidden" name="deleteID" value="{{$v->pmt_mast_id}}" />
				<button type="submit" class="btn btn-danger btn-sm solsoConfirm"> <i class="fa fa-trash"></i> Del</button>	
			</form>

		</td>


		</tr>
		@endforeach
	</tbody>
</table>


@section('scripts')
 <script type="text/javascript">
        $(document).ready(function(){
            $('#txtEditStartdateID').datepicker({
                dateFormat: 'dd/mm/yy'
            });

            $('#txtEditenddateID').datepicker({
                dateFormat: 'dd/mm/yy'
            });
            //Alert confirm delete
            $('.formDelete').submit(function() {
                var c = confirm("ท่านกำลังลบรายการข้อมูล กรุณายืนยันโดยกดปุ่ม ''ตกลง''?");
                return c;
            });
        });
    </script>
@stop
