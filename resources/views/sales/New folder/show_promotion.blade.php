@extends('layouts.default')
@section('title_page') Promotion @stop

@section('active_home') 
class='active'
@stop

@section('content')
<br>
<div class="row">
	<div class="col-sm-1">
		<a href ="{{URL::to('sales/addpromotion')}}" class="btn btn-sm btn-success">Add Promotion</a>
	</div>
	<div class="col-sm-1 col-sm-offset-10">
		<a href ="{{URL::to('sales/sku')}}" class="btn btn-sm btn-success">Set SKU</a>
	</div>
</div>

<!-- <p><a href ="{{URL::to('sales/addpromotion')}}" class="btn btn-sm btn-success">Add Promotion</a></p>-->
<table class="table table-hover">
	<thead>
		<tr>
			<th>เลขที่ Promotion</th>
			<th>รายละเอียด</th>
			<!-- <th> </th> -->
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>xxxxxx</td>
			<td>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</td>
			<!--<td>
				<a href="{{URL::to('sales/promotioncust')}}" class="btn btn-sm btn-info"> Customer </a>
				<a href="{{URL::to('sales/promotionprod')}}" class="btn btn-sm btn-info"> Product </a>
				<a href="{{URL::to('sales/promotiondisc')}}" class="btn btn-sm btn-info"> Discount </a>
			</td> -->
			<td>
				<a href="#" class="btn btn-sm btn-primary"> Read </a>
				<a href="#" class="btn btn-sm btn-warning"> Update </a>
				<form method="POST" action ="#" style="display:inline-block">
					<input  name="_method" type="hidden"  value="DELETE">
					<input type ="hidden" name="_token"  value="{{csrf_token()}}">
					<button class="btn btn-sm btn-danger"> Delete </button>
				</form>
				
			</td>
		</tr>

		<tr>
			<td>xxx</td>
			<td>xxx</td>
			<!--<td>
				<a href="#" class="btn btn-sm btn-info"> Customer </a>
				<a href="#" class="btn btn-sm btn-info"> Product </a>
				<a href="#" class="btn btn-sm btn-info"> Discount </a>
			</td> -->
			<td>
				<a href="#" class="btn btn-sm btn-primary"> Read </a>
				<a href="#" class="btn btn-sm btn-warning"> Update </a>
				<form method="POST" action ="#" style="display:inline-block">
					<input  name="_method" type="hidden"  value="DELETE">
					<input type ="hidden" name="_token"  value="{{csrf_token()}}">
					<button class="btn btn-sm btn-danger"> Delete </button>
				</form>
			</td>
		</tr>

		<tr>
			<td>xxx</td>
			<td>xxx</td>
			<!--<td>
				<a href="#" class="btn btn-sm btn-info"> Customer </a>
				<a href="#" class="btn btn-sm btn-info"> Product </a>
				<a href="#" class="btn btn-sm btn-info"> Discount </a>
			</td> -->
			<td>
				<a href="#" class="btn btn-sm btn-primary"> Read </a>
				<a href="#" class="btn btn-sm btn-warning"> Update </a>
				<form method="POST" action ="#" style="display:inline-block">
					<input  name="_method" type="hidden"  value="DELETE">
					<input type ="hidden" name="_token"  value="{{csrf_token()}}">
					<button class="btn btn-sm btn-danger"> Delete </button>
				</form>
			</td>
		</tr>
	</tbody>

	
</table>


@stop
