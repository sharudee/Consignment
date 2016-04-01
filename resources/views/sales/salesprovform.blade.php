<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h4 class="modal-title">จังหวัด</h4>
</div>
<div class="modal-body">
	<input type="text" id="search" placeholder="Type to search">
	<br>
	<br>
	<table class="table table-border" id="provTable">
			
					
					@foreach($prov as $dbarr)
					<tr>
						<td>
							<div class="radio">
								<label>
									<input type="radio" name="radprov" data-provname="{{$dbarr->prov_name}}"   value="{{$dbarr->prov_code}}">
									{{$dbarr->prov_name}}
								</label>
							</div>
						</td>
						
						
					</tr>
					@endforeach					
				
	</table>		
</div>
<div class="modal-footer">
	<button type="button" id="submitprov" class="btn btn-primary">Submit</button>
	<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
	
</div>

<script>
var $rows = $('#provTable tr');
	$('#search').keyup(function() {
	    var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();

	    $rows.show().filter(function() {
	        var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
	        return !~text.indexOf(val);
	    }).hide();
	});	
</script>
