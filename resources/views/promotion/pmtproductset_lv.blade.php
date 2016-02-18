

<table class="table solsoTable table-hover {{!empty($refresh) ? 'solsoRefresh' : '' }}" data-all="{{sizeof($productset_obj)}}">
			<thead>
				<tr>
					<th class="col-xs-1 col-sm-1 col-md-1">รหัสชุด</th>
					<th class="col-xs-5 col-sm-5 col-md-5">ชื่อชุดเซ็ทสินค้า</th>
					<th class="col-xs-1 col-sm-1 col-md-1">รหัสกลุ่ม</th>
					<th class="col-xs-1 col-sm-1 col-md-1">จำนวน</th>
					<th class="col-xs-1 col-sm-1 col-md-1">ราคาต่อชิ้น</th>
					<th class="col-xs-1 col-sm-1 col-md-1">ราคาต่อชุด</th>
					<th class="col-xs-1 col-sm-1 col-md-1"></th>
					<th class="col-xs-1 col-sm-1 col-md-1"></th>
				</tr>
			</thead>
	<tbody>
		@foreach($productset_obj as $crt => $v)
		<tr>
			
			<td class="col-xs-1 col-sm-1 col-md-2">{{$v->product_set_code}}</td>
			<td class="col-xs-6 col-sm-6 col-md-5">{{$v->product_set_desc}}</td>
			<td class="col-xs-1 col-sm-1 col-md-1">{{$v->pmt_group_code}}</td>
			<td class="col-xs-1 col-sm-1 col-md-1">{{$v->set_qty}}</td>
			<td class="col-xs-1 col-sm-1 col-md-2">{{$v->unit_price_amt}}</td>
			<td class="col-xs-6 col-sm-6 col-md-5">{{$v->set_price_amt}}</td>
			<td class="col-xs-1 col-sm-1 col-md-1">
				<button type="button" class="btn btn-sm btn-primary solsoShowModal"  
				data-toggle="modal" data-target="#solsoCrudModal" 
				data-href="{{URL::to('editpmtproductsetform/'.$v->pmt_product_set_id)}}" data-modal-title="แก้ไข ชุดรายการสินค้า">
				<i class="fa fa-pencil"></i>Edit</button>

			</td>
			</td>
			<td class="col-xs-1 col-sm-1 col-md-1">

			<form class="formDelete" method="POST"  action="submitProductSetdelete" enctype="multipart/form-data">
				<input id= "_token" type="hidden" name="_token" value="{{ csrf_token() }}" />
				<input id= "deleteID" type="hidden" name="deleteID" value="{{$v->pmt_product_set_id}}" />
				<button type="submit" class="btn btn-danger btn-sm solsoConfirm"> <i class="fa fa-trash"></i>Del</button>	
			</form>

			</td>
		</tr>
		@endforeach
	</tbody>
</table>