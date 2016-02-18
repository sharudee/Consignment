@extends('include.index')
@section('title_page') PC - @stop

@section('content')

	<div class="col-md-12">
		<h1><i class="fa fa-list"></i> พนักงานขาย</h1>	
	

		<button type="button" class="btn btn-primary solsoShowModal"  data-toggle="modal" data-target="#solsoCrudModal" data-href="{{URL::to('pc/create')}}" data-modal-title="Create PC">
		<i class="fa fa-plus"></i> New PC</button>

		<div class="col-md-12 top40">
			<h3>พนักงานขาย</h3>
			<div id="ajaxTable" class="table-responsive">
				@include('sales.pc_table')
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