<div class="col-md-12" >
	<form class="form-horizontal" role="form" id="cust_form">
			
			
			<div class="container">
				<div class="row form-group">
					<div class="col-sm-2 inline-col">
						<label>ชื่อ - นามสกุล</label>
					</div>
					<div class="col-sm-4">
							<input type="text" name="ship_titlename" id="ship_titlename" class="form-control input-sm" value =" {{ $custmast->name_title.$custmast->cust_name. '  ' . $custmast->cust_surname }}">
									
					</div>	
							
				</div>	

				<div class="row form-group">
					<div class="col-sm-2 inline-col">
						<label>ที่อยู่</label>
					</div>
					<div class="col-sm-4">
						<input type="text" name="ship_address1" id="ship_address1" class="form-control input-sm" value="{{$custmast->address1}}">
						
					</div>
					
					

				</div>

				<div class="row form-group">
					<div class="col-sm-2 inline-col">
						<label></label>
					</div>
					
					<div class="col-sm-4">
						<input type="text" name="ship_address2" id="ship_address2" class="form-control input-sm" value="{{$custmast->address2}}">
						
					</div>

					

				</div>



				<div class="row form-group">
					<div class="col-sm-2 inline-col">
						<label >จังหวัด</label>
					</div>
					<div class="col-sm-2">
					    	<div class="input-group ">
							<input type ="hidden" name="prov_code" id="prov_code" >
							<input type="text" name="prov_name" id="prov_name" class="form-control input-sm" value="{{$custmast->prov_name}}">
							
								
						</div>		
									
					</div>			
						
						<div class="col-sm-2">
							<div class="input-group ">

							<input type="text" name="post_code" id="post_code" class="form-control input-sm" value="{{$custmast->post_code}}">
							
							</div>
						</div>

					  
					
				</div>	
				
				<div class="row form-group">
					<div class="col-sm-2 inline-col">
						<label >โทรศัพท์</label>
					</div>

					<div class="col-sm-2">
						<input type="text" name="tel" id="tel" class="form-control input-sm" value="{{$custmast->tel}}">
						
					</div>

					<div class="col-sm-1 col-sm-offset-1">
						<label >Email</label>
					</div>

					<div class="col-sm-2">
						<input type="text" name="email" id="email" class="form-control input-sm" value="{{$custmast->email_address}}">
						
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2 inline-col">
						<label >โทรศัพท์มือถือ</label>
					</div>

					<div class="col-sm-2">
						<input type="text" name="mobile_no" id="mobile_no" class="form-control input-sm" value="{{$custmast->mobile_no}}">
						
					</div>

					<div class="col-sm-1 col-sm-offset-1">
						<label >Line ID</label>
					</div>

					<div class="col-sm-2">
						<input type="text" name="line_id" id="line_id" class="form-control input-sm" value="{{$custmast->line_id}}">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2 inline-col">
						<label >เลขที่บัตรประชาชน</label>
					</div>

					<div class="col-sm-2">
						<input type="text" name="id_card" id="id_card" class="form-control input-sm" value="{{$custmast->id_card}}"> 
						<p><span id='id_card'></span></p>
					</div>

					<div class="col-sm-1 col-sm-offset-1">
						<label >เพศ</label>
					</div>

					<div class="col-sm-2">
						<select class="form-control input-sm" id="sex" name="sex">
							<option></option>
						          	<option value="M" <?php if($custmast->sex=="M") { echo "selected"; }?> >ชาย</option>
						          	<option value="F" <?php if($custmast->sex=="F") { echo "selected"; }?>>หญิง</option>
						</select>
						<p><span id='sex'></span></p>
					</div>

					
				</div>

				

				

				

				<input type ="hidden" name="_token"  value="{{csrf_token()}}">

			</div>
			
			<br>
			
	</form>
</div>


<div class="modal fade titlemodal" data-backdrop="static">
		<div class="modal-dialog modal-sm">
			<div class="modal-content" id="titlemodal">
				
			</div>
		</div>
</div>

<!-- Modal Province -->

<div class="modal fade provmodal" data-backdrop="static">
	<div class="modal-dialog modal-sm">
		<div class="modal-content" id="provmodal">
				
		</div>
	</div>
</div>

<!-- Modal Post Code -->

<div class="modal fade postmodal" data-backdrop="static">
	<div class="modal-dialog modal-sm">
		<div class="modal-content" id="postmodal">
				
		</div>
	</div>
</div>

