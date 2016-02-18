@extends('include.index')
@section('title_page') Sales - @stop

@section('content')
	
	<div class="col-md-12">
		<h1><i class="fa fa-list"></i> Sales</h1>
		<a href="#NewPo" rel="newpo" class="btn btn-lg btn-primary"><i class="fa fa-plus-square-o"></i> Add Sales</a>
		<div class="col-md-12 top40">
			<div id="ajaxTable" class="table-responsive">

				@include('sales.sales_table')
			</div> 
 		</div>
	</div>

	@include('modals.modal-crud')
	<!-- Modal New PO Form -->

	<div class="modal fade pomodal" data-backdrop="static">
		<div class="modal-dialog modal-lg">
			<div class="modal-content" id="pomodal">
				
			</div>
		</div>
	</div>

	<!-- Modal Show PO  -->

	<div class="modal fade showpomodal" data-backdrop="static">
		<div class="modal-dialog modal-lg">
			<div class="modal-content" id="showpomodal">
				
			</div>
		</div>
	</div>



	<!-- Modal Promotion -->

	<div class="modal fade custmodal" data-backdrop="static">
		<div class="modal-dialog modal-md">
			<div class="modal-content" id="custmodal">
				
			</div>
		</div>
	</div>
	

	<!-- Modal Title Name -->

	<div class="modal fade titlemodal" data-backdrop="static">
		<div class="modal-dialog modal-sm">
			<div class="modal-content" id="titlemodal">
				
			</div>
		</div>
	</div>

	<!-- Modal Province -->

	<div class="modal fade provmodal" data-backdrop="static">
		<div class="modal-dialog modal-sm">
			<div class="modal-content" id="provmodal">
				
			</div>
		</div>
	</div>

	<!-- Modal Post Code -->

	<div class="modal fade postmodal" data-backdrop="static">
		<div class="modal-dialog modal-sm">
			<div class="modal-content" id="postmodal">
				
			</div>
		</div>
	</div>


	<!-- Modal Payment -->

	<div class="modal fade paymodal" data-backdrop="static">
		<div class="modal-dialog modal-md">
			<div class="modal-content" id="paymodal">
				
			</div>
		</div>
	</div>

	<!-- Modal  Discount -->

	<div class="modal fade discmodal" data-backdrop="static">
		<div class="modal-dialog modal-md">
			<div class="modal-content" id="discmodal">
				
			</div>
		</div>
	</div>


	<!-- Modal Product -->
	
	<div class="modal fade productmodal" data-backdrop="static">
		<div class="modal-dialog modal-md">
			<div class="modal-content" id="productmodal">
				
			</div>
		</div>
	</div>

	<!-- Modal Premium -->
	
	<div class="modal fade premiummodal" data-backdrop="static">
		<div class="modal-dialog modal-md">
			<div class="modal-content" id="premiummodal">
				
			</div>
		</div>
	</div>




@stop