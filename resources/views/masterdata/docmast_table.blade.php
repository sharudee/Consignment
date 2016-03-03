<table class="table solsoTable table-hover {{!empty($refresh) ? 'solsoRefresh' : '' }}" data-all="{{sizeof($docmast)}}">
	<thead>
		<tr>
			<th>Doc Code</th>
			<th>Description</th>
			<th>Doc Ctrl</th>
			<th>Stock Code</th>
			<th>Post Type</th>
			<th>Acttion</th>
		</tr>
	</thead>
	<tbody>
		@foreach($docmast as $crt => $v)
		<tr>
			<td>{{ $v->doc_code }}</td>
			<td>{{ $v->doc_desc }}</td>
			<td>{{ $v->doc_ctrl }}</td>
			<td>{{ $v->ictran_code }}</td>
			<td>{{ $v->post_type }}</td>
			<td>
				
				<button type="button" class="btn btn-primary solsoShowModal"  
				data-toggle="modal" data-target="#solsoCrudModal" 
				data-href="{{URL::to('docmast/'.$v->id.'/edit')}}" data-modal-title="Edit Doc Control"
				data-id={{$v->id}}>
				<i class="fa fa-pencil"></i> Edit</button>
				

				
				<button type="button" class="btn btn-danger solsoConfirm" 
				data-toggle="modal" data-target="#solsoDeleteModal" 
				data-href="{{ URL::to('docmast/'.$v->id) }}"
				data-id={{$v->id}}>
				<i class="fa fa-trash"></i> Delete
				</button>
				
				
					
			</td>
				
			</td>
		</tr>
		@endforeach

		

		
	</tbody>
</table>