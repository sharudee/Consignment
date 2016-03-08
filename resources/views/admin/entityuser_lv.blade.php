<table class="table solsoTable table-hover {{!empty($refresh) ? 'solsoRefresh' : '' }}" data-all="{{sizeof($data_obj_info)}}">
			<thead>
				<tr>
					<th class="col-xs-1 col-sm-1 col-md-2">รหัสผู้ใช้</th>
					<th class="col-xs-6 col-sm-6 col-md-5">ชื่อ</th>
					<th class="col-xs-1 col-sm-1 col-md-1">เบอร์โทร</th>
					<th class="col-xs-1 col-sm-1 col-md-1">Email</th>
					<th class="col-xs-1 col-sm-1 col-md-1"></th>
				</tr>
			</thead>
	<tbody>
		@foreach($data_obj_info as $crt => $v)
		<tr>
			
			<td class="col-xs-1 col-sm-1 col-md-2">{{$v->username}}</td>
			<td class="col-xs-6 col-sm-6 col-md-5">{{$v->fullname}}</td>
			<td class="col-xs-1 col-sm-1 col-md-1">{{$v->tel}}</td>
			<td class="col-xs-1 col-sm-1 col-md-1">{{$v->email}}</td>
			<td class="col-xs-1 col-sm-1 col-md-1">
				<button type="button" class="btn btn-primary btn-sm solsoShowModal"  
				data-toggle="modal" data-target="#solsoCrudModal" 
				data-href="{{URL::to('getpmtdiscshopform/'.$v->id)}}" data-modal-title="ส่วนลดการซื้อสินค้าครบ (เลขที่โปรโมชั่น::{{$v->username}})" >
				<i class="fa fa-pencil"></i>Entity,ห้าง-ร้าน</button>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

