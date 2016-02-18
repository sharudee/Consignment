@extends('layouts.default')
@section('title_page') ส่งคืนสินค้า@stop

@section('active_home') 
class='active'
@stop

@section('content')

<div class="col-sm-12">
	<form action="{{URL::to('sales/promotion')}}"  method="GET" class="form-horizontal" role="form">
			<div class="form-group">
				<legend>บันทึกส่งคืน</legend>
			</div>
			
			<div class="container">
				<div class="row form-group">
					<div class="col-sm-1">
						<label>เลขที่</label>
					</div>
					<div class="col-sm-2">
						<input type="text" name="" id="input" class="form-control input-sm">
					</div>
					<div class="col-sm-1 col-sm-offset-1">
						<label >วันที่</label>
					</div>

					<div class="col-sm-2">
						<input type="date" name="" id="input" class="form-control input-sm">
					</div>

					<div class="col-sm-1 inline-col">
						<label>เลขที่อ้างอิง</label>
					</div>
					<div class="col-sm-2">
						<input type="text" name="" id="input" class="form-control input-sm">
					</div>
				</div>

				
				
				<div class="row form-group">
					<div class="col-sm-1">
						<label>คลังสินค้า</label>
					</div>
					<div class="input-group ">

						<div class="col-sm-2 inline-col">
							<input type="text" name="" id="input" class="form-control input-sm">
						</div>
						<div class="col-sm-5 inline-col">
							<input type="text" name="" id="input" class="form-control input-sm">
						</div>


					  </div>

					
					  
					
				</div>	

				<div class="row form-group">
					<div class="col-sm-1">
						<label>หมายเหตุ</label>
					</div>
					<div class="col-sm-4">
						<input type="text" name="" id="input" class="form-control input-sm">
					</div>
					

					

				</div>

				


				<input type ="hidden" name="_token"  value="{{csrf_token()}}">

			</div>

			<div class="container">
			<div class="col-sm-10">
				<p><a href="#" class="btn btn-sm btn-info">Choose Product </a>
				<div class="panel panel-default">
					<!-- Default panel contents -->
					<!--<div class="panel-heading">Product</div>
						<div class="panel-body">
							<p><a href="#" class="btn btn-sm btn-info">Choose Product Set</a></p>
						</div>-->
				
						<!-- Table -->
						<table class="table">
							<thead>
								<tr>
									<th>สินค้า</th>
									<th>หน่วย</th>
									<th>ราคาต่อหน่วย</th>
									<th>จำนวน</th>
									<th>จำนวนเงิน</th>
								</tr>

							</thead>
							<tbody>
								<tr>
									<td>XXXXXXXXXXXXXXXXXX</td>
									<td>XXX</td>
									<td>99000</td>
									<td>99</td>
									<td>99000</td>
								</tr>
								<tr>
									<td>XXXXXXXXXXXXXXXXXX</td>
									<td>XXX</td>
									<td>99000</td>
									<td>99</td>
									<td>99000</td>
								</tr>

								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td>รวม</td>
									<td>99000</td>
								</tr>
								
							</tbody>
						</table>
				</div>
			</div>


						
			</div>			

			
			<br>
			<div class="form-group">
				<div class="col-sm-10 col-sm-offset-2">
					<button type="submit" class="btn btn-primary">Save</button>
					<button type="submit" class="btn btn-danger">Cancel</button>
				</div>
			</div>
	</form>
</div>

@stop