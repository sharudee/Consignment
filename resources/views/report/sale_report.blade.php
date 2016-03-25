@extends('include.index')
@section('title_page') Sale Report - @stop

@section('content')

	<form  method="POST" action="saleprint">
	<div class="col-sm-12">
		<h1><i class="fa fa-list"></i> Sale Report</h1>
		<div class="col-md-12 top40">
			<div class="container">

				<div class="row form-group">

					<div class="col-sm-2">
						<label>กลุ่มข้อมูล</label>
					</div>
					<div class="col-sm-3">
						<div class="input-group ">
							<input type="text" name="entity1" id="entity1" class="form-control input-sm">
								
								<span class="input-group-btn">
								<a  href="#addentity1" rel="addentity1" class="btn btn-sm btn-primary"><sapn class="glyphicon glyphicon-triangle-bottom"></span></a>
								</sapn>			
						</div>
					</div>

					<div class="col-sm-1">
						<label>ถึง</label>
					</div>

					<div class="col-sm-3">
						<div class="input-group ">
							<input type="text" name="entity2" id="entity2" class="form-control input-sm">
									
								<span class="input-group-btn">
								<a  href="#addentity2" rel="addentity2" class="btn btn-sm btn-primary"><sapn class="glyphicon glyphicon-triangle-bottom"></span></a>
								</sapn>			
						</div>
					</div>
					
				</div>

				<div class="row form-group">

					<div class="col-sm-2">
						<label>ห้าง</label>
					</div>
					<div class="col-sm-3">
						<div class="input-group ">
							<input type="text" name="cust1" id="cust1" class="form-control input-sm">
									
								<span class="input-group-btn">
								<a  href="#addcust1" rel="addcust1" class="btn btn-sm btn-primary"><sapn class="glyphicon glyphicon-triangle-bottom"></span></a>
								</sapn>			
						</div>
					</div>

					<div class="col-sm-1">
						<label>ถึง</label>
					</div>

					<div class="col-sm-3">
						<div class="input-group ">
							<input type="text" name="cust2" id="cust2" class="form-control input-sm">

								<span class="input-group-btn">
								<a  href="#addcust2" rel="addcust2" class="btn btn-sm btn-primary"><sapn class="glyphicon glyphicon-triangle-bottom"></span></a>
								</sapn>			
						</div>
					</div>
					
				</div>

				<div class="row form-group">

					<div class="col-sm-2">
						<label>ประเภทเอกสาร</label>
					</div>
					<div class="col-sm-3">
						<div class="input-group ">
							<input type="text" name="doc_code1" id="doc_code1" class="form-control input-sm">
									
								<span class="input-group-btn">
								<a  href="#adddoc1" rel="adddoc1" class="btn btn-sm btn-primary"><sapn class="glyphicon glyphicon-triangle-bottom"></span></a>
								</sapn>			
						</div>
					</div>

					<div class="col-sm-1">
						<label>ถึง</label>
					</div>

					<div class="col-sm-3">
						<div class="input-group ">
							<input type="text" name="doc_code2" id="doc_code2" class="form-control input-sm">
									
								<span class="input-group-btn">
								<a  href="#adddoc2" rel="adddoc2" class="btn btn-sm btn-primary"><sapn class="glyphicon glyphicon-triangle-bottom"></span></a>
								</sapn>			
						</div>
					</div>
					
				</div>

				<div class="row form-group">

					<div class="col-sm-2">
						<label>วันที่</label>
					</div>
					<div class="col-sm-3">
						<div class="input-group ">
							<input type="text" name="doc_date1" id="doc_date1" class="form-control input-sm" >		
						</div>
					</div>
						

					<div class="col-sm-1">
						<label>ถึง</label>
					</div>

					<div class="col-sm-3">
						<div class="input-group ">
							<input type="text" name="doc_date2" id="doc_date2" class="form-control input-sm" >
									
											
						</div>
						
					</div>
					
				</div>

				<div class="row form-group">

					<div class="col-sm-2">
						<label>เลขที่เอกสาร</label>
					</div>
					<div class="col-sm-3">
						<div class="input-group ">
							<input type="text" name="doc_no1" id="doc_no1" class="form-control input-sm">
									
								<span class="input-group-btn">
								<a  href="#adddocno1" rel="adddocno1" class="btn btn-sm btn-primary"><sapn class="glyphicon glyphicon-triangle-bottom"></span></a>
								</sapn>			
						</div>
					</div>

					<div class="col-sm-1 ">
						<label>ถึง</label>
					</div>

					<div class="col-sm-3">
						<div class="input-group ">
							<input type="text" name="doc_no2" id="doc_no2" class="form-control input-sm">
							<p><span id='pay_name'></span></p>
									
								<span class="input-group-btn">
								<a  href="#adddocno2" rel="adddocno2" class="btn btn-sm btn-primary"><sapn class="glyphicon glyphicon-triangle-bottom"></span></a>
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


<div class="modal fade entitymodal" data-backdrop="static">
	<div class="modal-dialog modal-md">
		<div class="modal-content" id="entitymodal">
				
		</div>
	</div>
</div>

<div class="modal fade custmodal" data-backdrop="static">
	<div class="modal-dialog modal-md">
		<div class="modal-content" id="custmodal">
				
		</div>
	</div>
</div>

<div class="modal fade docmodal" data-backdrop="static">
	<div class="modal-dialog modal-md">
		<div class="modal-content" id="docmodal">
				
		</div>
	</div>
</div>

<div class="modal fade docnomodal" data-backdrop="static">
	<div class="modal-dialog modal-md">
		<div class="modal-content" id="docnomodal">
				
		</div>
	</div>
</div>



@stop