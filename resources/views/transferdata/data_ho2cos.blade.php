@extends('include.index')
@section('title_page') Sales - @stop

@section('content')
	
	<div class="col-md-12">
		<h1><i class="fa fa-list"></i> โอนข้อมูลจากสำนักงานใหญ่ไปห้าง</h1>
		
		<div class="col-md-12 top40">
			<div id="ajaxTable" class="table-responsive">
			
				<table class="table solsoTable table-hover">
					<thead>
						<tr>
							
							<th>Doc No</th>
							<th>Doc Date</th>
							<th>Customer Name</th>
							<th>Req Date</th>
							<th>Promotion</th>
							<th>Status</th>
							<th></th>
	
						</tr>
					</thead>
					<tbody>
						@foreach($sales as $crt =>$dbarr)
						<tr>
							<td>{{$dbarr->doc_no }}</td>						
							<td>{{Carbon::parse($dbarr->doc_date)->format('d/m/Y') }}</td>
							<td>{{$dbarr->cust_name}}</td>
							<td>{{Carbon::parse($dbarr->req_date)->format('d/m/Y') }}</td>
							<td>{{$dbarr->pmt_no}}</td>
							<td>{{$dbarr->doc_status}}</td>
							<td><button type="button" class="btn btn-sm btn-primary solsoShowModal"  
								data-toggle="modal" data-target="#solsoCrudModal" 
								data-href="{{URL::to('salesshow/'.$dbarr->id)}}" data-modal-title="Show Sales" >
								 View Detail</button></td>
							
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
				<button type="button" class="btn btn-primary" id="Submitho2cos"><i class="fa fa-sun-o"></i>ประมวลผล</button>
			</div>
		</div>
	</form>
	

@stop