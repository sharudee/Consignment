@extends('include.index')
@section('title_page') PC - @stop

@section('content')

<p><a href ="{{URL::to('sales/addpc')}}" class="btn btn-sm btn-success">Add PC</a></p>
<div class="table-responsive">
<table class="table table-hover">
	<thead>
		<tr>
			<th>รหัสพนักงาน</th>
			<th>ชื่อพนักงาน</th>
			<th>เบอร์โทรศัพท์</th>
			<th>Acttion</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><a href="{{URL::to('sales/pcwork')}}">xxxxxx</a></td>
			<td>xxxxxxx xxxxxxxxxx </td>
			<td>xxxxxxxxxxx</td>
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