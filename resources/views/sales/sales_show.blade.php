
<div class="modal-body">
	<div class="container"> 
				<div class="row form-group">
					<div class="col-sm-1">
						<label>เลขที่</label>
					</div>
					<div class="col-sm-2">
						<input type="text" name="doc_no" id="doc_no" class="form-control input-sm" value="{{$data_mast->doc_no}}" >
					</div>
					<div class="col-sm-1 ">
						<label >วันที่</label>
					</div>

					<div class="col-sm-2">
						<input type="text"  name="doc_date" id="doc_date" class="form-control input-sm" value="{{Carbon::parse($data_mast->doc_date)->format('d/m/Y') }}">
					</div>
					

					<div class="col-sm-1 ">
						<label >วันที่ส่ง</label>
					</div>

					<div class="col-sm-2">
						<input type="text"  name="req_date" id="req_date" class="form-control input-sm" value="{{Carbon::parse($data_mast->req_date)->format('d/m/Y') }}">
					</div>
					
				</div>

				
				
				<div class="row form-group">
					<div class="col-sm-1">
						<label>ชื่อลูกค้า</label>
					</div>
					
					<div class="col-sm-5">
						<input type="text" name="ship_titlename" id="ship_titlename" class="form-control input-sm" value="{{$data_mast->ship_titlename . $data_mast->ship_custname . ' ' . $data_mast->ship_custsurname}}">
								
					</div>	
					
					

					<div class="col-sm-1">
						<label>Promotion</label>
					</div>
					<div class="col-sm-2">
					<div class="input-group ">

						
						<input type="text" name="pmt_no" id="pmt_no" class="form-control input-sm" value="{{$data_mast->pmt_no}}">
						
						
						

					</div>
					</div>

					
				</div>	

				<div class="row form-group">
					<div class="col-sm-1">
						<label>ที่อยู่</label>
					</div>
					<div class="col-sm-4">
						<input type="text" name="ship_address1" id="ship_address1" class="form-control input-sm" value="{{$data_mast->ship_address1}}">
					</div>
					<div class="col-sm-4">
						<input type="text" name="ship_address2" id="ship_address2" class="form-control input-sm" value="{{$data_mast->ship_address2}}">
					</div>

					

				</div>

				<div class="row form-group">
					<div class="col-sm-1">
						<label >จังหวัด</label>
					</div>
					<div class="col-sm-2">
					    	<div class="input-group ">
							<input type ="hidden" name="prov_code" id="prov_code" >
							<input type="text" name="prov_name" id="prov_name" class="form-control input-sm" value="{{$data_mast->prov_name}}">
								
						</div>		
									
					</div>			
						
						<div class="col-sm-2">
							<div class="input-group ">

							<input type="text" name="post_code" id="post_code" class="form-control input-sm" value="{{$data_mast->post_code}}">
								
							</div>
						</div>


						
					 

					  
					
				</div>	
				
				<div class="row form-group">
					<div class="col-sm-1">
						<label >โทรศัพท์</label>
					</div>

					<div class="col-sm-2">
						<input type="text" name="tel" id="tel" class="form-control input-sm" value="{{$data_mast->ship_tel}}">
					</div>

					<div class="col-sm-1 col-sm-offset-2">
						<label >Email</label>
					</div>

					<div class="col-sm-2">
						<input type="text" name="email" id="email" class="form-control input-sm" value="{{$data_mast->email_address}}">
					</div>
				</div>

				<div class="row form-group">
					<!--<div class="col-sm-1">
						<label>PO</label>
					</div>
					<div class="col-sm-3">
						<input type="file" name="po"  id="po" class="form-control input-sm" value="{{$data_mast->po_file}}">
					</div>
					<div class="col-sm-1 col-sm-offset-1">-->
						<!--<a class="btn btn-sm btn-primary" data-toggle="modal" href='#modal-map'>Map</a>
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
										
									</div>
								</div>
							</div>
						</div>-->
					<div class="col-sm-1">
						<label>GP</label>
					</div>
					<div class="col-sm-1">
						<input type="text" name="gp1"  id="gp1" class="form-control input-sm" value="{{$data_mast->gp1}}">
					</div>
					<div class="col-sm-1">
						<input type="text" name="gp2"  id="gp2" class="form-control input-sm" value="{{$data_mast->gp2}}">
					</div>
					<div class="col-sm-1">
						<input type="text" name="gp3"  id="gp3" class="form-control input-sm" value="{{$data_mast->gp3}}">
					</div>

					</div>

				</div>



	

	</form>	

	
	<div id="product_table">
		<table class='table table-bordered' id='po_table'>
			<thead>	
				<tr>
					<th>Item</th>
					<th>Product Code</th>
					<th>Product Name</th>
					<th>Qty</th>
					<th>Price</th>
					<th>Amount</th>
					<th>Special Size</th>
					
				</tr>
			</thead>		
			
			<tbody>
				@foreach($data_det as $dbarr)
				<tr>
					<td>{{$dbarr->item}}</td>
					<td>{{$dbarr->prod_code}}</td>
					<td>{{$dbarr->prod_name}}</td>
					<td>{{$dbarr->qty}}</td>
					<td>{{$dbarr->sale_price}}</td>
					<td>{{$dbarr->amt}}</td>
					<td>{{$dbarr->sp_size_desc}}</td>
				</tr>				
				@endforeach
			</tbody>
			

			 
		</table>

		<table class='table '>
			<tr>
					<td ></td>
					<td></td>
					<td>ส่วนลด</td>
					<td >{{$data_mast->tot_discamt}}</td>
					<td></td>
					<td></td>
			</tr>
			<tr>
					<td >จำนวนสินค้า</td>
					<td>{{$data_mast->tot_qty}}</td>
					<td>ราคารวมทั้งสิ้น</td>
					<td>{{$data_mast->tot_netamt}}</td>
					<td></td>
					<td></td>
			</tr>
		</table>
		
	<div class="row form-group">
		<div class="col-sm-2">
			<label>ชำระเงิน</label>
		</div>
		<div class="col-sm-4">
			
				
				<input type ="hidden" name="pay_code" id="pay_code" >
				<input type="text" name="pay_name" id="pay_name" class="form-control input-sm" value="{{$data_mast->pay_name}}">
						
							
			
		</div>

	</div>
	<div class="row form-group">
		<div class="col-sm-2">
			<label>หมายเหตุ</label>
		</div>
		<div class="col-sm-8">
			
				<input type="text" name="remark" id="remark" class="form-control input-sm" value="{{$data_mast->remark1}}">
				
				
		</div>

	</div>
	
</div>

