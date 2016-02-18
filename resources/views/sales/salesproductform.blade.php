<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h4 class="modal-title">ข้อมูลสินค้า</h4>
</div>
<div class="modal-body">
	<table class="table table-bordered">
		<tbody>
			
			@foreach($prod as $dbarr)
			
			
			<tr>
				<td>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="product[]" 
							data-proname="{{$dbarr->pdmodel_desc}}" 
							data-prodset = "{{$dbarr->pmt_product_set_id}}"
							data-qty="1"
							data-price="{{$dbarr->special1_price_amt}}"
							data-disc="{{$dbarr->discount_amt}}"
							data-pmprice ="{{$dbarr->pm_total_price}}"
							value="{{$dbarr->pdmodel_code}}">
							{{$dbarr->pdmodel_code}}
						</label>
					</div>
				</td>
				<td>{{$dbarr->pdmodel_desc}}</td>
				<td>{{$dbarr->pdsize_desc}}</td>
				<td>{{$dbarr->special1_price_amt}}</td>
				<td><input type="checkbox" name="nopremium[]" <?php if($dbarr->discount_amt == 0) { echo "disabled"; }  ?>> No Premium</td>
				
				
			</tr>
			
			@endforeach
			
			
		</tbody>
	</table>
</div>
<div class="modal-footer">
	<button type="button" id="submitproduct" class="btn btn-primary">Submit</button>
	<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
</div>