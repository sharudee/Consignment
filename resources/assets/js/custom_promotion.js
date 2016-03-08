


$(function(){
	// Event newpo Link
		
	var currentDate = new Date();
	        $('#searchpmtstartdate').datepicker({
	            dateFormat: 'dd/mm/yy'
	        });

	        $('#searchpmtenddate').datepicker({
	            dateFormat: 'dd/mm/yy'
	        });
	        
	$("a[rel=newpromotion]").click(function(){
		$.get('addpromotionform',function(data){
			$("#promotionmodal").html(data);
			// เปิด modal
			$(".promotionmodal").modal('show');


	        $('#txtStartdateID').datepicker({
	            dateFormat: 'dd/mm/yy'
	        });

	        $('#txtenddateID').datepicker({
	            dateFormat: 'dd/mm/yy'
	        });

		});



	});


	$("a[rel=editpromotionform]").click(function(){
		$.get('addpromotionform11',function(data){
			$("#promotionmodal").html(data);
			// เปิด modal
			$(".promotionmodal").modal('show');


	        $('#txtStartdateID').datepicker({
	            dateFormat: 'dd/mm/yy'
	        });

	        $('#txtenddateID').datepicker({
	            dateFormat: 'dd/mm/yy'
	        });

		});



	});

			//$( "#txtStartdateID" ).datepicker("setDate",currentDate ).datepicker({dateFormat: 'dd/mm/yy'});

			//$( "#txtenddateID" ).datepicker("setDate",currentDate).datepicker({dateFormat: 'dd/mm/yy'});
//save_edit

	$('body').on("click",'button#save_edit_promotion',function(){

		var  Pmtid   		= $("input#txtpmt_mast_id").val(); 
		var txtPmtNo   		= $("input#txtPmtNoID").val();
		var txtPmtName  	= $("input#txtPmtNameID").val();
		var txtStartdate   	= $('input#txteditStartdateID').val();  //dateFormat($('#txtStartdateID'), "Y/m/d"); //date_format($('#txtStartdateID'),"Y/m/d");  //$("input#txtStartdateID").datepicker('getDate'); //.val(); .datepicker('getDate');
		var txtEnddate  	= $('input#txteditenddateID').val(); //.datepicker({ format: 'dd/mm/yyyy' }).val();  // $("input#textEnddateID").val();
		var txtDocRef    	= $("input#textDocRefID").val();
		var txtPmtDesc      = $("textarea[name=txtPmtDesc]").val();
		


		//--radio Type Input
		var txtPmtType      = $("[name='txtPmtType']:checked").val();

		

		var txtGpAmt      = $("input#txtGpAmtID").val();

		//---Dropdown list
		var txtRecStatus      = $("select#txtRecStatusID").val();  

		var _token = $("input[name=_token]").val();

		$.ajax({

			beforeSend:function() { 
				// Loading...
			},

			complete:function() {
				// Close Loading...
			},

			url:'submiteditpromotion',
			type:'POST',
			cache:false,
			data:{
				_token:_token,
				Pmtid:Pmtid,
				txtPmtNoKey:txtPmtNo,
				txtPmtNameKey:txtPmtName,
				txtStartdateKey:txtStartdate,
				textEnddateKey:txtEnddate,
				txtDocRefKey:txtDocRef,
				txtPmtDescKey:txtPmtDesc,
				txtPmtTypeKey:txtPmtType,
				txtGpAmtKey:txtGpAmt,
				txtRecStatusKey:txtRecStatus
			},

			success: function(data)
			{
				if(data=="Insert_Success")
				{
					// แสดง popup ด้วย sweet alert
					swal("Record Save!", "บันทึกรายการเรียบร้อย!", "success");
					// ปิด modal
					$(".promotionmodal").modal('hide');
					window.location.href = "promotion";
				}else
				{
					// แสดง popup ด้วย sweet alert
					swal("Record Save!", "บันทึกรายการ ไม่สำเร็จกรุณาตรวจสอบข้อมูล!", "error"); 
					// ปิด modal
					$(".promotionmodal").modal('hide');	
				}
			},

		},"json");
	});

	$('body').on("click",'button#AddNewPromotion',function(){


		var txtPmtNo   		= $("input#txtPmtNoID").val();
		var txtPmtName  	= $("input#txtPmtNameID").val();
		var txtStartdate   	= $('input#txtStartdateID').val();  //dateFormat($('#txtStartdateID'), "Y/m/d"); //date_format($('#txtStartdateID'),"Y/m/d");  //$("input#txtStartdateID").datepicker('getDate'); //.val(); .datepicker('getDate');
		var txtEnddate  	= $('input#txtenddateID').val(); //.datepicker({ format: 'dd/mm/yyyy' }).val();  // $("input#textEnddateID").val();
		var txtDocRef    	= $("input#textDocRefID").val();
		var txtPmtDesc      = $("textarea[name=txtPmtDesc]").val();
		


		//--radio Type Input
		var txtPmtType      = $("[name='txtPmtType']:checked").val();

		

		var txtGpAmt      = $("input#txtGpAmtID").val();

		//---Dropdown list
		var txtRecStatus      = $("select#txtRecStatusID").val();  

		var _token = $("input[name=_token]").val();

		$.ajax({

			beforeSend:function() { 
				// Loading...
			},

			complete:function() {
				// Close Loading...
			},

			url:'submitpromotion',
			type:'POST',
			cache:false,
			data:{
				_token:_token,
				txtPmtNoKey:txtPmtNo,
				txtPmtNameKey:txtPmtName,
				txtStartdateKey:txtStartdate,
				textEnddateKey:txtEnddate,
				txtDocRefKey:txtDocRef,
				txtPmtDescKey:txtPmtDesc,
				txtPmtTypeKey:txtPmtType,
				txtGpAmtKey:txtGpAmt,
				txtRecStatusKey:txtRecStatus
			},

			success: function(data)
			{
				if(data=="Insert_Success")
				{
					// แสดง popup ด้วย sweet alert
					swal("Record Save!", "บันทึกรายการเรียบร้อย!", "success");
					// ปิด modal
					$(".promotionmodal").modal('hide');
					window.location.href = "promotion";
				}else
				{
					// แสดง popup ด้วย sweet alert
					swal("Record Save!", "บันทึกรายการ ไม่สำเร็จกรุณาตรวจสอบข้อมูล!", "error"); 
					// ปิด modal
					$(".promotionmodal").modal('hide');	
				}
			},

		},"json");
	});


});