@extends('include.index')
@section('title_page') Document Control - @stop

@section('content')

<p><a href ="{{URL::to('sales/adddocmast')}}" class="btn btn-sm btn-success">Add Doc Code</a></p>
<div class="table-responsive">
<table class="table table-hover">
	<thead>
		<tr>
			<th>Doc Code</th>
			<th>Description</th>
			<th>Doc Ctrl</th>
			<th>Stock Code</th>
			<th>Post Type</th>
			<th>Acttion</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>xxxxxx</td>
			<td>xxxxxxx xxxxxxxxxx xxxxxxxxxxxxxxx xxxxxxxxx</td>
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
</div>
@stop