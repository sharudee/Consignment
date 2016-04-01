<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h4 class="modal-title">รหัสไปรษณีย์</h4>
</div>
<div class="modal-body">
	<input type="text" id="postsearch" placeholder="Type to search">
	<br>
	<br>

	<table class="table table-border" id="postTable">

					
					@foreach($post as $dbarr)
					<tr>
						<td>
							<div class="radio">
								<label>
									<input type="radio" name="radpost"    value="{{$dbarr->post_code}}">
									{{$dbarr->post_code}}
								</label>
							</div>
						</td>
						
					</tr>
					@endforeach					

	</table>		
</div>
<div class="modal-footer">
	<button type="button" id="submitpost" class="btn btn-primary">Submit</button>
	<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
	
</div>

<script>
var $rows = $('#postTable tr');
	$('#postsearch').keyup(function() {
	    var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();

	    $rows.show().filter(function() {
	        var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
	        return !~text.indexOf(val);
	    }).hide();
	});	
</script>