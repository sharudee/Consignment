<table  class="table solsoTable table-hover {{!empty($refresh) ? 'solsoRefresh' : '' }}" data-all="{{sizeof($commissionclass)}}">
	<thead>
				<tr>
					<th>ลูกค้า</th>
	        				<th>.</th>
	        				<th>เป้ายอดขาย</th>
	        				<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($commissionclass as $dbclass)
				<tr>
	        				<td>{{$dbclass->cust_code}}</td>
	        				<td>{{$dbclass->cust_name}}</td>
	        				<td>{{$dbclass->sale_target}}</td>
	        				<td>
	        					<button type="button" class="btn btn-primary solsoShowModal"  
						data-toggle="modal" data-target="#solsoCrudModal" 
						data-href="{{URL::to('comclass/'.$dbclass->id.'/edit')}}" data-modal-title="Edit Commission"
						data-id={{$dbclass->id}}>
						<i class="fa fa-pencil"></i> Edit</button>
						

						
						<button type="button" class="btn btn-danger solsoConfirm" 
						data-toggle="modal" data-target="#solsoDeleteModal" 
						data-href="{{ URL::to('comclass/'.$dbclass->id) }}"
						data-id={{$dbclass->id}}>
						<i class="fa fa-trash"></i> Delete
						</button>
					</td>
	        			</tr>
	        			@endforeach
	        	
				</tbody>
</table>