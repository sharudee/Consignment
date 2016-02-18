<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h4 class="modal-title">Payment</h4>
</div>
<div class="modal-body">
	<table class="table table-border">
				<tbody>
					
					@foreach($pay as $dbarr)
					<tr>
						<td>
							<div class="radio">
								<label>
									<input type="radio" name="radpay" data-payname="{{$dbarr->trnsaction_name}}"   value="{{$dbarr->transaction_code}}">
									{{$dbarr->trnsaction_name}}
								</label>
							</div>
						</td>
						
					</tr>
					@endforeach					
				</tbody>
	</table>		
</div>
<div class="modal-footer">
	<button type="button" id="submitpay" class="btn btn-primary">Submit</button>
	<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
	
</div>
