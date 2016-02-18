$(function(){

	// Popup Add Mst Grp Data
	$('body').on('click','a[rel=click_trnsaction_discshop]',function(){
		$.get('popup_transmst_discshop',function(data){
			$("#transmst_discshop_modal").html(data);
			// เปิด modal
			$(".transmst_discshop_modal").modal('show');
		});
	});

	// Event submit  pdsize_code
	$('body').on('click','button#submit_transmst',function(){
		var transaction_code = $('input[name=radcus]:checked').val();
		var trnsaction_name= $('input[name=radcus]:checked').attr('data-trnsactionname');
		$('input[name=transaction_code]').val(transaction_code);
		$('input[name=trnsaction_name]').val(trnsaction_name);
		$(".transmst_discshop_modal").modal('hide');
	});


	// Popup get-premuimset
	$('body').on('click','a[rel=click_select_product_set_code]',function(){
		$.get('get-premuimset',function(data){
			$("#product_set_code_modal").html(data);
			// เปิด modal
			$(".product_set_code_modal").modal('show');
		});
	});

	// Event get-premuimset
	$('body').on('click','button#submit_select_premuimset_discshop',function(){
		var product_set_code = $('input[name=radcus]:checked').val();
		var product_set_name= $('input[name=radcus]:checked').attr('data-premuimsetdesc');
		$('input[name=product_set_code]').val(product_set_code);
		$('input[name=product_set_name]').val(product_set_name);
		$(".product_set_code_modal").modal('hide');
	});




	$('body').on("click",'button#click_add_discshop',function(){
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


		var product_set_code = [];
		$("input[name='product_set_code']").each(function ()
		{
			product_set_code.push($(this).val());
		});


		var product_set_name = [];
		$("input[name='product_set_name']").each(function ()
		{
			product_set_name.push($(this).val());
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
						"<td>"+product_set_name[(rows-1)]+"<input type='hidden' name='product_set_code[]' value='"+product_set_code[(rows-1)]+"'></td>"+
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





	$('body').on("click",'button#submitdiscshop',function(){

		var _token = $("input[name=_token]").val();
		var pmt_mast_id = $("input#pmt_mast_id").val();

		//--------------------Detail -------------------------------


		var transaction_code = [];
		$("input[name='transaction_code[]']").each(function ()
		{
			transaction_code.push($(this).val());
		});

		var product_set_code = [];
		$("input[name='product_set_code[]']").each(function ()
		{
			product_set_code.push($(this).val());
		});

		var product_set_name = [];
		$("input[name='product_set_name[]']").each(function ()
		{
			product_set_name.push($(this).val());
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

			url:'submitaddeditdiscshop',
			type:'POST',
			cache:false,
			data:{
				_token:_token,
				pmt_mast_id:pmt_mast_id,
				transaction_code:transaction_code,
				product_set_code:product_set_code,
				product_set_name:product_set_name,
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
					window.location.href = "pmtdiscshop";
				}
			},

		},"json");
	});

});



