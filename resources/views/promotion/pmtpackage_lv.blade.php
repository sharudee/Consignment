<table class="table solsoTable table-hover {{!empty($refresh) ? 'solsoRefresh' : '' }}" data-all="{{sizeof($promotion_obj)}}">
			<thead>
				<tr>
					<th class="col-xs-1 col-sm-2 col-md-2">เลขที่โปรโมชั่น</th>
					<th class="col-xs-3 col-sm-5 col-md-5">ชื่อโปรโมชั่น</th>
					<th class="col-xs-1 col-sm-2 col-md-2">วันที่เริ่ม</th>
					<th class="col-xs-1 col-sm-2 col-md-2">วันที่สิ้นสุด</th>
					<th class="col-xs-1 col-sm-1 col-md-1"></th>
				</tr>
			</thead>
	<tbody>
		@foreach($promotion_obj as $crt => $v)
		<tr>
			
			<td class="col-xs-1 col-sm-2 col-md-2">{{$v->pmt_no}}</td>
			<td class="col-xs-3 col-sm-5 col-md-5">{{$v->pmt_name}}</td>
			<td class="col-xs-1 col-sm-2 col-md-2">{{$v->start_date}}</td>
			<td class="col-xs-1 col-sm-2 col-md-2">{{$v->end_date}}</td>
			<td class="col-xs-1 col-sm-1 col-md-1">
				<form class="form-horizontal" role="form" method="GET" action="{{URL::to('pmtpackagecontact/'.$v->pmt_mast_id)}}">
					<button type="summit" class="btn btn-primary btn-sm solsoShowModal11"  
					data-toggle="modal" data-target="#solsoCrudModal11" 
					data-href="{{URL::to('pmtpackagecontact/'.$v->pmt_mast_id)}}" data-modal-title="ห้างจัดรายการ (เลขที่โปรโมชั่น::{{$v->pmt_no}})" >
					<i class="fa fa-pencil"></i> รายละเอียด</button>
				</form>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

