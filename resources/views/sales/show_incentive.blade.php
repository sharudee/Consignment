@extends('include.index')
@section('title_page') Incentive - @stop

@section('content')

<br>
<a class="btn btn-primary" data-toggle="modal" href='#modal-id'>Add Data</a>
<div class="modal fade" id="modal-id">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Add Data</h4>
			</div>
			<div class="modal-body">
				<div class="container">
						<div class="row form-group">
							<div class="col-sm-2">
								<label>รุ่นสินค้า</label>
							</div>
							<div class="col-sm-1">
								<input type="text" name="" id="input" class="form-control input-sm">
							</div>

												
						</div>
						
						<div class="row form-group">
							<div class="col-sm-2">
								<label>วันที่เริ่ม</label>
							</div>
							<div class="col-sm-2">
								<input type="date" name="" id="input" class="form-control input-sm">
							</div>
						</div>	
						
						<div class="row form-group">
							<div class="col-sm-2">
								<label>วันที่สิ้นสุด</label>
							</div>
							<div class="col-sm-2">
								<input type="date" name="" id="input" class="form-control input-sm">
							</div>
							
						</div>
						<div class="row form-group">
							<div class="col-sm-2">
								<label>ค่า Incentive</label>
							</div>
							<div class="col-sm-2">
								<input type="text" name="" id="input" class="form-control input-sm">
							</div>
							
						</div>

						<input type ="hidden" name="_token"  value="{{csrf_token()}}">

					</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>


<div class="table-responsive">
        		<table class="table table-hover">
        			<thead>
        				<tr>
        					<th>รุ่นสินค้า</th>
	        				<th>วันที่เริ่มต้น</th>
	        				<th>วันที่สิ้นสุด</th>
	        				<th>ค่า Incentive</th>
	        				<th></th>
        				</tr>
        			</thead>
        			<tbody>
        				<tr>
	        				<td>xxx</td>
	        				<td>99/99/9999</td>
	        				<td>99/99/9999</td>
	        				<td>9999</td>
	        				<td>
	        					<a href="#" class="btn btn-sm btn-warning"> Update </a>
						<form method="POST" action ="#" style="display:inline-block">
							<input  name="_method" type="hidden"  value="DELETE">
							<input type ="hidden" name="_token"  value="{{csrf_token()}}">
							<button class="btn btn-sm btn-danger"> Delete </button>
						</form>
					</td>
	        			</tr>
	        			<tr>
	        				<td>xxx</td>
	        				<td>99/99/9999</td>
	        				<td>99/99/9999</td>
	        				<td>9999</td>
	        				<td>
	        					<a href="#" class="btn btn-sm btn-warning"> Update </a>
						<form method="POST" action ="#" style="display:inline-block">
							<input  name="_method" type="hidden"  value="DELETE">
							<input type ="hidden" name="_token"  value="{{csrf_token()}}">
							<button class="btn btn-sm btn-danger"> Delete </button>
						</form>
					</td>
	        			</tr>
	        			<tr>
	        				<td>xxx</td>
	        				<td>99/99/9999</td>
	        				<td>99/99/9999</td>
	        				<td>9999</td>
	        				<td>
	        					<a href="#" class="btn btn-sm btn-warning"> Update </a>
						<form method="POST" action ="#" style="display:inline-block">
							<input  name="_method" type="hidden"  value="DELETE">
							<input type ="hidden" name="_token"  value="{{csrf_token()}}">
							<button class="btn btn-sm btn-danger"> Delete </button>
						</form>
					</td>
	        			</tr>
        			</tbody>
        		</table>
        	</div>

@stop