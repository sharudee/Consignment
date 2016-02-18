@extends('include.index')
@section('title_page') Warehouse - @stop

@section('content')

	<div class="col-md-12">
		<h1><i class="fa fa-list"></i> Warehouse</h1>	
	

		<button type="button" class="btn btn-primary solsoShowModal"  data-toggle="modal" data-target="#solsoCrudModal" data-href="{{URL::to('whmast/create')}}" data-modal-title="Create Warehouse">
		<i class="fa fa-plus"></i> New Warehose</button>

		<div class="col-md-12 top40">
			<h3>Warehouse</h3>
			<div id="ajaxTable" class="table-responsive">
				@include('sales.whmast_table')
			</div> 
		</div>

	</div>

	<!-- {!! Form::open() !!}
		<div class="form-group">
			{!!Form::label('name','Name')!!}
			{!!Form::text('name',null,['class'=>'form-control'])!!}
		</div>
	{!!Form::close()!!} -->


	<!--
	/** 
	  * === INCLUDE MODALS ===
	  * include modal-crud (path to file)
	*/
	-->

	@include('modals.modal-crud')
	@include('modals.modal-delete')

@stop