@extends('include.index')
@section('title_page') Entity - @stop

@section('content')

	<div class="col-md-12">
		<h1><i class="fa fa-list"></i> Entity</h1>	
	

		<button type="button" class="btn btn-primary solsoShowModal"  data-toggle="modal" data-target="#solsoCrudModal" data-href="{{URL::to('entity/create')}}" data-modal-title="Create Entity">
		<i class="fa fa-plus"></i> New entity</button>

		
		<a href="{{URL::to('entityprint')}}" class="btn btn-primary "  target="_blank"><i class="fa fa-print"></i> พิมพ์</a>

		<div class="col-md-12 top40">
			<h3>Entity</h3>
			<div id="ajaxTable" class="table-responsive">
				@include('masterdata.entity_table')
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