@extends('layouts.default')
@section('title_page') Promotion @stop

@section('active_home') 
class='active'
@stop

@section('content')

<br>
<div class="row form-group">
	<div class="col-sm-1">
		<label>Promotion</label>
	</div>
					
	<div class="input-group ">	
		<div class="col-sm-3 inline-col">
			<input type="text" name="" id="input" class="form-control input-sm">
		</div>
		<div class="col-sm-6 inline-col">
			<input type="text" name="" id="input" class="form-control input-sm">
		</div>
	</div>
</div>


<a class="btn btn-sm btn-primary" data-toggle="modal" href='#modal-id'>Add Customer</a>
<div class="modal fade" id="modal-id">
        		<div class="modal-dialog" style="height:100px;">
        			<div class="modal-content">
        				<div class="modal-header">
        					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        					<h4 class="modal-title">Add customer</h4>
        				</div>
        				<div class="modal-body">
					<div class="container">
						<div class="row form-group">
							<div class="col-sm-1">
								<label>Customer</label>
							</div>
							
							<div class="input-group ">	
								<div class="col-sm-3 inline-col">
									<input type="text" name="" id="input" class="form-control input-sm">
								</div>
								<div class="col-sm-6 inline-col">
									<input type="text" name="" id="input" class="form-control input-sm">
								</div>
							</div>
						</div>
					</div>
					
				</div>

        					
        				
        				<div class="modal-footer">
        					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        					<button type="button" class="btn btn-primary">Save</button>
        				</div>
        			</div>
        		</div>
        	</div>


<a class="btn btn-sm btn-primary" data-toggle="modal" href='#custgrp'>Add Customer Group</a>

        	<div class="modal fade" id="custgrp">
        		<div class="modal-dialog" style="height:100px;">
        			<div class="modal-content">
        				<div class="modal-header">
        					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        					<h4 class="modal-title">Add Customer Group</h4>
        				</div>
        				<div class="modal-body">
					<div class="container">
						<div class="row form-group">
							<div class="col-sm-2">
								<label>Customer Group</label>
							</div>
							
							<div class="input-group ">	
								<div class="col-sm-3 inline-col">
									<input type="text" name="" id="input" class="form-control input-sm">
								</div>
								<div class="col-sm-6 inline-col">
									<input type="text" name="" id="input" class="form-control input-sm">
								</div>
							</div>
						</div>
					</div>
					
				</div>

        					
        				
        				<div class="modal-footer">
        					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        					<button type="button" class="btn btn-primary">Save</button>
        				</div>
        			</div>
        		</div>
        	</div>
<table class="table table-hover">
	<thead>
		<tr>
			<th>รหัสลูกค้า</th>
			<th>รายละเอียด</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>C0001</td>
			<td>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</td>

			<td>
				
				
				<form method="POST" action ="#" style="display:inline-block">
					<input  name="_method" type="hidden"  value="DELETE">
					<input type ="hidden" name="_token"  value="{{csrf_token()}}">
					<button class="btn btn-sm btn-danger"> Delete </button>
				</form>
				
			</td>
		</tr>

		<tr>
			<td>C0002</td>
			<td>xxx</td>
			
			<td>
				
				
				<form method="POST" action ="#" style="display:inline-block">
					<input  name="_method" type="hidden"  value="DELETE">
					<input type ="hidden" name="_token"  value="{{csrf_token()}}">
					<button class="btn btn-sm btn-danger"> Delete </button>
				</form>
			</td>
		</tr>

		<tr>
			<td>C0003</td>
			<td>xxx</td>
			
			<td>
				
				
				<form method="POST" action ="#" style="display:inline-block">
					<input  name="_method" type="hidden"  value="DELETE">
					<input type ="hidden" name="_token"  value="{{csrf_token()}}">
					<button class="btn btn-sm btn-danger"> Delete </button>
				</form>
			</td>
		</tr>
	</tbody>
</table>


@stop
