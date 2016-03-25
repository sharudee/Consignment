<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h4 class="modal-title">Product Code</h4>
</div>
<div class="modal-body">
	<table class="table table-border">
				<tbody>
					
					@foreach($prod_code as $dbarr)
					<tr>
						<td>
							<div class="radio">
								<label>
									<input type="radio" name="radcode2"    value="{{$dbarr->prod_code}}">
									{{$dbarr->prod_code}}
								</label>
							</div>
						</td>
						<td>{{$dbarr->prod_tname}}</td>
						
					</tr>
					@endforeach					
				</tbody>
	</table>		
</div>
<div class="modal-footer">
	<button type="button" id="submitcode2" class="btn btn-primary">Submit</button>
	<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
	
</div>
