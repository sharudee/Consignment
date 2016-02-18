<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h4 class="modal-title">Promotion</h4>
</div>
<div class="modal-body">
	<table class="table table-border">
				<tbody>
					
					@foreach($prov as $dbarr)
					<tr>
						<td>
							<div class="radio">
								<label>
									<input type="radio" name="radprov" data-provname="{{$dbarr->prov_name}}"   value="{{$dbarr->prov_code}}">
									{{$dbarr->prov_name}}
								</label>
							</div>
						</td>
						
					</tr>
					@endforeach					
				</tbody>
	</table>		
</div>
<div class="modal-footer">
	<button type="button" id="submitprov" class="btn btn-primary">Submit</button>
	<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
	
</div>
