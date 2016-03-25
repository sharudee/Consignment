<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h4 class="modal-title">Customer</h4>
</div>
<div class="modal-body">
	<table class="table table-border">
				<tbody>
					
					@foreach($cust as $dbarr)
					<tr>
						<td>
							<div class="radio">
								<label>
									<input type="radio" name="radcust2"    value="{{$dbarr->entity_code}}">
									{{$dbarr->entity_code}}
								</label>
							</div>
						</td>
						<td>{{$dbarr->entity_tname}}</td>
						
					</tr>
					@endforeach					
				</tbody>
	</table>		
</div>
<div class="modal-footer">
	<button type="button" id="submitcust2" class="btn btn-primary">Submit</button>
	<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
	
</div>
