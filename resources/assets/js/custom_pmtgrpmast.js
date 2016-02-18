$(function(){
	// Event newpo Link
	$("a[rel=addpmtgrpmast]").click(function(){
		$.get('addpmtgrpmastform',function(data){
			$("#pmtgrpmastmodal").html(data);
			// เปิด modal
			$(".pmtgrpmastmodal").modal('show');
		});
	});



/*	$('body').on("click",'button#editpmtgrpmast',function(){

		$.get('editpmtgrpmastform',function(data){
			$("#pmtgrpmastmodal_edit").html(data);
			// เปิด modal
			$(".pmtgrpmastmodal_edit").modal('show');
		});

	});*/

	$('body').on("click",'button#deleteID',function(){

					// แสดง popup ด้วย sweet alert
					swal("Record Save!", "ลบรายการเรียบร้อย!", "success");

	});

	$('body').on("click",'button#savepmtgrpmast',function(){


		var group_code   		= $("input#txt_pmt_group_code_ID").val();
		var group_name  	= $("input#txt_pmt_group_name_ID").val();

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

			url:'submitaddpmtgrpmastform',
			type:'POST',
			cache:false,
			data:{
				_token:_token,
				groupcodeKey:group_code,
				groupnameKey:group_name,
				RecStatusKey:RecStatus
			},

			success: function(data)
			{
				if(data=="Insert_Success")
				{
					// แสดง popup ด้วย sweet alert
					swal("Record Save!", "บันทึกรายการเรียบร้อย!", "success");
					// ปิด modal
					$(".pmtgrpmastmodal").modal('hide');
					window.location.href = "pmtgrpmast";
				}
			},

		},"json");
	});


});