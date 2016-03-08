$(function(){
	// Event newpo Link
	$("a[rel=newrole]").click(function(){
		$.get('rolenewform',function(data){
			$("#rolemodal").html(data);
			// เปิด modal
			$(".rolemodal").modal('show');
		});
	});


	$('body').on("click",'button#SaveEditRole',function(){

		var Su_Role_id    = $("input#Su_Role_id").val();
		var RoleName 		= $("input#RoleName").val();
		var RoleDescription	= $("input#RoleDescription").val();
		var PermissionsType			= $("input#PermissionsType").val();
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

			url:'summiteditrole',
			type:'POST',
			cache:false,
			data:{
				_token:_token,
				Su_Role_id:Su_Role_id,
				RoleName:RoleName,
				RoleDescription:RoleDescription,
				PermissionsType:PermissionsType,
				RecordStatus:RecordStatus
			},

			success: function(data)
			{
				if(data=="Insert_Success")
				{
					// แสดง popup ด้วย sweet alert
					swal("Record Save!", "บันทึก การแก้ไขข้อมูลเรียบร้อย!", "success");
					// ปิด modal
					$(".rolemodal").modal('hide');
					window.location.href = "getrolelist";
				}
			},

		},"json");
	});

	$('body').on("click",'button#SaveDeleteRole',function(){

		var Su_Role_id    = $("input#Su_Role_id").val();
		var RoleName 		= $("input#RoleName").val();
		var RoleDescription	= $("input#RoleDescription").val();
		var PermissionsType			= $("input#PermissionsType").val();
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

			url:'summitdeleterole',
			type:'PUT',
			cache:false,
			data:{
				_token:_token,
				Su_Role_id:Su_Role_id,
				RoleName:RoleName,
				RoleDescription:RoleDescription,
				PermissionsType:PermissionsType,
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
					window.location.href = "getrolelist";
				}
			},

		},"json");
	});


	$('body').on("click",'button#SaveNewRole',function(){

		var RoleName 		= $("input#RoleName").val();
		var RoleDescription	= $("input#RoleDescription").val();
		var PermissionsType			= $("input#PermissionsType").val();
		
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
				RoleName:RoleName,
				RoleDescription:RoleDescription,
				PermissionsType:PermissionsType,
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
					window.location.href = "getrolelist";
				}
			},

		},"json");
	});





});