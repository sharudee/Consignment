@extends('include.index')
@section('title_page') Commission - @stop

@section('content')

	<div class="col-md-12">
		<h1><i class="fa fa-list"></i> Commission</h1>	
	

		<!--<button type="button" class="btn btn-primary solsoShowModal"  data-toggle="modal" data-target="#solsoCrudModal" data-href="{{URL::to('comclass/create')}}" data-modal-title="Set Class">
		<i class="fa fa-plus"></i> Set Class</button>
		-->
		<ol class="breadcrumb">
			<li>
				<a href="{{URL::to('commission')}}">กำหนดข้อมูล Commission</a>
			</li>
			<li class="active">Current</li>
		</ol>
		<div class="col-md-12 ">
			<h3>Class : {{$class}}</h3>
			<div id="ajaxTable" class="table-responsive">
				@include('sales.commissionclass_table')
			</div> 
		</div>

	</div>

	


	

	@include('modals.modal-crud')
	@include('modals.modal-delete')

	<!-- Modal Customer -->

	<div class="modal fade custmodal" data-backdrop="static">
		<div class="modal-dialog modal-md">
			<div class="modal-content" id="custmodal">
				
			</div>
		</div>
	</div>


@stop