<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h4 class="modal-title">ข้อมูลของแถม</h4>
</div>
<div class="modal-body">
	<table class="table table-bordered">
		<tbody>
			@foreach($prod as $dbarr)
			<tr>
				<td>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="premium[]" 
							data-proname="{{$dbarr->product_set_desc}}" 
							data-prodset = "{{$dbarr->pmt_product_set_id}}"
							data-qty="{{$dbarr->set_qty}}"
							data-price="0"
							data-pmprice = "{{$dbarr->set_price_amt}}"
							value="{{$dbarr->product_set_code}}">
							{{$dbarr->product_set_code}}
						</label>
					</div>
				</td>
				<td>{{$dbarr->product_set_desc}}</td>
				<td>{{$dbarr->set_qty}}</td>
				<td>{{$dbarr->set_price_amt}}</td>
				
			</tr>
			@endforeach
			
			
		</tbody>
	</table>
</div>
<div class="modal-footer">
	<button type="button" id="submitpremium" class="btn btn-primary">Submit</button>
	<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
</div>