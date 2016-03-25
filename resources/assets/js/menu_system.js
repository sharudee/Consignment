$(function(){
	// Event newpo Link
	$("a[rel=newsystem]").click(function(){
		$.get('systemnewform',function(data){
			$("#systemmodal").html(data);
			// เปิด modal
			$(".systemmodal").modal('show');
		});
	});





	$('body').on("click",'button#SaveEditSystem',function(){

		var Su_System_Id    = $("input#Su_System_Id").val();
		var SystemCode 		= $("input#txt_SystemCode").val();
		var SystemNameThai	= $("input#txt_SystemNameThai").val();
		var SystemNameEng	= $("input#txt_SystemNameEng").val();
		var SystemSeq		= $("input#txt_SystemSeq").val();
		//var RecordStatus	= $("input#txtRecStatusID").val();
		//updated_by
		//updated_at
		//created_by
		//reated_at

		//---Dropdown list
		var RecordStatus      = $("select#txtRecStatusID").val();   

		var _token = $("input[name=_token]").val();

		$.ajax({

			beforeSend:function() { 
				// Loading...
			},

			complete:function() {
				// Close Loading...
			},

			url:'summiteditsystem',
			type:'POST',
			cache:false,
			data:{
				_token:_token,
				Su_System_Id:Su_System_Id,
				SystemCode:SystemCode,
				SystemNameThai:SystemNameThai,
				SystemNameEng:SystemNameEng,
				SystemSeq:SystemSeq,
				RecordStatus:RecordStatus
			},

			success: function(data)
			{
				if(data=="Insert_Success")
				{
					// แสดง popup ด้วย sweet alert
					swal("Record Save!", "บันทึก การแก้ไขข้อมูลเรียบร้อย!", "success");
					// ปิด modal
					$(".systemmodal").modal('hide');
					window.location.href = "getsystemlist";
				}
			},

		},"json");
	});

	$('body').on("click",'button#SaveDeleteSystem',function(){

		var Su_System_Id    = $("input#Su_System_Id").val();
		var SystemCode 		= $("input#txt_SystemCode").val();
		var SystemNameThai	= $("input#txt_SystemNameThai").val();
		var SystemNameEng	= $("input#txt_SystemNameEng").val();
		var SystemSeq		= $("input#txt_SystemSeq").val();
		//var RecordStatus	= $("input#txtRecStatusID").val();
		//updated_by
		//updated_at
		//created_by
		//reated_at

		//---Dropdown list
		var RecordStatus      = $("select#txtRecStatusID").val();   

		var _token = $("input[name=_token]").val();

		$.ajax({

			beforeSend:function() { 
				// Loading...
			},

			complete:function() {
				// Close Loading...
			},

			url:'summitdeletesystem',
			type:'PUT',
			cache:false,
			data:{
				_token:_token,
				Su_System_Id:Su_System_Id,
				SystemCode:SystemCode,
				SystemNameThai:SystemNameThai,
				SystemNameEng:SystemNameEng,
				SystemSeq:SystemSeq,
				RecordStatus:RecordStatus
			},

			success: function(data)
			{
				if(data=="Insert_Success")
				{
					// แสดง popup ด้วย sweet alert
					swal("Record Save!", "บันทึก การแก้ไขข้อมูลเรียบร้อย!", "success");
					// ปิด modal
					$(".systemmodal").modal('hide');
					window.location.href = "getsystemlist";
				}
			},

		},"json");
	});




	$('body').on("click",'button#SaveNewSystem',function(){

		var SystemCode 		= $("input#txt_SystemCode").val();
		var SystemNameThai	= $("input#txt_SystemNameThai").val();
		var SystemNameEng	= $("input#txt_SystemNameEng").val();
		var SystemSeq		= $("input#txt_SystemSeq").val();
		
		//updated_by
		//updated_at
		//created_by
		//reated_at

		//---Dropdown list
		var RecordStatus      = $("select#txtRecStatusID").val();  

		var _token = $("input[name=_token]").val();

		$.ajax({

			beforeSend:function() { 
				// Loading...
			},

			complete:function() {
				// Close Loading...
			},

			url:'summitnewsystem',
			type:'POST',
			cache:false,
			data:{
				_token:_token,
				SystemCode:SystemCode,
				SystemNameThai:SystemNameThai,
				SystemNameEng:SystemNameEng,
				SystemSeq:SystemSeq,
				RecordStatus:RecordStatus
			},

			success: function(data)
			{
				if(data=="Insert_Success")
				{
					// แสดง popup ด้วย sweet alert
					swal("Record Save!", "บันทึกรายการเรียบร้อย!", "success");
					// ปิด modal
					$(".systemmodal").modal('hide');
					window.location.href = "getsystemlist";
				}else
				{
					swal("เพิ่มข้อมูล ไม่สำเร็จ!", "กรุณาระบุ รหัสระบบ ใหม่อีกครั้ง", "error");
				}
			},

		},"json");
	});





});