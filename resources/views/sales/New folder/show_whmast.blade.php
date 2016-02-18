@extends('include.index')
@section('title_page') Warehouse - @stop

@section('content')

<p><a href ="{{URL::to('sales/addwhmast')}}" class="btn btn-sm btn-success">Add Warehouse</a></p>
<div class="table-responsive">
<table class="table table-hover">
	<thead>
		<tr>
			<th>WH Code</th>
			<th>Description</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>xxxxxx</td>
			<td>xxxxxxx xxxxxxxxxx xxxxxxxxxxxxxxx xxxxxxxxx</td>
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
</div>
@stop