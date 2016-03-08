$(function(){
	// Event newpo Link
	$("a[rel=newmenu]").click(function(){
		$.get('menunewform',function(data){
			$("#menumodal").html(data);
			// เปิด modal
			$(".menumodal").modal('show');
		});
	});


	$('body').on("click",'button#SaveEditMenu',function(){

		var Su_Menu_Id    	= $("input#Su_Menu_Id").val();
		var MenuLevel 		= $("input#MenuLevel").val();
		var MenuName		= $("input#MenuName").val();
		var MenuSeq			= $("input#MenuSeq").val();
		var Su_System_Id	= $("input#Su_System_Id").val();
		var ProgramCode		= $("input#ProgramCode").val();
		var icon_class_name	= $("input#icon_class_name").val();

		//var SortSeq				= $("input#SortSeq").val();
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

			url:'summiteditmenu',
			type:'POST',
			cache:false,
			data:{
				_token:_token,
				Su_Menu_Id:Su_Menu_Id,
				MenuLevel:MenuLevel,
				MenuName:MenuName,
				MenuSeq:MenuSeq,
				Su_System_Id:Su_System_Id,
				ProgramCode:ProgramCode,
				icon_class_name:icon_class_name,
				RecordStatus:RecordStatus
			},

			success: function(data)
			{
				if(data=="Insert_Success")
				{
					// แสดง popup ด้วย sweet alert
					swal("Record Save!", "บันทึก การแก้ไขข้อมูลเรียบร้อย!", "success");
					// ปิด modal
					$(".menumodal").modal('hide');
					window.location.href = "getmenulist";
				}
			},

		},"json");
	});

	$('body').on("click",'button#SaveDeleteMenu',function(){

		var Su_Menu_Id    	= $("input#Su_Menu_Id").val();
		var MenuLevel 		= $("input#MenuLevel").val();
		var MenuName		= $("input#MenuName").val();
		var MenuSeq			= $("input#MenuSeq").val();
		var Su_System_Id	= $("input#Su_System_Id").val();
		var ProgramCode		= $("input#ProgramCode").val();
		var icon_class_name	= $("input#icon_class_name").val();

		//var SortSeq				= $("input#SortSeq").val();
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

			url:'summitdeletemenu',
			type:'PUT',
			cache:false,
			data:{
				_token:_token,
				Su_Menu_Id:Su_Menu_Id,
				MenuLevel:MenuLevel,
				MenuName:MenuName,
				MenuSeq:MenuSeq,
				Su_System_Id:Su_System_Id,
				ProgramCode:ProgramCode,
				icon_class_name:icon_class_name,
				RecordStatus:RecordStatus
			},

			success: function(data)
			{
				if(data=="Insert_Success")
				{
					// แสดง popup ด้วย sweet alert
					swal("Record Save!", "ลบข้อมูลเรียบร้อย!", "success");
					// ปิด modal
					$(".menumodal").modal('hide');
					window.location.href = "getmenulist";
				}
			},

		},"json");
	});


	$('body').on("click",'button#SaveNewMenu',function(){

		var MenuLevel 		= $("input#MenuLevel").val();
		var MenuName		= $("input#MenuName").val();
		var MenuSeq			= $("input#MenuSeq").val();
		var Su_System_Id	= $("input#Su_System_Id").val();
		var ProgramCode		= $("input#ProgramCode").val();
		var icon_class_name	= $("input#icon_class_name").val();

		//var SortSeq				= $("input#SortSeq").val();
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

			url:'summitnewrole',
			type:'POST',
			cache:false,
			data:{
				_token:_token,
				MenuLevel:MenuLevel,
				MenuName:MenuName,
				MenuSeq:MenuSeq,
				Su_System_Id:Su_System_Id,
				ProgramCode:ProgramCode,
				icon_class_name:icon_class_name,
				RecordStatus:RecordStatus
			},

			success: function(data)
			{
				if(data=="Insert_Success")
				{
					// แสดง popup ด้วย sweet alert
					swal("Record Save!", "บันทึกรายการเรียบร้อย!", "success");
					// ปิด modal
					$(".menumodal").modal('hide');
					window.location.href = "getmenulist";
				}
			},

		},"json");
	});





});