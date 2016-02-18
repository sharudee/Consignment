<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h4 class="modal-title">ข้อมูลสินค้า</h4>
</div>
<div class="modal-body">
	<table class="table table-bordered">
		<tbody>
			
			<tr>
				<td>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="product[]" 
							data-proname="Mattress" 
							data-qty="1"
							data-price="12000"
							value="SLMTXXX">
							SLMTXXX
						</label>
					</div>
				</td>
				<td>Mattress</td>
				<td><input type="text" name="pqty[]" id="pqty" class="form-control" value="1"></td>
				<td><input type="text" name="pprice[]" id="pprice" class="form-control" value="12000"></td>
				
			</tr>
			
		</tbody>
	</table>
</div>
<div class="modal-footer">
	<button type="button" id="submitproduct" class="btn btn-primary">Submit</button>
	<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
</div>