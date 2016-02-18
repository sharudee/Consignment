@extends('include.index')
@section('title_page') คืนสินค้า - @stop

@section('content')
	
	<div class="col-md-12">
		<h1><i class="fa fa-list"></i> คืนสินค้า</h1>
		<a href="#NewPo" rel="newpo" class="btn btn-lg btn-primary"><i class="fa fa-plus-square-o"></i> Add  Order</a>
		<div class="col-md-12 top40">
			<div id="ajaxTable" class="table-responsive">

				
			</div> 
 		</div>
	</div>

	@include('modals.modal-crud')
	<!-- Modal New PO Form -->

	



@stop