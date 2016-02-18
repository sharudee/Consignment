<table class="table solsoTable table-hover {{!empty($refresh) ? 'solsoRefresh' : '' }}" data-all="{{sizeof($commission)}}">
	<thead>
				<tr>
					<th>Class</th>
	        				<th>% ยอดขายเริ่มต้น</th>
	        				<th>% ยอดขายสื้นสุด</th>
	        				<th>อัตรา Commission</th>
	        				<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($commission as $dbcom)
				<tr>
	        				<td><a href="{{URL::to('commissionclass/'.$dbcom->class.'/')}}">{{$dbcom->class}}</a></td>
	        				<td>{{$dbcom->sale_start}}</td>
	        				<td>{{$dbcom->sale_end}}</td>
	        				<td>{{$dbcom->commission_rate}}</td>
	        				<td>
	        					<button type="button" class="btn btn-primary solsoShowModal"  
						data-toggle="modal" data-target="#solsoCrudModal" 
						data-href="{{URL::to('commission/'.$dbcom->id.'/edit')}}" data-modal-title="Edit Commission"
						data-id={{$dbcom->id}}>
						<i class="fa fa-pencil"></i> Edit</button>
						

						
						<button type="button" class="btn btn-danger solsoConfirm" 
						data-toggle="modal" data-target="#solsoDeleteModal" 
						data-href="{{ URL::to('commission/'.$dbcom->id) }}"
						data-id={{$dbcom->id}}>
						<i class="fa fa-trash"></i> Delete
						</button>
					</td>
	        			</tr>
	        			@endforeach
	        	
				</tbody>
</table>