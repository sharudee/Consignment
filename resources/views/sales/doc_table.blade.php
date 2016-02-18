<table class="table solsoTable table-hover ">
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
		<tr>
			<td>CO</td>
			<td>Consignment Order</td>
			<td>CO</td>
			<td>REC</td>
			<td>HO</td>
			<td>
				<a href="#" class="btn btn-sm btn-warning"> Update </a>
				<form method="POST" action ="#" style="display:inline-block">
					<input  name="_method" type="hidden"  value="DELETE">
					<input type ="hidden" name="_token"  value="{{csrf_token()}}">
					<button class="btn btn-sm btn-danger"> Delete </button>
				</form>
				
			</td>
		</tr>

		<tr>
			<td>DO</td>
			<td>Sales Order</td>
			<td>DO</td>
			<td>REC</td>
			<td>HO</td>
			<td>
				<a href="#" class="btn btn-sm btn-warning"> Update </a>
				<form method="POST" action ="#" style="display:inline-block">
					<input  name="_method" type="hidden"  value="DELETE">
					<input type ="hidden" name="_token"  value="{{csrf_token()}}">
					<button class="btn btn-sm btn-danger"> Delete </button>
				</form>
			</td>
		</tr>

		
	</tbody>
</table>