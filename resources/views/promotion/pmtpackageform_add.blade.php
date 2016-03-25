		@foreach($pmt_mast_id_obj_info as $v) 
			<input type="hidden"  id= "pmt_mast_id" type="hidden" name="pmt_mast_id" value="{{$v->pmt_mast_id}}">
		@endforeach

<div class="modal-body">
<form class="form-horizontal">
	<div class="container" > 
				<div class="row form-group">
					<div class="col-sm-1">
						<label >รุ่น</label>
					</div>
			
					<div class="col-sm-2">
						<input type="text" id="pdmodel_code_package" name="pdmodel_code_package" class="form-control input-sm" readonly="ture" >
					</div> 
					<div class="col-sm-1">

						<a href="#" rel="click_model_popup99" class="btn btn-sm btn-info">
						<i class="fa fa-search"></i>..</a>

					</div>
					<div class="col-sm-1">
						<label >ขนาด</label>
					</div>
					<div class="col-sm-3">
						 <input type="text" class="form-control" name="pdsize_code_package" id="pdsize_code_package" readonly>
					</div>

					<div class="col-sm-1">
						<a href="#" rel="click_pdsize_code_package" class="btn btn-sm btn-info">
						<i class="fa fa-search"></i>..</a>
					</div>


				</div>

				<div class="row form-group">
					<div class="col-sm-1">
						<label >ชุดเซ็ท</label>
					</div>

					<div class="col-sm-2">
						<input type="text" id="pmt_product_set" name="pmt_product_set" class="form-control input-sm" readonly="ture" >
					</div> 
					<div class="col-sm-1">
						<a href="#" rel="click_product_set" class="btn btn-sm btn-info">
						<i class="fa fa-search"></i>..</a>
					</div>
					<div class="col-sm-5">
						<input type="text" id="pmt_product_set_desc" name="pmt_product_set_desc" class="form-control input-sm" readonly="ture" >
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-1">
						<label >ราคา</label>
					</div>

					<div class="col-sm-2">
						<input type="text" id="package_unit_price" name="package_unit_price" class="form-control input-sm"  >
					</div> 
					<div class="col-sm-1">
					</div>
					<div class="col-sm-2">
						<input type="text" id="pdmodel_desc_h" name="pdmodel_desc_h" class="form-control input-sm" readonly >
					</div> 
					<div class="col-sm-3">
						<input type="text" id="pdsize_desc_h" name="pdsize_desc_h" class="form-control input-sm" readonly >
					</div> 
				</div>
				<div class="row form-group">
					<div class="col-sm-1">
						<label >ราคาทั้งชุด</label>
					</div>

					<div class="col-sm-2">
						<input type="text" id="total_price_amt" name="total_price_amt" class="form-control input-sm"  >
					</div> 
					<div class="col-sm-1">
						<label >ราคาพิเศษ</label>
					</div>
					<div class="col-sm-2">
						<input type="text" id="special1_price_amt" name="special1_price_amt" class="form-control input-sm"  >
					</div>
					<div class="col-sm-1">
						<label >ลดพิเศษ</label>
					</div>
					<div class="col-sm-2">
						<input type="text" id="special2_price_amt" name="special2_price_amt" class="form-control input-sm"  >
					</div>
				</div>
				<div class="row form-group">	
					 <div class="col-sm-1">
						<label >มูลค่าของแถม</label>
					</div>

					<div class="col-sm-2">
						<input type="text" id="pm_total_price" name="pm_total_price" class="form-control input-sm"  >
					</div> 
					<div class="col-sm-1">
						<a href="#" rel="click_premuim_set" class="btn btn-primary btn-md"><i class="fa fa-search"></i>เลือก ชุดของแถม</a>
					</div>
				</div>

	</div>


				<input type ="hidden" name="_token"  value="{{csrf_token()}}">

	

</form>	

	
	<div class="table-responsive" id="product_table">
		<table class='table table-hover' id='po_table'>
			<thead>	
				<tr>
					<th style="width:10%">รหัส</th>
					<th style="width:30%">รายการของแถม</th>
					<th style="width:10%">จำนวน</th>
					<th style="width:20%">มูลค่าของแถม</th>
					<th style="width:20%">หน่วย</th>
					<th style="width:10%"></th>
				</tr>
			</thead>	

			<tbody>

			</tbody>
			

			
		</table>

	</div>
	
</div>

<div class="modal-footer">


	<button type="button"  id="submit_addnew_package" class="btn btn-primary"><i class="fa fa-save"></i>บันทึก</button>

	<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>ปิด</button>
</div>



