<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h4 class="modal-title">Design</h4>
</div>
<div class="modal-body">
	<table class="table table-border">
				<tbody>
					
					@foreach($design as $dbarr)
					<tr>
						<td>
							<div class="radio">
								<label>
									<input type="radio" name="raddesign2"    value="{{$dbarr->pddsgn_code}}">
									{{$dbarr->pddsgn_code}}
								</label>
							</div>
						</td>
						<td>{{$dbarr->pddsgn_desc}}</td>
						
					</tr>
					@endforeach					
				</tbody>
	</table>		
</div>
<div class="modal-footer">
	<button type="button" id="submitdesign2" class="btn btn-primary">Submit</button>
	<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
	
</div>
