

<div class="modal-body">
<form class="form-horizontal">
	<div class="container" > 
	@foreach($user_obj_data as $v)

	<input type="hidden"  id= "id" type="hidden" name="id" value="{{$v->id}}">
				<div class="row form-group">
					<div class="col-sm-2">
						<label >รหัสผู้ใช้งาน</label>
					</div>
					<div class="col-sm-7">
						<input type="text" id="RoleDescription" name="RoleDescription" class="form-control input-sm" readonly="ture" value="{{$v->fullname}}">
					</div>
				</div>
	@endforeach	
	      <div class="form-group">
            <label class="col-sm-2 control-label">Entity </label>
                    <div class="col-md-2">
                         <input type="text" class="form-control required" name="entity_code" id="entity_code" >
                    </div>
                    <div class="col-md-1">
                        <a href="#" rel="clickselect_entity_modal" class="btn btn-sm btn-info">
                        <i class="fa fa-plus-square-o"></i>..</a>
                    </div>
                    <div class="col-md-4">
                         <input type="text" class="form-control required" name="entity_tname" id="entity_tname" readonly>
                    </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">กลุ่ม ห้าง-ร้าน</label>
                    <div class="col-md-2">
                         <input type="text" class="form-control required" name="cust_grp_code" id="cust_grp_code" readonly>
                    </div>
                    <div class="col-md-1">
                        <a href="#" rel="clickselect_custgrp_modal" class="btn btn-sm btn-info">
                        <i class="fa fa-plus-square-o"></i>..</a>
                    </div>
        </div>
	</div>


				<input type ="hidden" name="_token"  value="{{csrf_token()}}">


	<a href="#" rel="click_cust_allow" class="btn btn-primary">เลือก ห้าง-ร้าน </a> 

	<input type="hidden" name="_token" value="{{csrf_token()}}">

	</form>	

	
	<div class="table-responsive" id="product_table">
		<table class='table table-hover' id='po_table'>
			<thead>	
				<tr>
					<th style="width:20%">รหัส</th>
					<th style="width:70%">ชื่อ ห้าง-ร้าน</th>
					<th style="width:20%">กลุ่มข้อมูล</th>
					<th style="width:10%"></th>
				</tr>
			</thead>	

			<tbody>
				@foreach($pmt_consignee_obj_data as $v)
				<tr class="po_table">
						<td>{{$v->entity_code}}<input type='hidden' name='entity_code[]' value="{{$v->entity_code}}"></td>
						<td>{{$v->entity_tname}}<input type='hidden' name='entity_tname[]' value="{{$v->entity_tname}}"></td>
						<td>{{$v->entitycode}}<input type='hidden' name='entity[]' value="{{$v->entitycode}}"></td>
						<td><a href="#delete" rel="pro_delete" class="btn btn-sm btn-danger">Del</a></td>
				</tr>				
				@endforeach		
			</tbody>
			

			
		</table>

	</div>
	
</div>

<div class="modal-footer">
	<button type="button"  id="submitAssignCustAllow99" class="btn btn-primary"><i class="fa fa-save"></i>บันทึก</button>
	<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>ปิด</button>
</div>
