<table class="table solsoTable table-hover {{!empty($refresh) ? 'solsoRefresh' : '' }}" data-all="{{sizeof($customer)}}">
					<thead>
						<tr>
							
							<th>รหัส</th>
							<th>ชื่อ - นามสกุล</th>
							<th>ที่อยู่</th>
							<th></th>
							<th>โทรศัพท์</th>
							<th>Email</th>
							<th>Action</th>
							
						</tr>
					</thead>
					<tbody>
						@foreach($customer as $crt =>$dbarr)
						<tr>
							
							<td>{{$dbarr->cust_code }}</td>
							<td>{{$dbarr->name_title. $dbarr->cust_name. '  ' .$dbarr->cust_surname }}</td>
							<td>{{$dbarr->address1}}</td>
							<td>{{$dbarr->address2 }}</td>
							<td>{{$dbarr->tel}}</td>
							<td>{{$dbarr->email_address}}</td>
							<td class="col-md-3">
								<button type="button" class="btn btn-sm btn-primary solsoShowModal"  
								data-toggle="modal" data-target="#solsoCrudModal" 
								data-href="{{URL::to('customershow/'.$dbarr->id)}}" data-modal-title="Show Customer" >
								 View Detail</button>
							
							
								<button type="button" class="btn btn-sm btn-danger solsoShowModal"  
								data-toggle="modal" data-target="#solsoCrudModal" 
								data-href="{{URL::to('customeredit/'.$dbarr->id)}}" data-modal-title="Edit Customer" >
								 Edit</button>
							
							
						</tr>
						@endforeach
						
					</tbody>
				</table> 