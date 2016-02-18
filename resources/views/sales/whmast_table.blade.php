<table class="table solsoTable table-hover {{!empty($refresh) ? 'solsoRefresh' : '' }}" data-all="{{sizeof($whmast)}}">
	<thead>
		<tr>
			<th>WH   Code</th>
			<th>Description</th>
			<th>Action</th>
			
		</tr>
	</thead>
	<tbody>
		@foreach($whmast as $dbwh)
		<tr>
			<td>{{$dbwh->wh_code}}</td>
			<td>{{$dbwh->wh_tdesc}}</td>
			<td>
				<button type="button" class="btn btn-info solsoShowModal"  
				data-toggle="modal" data-target="#solsoCrudModal" 
				data-href="{{URL::to('whmast/'.$dbwh->id)}}" data-modal-title="Show Warehouse" >
				<i class="fa fa-eye"></i> Show</button>
				
				<button type="button" class="btn btn-primary solsoShowModal"  
				data-toggle="modal" data-target="#solsoCrudModal" 
				data-href="{{URL::to('whmast/'.$dbwh->id.'/edit')}}" data-modal-title="Edit Warehouse"
				data-id={{$dbwh->id}}>
				<i class="fa fa-pencil"></i> Edit</button>
				

				
				<button type="button" class="btn btn-danger solsoConfirm" 
				data-toggle="modal" data-target="#solsoDeleteModal" 
				data-href="{{ URL::to('whmast/'.$dbwh->id) }}"
				data-id={{$dbwh->id}}>
				<i class="fa fa-trash"></i> Delete
				</button>
				
				
					
			</td>
		</tr>
		@endforeach

		
		
	</tbody>
</table>