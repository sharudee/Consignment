


$(function(){
	// Event newpo Lin


	$('body').on('click','a[rel=AssignMenuBySystem]',function(){
		var RoleId = $(this).attr('data-Roleid');
		var SystemID = $(this).attr('data-Systemid');
		$.get('rolemenu_form/'+RoleId+'/'+SystemID,function(data){
			$("#popup_system_menu").html(data);
			// เปิด modal
			$(".popup_system_menu").modal('show');
		});
	});

	$('body').on('click','a[rel=click_popup_memu_by_system]',function(){
		var RoleId = $("input#Su_Role_id").val();
		var SystemID = $("input#Su_System_Id").val();
		$.get('get_menu_by_system_form/'+RoleId+'/'+SystemID,function(data){
			$("#popup_memu_by_system").html(data);
			// เปิด modal
			$(".popup_memu_by_system").modal('show');
		});

	});




	$('body').on('click','button#submit_select_cus_all',function(){
		//alert('กรุณาเลือกอย่างน้อย 1 รายการ');
		$("input[name='Su_Menu[]']").each(function ()
		{
			$("input[name='Su_Menu[]']").prop("checked",true);
		});
	});

// Select All Un Check box  
	$('body').on('click','button#submit_unselect_cus_all',function(){
		//alert('กรุณาเลือกอย่างน้อย 1 รายการ');
		$("input[name='Su_Menu[]']:checked").each(function ()
		{
			$("input[name='Su_Menu[]']").prop("checked",false);
		});
	});

	$('body').on('click','button#submit_select_menu_for_role',function(){
		
		var rows;

		var Su_Menu_Id=[];				//		data-prodtname="{{$cs->prod_tname}}"  
		var MenuLevel=[];				//		data-pdmodelcode="{{$cs->pdmodel_code}}"
		var MenuName=[];

		$("input[name='Su_Menu[]']:checked").each(function ()
		{
			Su_Menu_Id.push($(this).val());
			MenuLevel.push($(this).attr('data-MenuLevel'));
			MenuName.push($(this).attr('data-MenuName'));		

		});
	

			if(Su_Menu_Id.length)
			{
				
				var mytable;
				for(rows=1;rows<=MenuLevel.length;rows++)
				{
					mytable += "<tr>"+
							"<td>"+Su_Menu_Id[(rows-1)]+"<input type='hidden' name='Su_Menu_Id[]' value='"+Su_Menu_Id[(rows-1)]+"'></td>"+
							"<td>"+MenuLevel[(rows-1)]+"<input type='hidden' name='MenuLevel[]' value='"+MenuLevel[(rows-1)]+"'></td>"+
							"<td>"+MenuName[(rows-1)]+"<input type='hidden' name='MenuName[]' value='"+MenuName[(rows-1)]+"'></td>"+
							"<td><a href=\"#delete\" rel='pro_delete' class=\"btn btn-sm btn-danger\">Del</a></td>"+
						    "</tr>";        
				}

				$('#po_table2 tbody').prepend(mytable);

				// เรียกใช้ฟังก์ชันนับจำนวนรายการและราคารวม

				$(".popup_memu_by_system").modal('hide');

			}else{
				alert('กรุณาเลือกอย่างน้อย 1 รายการ');
			}
	
	
	});



	$('body').on("click",'button#submitAssignMenuToRole',function(){

		var Su_Role_id = $("input#Su_Role_id").val();
		var Su_System_Id = $("input#Su_System_Id").val();

		var _token = $("input[name=_token]").val();


		//--------------------Detail -------------------------------

		var Su_Menu_Id = [];
		$("input[name='Su_Menu_Id[]']").each(function ()
		{
			Su_Menu_Id.push($(this).val());
		});

		$.ajax({

			beforeSend:function() { 
				// Loading...
			},

			complete:function() {
				// Close Loading...
			},

			url:'submitAssignMenuToRole',
			type:'POST',
			cache:false,
			data:{
				_token:_token,
				Su_Role_id:Su_Role_id,
				Su_System_Id:Su_System_Id,
				Su_Menu_Id:Su_Menu_Id
			},

			success: function(data)
			{
				if(data=="Insert_Success")
				{
					// แสดง popup ด้วย sweet alert
					swal("Record Save!", "บันทึกรายการเรียบร้อย!", "success");
					// ปิด modal
					$(".pop_cust_allow_form").modal('hide');
					window.location.href = "getrolemenu";
				}
			},

		},"json");
	});

});