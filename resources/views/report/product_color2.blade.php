<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h4 class="modal-title">Color</h4>
</div>
<div class="modal-body">
	<table class="table table-border">
				<tbody>
					
					@foreach($color as $dbarr)
					<tr>
						<td>
							<div class="radio">
								<label>
									<input type="radio" name="radcolor2"    value="{{$dbarr->pdcolor_code}}">
									{{$dbarr->pdcolor_code}}
								</label>
							</div>
						</td>
						<td>{{$dbarr->pdcolor_desc}}</td>
						
					</tr>
					@endforeach					
				</tbody>
	</table>		
</div>
<div class="modal-footer">
	<button type="button" id="submitcolor2" class="btn btn-primary">Submit</button>
	<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
	
</div>
