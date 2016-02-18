<table class="table solsoTable table-hover {{!empty($refresh) ? 'solsoRefresh' : '' }}" data-all="{{sizeof($entity)}}">
	<thead>
		<tr>
			
			<th>Entity  Code </th>
			<th>Description</th>
			<th>COS No.</th>
			<th>Vat Rate</th>
			

			<th class="small">Action</th>
			<th class="small">Action</th>
			<th class="small">Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach($entity as $crt => $v)
		<tr>
			
			<td>{{$v->entity_code }}</td>
			<td>{{$v->entity_tname}}</td>
			<td>{{$v->cos_no}}</td>
			<td>{{$v->tax_rate}}</td>
			

			<td>
				<button type="button" class="btn btn-info solsoShowModal"  
				data-toggle="modal" data-target="#solsoCrudModal" 
				data-href="{{URL::to('entity/'.$v->id)}}" data-modal-title="Show Entity" >
				<i class="fa fa-eye"></i> Show</button>
				</td>
			<td>
				<button type="button" class="btn btn-primary solsoShowModal"  
				data-toggle="modal" data-target="#solsoCrudModal" 
				data-href="{{URL::to('entity/'.$v->id.'/edit')}}" data-modal-title="Edit Entity"
				data-id={{$v->id}}>
				<i class="fa fa-pencil"></i> Edit</button>
				</td>
			</td>
			<td>

				
				<button type="button" class="btn btn-danger solsoConfirm" 
				data-toggle="modal" data-target="#solsoDeleteModal" 
				data-href="{{ URL::to('entity/'.$v->id) }}"
				data-id={{$v->id}}>
				<i class="fa fa-trash"></i> Delete
				</button>
				

				
				
				
					
			</td>
				
		</tr>
		@endforeach
	</tbody>
</table>