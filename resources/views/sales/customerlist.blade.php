@extends('include.index')
@section('title_page') Customer - @stop

@section('content')
	
	<div class="col-md-12">
		<h1><i class="fa fa-list"></i> ข้อมูลลูกค้า</h1>

		<div class="col-md-12 top40">
			<div id="ajaxTable" class="table-responsive">

				@include('sales.customer_table')
			</div> 
 		</div>
	</div>

	@include('modals.modal-crud')
	@include('modals.modal-delete')
	<!-- Modal New PO Form -->

	



@stop