@extends('include.index')
@section('title_page') Product - @stop

@section('content')

	<form  method="POST" action="productprint">
	<div class="col-sm-12">
		<h1><i class="fa fa-list"></i> Product </h1>
		<div class="col-md-12 top40">
			<div class="container">

				<div class="row form-group">

					<div class="col-sm-2">
						<label>Brand</label>
					</div>
					<div class="col-sm-3">
						<div class="input-group ">
							<input type="text" name="brand1" id="brand1" class="form-control input-sm">
								
								<span class="input-group-btn">
								<a  href="#addbrand1" rel="addbrand1" class="btn btn-sm btn-primary"><sapn class="glyphicon glyphicon-triangle-bottom"></span></a>
								</sapn>			
						</div>
					</div>

					<div class="col-sm-1">
						<label>To</label>
					</div>

					<div class="col-sm-3">
						<div class="input-group ">
							<input type="text" name="brand2" id="brand2" class="form-control input-sm">
									
								<span class="input-group-btn">
								<a  href="#addbrand2" rel="addbrand2" class="btn btn-sm btn-primary"><sapn class="glyphicon glyphicon-triangle-bottom"></span></a>
								</sapn>			
						</div>
					</div>
					
				</div>

				<div class="row form-group">

					<div class="col-sm-2">
						<label>Design</label>
					</div>
					<div class="col-sm-3">
						<div class="input-group ">
							<input type="text" name="design1" id="design1" class="form-control input-sm">
									
								<span class="input-group-btn">
								<a  href="#adddesign1" rel="adddesign1" class="btn btn-sm btn-primary"><sapn class="glyphicon glyphicon-triangle-bottom"></span></a>
								</sapn>			
						</div>
					</div>

					<div class="col-sm-1">
						<label>To</label>
					</div>

					<div class="col-sm-3">
						<div class="input-group ">
							<input type="text" name="design2" id="design2" class="form-control input-sm">

								<span class="input-group-btn">
								<a  href="#adddesign2" rel="adddesign2" class="btn btn-sm btn-primary"><sapn class="glyphicon glyphicon-triangle-bottom"></span></a>
								</sapn>			
						</div>
					</div>
					
				</div>

				<div class="row form-group">

					<div class="col-sm-2">
						<label>Color</label>
					</div>
					<div class="col-sm-3">
						<div class="input-group ">
							<input type="text" name="color1" id="color1" class="form-control input-sm">
									
								<span class="input-group-btn">
								<a  href="#addcolor1" rel="addcolor1" class="btn btn-sm btn-primary"><sapn class="glyphicon glyphicon-triangle-bottom"></span></a>
								</sapn>			
						</div>
					</div>

					<div class="col-sm-1">
						<label>To</label>
					</div>

					<div class="col-sm-3">
						<div class="input-group ">
							<input type="text" name="color2" id="color2" class="form-control input-sm">
									
								<span class="input-group-btn">
								<a  href="#addcolor2" rel="addcolor2" class="btn btn-sm btn-primary"><sapn class="glyphicon glyphicon-triangle-bottom"></span></a>
								</sapn>			
						</div>
					</div>
					
				</div>

				<div class="row form-group">

					<div class="col-sm-2">
						<label>Size</label>
					</div>
					<div class="col-sm-3">
						<div class="input-group ">
							<input type="text" name="size1" id="size1" class="form-control input-sm">
									
								<span class="input-group-btn">
								<a  href="#addsize1" rel="addsize1" class="btn btn-sm btn-primary"><sapn class="glyphicon glyphicon-triangle-bottom"></span></a>
								</sapn>			
						</div>
					</div>

					<div class="col-sm-1">
						<label>To</label>
					</div>

					<div class="col-sm-3">
						<div class="input-group ">
							<input type="text" name="size2" id="size2" class="form-control input-sm">
									
								<span class="input-group-btn">
								<a  href="#addsize2" rel="addsize2" class="btn btn-sm btn-primary"><sapn class="glyphicon glyphicon-triangle-bottom"></span></a>
								</sapn>			
						</div>
					</div>
					
				</div>

				<div class="row form-group">

					<div class="col-sm-2">
						<label>Product Code</label>
					</div>
					<div class="col-sm-3">
						<div class="input-group ">
							<input type="text" name="prod_code1" id="prod_code1" class="form-control input-sm">
									
								<span class="input-group-btn">
								<a  href="#addprod1" rel="addprod1" class="btn btn-sm btn-primary"><sapn class="glyphicon glyphicon-triangle-bottom"></span></a>
								</sapn>			
						</div>
					</div>

					<div class="col-sm-1 ">
						<label>To</label>
					</div>

					<div class="col-sm-3">
						<div class="input-group ">
							<input type="text" name="prod_code2" id="prod_code2" class="form-control input-sm">
							<p><span id='pay_name'></span></p>
									
								<span class="input-group-btn">
								<a  href="#addprod2" rel="addprod2" class="btn btn-sm btn-primary"><sapn class="glyphicon glyphicon-triangle-bottom"></span></a>
								</sapn>			
						</div>
					</div>
					
				</div>
				
				
				

				

				
				
				

			</div>

			<input type ="hidden" name="_token"  value="{{csrf_token()}}">

			<div class="form-group col-md-12">
				
				<!--<a href="{{URL::to('entityreport/')}}" class="btn btn-sm btn-success" target="_blank">Print</a>-->
				<button type="submit" class="btn btn-primary"><i class="fa fa-print"></i> พิมพ์</button>

			</div>
	
</div>
</div>
</form>


<div class="modal fade brandmodal" data-backdrop="static">
	<div class="modal-dialog modal-md">
		<div class="modal-content" id="brandmodal">
				
		</div>
	</div>
</div>

<div class="modal fade designmodal" data-backdrop="static">
	<div class="modal-dialog modal-md">
		<div class="modal-content" id="designmodal">
				
		</div>
	</div>
</div>

<div class="modal fade colormodal" data-backdrop="static">
	<div class="modal-dialog modal-md">
		<div class="modal-content" id="colormodal">
				
		</div>
	</div>
</div>

<div class="modal fade sizemodal" data-backdrop="static">
	<div class="modal-dialog modal-md">
		<div class="modal-content" id="sizemodal">
				
		</div>
	</div>
</div>

<div class="modal fade codemodal" data-backdrop="static">
	<div class="modal-dialog modal-lg">
		<div class="modal-content" id="codemodal">
				
		</div>
	</div>
</div>

@stop