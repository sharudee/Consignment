

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
						<label >ขนาด(Size)</label>
					</div>
					<div class="col-sm-2">
						 <input type="text" class="form-control" name="pdsize_code" id="pdsize_code" >
					</div>
					<div class="col-sm-1">
						<a href="#" rel="click_pdsize_code" class="btn btn-sm btn-info">
						<i class="fa fa-plus-square-o"></i>..</a>
					</div>
					<div class="col-sm-4">
						 <input type="text" class="form-control" name="pdsize_desc" id="pdsize_desc" readonly="true">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label >ประเภทส่วนลด</label>
					</div>
					<div class="col-sm-2">
										    <select class="form-control required" id="discount_type" name="discount_type">
									          <option value="BAHT" "selected" >Baht</option>
									          <option value="PERCEN">Percen</option>
									        </select>
					</div>
					<div class="col-sm-1">
					</div>
					<div class="col-sm-1">
						<label >บาท</label>
					</div>
					<div class="col-sm-3">
						 <input type="text" class="form-control" name="discount_amt" id="discount_amt">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-4">
						
					</div>
					<div class="col-sm-1">
					</div>
					<div class="col-sm-1">
						<label >เปอร์เซ็น</label>
					</div>
					<div class="col-sm-3">
						 <input type="text" class="form-control" name="discount_percen" id="discount_percen">
					</div>
				</div>
			</div>


				<input type ="hidden" name="_token"  value="{{csrf_token()}}">



	<button type="button"  id="click_add_data" name="click_add_data"  class="btn btn-primary">เพิ่มรายการ</button>
	<input type="hidden" name="_token" value="{{csrf_token()}}">

	</form>	

	
	<div class="table-responsive" id="product_table">
		<table class='table table-hover' id='po_table'>
			<thead>	
				<tr>
					<th style="width:10%">รหัส</th>
					<th style="width:50%">ชื่อขนาด</th>
					<th style="width:10%">Baht/Percen</th>
					<th style="width:20%">ส่วนลดบาท</th>
					<th style="width:20%">เปอร์เซ็น</th>
					<th style="width:10%"></th>
				</tr>
			</thead>	

			<tbody>
 				@foreach($discpremiumdeny_list as $v)
					<tr class="po_table">
							<td>{{$v->pdsize_code}}<input type='hidden' name='pdsize_code[]' value="{{$v->pdsize_code}}"></td>
							<td>{{$v->pdsize_desc}}<input type='hidden' name='pdsize_desc[]' value="{{$v->pdsize_desc}}"></td>
							<td>{{$v->discount_type}}<input type='hidden' name='discount_type[]' value="{{$v->discount_type}}"></td>
							<td>{{$v->discount_amt}}<input type='hidden' name='discount_amt[]' value="{{$v->discount_amt}}"></td>
							<td>{{$v->discount_percen}}<input type='hidden' name='discount_percen[]' value="{{$v->discount_percen}}"></td>
							<td><a href="#delete" rel="pro_delete" class="btn btn-sm btn-danger">Del</a></td>
					</tr>				
				@endforeach		
			</tbody>
			

			
		</table>

	</div>
	
</div>

<div class="modal-footer">
	<button type="button"  id="submitdiscpremiumdeny" class="btn btn-primary"><i class="fa fa-save"></i>บันทึก</button>
	<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>ปิด</button>
</div>
