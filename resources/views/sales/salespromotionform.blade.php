<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h4 class="modal-title">Promotion</h4>
</div>
<div class="modal-body">
	<table class="table table-border">
				<tbody>
					
					@foreach($pmt as $dbarr)
					<tr>
						<td>
							<div class="radio">
								<label>
									<input type="radio" name="radpmt" data-gp="{{$dbarr->gp_amt}}" value="{{$dbarr->pmt_no}}">
									{{$dbarr->pmt_no}}
								</label>
							</div>
						</td>
						<td>{{$dbarr->pmt_name}}</td>
					</tr>
					@endforeach
					
				</tbody>
	</table>		
</div>
<div class="modal-footer">
	<button type="button" id="submitpmt" class="btn btn-primary">Submit</button>
	<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
	
</div>
