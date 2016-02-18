<div class="table-responsive">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Group Code</th>
			</tr>
			<tr>
				<th>Description</th>
			</tr>
		</thead>
		<tbody>
			@foreach($custgrp as $dbcust)
			<tr>
				<td>{{$dbcust->custgrp_code}}</td>
				<td>{{$dbcust->custgrp_name}}</td>
			</tr>
			@endforeach
	</tbody>
	</table>
</div>