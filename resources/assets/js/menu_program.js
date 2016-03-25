$(function(){
	// Event newpo Link
	$("a[rel=newprogram]").click(function(){
		$.get('programnewform',function(data){
			$("#programmodal").html(data);
			// เปิด modal
			$(".programmodal").modal('show');
		});
	});


	$('body').on("click",'button#SaveEditProgram',function(){

		var Su_ProgramList_Id    = $("input#Su_ProgramList_Id").val();
		var ProgramCode 		= $("input#ProgramCode").val();
		var ProgramDescription	= $("input#ProgramDescription").val();
		var RouteUrl			= $("input#RouteUrl").val();
		var SortSeq				= $("input#SortSeq").val();
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

			url:'summiteditprogram',
			type:'POST',
			cache:false,
			data:{
				_token:_token,
				Su_ProgramList_Id:Su_ProgramList_Id,
				ProgramCode:ProgramCode,
				ProgramDescription:ProgramDescription,
				RouteUrl:RouteUrl,
				SortSeq:SortSeq,
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
					window.location.href = "getprogramlist";
				}
			},

		},"json");
	});

	$('body').on("click",'button#SaveDeleteProgram',function(){

		var Su_ProgramList_Id    = $("input#Su_ProgramList_Id").val();
		var ProgramCode 		= $("input#ProgramCode").val();
		var ProgramDescription	= $("input#ProgramDescription").val();
		var RouteUrl			= $("input#RouteUrl").val();
		var SortSeq				= $("input#SortSeq").val();
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

			url:'summitdeleteprogram',
			type:'PUT',
			cache:false,
			data:{
				_token:_token,
				Su_ProgramList_Id:Su_ProgramList_Id,
				ProgramCode:ProgramCode,
				ProgramDescription:ProgramDescription,
				RouteUrl:RouteUrl,
				SortSeq:SortSeq,
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
					window.location.href = "getprogramlist";
				}
			},

		},"json");
	});


	$('body').on("click",'button#SaveNewProgram',function(){

		var ProgramCode 		= $("input#ProgramCode").val();
		var ProgramDescription	= $("input#ProgramDescription").val();
		var RouteUrl			= $("input#RouteUrl").val();
		var SortSeq				= $("input#SortSeq").val();
		
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

			url:'summitnewprogram',
			type:'POST',
			cache:false,
			data:{
				_token:_token,
				ProgramCode:ProgramCode,
				ProgramDescription:ProgramDescription,
				RouteUrl:RouteUrl,
				SortSeq:SortSeq,
				RecordStatus:RecordStatus
			},

			success: function(data)
			{
				if(data=="Insert_Success")
				{
					// แสดง popup ด้วย sweet alert
					swal("Record Save!", "บันทึกรายการเรียบร้อย!", "success");
					// ปิด modal
					$(".programmodal").modal('hide');
					window.location.href = "getprogramlist";
				}else
				{
					swal("เพิ่มข้อมูล ไม่สำเร็จ!", "กรุณาระบุ รหัสโปรแกรม ใหม่อีกครั้ง", "error");
				}
			},

		},"json");
	});





});