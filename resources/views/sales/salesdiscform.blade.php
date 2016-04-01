<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h4 class="modal-title">Discount</h4>
</div>
<div class="modal-body">
	<table class="table table-border">
				<thead>	
				<tr>
					<th style="width: 200px;">ประเภทส่วนลด</th>
					<th>ยอดซื้อ</th>
					<th>ส่วนลด</th>
					
				</thead>		
				<tbody>
					
					
					@foreach($disc as $dbarr)
					<?php
					if($dbarr->discount_type=="BAHT")
					{
						$disc_amt = $dbarr->discount_amt;
						$uom = "บาท";
					}
					else
					{
						$disc_amt = number_format($dbarr->discount_percen,2);
						$uom = "%";
					}

					?>
					<tr>
						<td>
							<div class="radio">
								<label>
									<input type="radio" name="raddisc" data-discamt="{{$disc_amt}}"  data-dicstype="{{$dbarr->discount_type}}"  value="{{$dbarr->transaction_code}}">
									{{$dbarr->trnsaction_name}}
								</label>
							</div>
						</td>
						<td>{{$dbarr->purchase_rate_amt}}</td>
						<td>{{$disc_amt . ' ' . $uom}}</td>
					
						
					</tr>
					@endforeach					
				</tbody>
	</table>		
</div>
<div class="modal-footer">
	<button type="button" id="submitpay" class="btn btn-primary">Submit</button>
	<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
	
</div>
