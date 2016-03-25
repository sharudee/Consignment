

$(function(){
	// Event newpo Lin


	$('body').on('click','a[rel=click_cust_allow]',function(){
		var  cust_grp_code = $('input[name=cust_grp_code]').val() ;
		var entity_para = $('input[name=entity_code]').val() ;

		if  (entity_para.length)
		{
			if  (cust_grp_code.length)
			{
				$('input[name=cust_grp_code]').val(cust_grp_code);
				$.get('pop_cust_allow_form/'+ cust_grp_code,function(data){
					$("#pop_cust_allow_form").html(data);
					// เปิด modal
					$(".pop_cust_allow_form").modal('show');
				});
			}else
			{
				swal("เตือน!", "กรุณาระบุ กลุ่ม ห้าง-ร้าน!", "error");
			}

		}else
		{
			swal("เตือน!", "กรุณาระบุ กลุ่มข้อมูล Entity!", "error");
		}

	});


	$('body').on('change','input[name="entity_code"]', function() {

		$('input[name=cust_grp_code]').val('TEST');

	});	



	$('body').on('click','button#submit_select_cus_all',function(){
		//alert('กรุณาเลือกอย่างน้อย 1 รายการ');
		$("input[name='entity_code_popup[]']").each(function ()
		{
			$("input[name='entity_code_popup[]']").prop("checked",true);
		});
	});

// Select All Un Check box  
	$('body').on('click','button#submit_unselect_cus_all',function(){
		//alert('กรุณาเลือกอย่างน้อย 1 รายการ');
		$("input[name='entity_code_popup[]']:checked").each(function ()
		{
			$("input[name='entity_code_popup[]']").prop("checked",false);
		});
	});

	$('body').on('click','button#submit_select_cus_allow',function(){
		
		var rows;

		var entity_code=[];				//		data-prodtname="{{$cs->prod_tname}}"  
		var entity_tname=[];				//		data-pdmodelcode="{{$cs->pdmodel_code}}"
		var entity=[];
		var entity_para = $('input[name=entity_code]').val() ;
		$("input[name='entity_code_popup[]']:checked").each(function ()
		{
			entity_code.push($(this).val());
			entity_tname.push($(this).attr('data-entitytname'));
			entity.push(entity_para);		

		});
	
		if (entity_para.length)
		{
			if(entity.length)
			{

				
				var mytable;
				for(rows=1;rows<=entity_code.length;rows++)
				{
					mytable += "<tr>"+
							"<td>"+entity_code[(rows-1)]+"<input type='hidden' name='entity_code[]' value='"+entity_code[(rows-1)]+"'></td>"+
							"<td>"+entity_tname[(rows-1)]+"<input type='hidden' name='entity_tname[]' value='"+entity_tname[(rows-1)]+"'></td>"+
							"<td>"+entity[(rows-1)]+"<input type='hidden' name='entity[]' value='"+entity[(rows-1)]+"'></td>"+
							"<td><a href=\"#delete\" rel='pro_delete' class=\"btn btn-sm btn-danger\">Del</a></td>"+
						    "</tr>";        
				}

				$('#po_table tbody').prepend(mytable);

				// เรียกใช้ฟังก์ชันนับจำนวนรายการและราคารวม

				$(".pop_cust_allow_form").modal('hide');

			}else{
				alert('กรุณาเลือกอย่างน้อย 1 รายการ');
			}
		}else{
			swal("เตือน!", "กรุณาระบุ กลุ่มข้อมูล Entity!", "error");
		}

	
	});



	$('body').on("click",'button#submitAssignCustAllow99',function(){

		var user_id = $("input#id").val();

		var _token = $("input[name=_token]").val();


		//--------------------Detail -------------------------------
		var CustomerCode  = [];
		$("input[name='entity_code[]']").each(function ()
		{
			CustomerCode.push($(this).val());
		});

		var entitycode = [];
		$("input[name='entity[]']").each(function ()
		{
			entitycode.push($(this).val());
		});

		$.ajax({

			beforeSend:function() { 
				// Loading...
			},

			complete:function() {
				// Close Loading...
			},

			url:'submitaddCustAllow',
			type:'POST',
			cache:false,
			data:{
				_token:_token,
				user_id:user_id,
				entitycode:entitycode,
				CustomerCode:CustomerCode
			},

			success: function(data)
			{
				if(data=="Insert_Success")
				{
					// แสดง popup ด้วย sweet alert
					swal("Record Save!", "บันทึกรายการเรียบร้อย!", "success");
					// ปิด modal
					$(".pop_cust_allow_form").modal('hide');
					window.location.href = "getentityuser";
				}
			},

		},"json");
	});

});