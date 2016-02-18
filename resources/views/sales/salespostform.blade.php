<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h4 class="modal-title">Promotion</h4>
</div>
<div class="modal-body">
	<table class="table table-border">
				<tbody>
					
					@foreach($post as $dbarr)
					<tr>
						<td>
							<div class="radio">
								<label>
									<input type="radio" name="radpost"    value="{{$dbarr->post_code}}">
									{{$dbarr->post_code}}
								</label>
							</div>
						</td>
						
					</tr>
					@endforeach					
				</tbody>
	</table>		
</div>
<div class="modal-footer">
	<button type="button" id="submitpost" class="btn btn-primary">Submit</button>
	<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
	
</div>
