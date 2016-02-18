$(function(){


	$('body').on("click",'button#click_add_data',function(){
		var rows;

		var pdsize_code = [];
		$("input[name='pdsize_code']").each(function ()
		{
			pdsize_code.push($(this).val());
		});

		var pdsize_desc = [];
		$("input[name='pdsize_desc']").each(function ()
		{

			pdsize_desc.push($(this).val().replace("'",""));
		});		



		var discount_type = [];
		$("select#discount_type").each(function ()
		{
			discount_type.push($(this).val());
		});	

		var discount_amt = [];
		$("input[name='discount_amt']").each(function ()
		{
			discount_amt.push($(this).val());
		});	

		var discount_percen = [];
		$("input[name='discount_percen']").each(function ()
		{
			discount_percen.push($(this).val());
		});	

		if(pdsize_code.length)
		{

			var mytable;
			for(rows=1;rows<=1;rows++)
			{
				mytable += "<tr>"+
						"<td>"+pdsize_code[(rows-1)]+"<input type='hidden' name='pdsize_code[]' value='"+pdsize_code[(rows-1)]+"'></td>"+
						"<td>"+pdsize_desc[(rows-1)]+"<input type='hidden' name='pdsize_desc[]' value='"+pdsize_desc[(rows-1)]+"'></td>"+
						"<td>"+discount_type[(rows-1)]+"<input type='hidden' name='discount_type[]' value='"+discount_type[(rows-1)]+"'></td>"+
						"<td>"+discount_amt[(rows-1)]+"<input type='hidden' name='discount_amt[]' value='"+discount_amt[(rows-1)]+"'></td>"+
						"<td>"+discount_percen[(rows-1)]+"<input type='hidden' name='discount_percen[]' value='"+discount_percen[(rows-1)]+"'></td>"+
						"<td><a href=\"#delete\" rel='pro_delete' class=\"btn btn-sm btn-danger\">Del</a></td>"+
					    "</tr>";        
			}

			$('#po_table tbody').prepend(mytable);

			// เรียกใช้ฟังก์ชันนับจำนวนรายการและราคารวม

			//$(".consignnee_modal").modal('hide');

		}else{
			alert('กรุณา ระบุขนาด(Size)');
		}
	
	});





	$('body').on("click",'button#submitdiscpremiumdeny',function(){

		var _token = $("input[name=_token]").val();
		var pmt_mast_id = $("input#pmt_mast_id").val();

		//--------------------Detail -------------------------------


		var pdsize_code = [];
		$("input[name='pdsize_code[]']").each(function ()
		{
			pdsize_code.push($(this).val());
		});

		var pdsize_desc = [];
		$("input[name='pdsize_desc[]']").each(function ()
		{
			pdsize_desc.push($(this).val());
		});		


		var discount_type = [];
		$("input[name='discount_type[]']").each(function ()
		{
			discount_type.push($(this).val());
		});	

		var discount_amt = [];
		$("input[name='discount_amt[]']").each(function ()
		{
			discount_amt.push($(this).val());
		});	

		var discount_percen = [];
		$("input[name='discount_percen[]']").each(function ()
		{
			discount_percen.push($(this).val());
		});	
		//-----------End Detail --------------------------------------


		$.ajax({

			beforeSend:function() { 
				// Loading...
			},

			complete:function() {
				// Close Loading...
			},

			url:'submitaddeditdiscpremiumdeny',
			type:'POST',
			cache:false,
			data:{
				_token:_token,
				pmt_mast_id:pmt_mast_id,
				pdsize_code:pdsize_code,
				pdsize_desc:pdsize_desc,
				discount_type:discount_type,
				discount_amt:discount_amt,
				discount_percen:discount_percen
			},

			success: function(data)
			{
				if(data=="Insert_Success")
				{
					// แสดง popup ด้วย sweet alert
					swal("Record Save!", "บันทึกรายการเรียบร้อย!", "success");
					// ปิด modal
					$(".consignnee_grp_modal").modal('hide');
					window.location.href = "pmtdiscpremiumdeny";
				}
			},

		},"json");
	});

});



