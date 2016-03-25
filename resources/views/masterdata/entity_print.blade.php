@extends('include.index')
@section('title_page') Entity - @stop

@section('content')

	<form  method="POST" action="entityreport">
	<div class="col-sm-12">
		<h1><i class="fa fa-list"></i> Entity</h1>
		<div class="col-md-12 top40">
			<div class="container">
				<div class="row form-group">
					<div class="col-sm-2">
						<label>รหัสลูกค้า</label>
					</div>
					<div class="col-sm-2">
						<input type="text" name="entity_code1" id="entity_code1" class="form-control " >
						
					</div>

					<div class="col-sm-2 col-sm-offset-1">
						<label>ถึง</label>
					</div>

					<div class="col-sm-2">
						<input type="text" name="entity_code2" id="entity_code2" class="form-control " >
						
					</div>
					
				</div>
				
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label>กลุ่มลูกค้า</label>
					</div>
					<div class="col-sm-2">
						<select class="form-control " id="cust_grp1" name="cust_grp1">
						@foreach($custgrp as $crt => $v)
						          <option value="{{$v->custgrp_code}}">{{ $v->custgrp_name }}</option>
						@endforeach	          
						</select>
						<!-- <input type="text" name="cust_grp" id="input" class="form-control required"> 
						{!!$errors->first('cust_grp','<p class="error">:message</p>')!!}-->
					
						

					</div>
					<div class="col-sm-2 col-sm-offset-1">
						<label>ถึง</label>
					</div>
					<div class="col-sm-2">
						<select class="form-control " id="cust_grp2" name="cust_grp2">
						@foreach($custgrp as $crt => $v)
						          <option value="{{$v->custgrp_code}}">{{ $v->custgrp_name }}</option>
						@endforeach	          
						</select>
						<!-- <input type="text" name="cust_grp" id="input" class="form-control required"> 
						{!!$errors->first('cust_grp','<p class="error">:message</p>')!!}-->
					
						

					</div>
				</div>

				

				
				
				

			</div>

			<input type ="hidden" name="_token"  value="{{csrf_token()}}">

			<div class="form-group col-md-12">
				
				<!--<a href="{{URL::to('entityreport/')}}" class="btn btn-sm btn-success" target="_blank">Print</a>-->
				<button type="submit" class="btn btn-primary"><i class="fa fa-print"></i> พิมพ์</button>

			</div>
	
</div>
</div>
</form>
	

@stop