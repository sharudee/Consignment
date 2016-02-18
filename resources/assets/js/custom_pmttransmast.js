$(function(){
	// Event newpo Link
	$("a[rel=clickpmttrnsmast]").click(function(){
		$.get('addpmttrnsmastform',function(data){
			$("#PmtTransMastModel").html(data);
			// เปิด modal
			$(".PmtTransMastModel").modal('show');
		});
	});




	// Popup Add Mst Grp Data
	$('body').on('click','a[rel=clickmstgrp_modal]',function(){
		$.get('popup_mstgrp_modal_form',function(data){
			$("#popup_mstgrpmodal").html(data);
			// เปิด modal
			$(".popup_mstgrpmodal").modal('show');
		});
	});

	// Event submit Customer
	$('body').on('click','button#submit_selectmstgrp',function(){
		var txt_pmt_group_code = $('input[name=radcus]:checked').val();
		var txt_pmtgrp_name = $('input[name=radcus]:checked').attr('data-pmtgroupname');
		$('input[name=txt_pmt_group_code]').val(txt_pmt_group_code);
		$('input[name=txt_pmtgrp_name]').val(txt_pmtgrp_name);
		$(".popup_mstgrpmodal").modal('hide');
	});



	$('body').on("click",'button#SavePmtTransMastModel',function(){


		var txt_transaction_code   	= $("input#txt_transaction_code").val();
		var txt_trnsaction_name  	= $("input#txt_trnsaction_name").val();
		var txt_pmt_group_code  	= $("input#txt_pmt_group_code").val();
		//---Dropdown list
		var RecStatus      = $("select#txtRecStatusID").val();  

		var _token = $("input[name=_token]").val();

		$.ajax({

			beforeSend:function() { 
				// Loading...
			},

			complete:function() {
				// Close Loading...
			},

			url:'submitaddpmttrnsmastform',
			type:'POST',
			cache:false,
			data:{
				_token:_token,
				txttransactioncodeKey:txt_transaction_code,
				txtpmtgroupcodekey:txt_pmt_group_code,
				txttrnsactionnamekey:txt_trnsaction_name,
				RecStatusKey:RecStatus
			},

			success: function(data)
			{
				if(data=="Insert_Success")
				{
					// แสดง popup ด้วย sweet alert
					swal("Record Save!", "บันทึกรายการเรียบร้อย!", "success");
					// ปิด modal
					$(".PmtTransMastModel").modal('hide');
					window.location.href = "pmttrnsmast";
				}
			},

		},"json");
	});





});