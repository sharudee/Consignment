@extends('include.index')
@section('title_page') Sales - @stop

@section('content')
	
	<div class="col-md-12">
		<h1><i class="fa fa-list"></i> โอนข้อมูลพนักงานขาย</h1>
		
		<div class="col-md-12 top40">
			<div id="ajaxTable" class="table-responsive">
			
				<table class="table solsoTable table-hover">
					<thead>
						<tr>
							
							<th>รหัส</th>
							<th>ชื่อพนักงาน</th>
							<th>วันที่ทำงาน</th>
							<th>วันทำงาน</th>
							<th>เวลาเข้า</th>
							<th>เวลาออก</th>
							
	
						</tr>
					</thead>
					<tbody>
						@foreach($pc as $crt =>$dbarr)
						<?php
							if($dbarr->work_type=="1")
							{
								$work_type = "วันทำงาน";
							}
							else
							{
								$work_type = "วันหยุด";
							}
						?>
						<tr>
							<td>{{$dbarr->emp_code }}</td>	
							<td>{{$dbarr->emp_name }}</td>						
							<td>{{Carbon::parse($dbarr->work_date)->format('d/m/Y') }}</td>
							<td>{{$work_type}}</td>
							<td>{{$dbarr->time_start }}</td>
							<td>{{$dbarr->time_end}}</td>
							
							
						</tr>
						@endforeach
						
					</tbody>
				</table> 
			</div> 
 		</div>
	</div>

	<form  role="form">
	
		<div class="form-group">
			<div class="col-sm-10 col-sm-offset-5">
				<button type="button" class="btn btn-primary" id="Submitpcwork"><i class="fa fa-sun-o"></i>ประมวลผล</button>
			</div>
		</div>
	</form>
	

@stop