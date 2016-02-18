<br>
<p><a href ="{{URL::to('sales/addentity')}}" class="btn btn-sm btn-success">Add Entity</a></p>
<div class="table-responsive">
<table class="table table-hover">
	<thead>
		<tr>
			<th>Entity Code</th>
			<th>Description</th>
			<th>COS No.</th>
			<th>Vat Rate</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach($entity as $dbent)
		<tr>
			<td>{{$dbent->entity_code}}</td>
			<td>{{$dbent->entity_tname}}</td>
			<td>{{$dbent->cos_no}}</td>
			<td>{{$dbent->tax_rate}}</td>
			<td>
				<a href="sales/{{$dbent->id}}" class="btn btn-sm btn-primary"> <span class="glyphicon glyphicon-tasks"> </a>
				<a href="sales/{{$dbent->id}}/edit" class="btn btn-sm btn-warning"><span class="glyphicon glyphicon-pencil"></span></a>
				<form method="POST" action ="sales/{{$dbent->id}}" style="display:inline-block">
					<input  name="_method" type="hidden"  value="DELETE">
					<input type ="hidden" name="_token"  value="{{csrf_token()}}">
					<button class="btn btn-sm btn-danger"> <span class="glyphicon glyphicon-trash"></span></button>
				</form>
				
			</td>
		</tr>
		@endforeach
		
	</tbody>
</table>
</div>