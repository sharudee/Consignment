<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h4 class="modal-title">Promotion</h4>
</div>
<div class="modal-body">
	<table class="table table-border">
				<tbody>
					
					@foreach($title as $dbarr)
					<tr>
						<td>
							<div class="radio">
								<label>
									<input type="radio" id="radtitle" name="radtitle"  value="{{$dbarr->title_name}}">
									{{$dbarr->title_name}}
								</label>
							</div>
						</td>
						
					</tr>
					@endforeach					
				</tbody>
	</table>		
</div>
<div class="modal-footer">
	<button type="button" id="submittitle" class="btn btn-primary">Submit</button>
	<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
	
</div>
