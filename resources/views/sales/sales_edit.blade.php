
<div class="modal-body">
	<div class="container"> 
				<div class="row form-group">
					<div class="col-sm-1">
						<label>เลขที่</label>
					</div>
					<div class="col-sm-2">
						<input type="hidden" name="id" id="id" value="{{$data_mast->id}}">
						<input type="text" name="doc_no" id="doc_no" class="form-control input-sm" value="{{$data_mast->doc_no}}" readonly>
					</div>
					<div class="col-sm-1 ">
						<label >วันที่</label>
					</div>

					<div class="col-sm-2">
						<input type="text"  name="doc_date" id="doc_date" class="form-control input-sm" value="{{Carbon::parse($data_mast->doc_date)->format('d/m/Y') }}">
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
						<input type="text"  name="req_date" id="req_date" class="form-control input-sm" value="{{Carbon::parse($data_mast->req_date)->format('d/m/Y') }}">
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
						<label>ชื่อลูกค้า</label>
					</div>
					
					<div class="col-sm-3">
						<div class="input-group ">

							<input type="text" name="ship_titlename" id="ship_titlename" class="form-control input-sm"  value="{{$data_mast->ship_titlename}}">
								<span class="input-group-btn">
								<a  href="#addtitle" rel="addtitle" class="btn btn-sm btn-primary">
								<sapn class="glyphicon glyphicon-triangle-bottom"></span></a>
								</sapn>
								<input type="text" name="ship_custname" id="ship_custname" class="form-control input-sm"  value="{{$data_mast->ship_custname}}">
									
								
						</div>
					</div>	
					
					<div class="col-sm-2">
						<input type="text" name="ship_custsurname" id="ship_custsurname" class="form-control input-sm"  value="{{$data_mast->ship_custsurname}}">
					</div>

					<div class="col-sm-1">
						<label>Promotion</label>
					</div>
					<div class="col-sm-2">
					<div class="input-group ">

						
						<input type="text" name="pmt_no" id="pmt_no" class="form-control input-sm"  value="{{$data_mast->pmt_no}}">
						
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
						<input type="text" name="ship_address1" id="ship_address1" class="form-control input-sm"  value="{{$data_mast->ship_address1}}">
					</div>
					<div class="col-sm-4">
						<input type="text" name="ship_address2" id="ship_address2" class="form-control input-sm"  value="{{$data_mast->ship_address2}}">
					</div>

					

				</div>

				<div class="row form-group">
					<div class="col-sm-1">
						<label >จังหวัด</label>
					</div>
					<div class="col-sm-2">
					    	<div class="input-group ">
							<input type ="hidden" name="prov_code" id="prov_code"  value="{{$data_mast->prov_code}}">
							<input type="text" name="prov_name" id="prov_name" class="form-control input-sm"  value="{{$data_mast->prov_name}}">
								<span class="input-group-btn">
								<a  href="#addprov" rel="addprov" class="btn btn-sm btn-primary">
								<sapn class="glyphicon glyphicon-triangle-bottom"></span></a>
								</sapn>
						</div>		
									
					</div>			
						
						<div class="col-sm-2">
							<div class="input-group ">

							<input type="text" name="post_code" id="post_code" class="form-control input-sm"  value="{{$data_mast->post_code}}">
								<span class="input-group-btn">
								<a  href="#addpost" rel="addpost" class="btn btn-sm btn-primary">
								<sapn class="glyphicon glyphicon-triangle-bottom"></span></a>
								</sapn>
							</div>
						</div>

					<div class="col-sm-1 ">
						<label >Email</label>
					</div>

					<div class="col-sm-2">
						<input type="text" name="email" id="email" class="form-control input-sm"  value="{{$data_mast->email_address}}">
						<p><span id='email'></span></p>
					</div>	
						
					 

					  
					
				</div>	
				
				<div class="row form-group">
					<div class="col-sm-1">
						<label >โทรศัพท์</label>
					</div>

					<div class="col-sm-2">
						<input type="text" name="tel" id="tel" class="form-control input-sm"  value="{{$data_mast->ship_tel}}">
					</div>

					<div class="col-sm-1 col-sm-offset-2">
						<label >Ref No.</label>
					</div>

					<div class="col-sm-2">
						<input type="text" name="ref_no" id="ref_no" class="form-control input-sm"  value="{{$data_mast->ref_no}}">
					</div>
				</div>

				<div class="row form-group">
					<!--<div class="col-sm-1">
						<label>PO</label>
					</div>
					<div class="col-sm-3">
						<input type="file" name="po"  id="po" class="form-control input-sm">
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
					
						<input type="hidden" name="gp1"  id="gp1" class="form-control input-sm"  value="{{$data_mast->gp1}}">
					
					<div class="col-sm-1">
						<input type="text" name="gp2"  id="gp2" class="form-control input-sm"  value="{{$data_mast->gp2}}">
					</div>
					<div class="col-sm-1">
						<input type="text" name="gp3"  id="gp3" class="form-control input-sm"  value="{{$data_mast->gp3}}"><input type="hidden" name="po_file" id="po_file" value="{{$data_mast->po_file}}">
					</div>

					<div class="col-sm-1 col-sm-offset-2">
						<label >Ship To</label>
					</div>

					<div class="col-sm-2">
						<select class="form-control required" id="ship_to" name="ship_to">
						          <option value="HM" <?php if($data_mast->ship_to=="HM") { echo "selected"; } ?>>HM - บ้าน</option>
						          <option value="DL" <?php if($data_mast->ship_to=="DL") { echo "selected"; } ?>>DL - ห้าง</option>
						</select>
						
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
					<th>ลำดับ</th>
					<th>รหัสสินค้า</th>
					<th>รายการสินค้า</th>
					<th>จำนวน</th>
					<th>ราคา</th>
					<th>จำนวนเงิน</th>
					<th>ขนาดพิเศษ</th>
					<th></th>
					</tr>
			</thead>		
			
			<tbody>
				@foreach($data_det as $dbarr)
				<tr class="rprod">
					<td>{{$dbarr->item}}</td>
					<td>{{$dbarr->prod_code}}<input type="hidden" name="procode[]" value="{{$dbarr->prod_code}}"> <input type="hidden" name="prodset[]" value="{{$dbarr->pmt_product_set_id}}"></td>
					<td>{{$dbarr->prod_name}}<input type="hidden" name="proname[]" value="{{$dbarr->prod_name}}"></td>
					<td class="c_qty"><input type="text" name="qty[]" id="qty" class="form-control" style="width: 50px;" value="{{$dbarr->qty}}"></td>
					<td class="c_price">{{$dbarr->sale_price}}<input type="hidden" name="price[]" value="{{$dbarr->sale_price}}"></td>
					<td class="c_amt">{{$dbarr->amt}}</td>
					<td><div class="form-inline"><div class="checkbox"><label><input type="checkbox" name="sp_size[]"  value="{{$dbarr->sp_size}}" <?php if($dbarr->sp_size =='Y') { echo "checked"; } ?>></label> <input type="text" name="sp_size_desc[]" id="sp_size_desc" class="form-control"  style="width: 50px;" value="{{$dbarr->sp_size_desc}}"></div></div></td>
					<td><a href="#delete" rel="pro_delete" class="btn btn-sm btn-danger">Delete</a></td>
				</tr>				
				@endforeach
				

			</tbody>
			

			 
		</table>

		<table class='table '>
			<tr>
					<td ><input type="hidden" name="pmprice" id="pmprice" value="{{$data_mast->pm_total_price}}"></td>
					<td><input type="hidden" name="pmsetprice" id="pmsetprice" value="{{$data_mast->pm_price}}"></td>
					<td>ส่วนลด<a  href="#adddisc" rel="adddisc" class="btn btn-sm btn-primary">เลือก</a></td>
					<td ><input type="text" name="disc_amt" id="disc_amt" class="form-control" style="width: 80px;" value="{{$data_mast->tot_discamt}}"></td>
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
				
				<input type ="hidden" name="pay_code" id="pay_code"  value="{{$data_mast->pay_code}}">
				<input type="text" name="pay_name" id="pay_name" class="form-control input-sm"  value="{{$data_mast->pay_name}}">
						
					<span class="input-group-btn">
					<a  href="#addpay" rel="addpay" class="btn btn-sm btn-primary"><sapn class="glyphicon glyphicon-triangle-bottom"></span></a>
					</sapn>			
			</div>
		</div>

		<div class="col-sm-2 col-sm-offset-3">
			<div class="checkbox">
				<label>
					<input type="checkbox" ืname="can" id="can" value="Y">
					ยกเลิกเอกสาร
				</label>
			</div>
		</div>


	</div>
	<div class="row form-group">
		<div class="col-sm-2">
			<label>หมายเหตุ</label>
		</div>
		<div class="col-sm-8">
			
				<input type="text" name="remark" id="remark" class="form-control input-sm" value="{{$data_mast->remark1}}">
				<p><span id='remark'></span></p>
				
		</div>

	</div>
	
</div>
<div class="modal-footer">
	<button type="button" id="EditOrder" class="btn btn-primary">Submit Order</button>
	<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
</div>
