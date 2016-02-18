$(function(){

	

	// Event Submit In
	
	$('body').on("click",'button#SubmitCustomer',function(){
		
		// Validate form

		if($('form input[name="ship_titlename"]').val() == "")
		{
			$('form input[name="ship_titlename"]').focus();
			
			$("span#ship_titlename").addClass("error");
			$("span#ship_titlename").text('ต้องใส่ข้อมูล');
			//swal("Warning!", "ต้องใส่ข้อมูล", "warning");
			return false;
		}


		if($('form input[name="ship_titlename"]').val().length > 10)
		{
			$('form input[name="ship_titlename"]').focus();
			$("span#ship_titlename").addClass("error");
			$("span#ship_titlename").text('ข้อมูลเกิน 10 ตัวอักษร');
			//swal("Warning!", "ต้องใส่ข้อมูล", "warning");
			return false;
		}

		if($('form input[name="ship_custname"]').val() == "")
		{
			$('form input[name="ship_custname"]').focus();
			$("span#ship_custname").addClass("error");
			$("span#ship_custname").text('ต้องใส่ข้อมูล');
			//swal("Warning!", "ต้องใส่ข้อมูล", "warning");
			return false;
		}

		if($('form input[name="ship_custsurname"]').val() == "")
		{
			$('form input[name="ship_custsurname"]').focus();
			$("span#ship_custsurname").addClass("error");
			$("span#ship_custsurname").text('ต้องใส่ข้อมูล');
			//swal("Warning!", "ต้องใส่ข้อมูล", "warning");
			return false;
		}

		

		if($('form input[name="ship_address1"]').val() == "")
		{
			$('form input[name="ship_address1"]').focus();
			$("span#ship_address1").addClass("error");
			$("span#ship_address1").text('ต้องใส่ข้อมูล');
			//swal("Warning!", "ต้องใส่ข้อมูล", "warning");
			return false;
		}

		if($('form input[name="ship_address1"]').val().length > 50)
		{
			$('form input[name="ship_address1"]').focus();
			$("span#ship_address1").addClass("error");
			$("span#ship_address1").text('ข้อมูลเกิน 50 ตัวอักษร');
			//swal("Warning!", "ต้องใส่ข้อมูล", "warning");
			return false;
		}

		if($('form input[name="ship_address2"]').val().length > 50)
		{
			$('form input[name="ship_address2"]').focus();
			$("span#ship_address2").addClass("error");
			$("span#ship_address2").text('ข้อมูลเกิน 50 ตัวอักษร');
			//swal("Warning!", "ต้องใส่ข้อมูล", "warning");
			return false;
		}


		if($('form input[name="prov_name"]').val() == "")
		{
			$('form input[name="prov_name"]').focus();
			$("span#prov_name").addClass("error");
			$("span#prov_name").text('ต้องใส่ข้อมูล');
			//swal("Warning!", "ต้องใส่ข้อมูล", "warning");
			return false;
		}

		if($('form input[name="post_code"]').val() == "")
		{
			$('form input[name="post_code"]').focus();
			$("span#post_code").addClass("error");
			$("span#post_code").text('ต้องใส่ข้อมูล');
			//swal("Warning!", "ต้องใส่ข้อมูล", "warning");
			return false;
		}


		if($('form input[name="email"]').val() != "")
		{
			var $email = $('form input[name="email"]');
			var re = /[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}/igm;

			if (!re.test($email.val()))
			{
				$('form input[name="email"]').focus();
				$("span#email").addClass("error");
				$("span#email").text('Email ไม่ถูกต้อง');

				return false;
			}

		}	

		if($('form input[name="id_card"]').val() == "")
		{
			$('form input[name="id_card"]').focus();
			$("span#id_card").addClass("error");
			$("span#id_card").text('ต้องใส่ข้อมูล');
			//swal("Warning!", "ต้องใส่ข้อมูล", "warning");
			return false;
		}

		if($('form input[name="id_card"]').val().length > 13)
		{
			$('form input[name="id_card"]').focus();
			$("span#id_card").addClass("error");
			$("span#id_card").text('ข้อมูลเกิน 13 ตัวอักษร');
			//swal("Warning!", "ต้องใส่ข้อมูล", "warning");
			return false;
		}

		if($('form select[name="sex"]').val() == "")
		{
			$('form input[name="sex"]').focus();
			$("span#sex").addClass("error");
			$("span#sex").text('ต้องใส่ข้อมูล');
			//swal("Warning!", "ต้องใส่ข้อมูล", "warning");
			return false;
		}

		else
		{
			//Pass Validate
		

			var ship_titlename = $("input#ship_titlename").val();
			var ship_custname = $("input#ship_custname").val();
			var ship_custsurname = $("input#ship_custsurname").val();
			var ship_address1 = $("input#ship_address1").val();
			var ship_address2 = $("input#ship_address2").val();
			var prov_code = $("input#prov_code").val();
			var prov_name = $("input#prov_name").val();
			var post_code = $("input#post_code").val();
			var tel = $("input#tel").val();
			var email = $("input#email").val();
			var mobile_no = $("input#mobile_no").val();
			var line_id = $("input#line_id").val();
			var id_card = $("input#id_card").val();
			var sex = $("select#sex").val();
			var _token = $("input[name=_token]").val();

			
			$.ajax({

				beforeSend:function() { 
					// Loading...
				},

				complete:function() {
					// Close Loading...
				},

				url:'submitcustomer',
				type:'POST',
				cache:false,
				data:{
					_token:_token,
					ship_titlename:ship_titlename,
					ship_custname:ship_custname,
					ship_custsurname:ship_custsurname,
					ship_address1:ship_address1,
					ship_address2:ship_address2,
					prov_code:prov_code,
					prov_name:prov_name,
					post_code:post_code,
					tel:tel,
					email:email,
					mobile_no:mobile_no,
					line_id:line_id,
					id_card:id_card,
					sex:sex,
				},

				
				success: function(data)
				{
					//alert(data);
					if(data=="Insert_Success")
					{
						
						// แสดง popup ด้วย sweet alert
						swal("Record Save!", "บันทึกรายการเรียบร้อย!", "success");
						$('#cust_form')[0].reset();
						
					}

					if(data=="Data_Duplicate")
					{
						swal("Data Duplicate!", "ข้อมูลซ้ำ!", "error");
					}

					
				},
				 

			},"json");
		
		}
	});


	


});