@extends('layouts.default')
@section('title_page') Entity @stop

@section('active_home') 
class='active'
@stop

@section('content')

<div class="showresult"></div>

@stop

@section('script')
	<script> 
		$(function(){
			App.init();
			App.doShowEntity();
		});
	</script>
@stop