@extends('layouts.default')
@section('title_page') Promotion @stop

@section('active_home') 
class='active'
@stop

@section('content')

<div class="col-sm-12">
	<form action="{{URL::to('sales/promotion')}}"  method="GET" class="form-horizontal" role="form">
			<div class="form-group">
				<legend>บันทึกการขาย</legend>
			</div>
			
			<div class="container">
				<div class="row form-group">
					<div class="col-sm-1">
						<label>เลขที่</label>
					</div>
					<div class="col-sm-2">
						<input type="text" name="" id="input" class="form-control input-sm">
					</div>
					<div class="col-sm-1 col-sm-offset-2">
						<label >วันที่</label>
					</div>

					<div class="col-sm-2">
						<input type="date" name="" id="input" class="form-control input-sm">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-1">
						<label>ชื่อลูกค้า</label>
					</div>
					<div class="input-group ">
					    	<div class="col-sm-3 inline-col">
							
						        <select class="form-control input-sm" id="select">
						          <option>คุณ</option>
						          <option>นาย</option>
						          <option>นาง</option>
						          <option>นางสาว</option>
						        </select>
						</div>
						<div class="col-sm-3 inline-col">
							<input type="text" name="" id="input" class="form-control input-sm">
						</div>
						<div class="col-sm-4 inline-col">
							<input type="text" name="" id="input" class="form-control input-sm">
						</div>


					  </div>

					
					  
					
				</div>	

				<div class="row form-group">
					<div class="col-sm-1">
						<label>ที่อยู่</label>
					</div>
					<div class="col-sm-4">
						<input type="text" name="" id="input" class="form-control input-sm">
					</div>
					<div class="col-sm-4">
						<input type="text" name="" id="input" class="form-control input-sm">
					</div>

					

				</div>

				<div class="row form-group">
					<div class="col-sm-1">
						<label >จังหวัด</label>
					</div>
					<div class="input-group ">
					    	<div class="col-sm-5 inline-col">
							
						        <select class="form-control input-sm" id="select">
						          <option>กรุงเทพมหานคร    </option>
						          <option>          </option>
						          <option>           </option>
						          <option>           </option>
						        </select>
						</div>
						<div class="col-sm-3 inline-col">
							<input type="text" name="" id="input" class="form-control input-sm">
						</div>


						
					  </div>

					  
					
				</div>	
				
				<div class="row form-group">
					<div class="col-sm-1">
						<label >โทรศัพท์</label>
					</div>

					<div class="col-sm-2">
						<input type="text" name="" id="input" class="form-control input-sm">
					</div>

					<div class="col-sm-1 col-sm-offset-2">
						<label >Email</label>
					</div>

					<div class="col-sm-2">
						<input type="text" name="" id="input" class="form-control input-sm">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-1">
						<label>เอกสาร PO</label>
					</div>
					<div class="col-sm-3">
						<input type="file" name=""  id="input" class="form-control input-sm">
					</div>
					<div class="col-sm-1 col-sm-offset-1">
						<label >แผนที่</label>
					</div>

					<div class="col-sm-3">
						<input type="file" name="" id="input" class="form-control input-sm">
					</div>
				</div>


				<input type ="hidden" name="_token"  value="{{csrf_token()}}">

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