@extends('include.index')
@section('title_page') ตารางการทำงาน- @stop

@section('content')

	<div class="col-md-12">
		<h1><i class="fa fa-list"></i> ตารางการทำงาน</h1>	
		

		<button type="button" class="btn btn-primary solsoShowModal"  data-toggle="modal" data-target="#solsoCrudModal" data-href="{{URL::to('pcwork/'. $emp_code . '/create') }}" data-modal-title="Create Work Schedule">
		<i class="fa fa-plus"></i> Gen Data</button>
		<br>
		<br>

		<?php
			$name = DB::table('cos_pcmast')->where('emp_code', $emp_code)->pluck('emp_name');
		?>

		<ol class="breadcrumb">
			<li>
				<a href="{{URL::to('pc')}}">บันทึกข้อมูลพนักงาน</a>
			</li>
			<li class="active">Current</li>
		</ol>
		<div class="col-md-12 ">
			<h3>ตารางการทำงาน : {{$emp_code . ' - '. $name }}</h3>
			<div id="ajaxTable" class="table-responsive">
				@include('sales.pcwork_table')
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