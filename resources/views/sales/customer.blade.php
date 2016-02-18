@extends('include.index')
@section('title_page') Customer - @stop

@section('content')
<div class="col-md-12">
		<h1><i class="fa fa-list"></i> ข้อมูลลูกค้า</h1>	
		

</div>

<div class="col-md-12 top40">
	<form class="form-horizontal" role="form" id="cust_form">
			
			
			<div class="container">
				<div class="row form-group">
					<div class="col-sm-2 inline-col">
						<label>ชื่อ - นามสกุล</label>
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


					
					  
					
				</div>	

				
				<div class="row form-group">
					<div class="col-sm-2 inline-col">
						<label>ที่อยู่</label>
					</div>
					<div class="col-sm-4">
						<input type="text" name="ship_address1" id="ship_address1" class="form-control input-sm required">
						<p><span id='ship_address1'></span></p>
					</div>
					<div class="col-sm-4">
						<input type="text" name="ship_address2" id="ship_address2" class="form-control input-sm">
						<p><span id='ship_address2'></span></p>
					</div>

					

				</div>

				<div class="row form-group">
					<div class="col-sm-2 inline-col">
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
					<div class="col-sm-2 inline-col">
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
						<input type="text" name="email" id="email" class="form-control input-sm">
						<p><span id='email'></span></p>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2 inline-col">
						<label >โทรศัพท์มือถือ</label>
					</div>

					<div class="col-sm-2">
						<input type="text" name="mobile_no" id="mobile_no" class="form-control input-sm">
						<p><span id='mobile_no'></span></p>
					</div>

					<div class="col-sm-1 col-sm-offset-2">
						<label >Line ID</label>
					</div>

					<div class="col-sm-2">
						<input type="text" name="line_id" id="line_id" class="form-control input-sm">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2 inline-col">
						<label >เลขที่บัตรประชาชน</label>
					</div>

					<div class="col-sm-2">
						<input type="text" name="id_card" id="id_card" class="form-control input-sm required">
						<p><span id='id_card'></span></p>
					</div>

					<div class="col-sm-1 col-sm-offset-2">
						<label >เพศ</label>
					</div>

					<div class="col-sm-2">
						<select class="form-control input-sm required" id="sex" name="sex">
							<option></option>
						          	<option value="M">ชาย</option>
						          	<option value="F">หญิง</option>
						</select>
						<p><span id='sex'></span></p>
					</div>

					
				</div>

				

				

				

				<input type ="hidden" name="_token"  value="{{csrf_token()}}">

			</div>
			
			<br>
			<div class="form-group">
				<div class="col-sm-10 col-sm-offset-2">
					<button type="button" class="btn btn-success" id="SubmitCustomer">Save</button>
					<a href="{{URL::to('home')}}" class="btn  btn-danger">Cancel</a>
				</div>
			</div>
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

@stop