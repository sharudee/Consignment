<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h4 class="modal-title">Brand</h4>
</div>
<div class="modal-body">
	<table class="table table-border">
				<tbody>
					
					@foreach($brand as $dbarr)
					<tr>
						<td>
							<div class="radio">
								<label>
									<input type="radio" name="radbrand1"    value="{{$dbarr->pdbrnd_code}}">
									{{$dbarr->pdbrnd_code}}
								</label>
							</div>
						</td>
						<td>{{$dbarr->pdbrnd_desc}}</td>
						
					</tr>
					@endforeach					
				</tbody>
	</table>		
</div>
<div class="modal-footer">
	<button type="button" id="submitbrand1" class="btn btn-primary">Submit</button>
	<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
	
</div>
