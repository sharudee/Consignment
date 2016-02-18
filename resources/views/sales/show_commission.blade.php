@extends('include.index')
@section('title_page') Commission - @stop

@section('content')
<br>

<div role="tabpanel">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active">
            <a href="#home" aria-controls="home" role="tab" data-toggle="tab">กำหนดเงื่อนไข</a>
        </li>
        <li role="presentation">
            <a href="#tab" aria-controls="tab" role="tab" data-toggle="tab">กำหนด Class</a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="home">
  	
  	<!-- **************  กำหนดเงื่อนไข  *******************-->
	<!-- Modal -->
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
								<label>Class</label>
							</div>
							<div class="col-sm-1">
								<input type="text" name="" id="input" class="form-control input-sm">
							</div>

												
						</div>
						
						<div class="row form-group">
							<div class="col-sm-2">
								<label>% ยอดขายเริ่มต้น</label>
							</div>
							<div class="col-sm-2">
								<input type="text" name="" id="input" class="form-control input-sm">
							</div>
						</div>	
						
						<div class="row form-group">
							<div class="col-sm-2">
								<label>% ยอดขายสิ้นสุด</label>
							</div>
							<div class="col-sm-2">
								<input type="text" name="" id="input" class="form-control input-sm">
							</div>
							
						</div>
						<div class="row form-group">
							<div class="col-sm-2">
								<label>Commistion</label>
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

	<!-- Table -->

	<div class="table-responsive">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Class</th>
	        				<th>% ยอดขายเริ่มต้น</th>
	        				<th>% ยอดขายสื้นสุด</th>
	        				<th>อัตรา Commission</th>
	        				<th></th>
				</tr>
			</thead>
			<tbody>
				<tr>
	        				<td>A</td>
	        				<td>999999</td>
	        				<td>999999</td>
	        				<td>99</td>
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
	        				<td>B</td>
	        				<td>999999</td>
	        				<td>999999</td>
	        				<td>99</td>
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
	        				<td>C</td>
	        				<td>999999</td>
	        				<td>999999</td>
	        				<td>99</td>
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

	<!-- **************************************************-->	
        </div>

        <div role="tabpanel" class="tab-pane" id="tab">
        <!-- Class -->
        <!-- Modal -->
        <br>
        <a class="btn btn-primary" data-toggle="modal" href='#setclass'>Add Data</a>
        	<div class="modal fade" id="setclass">
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
								<label>รหัสลูกค้า</label>
							</div>
							<div class="col-sm-1">
								<input type="text" name="" id="input" class="form-control input-sm">
							</div>

												
						</div>
						
						<div class="row form-group">
							<div class="col-sm-2">
								<label>รายละเอียด</label>
							</div>
							<div class="col-sm-2">
								<input type="text" name="" id="input" class="form-control input-sm">
							</div>
						</div>	
						
						<div class="row form-group">
							<div class="col-sm-2">
								<label>Class</label>
							</div>
							<div class="col-sm-1">
								<input type="text" name="" id="input" class="form-control input-sm">
							</div>
							
						</div>
						<div class="row form-group">
							<div class="col-sm-2">
								<label>เป้ายอดขาย</label>
							</div>
							<div class="col-sm-1">
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

        	<!-- Table -->
        	<div class="table-responsive">
        		<table class="table table-hover">
        			<thead>
        				<tr>
        					<th>รหัสลูกค้า</th>
	        				<th>รายละเอียด</th>
	        				<th>Class</th>
	        				<th>เป้ายอดขาย</th>
	        				<th></th>
        				</tr>
        			</thead>
        			<tbody>
        				<tr>
	        				<td>C0001</td>
	        				<td>xxxxxxxxxxxxx xxxxxxxxxxx</td>
	        				<td>A</td>
	        				<td>999999</td>
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
	        				<td>C0002</td>
	        				<td>xxxxxxxxxxxxx xxxxxxxxxxx</td>
	        				<td>B</td>
	        				<td>999999</td>
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
	        				<td>C0003</td>
	        				<td>xxxxxxxxxxxxx xxxxxxxxxxx</td>
	        				<td>C</td>
	        				<td>999999</td>
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

        </div>
    </div>
</div>


@stop