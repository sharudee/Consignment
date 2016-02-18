@extends('include.index')
@section('title_page') Document Control - @stop

@section('content')

	<div class="col-md-12">
		<h1><i class="fa fa-list"></i> Incentive</h1>	
	

		<button type="button" class="btn btn-primary solsoShowModal"  data-toggle="modal" data-target="#solsoCrudModal" data-href="{{URL::to('incentive/create')}}" data-modal-title="Create Doc Code">
		<i class="fa fa-plus"></i> New Incentive</button>

		<div class="col-md-12 top40">
			<h3>Incentive</h3>
			<div id="ajaxTable" class="table-responsive">
				@include('sales.incentive_table')
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

	<div class="modal fade modelmodal" data-backdrop="static">
		<div class="modal-dialog modal-md">
			<div class="modal-content" id="modelmodal">
				
			</div>
		</div>
	</div>

@stop