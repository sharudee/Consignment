<table class="table solsoTable table-hover {{!empty($refresh) ? 'solsoRefresh' : '' }}" data-all="{{sizeof($sales)}}">
					<thead>
						<tr>
							
							<th>Doc No</th>
							<th>Doc Date</th>
							<th>Customer Name</th>
							<th>Req Date</th>
							<th>Promotion</th>
							<th>Status</th>
							<th>Action</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach($sales as $crt =>$dbarr)
						<tr>
							<?php
								if($dbarr->doc_status<>"PAL")
								{
									$edit_st = "disabled";
								}
								else
								{
									$edit_st = "";
								}

								
							?>
							

							<?php
								if(!empty($dbarr->po_file))
								{

							?>
							<td><a href="{{URL::to('salesshowfile/'.$dbarr->id)}}" target="_blank">{{$dbarr->doc_no }}</a></td>

							<?php
								}
								else
								{
							?>

							<td>{{$dbarr->doc_no }}</td>
							<?php

								}
							?>

							
							<td>{{Carbon::parse($dbarr->doc_date)->format('d/m/Y') }}</td>
							<td>{{$dbarr->ship_titlename. $dbarr->ship_custname .' '. $dbarr->ship_custsurname}}</td>
							<td>{{Carbon::parse($dbarr->req_date)->format('d/m/Y') }}</td>
							<td>{{$dbarr->pmt_no}}</td>
							<td>{{$dbarr->doc_status}}</td>
							<td class="col-md-3">
								<button type="button" class="btn btn-sm btn-primary solsoShowModal"  
								data-toggle="modal" data-target="#solsoCrudModal" 
								data-href="{{URL::to('salesshow/'.$dbarr->id)}}" data-modal-title="Show Sales" >
								 View Detail</button>
							
								<!--<a href="#showpo/{{$dbarr->id}}"  id ="{{$crt}}" rel="showpo" data-id="{{$dbarr->id}}" class="btn btn-sm btn-primary">View Detail</a>-->
								<a href="{{URL::to('salesreport/'.$dbarr->id)}}" class="btn btn-sm btn-success" target="_blank">Print</a>
								<!--<a href="#" class="btn btn-sm btn-danger">Edit</a>-->
							
								<button type="button" class="btn btn-sm btn-danger solsoShowModal"  
								data-toggle="modal" data-target="#solsoCrudModal" 
								data-href="{{URL::to('salesedit/'.$dbarr->id)}}" data-modal-title="Edit Sales" {{$edit_st}}>
								 Edit</button>
							
							<td>
								 <button type="button" class="btn btn-sm btn-info solsoShowModal"  
								data-toggle="modal" data-target="#solsoCrudModal" 
								data-href="{{URL::to('salesfile/'.$dbarr->id)}}" data-modal-title="PO File" >
								 PO File</button>
							</td>
						</tr>
						@endforeach
						
					</tbody>
				</table> 