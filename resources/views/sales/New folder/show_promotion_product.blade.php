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

<div role="tabpanel">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        
        <li role="presentation" class="active">
            <a href="#product" aria-controls="product" role="tab" data-toggle="tab">Product</a>
        </li>
        <li role="presentation">
            <a href="#prodset" aria-controls="prodset" role="tab" data-toggle="tab">Product Set</a>
        </li>
        <li role="presentation">
            <a href="#discount" aria-controls="discount" role="tab" data-toggle="tab">Premium Set</a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        


        <div role="tabpanel" class="tab-pane active" id="product">

        	<!--  Modal  Add Product -->
	<br>
        	<a class="btn btn-sm btn-primary" data-toggle="modal" href='#modal-prod'>Add Product</a>

        	<div class="modal fade" id="modal-prod">
        		<div class="modal-dialog" style="height:100px;">
        			<div class="modal-content">
        				<div class="modal-header">
        					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        					<h4 class="modal-title">Add Product</h4>
        				</div>
        				<div class="modal-body">
					<div class="container">

						<div class="row form-group">
							<div class="col-sm-1 inline-col">
								<label>Product Code</label>
							</div>
							
							<div class="col-sm-2">
								<input type="text" name="" id="input" class="form-control input-sm">
							</div>

						</div>
						<div class="row form-group">
							<div class="col-sm-1 inline-col">
								<label>Description</label>
							</div>
							
							<div class="col-sm-4">
								<input type="text" name="" id="input" class="form-control input-sm">
							</div>

						</div>

						<div class="row form-group">
							<div class="col-sm-1 inline-col">
								<label>Disc 1(%)</label>
							</div>
							
							<div class="col-sm-1">
								<input type="text" name="" id="input" class="form-control input-sm">
							</div>

							<div class="col-sm-1">
								<label>Disc 2(%)</label>
							</div>
							
							<div class="col-sm-1">
								<input type="text" name="" id="input" class="form-control input-sm">
							</div>

							<div class="col-sm-1">
								<label>Disc(Baht)</label>
							</div>
							
							<div class="col-sm-1">
								<input type="text" name="" id="input" class="form-control input-sm">
							</div>

						</div>

						<div class="row form-group">
							<div class="col-sm-1 inline-col">
								<label>Unit Price</label>
							</div>
							
							<div class="col-sm-1">
								<input type="text" name="" id="input" class="form-control input-sm">
							</div>

							<div class="col-sm-1 inline-col">
								<label>Sales Price</label>
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
				<th>Product Code</th>
				<th>Description</th>
				<th>Disc 1</th>
				<th>Disc 2</th>
				<th>Disc (Baht)</th>
				<th>Unit Price</th>
				<th>Sales Price</th>
				<th> </th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>XXXXXXXX</td>
				<td>Description</td>
				<td>99</td>
				<td>99</td>
				<td>999999</td>
				<td>999999</td>
				<td>999999</td>
				<td>
					
					
					<form method="POST" action ="#" style="display:inline-block">
						<input  name="_method" type="hidden"  value="DELETE">
						<input type ="hidden" name="_token"  value="{{csrf_token()}}">
						<button class="btn btn-sm btn-danger"> Delete </button>
					</form>
					
				</td>
			</tr>

			<tr>
				<td>XXXXXXXX</td>
				<td>Description</td>
				<td>99</td>
				<td>99</td>
				<td>999999</td>
				<td>999999</td>
				<td>999999</td>
				<td>
					
					
					<form method="POST" action ="#" style="display:inline-block">
						<input  name="_method" type="hidden"  value="DELETE">
						<input type ="hidden" name="_token"  value="{{csrf_token()}}">
						<button class="btn btn-sm btn-danger"> Delete </button>
					</form>
				</td>
			</tr>

			<tr>
				<td>XXXXXXXX</td>
				<td>Description</td>
				<td>99</td>
				<td>99</td>
				<td>999999</td>
				<td>999999</td>
				<td>999999</td>
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


        </div>

        <!-- Tab Product Set -->		
        <div role="tabpanel" class="tab-pane" id="prodset">
	<br>
	<a class="btn btn-sm btn-primary" data-toggle="modal" href='#modal-prodset'>Add Product Set</a>
	<div class="modal fade" id="modal-prodset">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Product Set</h4>
				</div>
				<div class="modal-body">
					<div class="container">
						<div class="row form-group">
							<div class="col-sm-1">
								<label>Set Code</label>
							</div>
							<div class="col-sm-1">
								<input type="text" name="" id="input" class="form-control input-sm">
							</div>
							
						</div>

						<div class="row form-group">
							<div class="col-sm-1">
								<label>Description</label>
							</div>
							
							<div class="col-sm-3">
								<input type="text" name="" id="input" class="form-control input-sm">
							</div>

						</div>
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
					<th>Set Code</th>
					<th>Description</th>
					<th>Premium Price</th>
					<th>Price</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><a href='#modal-itemlist'>XXXX</a></td>

					<!--<a class="btn btn-primary" data-toggle="modal" href='#modal-id'>Trigger modal</a>-->
					<div class="modal fade" id="modal-itemlist">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<h4 class="modal-title">Modal title</h4>
								</div>
								<div class="modal-body">
									
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									<button type="button" class="btn btn-primary">Save changes</button>
								</div>
							</div>
						</div>
					</div>
					<td>xxxxxxxxxxxxx</td>
					<td>9999999</td>
					<td>9999999</td>
					<td>
						<a class="btn btn-sm btn-primary" data-toggle="modal" href='#modal-item'>Add Item</a>
						<div class="modal fade" id="modal-item">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<h4 class="modal-title">Add Item</h4>
									</div>
									<div class="modal-body">
										<form action="" method="POST" role="form">
											<p class="breadcrumb">Set Code : XXX</p>
											<div class="container">
												<div class="row form-group">
													<div class="col-sm-2">
														<label>Product Code</label>
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
										</form>
										
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										<button type="button" class="btn btn-primary">Save changes</button>
									</div>
								</div>
							</div>
						</div>
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
 
	
       
         <!-- Tab Discount -->	
        <div role="tabpanel" class="tab-pane" id="discount">

        	<!--  Modal  Add Discount -->
	<br>
        	<a class="btn btn-sm btn-primary" data-toggle="modal" href='#modal-disc'>Add Premium Set</a>

        	<div class="modal fade" id="modal-disc">
        		<div class="modal-dialog" style="height:100px;">
        			<div class="modal-content">
        				<div class="modal-header">
        					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        					<h4 class="modal-title">Add Premium Set</h4>
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

	<!--  End Modal  Add Discount -->
	
        	<!-- <br>
	<p><a href ="{{URL::to('sales/addpromotiondisc')}}" class="btn btn-sm btn-success">Add Discount</a></p>
	
	--><table class="table table-hover">
		<thead>
			<tr>
				<th>Product Code</th>
				<th>Description</th>
				<th> </th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>C1</td>
				<td>xx</td>
				<td>
					<a class="btn btn-sm btn-primary" data-toggle="modal" href='#modal-item'>Add Item</a>
						<div class="modal fade" id="modal-item">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<h4 class="modal-title">Add Item</h4>
									</div>
									<div class="modal-body">
										<form action="" method="POST" role="form">
											<p class="breadcrumb">Set Code : XXX</p>
											<div class="container">
												<div class="row form-group">
													<div class="col-sm-2">
														<label>Product Code</label>
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
										</form>
										
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										<button type="button" class="btn btn-primary">Save changes</button>
									</div>
								</div>
							</div>
						</div>
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
				<td>xx</td>
				
				<td>
					<a class="btn btn-sm btn-primary" data-toggle="modal" href='#modal-item'>Add Item</a>
						<div class="modal fade" id="modal-item">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<h4 class="modal-title">Add Item</h4>
									</div>
									<div class="modal-body">
										<form action="" method="POST" role="form">
											<p class="breadcrumb">Set Code : XXX</p>
											<div class="container">
												<div class="row form-group">
													<div class="col-sm-2">
														<label>Product Code</label>
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
										</form>
										
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										<button type="button" class="btn btn-primary">Save changes</button>
									</div>
								</div>
							</div>
						</div>
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
				<td>xx</td>
				
				<td>
					<a class="btn btn-sm btn-primary" data-toggle="modal" href='#modal-item'>Add Item</a>
						<div class="modal fade" id="modal-item">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<h4 class="modal-title">Add Item</h4>
									</div>
									<div class="modal-body">
										<form action="" method="POST" role="form">
											<p class="breadcrumb">Set Code : XXX</p>
											<div class="container">
												<div class="row form-group">
													<div class="col-sm-2">
														<label>Product Code</label>
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
										</form>
										
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										<button type="button" class="btn btn-primary">Save changes</button>
									</div>
								</div>
							</div>
						</div>
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


@stop
