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

<a class="btn btn-sm btn-primary" data-toggle="modal" href='#modal-disc'>Add Discount</a>

        	<div class="modal fade" id="modal-disc">
        		<div class="modal-dialog" style="height:100px;">
        			<div class="modal-content">
        				<div class="modal-header">
        					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        					<h4 class="modal-title">Add Discount</h4>
        				</div>
        				<div class="modal-body">
					<div class="container">
						<div class="row form-group">
							<div class="col-sm-1">
								<label>Size</label>
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

						<div class="row form-group">
							<div class="col-sm-1">
								<label>ส่วนลด</label>
							</div>
							
							<div class="col-sm-1">
								<input type="text" name="" id="input" class="form-control input-sm">
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
			<th>Size</th>
			<th>Description</th>
			<th>Disc </th>
			<th> </th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>C1</td>
			<td>xx</td>
			<td>99999</td>
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
			<td>xx</td>
			<td>99999</td>
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
			<td>xx</td>
			<td>99999</td>
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
