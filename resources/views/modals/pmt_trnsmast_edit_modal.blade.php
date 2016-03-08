

<div class="modal fade" id="solsoCrudModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">แก้ไข ประเภทรายการ</h4>
			</div>
			<div class="modal-body">
				<div class="row solsoShowForm"></div>
			</div>
			<div class="modal-footer">
				<button type="submit" id="SaveEditPmtTransMastModel" class="btn btn-primary"><i class="fa fa-save"></i>บันทึก</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>ปิด</button>
			</div>
		</div>
	</div>
</div>

<!--2 popup Modal mstgrp-->
<div class="modal fade popup_mstgrpmodal2" data-backdrop="static">
    <div class="modal-dialog modal-md">
        <div class="modal-content" id="popup_mstgrpmodal2">

        </div>
    </div>
</div>




@section('scripts')
<script type="text/javascript">
	$(document).ready(function(){

		$('body').on('click','a[rel=clickmstgrp_modal2]',function(){
			$.get('popup_mstgrp_modal_form',function(data){
				$("#popup_mstgrpmodal2").html(data);
			// เปิด modal
			$(".popup_mstgrpmodal2").modal('show');
			});
		});
			// Event submit Customer
		$('body').on('click','button#submit_selectmstgrp',function(){
			var txt_pmt_group_code = $('input[name=radcus]:checked').val();
			var txt_pmtgrp_name = $('input[name=radcus]:checked').attr('data-pmtgroupname');
			$('input[name=txt_pmt_group_code]').val(txt_pmt_group_code);
			$('input[name=txt_pmtgrp_name]').val(txt_pmtgrp_name);
			$(".popup_mstgrpmodal2").modal('hide');
		});

		
	});
</script>
@stop