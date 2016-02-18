

<div class="modal-body">
<form class="form-horizontal">
	<div class="container" > 
	@foreach($pmt_obj_data as $v)

	<input type="hidden"  id= "pmt_mast_id" type="hidden" name="pmt_mast_id" value="{{$v->pmt_mast_id}}">
	<input type="hidden"  id= "pmt_no" type="hidden" name="pmt_no" value="{{$v->pmt_no}}">
				<div class="row form-group">
<!-- 					<div class="col-sm-2">
	<label >เลขที่โปรโมชั่น</label>
</div>

<div class="col-sm-2">
	<input type="text" id="pmt_no" name="pmt_no" class="form-control input-sm" readonly="ture" value="{{$v->pmt_no}}">
</div> -->
					<div class="col-sm-2">
						<label >ชื่อโปรโมชั่น</label>
					</div>

					<div class="col-sm-7">
						<input type="text" id="pmt_name" name="pmt_name" class="form-control input-sm" readonly="ture" value="{{$v->pmt_name}}">
					</div>
				</div>
	@endforeach	
				<div class="row form-group">
					<div class="col-sm-2">
						<label >กลุ่มลูกค้า</label>
					</div>
					<div class="col-sm-2">
						 <input type="text" class="form-control" name="custgrp_code" id="custgrp_code" >
					</div>
					<div class="col-sm-1">
						<a href="#" rel="click_consignnee_grp_modal" class="btn btn-sm btn-info">
						<i class="fa fa-plus-square-o"></i>..</a>
					</div>
					<div class="col-sm-4">
						 <input type="text" class="form-control" name="custgrp_name" id="custgrp_name" readonly="true">
					</div>
				</div>
			</div>


				<input type ="hidden" name="_token"  value="{{csrf_token()}}">


	<a href="#" rel="click_consignnee_modal" class="btn btn-primary">เลือก ห้าง-ร้าน </a> 

	<input type="hidden" name="_token" value="{{csrf_token()}}">

	</form>	

	
	<div class="table-responsive" id="product_table">
		<table class='table table-hover' id='po_table'>
			<thead>	
				<tr>
					<th style="width:20%">รหัสลูกค้า</th>
					<th style="width:70%">ชื่อลูกค้า</th>
					<th style="width:10%"></th>
				</tr>
			</thead>	

			<tbody>
				@foreach($pmt_consignee_obj_data as $v)
				<tr class="po_table">
						<td>{{$v->entity_code}}<input type='hidden' name='entity_code[]' value="{{$v->entity_code}}"></td>
						<td>{{$v->entity_tname}}<input type='hidden' name='entity_tname[]' value="{{$v->entity_tname}}"></td>
						<td><a href="#delete" rel="pro_delete" class="btn btn-sm btn-danger">Del</a></td>
				</tr>				
				@endforeach		
			</tbody>
			

			
		</table>

	</div>
	
</div>

<div class="modal-footer">
	<button type="button"  id="submitAssignConsignee" class="btn btn-primary"><i class="fa fa-save"></i>บันทึก</button>
	<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>ปิด</button>
</div>
