<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h4 class="modal-title">New Sales</h4>
</div>
<div class="modal-body">

	<form enctype="multipart/form-data" id="po_form" name="po_form">
	<div class="container"> 
				<div class="row form-group">
					<div class="col-sm-1">
						<label>เลขที่</label>
					</div>
					<div class="col-sm-2">
						<input type="text" name="doc_no" id="doc_no" class="form-control input-sm" value="{{$doc_no}}" readonly>
					</div>
					<div class="col-sm-1 ">
						<label >วันที่</label>
					</div>

					<div class="col-sm-2">
						<input type="text"  name="doc_date" id="doc_date" class="form-control input-sm required" value="<?php echo date('d/m/Y'); ?>">
					</div>
					<script type="text/javascript">

								$(function(){
								$("#doc_date").datepicker({
								dateFormat: 'dd/mm/yy'
								});

							});
					</script>

					<div class="col-sm-1 ">
						<label >วันที่ส่ง</label>
					</div>

					<div class="col-sm-2">
						<input type="text"  name="req_date" id="req_date" class="form-control input-sm required" value="<?php echo date('d/m/Y'); ?>">
					</div>
					<script type="text/javascript">

								$(function(){
								$("#req_date").datepicker({
								dateFormat: 'dd/mm/yy'
								});

							});
					</script>
				</div>

				
				
				<div class="row form-group">
					<div class="col-sm-1">
						<label >ชื่อลูกค้า</label>
					</div>
					
					<div class="col-sm-3">
						<div class="input-group ">

							<input type="text" name="ship_titlename" id="ship_titlename" class="form-control input-sm required" required>
							<span id='ship_titlename'></span>
			

								<span class="input-group-btn">
								<a  href="#addtitle" rel="addtitle" class="btn btn-sm btn-primary">
								<sapn class="glyphicon glyphicon-triangle-bottom"></span></a>
								</sapn>
								<input type="text" name="ship_custname" id="ship_custname" class="form-control input-sm required" required>
								<p><span id='ship_custname'></span></p>
									
								
						</div>
					</div>	
					
					<div class="col-sm-2">
						<input type="text" name="ship_custsurname" id="ship_custsurname" class="form-control input-sm required" required>
						<p><span id='ship_custsurname'></span></p>
					</div>

					<div class="col-sm-1">
						<label>Promotion</label>
					</div>
					<div class="col-sm-2">
					<div class="input-group ">

						
						<input type="text" name="pmt_no" id="pmt_no" class="form-control input-sm required">
						<p><span id='pmt_no'></span></p>
						
						<span class="input-group-btn">
						<a  href="#addpmt" rel="addpromotion" class="btn btn-sm btn-primary"><sapn class="glyphicon glyphicon-triangle-bottom"></span></a>
						</sapn>
						

					</div>
					</div>

					
				</div>	

				<div class="row form-group">
					<div class="col-sm-1">
						<label>ที่อยู่</label>
					</div>
					<div class="col-sm-4">
						<input type="text" name="ship_address1" id="ship_address1" class="form-control input-sm required" required>
						<p><span id='ship_address1'></span></p>
					</div>
					<div class="col-sm-4">
						<input type="text" name="ship_address2" id="ship_address2" class="form-control input-sm">
						<p><span id='ship_assress2'></span></p>
					</div>

					

				</div>

				<div class="row form-group">
					<div class="col-sm-1">
						<label >จังหวัด</label>
					</div>
					<div class="col-sm-2">
					    	<div class="input-group ">
							<input type ="hidden" name="prov_code" id="prov_code" >
							<input type="text" name="prov_name" id="prov_name" class="form-control input-sm required">
							<p><span id='prov_name'></span></p>
								<span class="input-group-btn">
								<a  href="#addprov" rel="addprov" class="btn btn-sm btn-primary">
								<sapn class="glyphicon glyphicon-triangle-bottom"></span></a>
								</sapn>
						</div>		
									
					</div>			
						
						<div class="col-sm-2">
							<div class="input-group ">

							<input type="text" name="post_code" id="post_code" class="form-control input-sm required">
							<p><span id='post_code'></span></p>
								<span class="input-group-btn">
								<a  href="#addpost" rel="addpost" class="btn btn-sm btn-primary">
								<sapn class="glyphicon glyphicon-triangle-bottom"></span></a>
								</sapn>
							</div>
						</div>


						
					 

					  
					
				</div>	
				
				<div class="row form-group">
					<div class="col-sm-1">
						<label >โทรศัพท์</label>
					</div>

					<div class="col-sm-2">
						<input type="text" name="tel" id="tel" class="form-control input-sm">
						<p><span id='tel'></span></p>
					</div>

					<div class="col-sm-1 col-sm-offset-2">
						<label >Email</label>
					</div>

					<div class="col-sm-2">
						<input type="email" name="email" id="email" class="form-control input-sm">
						<p><span id='email'></span></p>
					</div>
				</div>

				<div class="row form-group">
					<!--<div class="col-sm-1">
						<label>PO</label>
					</div>
					<div class="col-sm-3">
						<input type="file" name="po"  id="po" class="form-control input-sm">
					</div>-->
					<!--<div class="col-sm-1 col-sm-offset-1">-->
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
						<input type="text" name="gp1"  id="gp1" class="form-control input-sm">
						<p><span id='gp1'></span></p>
					</div>
					<div class="col-sm-1">
						<input type="text" name="gp2"  id="gp2" class="form-control input-sm">
						<p><span id='gp2'></span></p>
					</div>
					<div class="col-sm-1">
						<input type="text" name="gp3"  id="gp3" class="form-control input-sm">
						<p><span id='gp3'></span></p>
					</div>

					</div>

					

				</div>



	<a href="#addproduct" rel="addproduct" class="btn btn-primary">Add Product </a> 
	<a href="#addpremium" rel="addpremium" class="btn btn-primary">Add Premium </a> 

	<input type="hidden" name="_token" value="{{csrf_token()}}">

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
					<th>Action</th>
					</tr>
			</thead>		
			
			<tbody>
				<!--<tr>
					<td colspan=3></td>
					<td><span id='total_qty'></span></td>
					<td></td>
					<td><span id='total_price'></span></td>
					<td></td>
					<td></td>
				</tr>-->
				

			</tbody>
			

			 
		</table>

		<table class='table '>
			<tr>
					<td ><input type="hidden" name="pmprice" id="pmprice" value="0"></td>
					<td><input type="hidden" name="pmsetprice" id="pmsetprice"></td>
					<td>ส่วนลด <a  href="#adddisc" rel="adddisc" class="btn btn-sm btn-primary">
								เลือก</a></td>
					<td ><input type="text" name="disc_amt" id="disc_amt" class="form-control" style="width: 80px;"></td>
					<td></td>
					<td></td>
			</tr>
			<tr>
					<td >จำนวนสินค้า</td>
					<td><span id='total_qty'></span></td>
					<td>ราคารวมทั้งสิ้น</td>
					<td><span id='total_price'></span></td>
					<td></td>
					<td></td>
			</tr>
		</table>
		
	<div class="row form-group">
		<div class="col-sm-2">
			<label>ชำระเงิน</label>
		</div>
		<div class="col-sm-4">
			<div class="input-group ">
				
				<input type ="hidden" name="pay_code" id="pay_code" >
				<input type="text" name="pay_name" id="pay_name" class="form-control input-sm required">
				<p><span id='pay_name'></span></p>
						
					<span class="input-group-btn">
					<a  href="#addpay" rel="addpay" class="btn btn-sm btn-primary"><sapn class="glyphicon glyphicon-triangle-bottom"></span></a>
					</sapn>			
			</div>
		</div>

	</div>

	<div class="row form-group">
		<div class="col-sm-2">
			<label>หมายเหตุ</label>
		</div>
		<div class="col-sm-8">
			
				<input type="text" name="remark" id="remark" class="form-control input-sm ">
				<p><span id='remark'></span></p>
				
		</div>

	</div>
	
</div>
<div class="modal-footer">
	<button type="button" id="SubmitOrder" class="btn btn-primary">Submit Order</button>
	<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
</div>
