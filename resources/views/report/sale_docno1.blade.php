<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h4 class="modal-title">Doc No</h4>
</div>
<div class="modal-body">
	<table class="table table-border">
				<tbody>
					
					@foreach($docno as $dbarr)
					<tr>
						<td>
							<div class="radio">
								<label>
									<input type="radio" name="radno1"    value="{{$dbarr->doc_no}}">
									{{$dbarr->doc_no}}
								</label>
							</div>
						</td>
						<td>{{$dbarr->doc_date}}</td>
						<td>{{$dbarr->cust_code}}</td>
						
					</tr>
					@endforeach					
				</tbody>
	</table>		
</div>
<div class="modal-footer">
	<button type="button" id="submitno1" class="btn btn-primary">Submit</button>
	<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
	
</div>
