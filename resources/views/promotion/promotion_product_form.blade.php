<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h4 class="modal-title">บันทึกข้อมูลสินค้า จัดรายการ   ::MBS2015001::SET01 </h4>
</div>

<div class="modal-body">
	<div class="container"> 
				<div class="row form-group">
					<div class="col-sm-1">
						<label >รุ่น</label>
					</div>
					    	<div class="col-sm-2 inline-col">
							
						        <select class="form-control input-sm" id="select">
						          <option> DSI </option>
						          <option> PT</option>
						          <option> HOLLY</option>
						          <option> EVER</option>
						        </select>
							</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-1">
						<label >ขนาด</label>
					</div>
					    	<div class="col-sm-2 inline-col">
							
						        <select class="form-control input-sm" id="select">
						          <option>'6.0'x6.5'</option>
						          <option>'5.0'x6.5'</option>
						          <option>'3.5'x6.5'</option>
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
					<th>รหัสสินค้า</th>
					<th>รายละเอียดสินค้า</th>
					<th>ส่วนลด(1)</th>
					<th>ส่วนลด(2)</th>
					<th>ส่วนลด(บาท)</th>
					<th>ราคา</th>
					<th>จำนวน</th>
					<th>Action</th>
					</tr>
					</thead>		
			<tbody>
				<tr>
					<td colspan=1>1</td>
					<td><span id='total_qty'>SICSEVERGR14X14</span></td>
					<td>CUSHION EVERGREEN TREE COLA 14"X14"</td>
					<td>0.00</td>
					<td>0.00</td>
					<td>1,000.00</td>
					<td>50,000.00</td>
					<td>1</td>
					<td><a href="#delete" rel='pro_delete' class="btn btn-sm btn-danger">ลบรายการ</a></td>
				</tr>
				<tr>
					<td colspan=1>2</td>
					<td><span id='total_qty'>STFIB029BP5PK</span></td>
					<td>ชุดผ้าปู 6 ฟุต 5 ชิ้น ST.BOTANIC (B)_COTTON</td>
					<td>0.00</td>
					<td>0.00</td>
					<td>0.00</td>
					<td>3,500.00</td>
					<td>1</td>
					<td><a href="#delete" rel='pro_delete' class="btn btn-sm btn-danger">ลบรายการ</a></td>
				</tr>			
				<tr>
					<td colspan=1>3</td>
					<td><span id='total_qty'>STPDCARF0060_BCP</span></td>
					<td>ผ้ารองกันเปื้อนขนาด 6 ฟุต ST. _จัดรายการ</td>
					<td>0.00</td>
					<td>0.00</td>
					<td>0.00</td>
					<td>1,500.00</td>
					<td>1</td>
					<td><a href="#delete" rel='pro_delete' class="btn btn-sm btn-danger">ลบรายการ</a></td>
				</tr>
				<tr>
					<td colspan=1>4</td>
					<td><span id='total_qty'>BSPW000 0019X29</span></td>
					<td>หมอนหนุน BACKSAVER PREMIUM 19"x29"</td>
					<td>0.00</td>
					<td>0.00</td>
					<td>0.00</td>
					<td>1,000.00</td>
					<td>2</td>
					<td><a href="#delete" rel='pro_delete' class="btn btn-sm btn-danger">ลบรายการ</a></td>
				</tr>
				<tr>
					<td colspan=1>4</td>
					<td><span id='total_qty'>STBL000 00TC186</span></td>
					<td>หมอนข้าง STEVENS ขนาด 27"x40" น้ำหนัก 1,200g."</td>
					<td>0.00</td>
					<td>0.00</td>
					<td>0.00</td>
					<td>1,000.00</td>
					<td>2</td>
					<td><a href="#delete" rel='pro_delete' class="btn btn-sm btn-danger">ลบรายการ</a></td>
				</tr>
			</tbody>
			

			
		</table>

	</div>
	
</div>

<div class="modal-footer">
	<button type="button" id="SubmitOrder" class="btn btn-primary">บันทึกข้อมูล</button>
	<button type="button" class="btn btn-danger" data-dismiss="modal">ปิดหน้าจอ</button>
</div>
