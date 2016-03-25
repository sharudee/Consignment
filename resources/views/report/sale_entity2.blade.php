<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h4 class="modal-title">Entity</h4>
</div>
<div class="modal-body">
	<table class="table table-border">
				<tbody>
					
					@foreach($entity as $dbarr)
					<tr>
						<td>
							<div class="radio">
								<label>
									<input type="radio" name="radentity2"    value="{{$dbarr->entity_code}}">
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
	<button type="button" id="submitentity2" class="btn btn-primary">Submit</button>
	<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
	
</div>
