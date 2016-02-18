@extends('layouts.default')
@section('title_page') SKU @stop

@section('active_home') 
class='active'
@stop

@section('content')



<p><a href ="{{URL::to('sales/addsku')}}" class="btn btn-sm btn-success">Add SKU</a></p>

<p class="breadcrumb">ห้่าง  :  C0001  XXXXXXXXXX </p>

<table class="table table-hover">
	<thead>
		<tr>
			<th>SKU</th>
			<th>รายละเอียด</th>
			<th>ประเภทการขาย</th>
			<th>ส่วนลด</th>
			<th>Acttion</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>xxxxxx</td>
			<td>xxxxxxx xxxxxxxxxx xxxxxxxxxxxxxxx xxxxxxxxx</td>
			<td>xxx</td>
			<td>xxx</td>
			<td>
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
			<td>xxx</td>
			<td>xxx</td>
			<td>
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
			<td>xxx</td>
			<td>xxx</td>
			<td>
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