$(function(){
	// Event newpo Link
	

	$("a[rel=newuser]").click(function(){
		$.get('usernewform',function(data){
			$("#usermodal").html(data);
			// เปิด modal
			$(".usermodal").modal('show');
		});
	});

	$("a[rel=repassword]").click(function(){
		$.get('repassword-form',function(data){
			$("#repasswordmodal").html(data);
			// เปิด modal
			$(".repasswordmodal").modal('show');
		});
	});

	$("a[rel=change_entity]").click(function(){
		$.get('ChangeEntity-form',function(data){
			$("#change_entity_modal").html(data);
			// เปิด modal
			$(".change_entity_modal").modal('show');
		});
	});



	// Popup Add Mst Grp Data
	$('body').on('click','a[rel=clickselect_role_modal]',function(){
		$.get('popup_role_modal_form',function(data){
			$("#popup_role_modal").html(data);
			// เปิด modal
			$(".popup_role_modal").modal('show');
		});
	});

		// Event submit Customer
	$('body').on('click','button#submit_select_role',function(){
		var Su_Role_id = $('input[name=radcus]:checked').val();
		var RoleDescription = $('input[name=radcus]:checked').attr('data-RoleDescription');
		var RoleName = $('input[name=radcus]:checked').attr('data-RoleName');
		$('input[name=Role_id]').val(Su_Role_id);
		$('input[name=RoleName]').val(RoleName);
		$('input[name=RoleDescription]').val(RoleDescription);
		$(".popup_role_modal").modal('hide');
	});



	$('body').on('click','a[rel=clike_entity_and_cust_allow_modal]',function(){
		$.get('popup_entity_and_cust_allow_form',function(data){
			$("#entity_and_cust_allow_modal").html(data);
			// เปิด modal
			$(".entity_and_cust_allow_modal").modal('show');
		});
	});

		// Event submit Customer
	$('body').on('click','button#submit_select_entitycust_allow_list',function(){
		var entity_code = $('input[name=radcus]:checked').val();
		var cust_code = $('input[name=radcus]:checked').attr('data-CustomerCode');
		var cust_name = $('input[name=radcus]:checked').attr('data-entitytname');
		$('input[name=entity_code]').val(entity_code);
		$('input[name=cust_code]').val(cust_code);
		$('input[name=cust_name]').val(cust_name);

		$(".entity_and_cust_allow_modal").modal('hide');
	});

	// Popup Add Mst Grp Data
	$('body').on('click','a[rel=clickselect_entity_modal]',function(){
		$.get('popup_emtity_modal_form',function(data){
			$("#popup_entity_modal").html(data);
			// เปิด modal
			$(".popup_entity_modal").modal('show');
		});
	});

		// Event submit Customer
	$('body').on('click','button#submit_select_entity',function(){
		var entity_code = $('input[name=radcus]:checked').val();
		var entity_tname = $('input[name=radcus]:checked').attr('data-entitytname');
		$('input[name=entity_code]').val(entity_code);
		$('input[name=entity_tname]').val(entity_tname);
		$(".popup_entity_modal").modal('hide');
	});

	// Popup Add Mst Grp Data
	$('body').on('click','a[rel=clickselect_cust_modal]',function(){
		$.get('popup_cust_modal_form/'+$('input#cust_grp_code').val(),function(data){
			$("#popup_cust_modal2").html(data);
			// เปิด modal
			$(".popup_cust_modal2").modal('show');
		});
	});

		// Event submit Customer
	$('body').on('click','button#submit_select_cust',function(){
		var entity_code = $('input[name=radcus]:checked').val();
		var entity_tname = $('input[name=radcus]:checked').attr('data-entitytname');
		$('input[name=cust_code]').val(entity_code);
		$('input[name=cust_name]').val(entity_tname);
		$(".popup_cust_modal2").modal('hide');
	});


//--------------Popup Depratment --------------------------------------
	$('body').on('click','a[rel=clickselect_dept]',function(){
		$.get('popup_dept_form',function(data){
			$("#popup_dept_modal").html(data);
			// เปิด modal
			$(".popup_dept_modal").modal('show');
		});
	});

		// Event submit select Popup Depratment
	$('body').on('click','button#submit_select_dept',function(){
		var dept_code = $('input[name=radcus]:checked').val();
		var dept_name = $('input[name=radcus]:checked').attr('data-deptname');
		$('input[name=current_dept_code_logon]').val(dept_code);
		$('input[name=dept_name]').val(dept_name);
		$(".popup_dept_modal").modal('hide');
	});

	$('body').on('click','a[rel=clickselect_custgrp_modal]',function(){
		$.get('getcustgrpform',function(data){
			$('input[name=cust_code]').val('');
			$('input[name=cust_name]').val('');
			$("#consignnee_grp_modal").html(data);
			// เปิด modal
			$(".consignnee_grp_modal").modal('show');
		});
	});

	
	
	$('body').on('click','button#submit_select_custgrp',function(){
		var custgrp_code = $('input[name=radcus]:checked').val();
		$('input[name=cust_grp_code]').val(custgrp_code);
		$(".consignnee_grp_modal").modal('hide');
	});




	$('body').on("click",'button#SaveEditUser',function(){
		var id              = $("input#id").val();
		var username     	= $("input#username").val();
		var fullname 		= $("input#fullname").val();
		var password		= $("input#password").val();
		var email 			= $("input#email").val();
		var tel				= $("input#tel").val();
		var role_id			= $("input#Role_id").val();
		var entity_logon_default	= $("input#entity_code").val();
		var cust_code_logon_default	= $("input#cust_code").val();
		var cust_name				= $("input#cust_name").val(); 
		var current_dept_code_logon = $("input#current_dept_code_logon").val(); 

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

			url:'submitedituser',
			type:'POST',
			cache:false,
			data:{
				_token:_token,
				id:id,
				username:username,
				fullname:fullname,
				password:password,
				email:email,
				tel:tel,
				cust_name:cust_name, 
				role_id:role_id,
				current_dept_code_logon:current_dept_code_logon,
				entity_logon_default:entity_logon_default,
				cust_code_logon_default:cust_code_logon_default,
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
					window.location.href = "getuserlist";
				}
			},

		},"json");
	});

	$('body').on("click",'button#SaveDeleteUser',function(){
		var id              = $("input#id").val();
		var username     	= $("input#username").val();
		var fullname 		= $("input#fullname").val();
		var password		= $("input#password").val();
		var email 			= $("input#email").val();
		var tel				= $("input#tel").val();
		var role_id			= $("input#Role_id").val();
		var entity_logon_default	= $("input#entity_code").val();
		var cust_code_logon_default	= $("input#cust_code").val();
		var current_dept_code_logon = $("input#current_dept_code_logon").val(); 

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

			url:'submitdeleteuser',
			type:'PUT',
			cache:false,
			data:{
				_token:_token,
				id:id,
				username:username,
				fullname:fullname,
				password:password,
				email:email,
				tel:tel,
				role_id:role_id,
				entity_logon_default:entity_logon_default,
				cust_code_logon_default:cust_code_logon_default,
				current_dept_code_logon:current_dept_code_logon,
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
					window.location.href = "getuserlist";
				}
			},

		},"json");
	});

	$('body').on("click",'button#SaveNewUser',function(){
		var username     	= $("input#username").val();
		var fullname 		= $("input#fullname").val();
		var password		= $("input#password").val();
		var email 			= $("input#email").val();
		var tel				= $("input#tel").val();
		var role_id			= $("input#Role_id").val();
		var entity_logon_default	= $("input#entity_code").val();
		var cust_code_logon_default	= $("input#cust_code").val();
		var cust_name				= $("input#cust_name").val(); 
		var current_dept_code_logon = $("input#current_dept_code_logon").val(); 

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

			url:'submitnewuser',
			type:'POST',
			cache:false,
			data:{
				_token:_token,
				username:username,
				fullname:fullname,
				password:password,
				email:email,
				tel:tel,
				cust_name:cust_name, 
				role_id:role_id,
				current_dept_code_logon:current_dept_code_logon,
				entity_logon_default:entity_logon_default,
				cust_code_logon_default:cust_code_logon_default,
				RecordStatus:RecordStatus
			},

			success: function(data)
			{
				if(data=="Insert_Success")
				{
					// แสดง popup ด้วย sweet alert
					swal("Record Save!", "บันทึก เพิ่มข้อมูลเรียบร้อย!", "success");
					// ปิด modal
					$(".menumodal").modal('hide');
					window.location.href = "getuserlist";
				}else
				{
					swal("เพิ่มรหัสผู้ใช้ ไม่สำเร็จ!", "กรุณาระบุ Username ใหม่อีกครั้ง", "error");
				}
			},

		},"json");
	});


//----------------Repassword ---------------------------------------
	$('body').on("click",'button#SaveRePassword',function(){
		var username     	= $("input#username").val();
		var password_old 		= $("input#password_old").val();
		var password_new		= $("input#password_new").val();  

		var _token = $("input[name=_token]").val();

		$.ajax({

			beforeSend:function() { 
				// Loading...
			},

			complete:function() {
				// Close Loading...
			},

			url:'submitRePassword',
			type:'POST',
			cache:false,
			data:{
				_token:_token,
				username:username,
				password_old:password_old,
				password_new:password_new
			},

			success: function(data)
			{
				if(data=="Insert_Success")
				{
					// แสดง popup ด้วย sweet alert
					swal("เปลี่ยนรหัสผ่าน!", "บันทึก เพิ่มข้อมูลเรียบร้อย!", "success");
					// ปิด modal
					$(".menumodal").modal('hide');
					window.location.href = "repassword";
				}else if (data=="length")
				{

					swal("เปลี่ยนรหัสผ่าน!", "กรุณาระบุความยาวตั้งแต่ 4-10 หลัก", "error");
					// ปิด modal
				}else if (data =="NO-USER"){

					swal("ท่านระบุ รหัสผู้ใช้และเบอร์โทรติดต่อ ไม่ถูกต้อง!", "กรุณาระบุ รหัสผู้ใช้และเบอร์โทรติดต่อ ใหม่อีกครั้ง", "error");
					// ปิด modal
				}
			},

		},"json");
	});


	$('body').on("click",'button#SaveSubmitChangeEntity',function(){ 

		var current_entity_code_logon = $("input#entity_code").val();
		var current_cust_code_logon = $("input#cust_code").val();
		var current_cust_name_logon = $("input#cust_name").val();
		var current_dept_code_logon = $("input#current_dept_code_logon").val();

		 if (current_entity_code_logon.length <= 0){
		 	swal("แจ้งเตือน!", "กรุณาระบุ กลุ่มข้อมูล!", "error");
		 	return false;
		 }
		 if (current_cust_code_logon.length <= 0){
		 	swal("แจ้งเตือน!", "กรุณาระบุ ห้าง-ร้าน!", "error");
		 	return false;
		 }
		 if (current_dept_code_logon.length <= 0){
		 	swal("แจ้งเตือน!", "กรุณาระบุ แผนก/หน่วยงาน!", "error");
		 	return false;
		 }
		 
		var _token = $("input[name=_token]").val();

		$.ajax({

			beforeSend:function() { 
				// Loading...
			},

			complete:function() {
				// Close Loading...
			},

			url:'SubmitChangeEntity',
			type:'POST',
			cache:false,
			data:{
				_token:_token,
				current_entity_code_logon:current_entity_code_logon,
				current_cust_code_logon:current_cust_code_logon,
				current_cust_name_logon:current_cust_name_logon,
				current_dept_code_logon:current_dept_code_logon
			},

			success: function(data)
			{
				if(data=="Insert_Success")
				{
					// แสดง popup ด้วย sweet alert
					swal("เปลี่ยนรหัสผ่าน!", "บันทึก เพิ่มข้อมูลเรียบร้อย!", "success");
					// ปิด modal
					$(".menumodal").modal('hide');
					window.location.href = "home";
					// ปิด modal
				}else {

					swal("ทำรายการไม่สำเร็จ!", "กรุณาระบุ ตรวจสอบ User LonOn ใหม่อีกครั้ง", "error");
					// ปิด modal
				}
			},

		},"json");
	});



});