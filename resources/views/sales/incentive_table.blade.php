<table class="table solsoTable table-hover {{!empty($refresh) ? 'solsoRefresh' : '' }}" data-all="{{sizeof($incentive)}}">
        			<thead>
        				<tr>
        					<th>รุ่นสินค้า</th>
	        				<th>วันที่เริ่มต้น</th>
	        				<th>วันที่สิ้นสุด</th>
	        				<th>ค่า Incentive</th>
	        				<th>Action</th>
	        				<th>Action</th>
        				</tr>
        			</thead>
        			<tbody>
        				@foreach($incentive as $dbarr)
        				<tr>
	        				<td>{{$dbarr->pdmodel_code}}</td>
	        				<td>{{ Carbon::parse($dbarr->start_date)->format('d/m/Y') }}</td>
	        				<td>{{ Carbon::parse($dbarr->end_date)->format('d/m/Y') }}</td>
	        				<td>{{$dbarr->incentive_amt}}</td>
	        				<td>
						<button type="button" class="btn btn-primary solsoShowModal"  
						data-toggle="modal" data-target="#solsoCrudModal" 
						data-href="{{URL::to('incentive/'.$dbarr->id.'/edit')}}" data-modal-title="Edit Incentive"
						data-id={{$dbarr->id}}>
						<i class="fa fa-pencil"></i> Edit</button>
						</td>
					</td>
					<td>

						
						<button type="button" class="btn btn-danger solsoConfirm" 
						data-toggle="modal" data-target="#solsoDeleteModal" 
						data-href="{{ URL::to('incentive/'.$dbarr->id) }}"
						data-id={{$dbarr->id}}>
						<i class="fa fa-trash"></i> Delete
						</button>
						
						
							
					</td>
	        			</tr>
	        			@endforeach
	        			
        			</tbody>
        		</table>

