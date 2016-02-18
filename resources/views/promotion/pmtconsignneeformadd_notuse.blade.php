<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h4 class="modal-title">บันทึกข้อมูล ลูกค้า  ::MBS2015001 </h4>
</div>

<div class="modal-body">
	<div class="container"> 
				<div class="row form-group">
					<div class="col-sm-1">
						<label >รหัสลูกค้า</label>
					</div>

					<div class="col-sm-2">
						<input type="text" name="" id="input" class="form-control input-sm">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-1">
						<label >กลุ่มลูกค้า</label>
					</div>
					    	<div class="col-sm-2 inline-col">
							

							 <select name="cust_group" id="cust_group" class="form-control">
							 
							 	@foreach($cust_group as $cg)
							 		<option value="{{$cg->custgrp_code}}">{{$cg->custgrp_name}}</option>
							 	@endforeach
							 </select>
							 
							</div>

				</div>

				<div class="row form-group">
						<div class="modal fade" id="modal-map">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<h4 class="modal-title"> Map </h4>
									</div>
									<div class="modal-body">
										
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										<!--<button type="button" class="btn btn-primary">Save changes</button>-->
									</div>
								</div>
							</div>
						</div>
					</div>

					<!--<div class="col-sm-3">
						<input type="file" name="" id="input" class="form-control input-sm">
					</div> -->
				</div>


				<input type ="hidden" name="_token"  value="{{csrf_token()}}">


	<a href="#addtr" rel="testprepend" class="btn btn-primary">Add Product </a> 

	<input type="hidden" name="_token" value="{{csrf_token()}}">

	</form>	

	
	<div class="table-responsive" id="product_table">
		<table class='table table-bordered' id='po_table'>
			<thead>	
				<tr>
					<th>ลำดับ</th>
					<th>รหัสลูกค้า</th>
					<th>ชื่อลูกค้า</th>
					<th>Action</th>
					</tr>
					</thead>		
			<tbody>
				<tr>
					<td colspan=1>1</td>
					<td><span id='total_qty'>H0005</span></td>
					<td>โฮม โปรดักส์ เซ็นเตอร์  สาขาแฟชั่นไอส์แลนด์</td>
					<td><a href="#delete" rel='pro_delete' class="btn btn-sm btn-danger">ลบรายการ</a></td>
				</tr>
				<tr>
					<td colspan=1>2</td>
					<td><span id='total_qty'>H0006</span></td>
					<td>โฮม โปรดักส์ เซ็นเตอร์  สาขารัตนาธิเบศร์</td>
					<td><a href="#delete" rel='pro_delete' class="btn btn-sm btn-danger">ลบรายการ</a></td>
				</tr>			
				<tr>
					<td colspan=1>3</td>
					<td><span id='total_qty'>H0007</span></td>
					<td>โฮม โปรดักส์ เซ็นเตอร์ สาขาพาราไดซ์ พาร์ค</td>
					<td><a href="#delete" rel='pro_delete' class="btn btn-sm btn-danger">ลบรายการ</a></td>
				</tr>
				<tr>
					<td colspan=1>4</td>
					<td><span id='total_qty'>H0009</span></td>
					<td>โฮม โปรดักส์เซ็นเตอร์ สาขารัชดาภิเษก</td>
					<td><a href="#delete" rel='pro_delete' class="btn btn-sm btn-danger">ลบรายการ</a></td>
				</tr>
			</tbody>
			

			
		</table>

	</div>
	
</div>

<div class="modal-footer">
	<button type="button"  id="AssignConsignee" class="btn btn-primary"><i class="fa fa-save"></i>บันทึก</button>
	<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>ปิด</button>
</div>
