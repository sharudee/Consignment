$(function(){

	// Popup Add Mst Grp Data
	$('body').on('click','a[rel=click_trnsaction]',function(){
		$.get('popup_transmst_form',function(data){
			$("#transmst_modal").html(data);
			// เปิด modal
			$(".transmst_modal").modal('show');
		});
	});

	// Event submit  pdsize_code
	$('body').on('click','button#submit_transmst',function(){
		var transaction_code = $('input[name=radcus]:checked').val();
		var trnsaction_name= $('input[name=radcus]:checked').attr('data-trnsactionname');
		$('input[name=transaction_code]').val(transaction_code);
		$('input[name=trnsaction_name]').val(trnsaction_name);
		$(".transmst_modal").modal('hide');
	});





	$('body').on("click",'button#click_add_pmtdiscpay',function(){
		var rows;

		var transaction_code = [];
		$("input[name='transaction_code']").each(function ()
		{
			transaction_code.push($(this).val());
		});


		var trnsaction_name = [];
		$("input[name='trnsaction_name']").each(function ()
		{

			trnsaction_name.push($(this).val().replace("'",""));
		});		

		var purchase_rate_amt = [];
		$("input[name='purchase_rate_amt']").each(function ()
		{

			purchase_rate_amt.push($(this).val());
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

		if(transaction_code.length)
		{

			var mytable;
			for(rows=1;rows<=1;rows++)
			{
				mytable += "<tr>"+
						"<td>"+trnsaction_name[(rows-1)]+"<input type='hidden' name='transaction_code[]' value='"+transaction_code[(rows-1)]+"'></td>"+
						"<td>"+purchase_rate_amt[(rows-1)]+"<input type='hidden' name='purchase_rate_amt[]' value='"+purchase_rate_amt[(rows-1)]+"'></td>"+
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





	$('body').on("click",'button#submitpmtdiscpay',function(){

		var _token = $("input[name=_token]").val();
		var pmt_mast_id = $("input#pmt_mast_id").val();

		//--------------------Detail -------------------------------


		var transaction_code = [];
		$("input[name='transaction_code[]']").each(function ()
		{
			transaction_code.push($(this).val());
		});

		var purchase_rate_amt = [];
		$("input[name='purchase_rate_amt[]']").each(function ()
		{
			purchase_rate_amt.push($(this).val());
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

			url:'submitaddeditpmtdiscpay',
			type:'POST',
			cache:false,
			data:{
				_token:_token,
				pmt_mast_id:pmt_mast_id,
				transaction_code:transaction_code,
				purchase_rate_amt:purchase_rate_amt,
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
					window.location.href = "pmtdiscpay";
				}
			},

		},"json");
	});

});



