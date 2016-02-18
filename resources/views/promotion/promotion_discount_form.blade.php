<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h4 class="modal-title">บันทึกข้อมูลส่วนลดสินค้า  Promotion No::MBS2015001 </h4>
</div>

<div class="modal-body">
	<div class="container"> 


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
					<th>ขนาด</th>
					<th>ละเอียด</th>
					<th>ส่วนลด</th>
					<th>Action</th>
					</tr>
					</thead>		
			<tbody>
				<tr>
					<td colspan=1>1</td>
					<td><span id='total_qty'>6.0 x 6.5</span></td>
					<td>ที่นอนขนาด 6.0 x 6.5</td>
					<td>3,000.00</td>
					<td><a href="#delete" rel='pro_delete' class="btn btn-sm btn-danger">ลบรายการ</a></td>
				</tr>
				<tr>
					<td colspan=1>2</td>
					<td><span id='total_qty'>5.0 x 6.5</span></td>
					<td>ที่นอนขนาด 5.0 x 6.5</td>
					<td>2,500.00</td>
					<td><a href="#delete" rel='pro_delete' class="btn btn-sm btn-danger">ลบรายการ</a></td>
				</tr>
				<tr>
					<td colspan=1>3</td>
					<td><span id='total_qty'>3.5 x 6.5</span></td>
					<td>ที่นอนขนาด 3.5 x 6.5</td>
					<td>2,000.00</td>
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
