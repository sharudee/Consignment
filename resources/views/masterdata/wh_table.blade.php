<table class="table solsoTable table-hover ">
	<thead>
		<tr>
			<th>WH   Code</th>
			<th>Description</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>FB</td>
			<td>FG - Bedding</td>
			<td>
				<a href="#" class="btn btn-sm btn-primary"> Read </a>
				<a href="#" class="btn btn-sm btn-warning"> Update </a>
				<form method="POST" action ="#" style="display:inline-block">
					<input  name="_method" type="hidden"  value="DELETE">
					<input type ="hidden" name="_token"  value="{{csrf_token()}}">
					<button class="btn btn-sm btn-danger"> Delete </button>
				</form>
				
			</td>
		</tr>

		<tr>
			<td>FH</td>
			<td>FG - Home Fashion</td>
			<td>
				<a href="#" class="btn btn-sm btn-primary"> Read </a>
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