

<div class="modal-body">
	<div class="table-responsive" id="product_table">
		<table class='table table-hover' id='po_table'>
			<thead>	
				<tr>
					<th style="width:10%">Id</th>
					<th style="width:40%">รหัสระบบ</th>
					<th style="width:60%">ชื่อระบบ</th>
					<th style="width:10%"></th>
				</tr>
			</thead>	

			<tbody>
				@foreach($su_system_obj_data as $v)
				<tr class="po_table">
						<td>{{$v->Su_System_Id}}<input type='hidden' name='Su_System_Id[]' value="{{$v->Su_System_Id}}"></td>
						<td>{{$v->SystemCode}}<input type='hidden' name='SystemCode[]' value="{{$v->SystemCode}}"></td>
						<td>{{$v->SystemNameThai}}<input type='hidden' name='SystemNameThai[]' value="{{$v->SystemNameThai}}"></td>
						<td>
							@foreach($rolemenu_obj_data as $vv)
	
								<a href="#" rel="AssignMenuBySystem" data-Roleid="{{$vv->Su_Role_id}}" data-Systemid="{{$v->Su_System_Id}}"  class="btn btn-sm btn-primary"><i class="fa fa-plus-pencil"></i>กำหนดเมนู</a> 

							@endforeach	
						</td>
				</tr>				
				@endforeach		
			</tbody>
			
		</table>

	</div>
	
</div>

<div class="modal-footer">
	<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>ปิด</button>
</div>

