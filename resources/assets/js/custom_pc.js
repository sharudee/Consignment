$(function(){

	// Event Submit In
	
	$('body').on("click",'button#SubmitIn',function(){
		
		if($('form input[name="emp_code"]').val() == "")
		{
			$('form input[name="emp_code"]').focus();
			
			$("span#emp_code").addClass("error");
			$("span#emp_code").text('ต้องใส่ข้อมูล');
			//swal("Warning!", "ต้องใส่ข้อมูล", "warning");
			return false;
		}


		var emp_code = $("input#emp_code").val();	
		var _token = $("input[name=_token]").val();

		
		$.ajax({

			beforeSend:function() { 
				// Loading...
			},

			complete:function() {
				// Close Loading...
			},

			url:'workIn',
			type:'POST',
			cache:false,
			data:{
				_token:_token,
				emp_code:emp_code,
			},

			
			success: function(data)
			{
				//alert(data);
				if(data=="Insert_Success")
				{
					
					// แสดง popup ด้วย sweet alert
					swal("Record Save!", "บันทึกรายการเรียบร้อย!", "success");
					$("input[name='emp_code']").val('');
				}

				if(data=="Insert_Fail")
				{
					
					// แสดง popup ด้วย sweet alert
					swal("Not Save!", "ได้บันทึกเวลาเข้าแล้ว!", "error");
					
				}
				if(data=="No_Data")
				{
					
					// แสดง popup ด้วย sweet alert
					swal("No Data!", "รหัสพนักงานไม่ถูกต้อง!", "error");
					
				}
				if(data=="No_WorkDate")
				{
					
					// แสดง popup ด้วย sweet alert
					swal("No Work Date!", "ยังไม่ได้ Gen ข้อมูลเวลาทำงาน", "error");
					
				}
			},
			 

		},"json");
		
	});


	$('body').on("click",'button#SubmitOut',function(){
		
		if($('form input[name="emp_code"]').val() == "")
		{
			$('form input[name="emp_code"]').focus();
			
			$("span#emp_code").addClass("error");
			$("span#emp_code").text('ต้องใส่ข้อมูล');
			//swal("Warning!", "ต้องใส่ข้อมูล", "warning");
			return false;
		}


		var emp_code = $("input#emp_code").val();	
		var _token = $("input[name=_token]").val();

		
		$.ajax({

			beforeSend:function() { 
				// Loading...
			},

			complete:function() {
				// Close Loading...
			},

			url:'workOut',
			type:'POST',
			cache:false,
			data:{
				_token:_token,
				emp_code:emp_code,
			},

			
			success: function(data)
			{
				//alert(data);
				if(data=="Insert_Success")
				{
					
					// แสดง popup ด้วย sweet alert
					swal("Record Save!", "บันทึกรายการเรียบร้อย!", "success");
					$("input[name='emp_code']").val('');
				}

				if(data=="Insert_Fail")
				{
					
					// แสดง popup ด้วย sweet alert
					swal("Not Save!", "ได้บันทึกเวลาเข้าแล้ว!", "error");
					
				}

				if(data=="No_Data")
				{
					
					// แสดง popup ด้วย sweet alert
					swal("No Data!", "รหัสพนักงานไม่ถูกต้อง!", "error");
					
				}

				if(data=="No_WorkDate")
				{
					
					// แสดง popup ด้วย sweet alert
					swal("No Work Date!", "ยังไม่ได้ Gen ข้อมูลเวลาทำงาน", "error");
					
				}
			},
			 

		},"json");
		
	});



});