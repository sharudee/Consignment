

@extends('include.index')
@section('title_page') Home @stop

@section('content')

	@include('modals.modal-crud')
	@include('modals.modal-delete')

@stop

