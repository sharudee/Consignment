@extends('include.index')
@section('title_page') PC  - @stop

@section('content')



<p><a href ="{{URL::to('sales/addsku')}}" class="btn btn-sm btn-success">Gen Data</a></p>

<p class="breadcrumb">พนักงาน  :  00016  XXXXXXXXXX </p>
<div class="table-responsive">
<table class="table table-hover">
	<thead>
		<tr>
			<th>วันที่ทำงาน</th>
			<th>วันทำงาน</th>
			<th>ประเภท</th>
			<th>เวลาเข้างาน</th>
			<th>เวลาเลิกงาน</th>
			<th>Acttion</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>99/99/9999</td>
			<td>วันที่ทำงาน</td>
			<td>ประจำ</td>
			<td>99.99</td>
			<td>99.99</td>
			<td>
				<a href="{{URL::to('sales/addpcwork')}}" class="btn btn-sm btn-warning"> Update </a>
				
			</td>
		</tr>

		<tr>
			<td>99/99/9999</td>
			<td>วันที่ทำงาน</td>
			<td>ประจำ</td>
			<td>99.99</td>
			<td>99.99</td>
			<td>
				<a href="#" class="btn btn-sm btn-warning"> Update </a>
			</td>
		</tr>

		<tr>
			<td>99/99/9999</td>
			<td>วันที่ทำงาน</td>
			<td>ประจำ</td>
			<td>99.99</td>
			<td>99.99</td>
			<td>
				<a href="#" class="btn btn-sm btn-warning"> Update </a>
			</td>
		</tr>
	</tbody>
</table>
</div>

@stop