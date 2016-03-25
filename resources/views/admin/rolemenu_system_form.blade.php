<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h4 class="modal-title">เพิ่ม/แก้ไข เมนู</h4>
</div>
<form class="form-horizontal">
 
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	

	@foreach($rolemenu_obj_data as $vv) 
		<input type="hidden"  id= "Su_Role_id" type="hidden" name="Su_Role_id" value="{{$vv->Su_Role_id}}" />
		@foreach($su_system_obj_data as $k)  
			<input type="hidden"  id= "Su_System_Id" type="hidden" name="Su_System_Id" value="{{$k->Su_System_Id}}" />

	       	<a href="#" rel="click_popup_memu_by_system" class="btn btn-primary">เลือกเมนู </a> 
	
			<div class="col-sm-7">
			 
	            <input type="text" name="SystemNameThai" id="SystemNameThai" required="required" class="form-control md"  value="{{$k->SystemNameThai}}" readonly>		
			</div>
		@endforeach
	@endforeach
			

</form>	

<div class="modal-body">	

	<div class="table-responsive" id="product_table">
		<table class='table table-hover' id='po_table2'>
			<thead>	
				<tr>
					<th style="width:10%">Id</th>
					<th style="width:10%">Menu Level</th>
					<th style="width:50%">ชื่อเมนู</th>
					<th style="width:10%"></th>
				</tr>
			</thead>	

			<tbody>
				@foreach($menu_obj_data as $v)
				<tr class="po_table2">
						<td>{{$v->Su_Menu_Id}}<input type='hidden' name='Su_Menu_Id[]' value="{{$v->Su_Menu_Id}}"></td>
						<td>{{$v->MenuLevel}}<input type='hidden' name='MenuLevel[]' value="{{$v->MenuLevel}}"></td>
						<td>{{$v->MenuName}}<input type='hidden' name='MenuName[]' value="{{$v->MenuName}}"></td>
						<td><a href="#delete" rel="pro_delete" class="btn btn-sm btn-danger">Del</a></td>
				</tr>				
				@endforeach		
			</tbody>
		</table>

	</div>
	
</div>

<div class="modal-footer">
	<button type="button"  id="submitAssignMenuToRole" class="btn btn-primary"><i class="fa fa-save"></i>บันทึก</button>
	<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>ปิด</button>
</div>
