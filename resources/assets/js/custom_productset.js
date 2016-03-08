


$(function(){
	// Event newpo Link
	$("a[rel=newproductsetform]").click(function(){
		$.get('addpmtproductsetform',function(data){
			$("#productsetmodal").html(data);
			// เปิด modal
			$(".productsetmodal").modal('show');
		});
	});

	// Popup Add Mst Grp Data
	$('body').on('click','a[rel=clickmstgrpmodal]',function(){
		$.get('popup_mstgrp_modal_form',function(data){
			$("#popup_mstgrpmodal").html(data);
			// เปิด modal
			$(".popup_mstgrpmodal").modal('show');
		});
	});

	// Event submit  Mst Grp Data
	$('body').on('click','button#submit_selectmstgrp',function(){
		var txt_pmt_group_code = $('input[name=radcus]:checked').val();
		$('input[name=pmt_group_code]').val(txt_pmt_group_code);
		$(".popup_mstgrpmodal").modal('hide');
	});

	//--------pdmodelmodal --------------

	$('body').on('click','a[rel=click_txtpdmodelmodal]',function(){
		$.get('getmstmodel',function(data){
			$("#pdmodelmodal").html(data);
			// เปิด modal
			$(".pdmodelmodal").modal('show');
		});
	});

	// Event submit  pdmodelmodal
	$('body').on('click','button#submit_select_mstmodel',function(){
		var txtpdmodelmodal = $('input[name=radcus]:checked').val();
		$('input[name=txtpdmodelmodal]').val(txtpdmodelmodal);
		$(".pdmodelmodal").modal('hide');
	});


	//--------pdsize_code --------------

	$('body').on('click','a[rel=click_pdsize_code]',function(){
		$.get('get_pdsize_code',function(data){
			$("#pdsize_code_modal").html(data);
			// เปิด modal
			$(".pdsize_code_modal").modal('show');
		});
	});

	// Event submit  pdsize_code
	$('body').on('click','button#submit_select_pdsize_code',function(){
		var pdsize_code = $('input[name=radcus]:checked').val();
		var pdsize_desc= $('input[name=radcus]:checked').attr('data-pdsizedesc');
		$('input[name=pdsize_code]').val(pdsize_code);
		$('input[name=pdsize_desc]').val(pdsize_desc);
		$(".pdsize_code_modal").modal('hide');
	});


	//--------pdgrp_code_modal --------------

	$('body').on('click','a[rel=click_pdgrp_code]',function(){
		$.get('get_pdgrp_code',function(data){
			$("#pdgrp_code_modal").html(data);
			// เปิด modal
			$(".pdgrp_code_modal").modal('show');
		});
	});

	// Event submit  pdgrp_code_modal
	$('body').on('click','button#submit_select_pdgrp_code',function(){
		var pdgrp_code = $('input[name=radcus]:checked').val();
		$('input[name=pdgrp_code]').val(pdgrp_code);
		$(".pdgrp_code_modal").modal('hide');
	});

	//--------pdbrnd_code_modal --------------

	$('body').on('click','a[rel=click_pdbrnd_code]',function(){
		$.get('get_pdbrnd_code',function(data){
			$("#pdbrnd_code_modal").html(data);
			// เปิด modal
			$(".pdbrnd_code_modal").modal('show');
		});
	});

	// Event submit  pdbrnd_code_modal
	$('body').on('click','button#submit_select_pdbrnd_code',function(){
		var pdbrnd_code = $('input[name=radcus]:checked').val();
		$('input[name=pdbrnd_code]').val(pdbrnd_code);
		$(".pdbrnd_code_modal").modal('hide');
	});

	//--------pdcolor_code_modal --------------

	$('body').on('click','a[rel=click_pdcolor_code]',function(){
		$.get('get_pdcolor_code',function(data){
			$("#pdcolor_code_modal").html(data);
			// เปิด modal
			$(".pdcolor_code_modal").modal('show');
		});
	});

	// Event submit  pdcolor_code_modal
	$('body').on('click','button#submit_select_pdcolor_code',function(){
		var pdcolor_code = $('input[name=radcus]:checked').val();
		$('input[name=pdcolor_code]').val(pdcolor_code);
		$(".pdcolor_code_modal").modal('hide');
	});

	//--------pddsgn_code_modal --------------

	$('body').on('click','a[rel=click_pddsgn_code]',function(){
		$.get('get_pddsgn_code',function(data){
			$("#pddsgn_code_modal").html(data);
			// เปิด modal
			$(".pddsgn_code_modal").modal('show');
		});
	});

	// Event submit  pddsgn_code_modal
	$('body').on('click','button#submit_select_pddsgn_code',function(){
		var pddsgn_code = $('input[name=radcus]:checked').val();
		$('input[name=pddsgn_code]').val(pddsgn_code);
		$(".pddsgn_code_modal").modal('hide');
	});

// Select All Check box  
	$('body').on('click','button#submit_select_product_all',function(){
		//alert('กรุณาเลือกอย่างน้อย 1 รายการ');
		$("input[name='product_popup[]']").each(function ()
		{
			$("input[name='product_popup[]']").prop("checked","checked")
		});
	});

// Select All Un Check box  
	$('body').on('click','button#submit_unselect_product_all',function(){
		//alert('กรุณาเลือกอย่างน้อย 1 รายการ');
		$("input[name='product_popup[]']").each(function ()
		{
			$("input[name='product_popup[]']").removeAttr("checked")
		});
	});



	//--------Product --------------

	$('body').on('click','a[rel=click_product]',function(){
		var pdmodel_code =  $("input#txtpdmodelmodal").val(); 
		var pdsize_code= $("input#pdsize_code").val(); 
		var pdgrp_code= $("input#pdgrp_code").val(); 
		var pdbrnd_code= $("input#pdbrnd_code").val(); 
		var pdcolor_code= $("input#pdcolor_code").val(); 
		var pddsgn_code= $("input#pddsgn_code").val(); 


				var _token = $("input[name=_token]").val();

				$.ajax({

					beforeSend:function() { 
						// Loading...
					},

					complete:function() {
						// Close Loading...
					},

					url:'get_product_mst',
					type:'get',
					cache:false,
					data:{
						_token:_token,
						pdmodel_code:pdmodel_code,
						pdsize_code:pdsize_code,
						pdgrp_code:pdgrp_code,
						pdbrnd_code:pdbrnd_code,
						pdcolor_code:pdcolor_code,
						pddsgn_code:pddsgn_code,
						},
					success: function(data)
					{

							$("#productmodal").html(data);

					},
				},"json");
		
			
			// เปิด modal
			$(".productmodal").modal('show');
	});


	// Event Submit Select Product
	$('body').on('click','button#submit_select_product',function(){
		
		var rows;

		var prodtname=[];				//		data-prodtname="{{$cs->prod_tname}}"  
		var pdmodelcode=[];				//		data-pdmodelcode="{{$cs->pdmodel_code}}"
		var pdsizecode=[];				//		data-pdsizecode="{{$cs->pdsize_code}}"
		var pdgrpcode=[];				//		data-pdgrpcode="{{$cs->pdgrp_code}}"
		var pdbrndcode=[];				//		data-pdbrndcode="{{$cs->pdbrnd_code}}"
		var pdcolorcode=[];				//		data-pdcolorcode="{{$cs->pdcolor_code}}"
		var pddsgncode=[];				//		data-pddsgncode="{{$cs->pddsgn_code}}"
		var pdmodeldesc=[];				//		data-pdmodeldesc="{{$cs->pdmodel_desc}}"
		var pdsizedesc=[];				//		data-pdsizedesc="{{$cs->pdsize_desc}}"
		var pdgrpdesc=[];				//		data-pdgrpdesc="{{$cs->pdgrp_desc}}"
		var pdbrnddesc=[];				//		data-pdbrnddesc="{{$cs->pdbrnd_desc}}"
		var pdcolordesc=[];				//		data-pdcolordesc="{{$cs->pdcolor_desc}}"
		var pddsgndesc=[];				//		data-pddsgndesc="{{$cs->pddsgn_desc}}"
		var prod_code=[];				//		value="{{$cs->prod_code}}">

		$("input[name='product_popup[]']:checked").each(function ()
		{
			prod_code.push($(this).val());

			 prodtname.push($(this).attr('data-prodtname'));	
			 pdmodelcode.push($(this).attr('data-pdmodelcode'));	
			 pdsizecode.push($(this).attr('data-pdsizecode'));	
			 pdgrpcode.push($(this).attr('data-pdgrpcode'));		
			 pdbrndcode.push($(this).attr('data-pdbrndcode'));			
			 pdcolorcode.push($(this).attr('data-pdcolorcode'));	
			 pddsgncode.push($(this).attr('data-pddsgncode'));		
			 pdmodeldesc.push($(this).attr('data-pdmodeldesc'));	
			 pdsizedesc.push($(this).attr('data-pdsizedesc'));	
			 pdgrpdesc.push($(this).attr('data-pdgrpdesc'));	
			 pdbrnddesc.push($(this).attr('data-pdbrnddesc'));	
			 pdcolordesc.push($(this).attr('data-pdcolordesc'));	
			 pddsgndesc.push($(this).attr('data-pddsgndesc'));	

		});



		if(prod_code.length){

			var rowCount = $('#po_table tr').length; // นับจำนวนแถวของตาราง
			var mytable;
			for(rows=1;rows<=prod_code.length;rows++)
			{
				mytable += "<tr>"+
						"<td>"+prod_code[(rows-1)]+"<input type='hidden' name='prod_code[]' value='"+prod_code[(rows-1)]+"'></td>"+
						"<td>"+prodtname[(rows-1)]+"<input type='hidden' name='prodtname[]' value='"+prodtname[(rows-1)]+"'></td>"+
						"<td>"+pdmodelcode[(rows-1)]+"<input type='hidden' name='pdmodelcode[]' value='"+pdmodelcode[(rows-1)]+"'></td>"+
						"<td>"+pdsizecode[(rows-1)]+"<input type='hidden' name='pdsizecode[]' value='"+pdsizecode[(rows-1)]+"'></td>"+
						"<td>"+pdcolorcode[(rows-1)]+"<input type='hidden' name='pdcolorcode[]' value='"+pdcolorcode[(rows-1)]+"'></td>"+
						"<td><a href=\"#delete\" rel='pro_delete' class=\"btn btn-sm btn-danger\">Del</a></td>"+
					    "</tr>";        
			}

			$('#po_table tbody').prepend(mytable);

			// เรียกใช้ฟังก์ชันนับจำนวนรายการและราคารวม

			$(".productmodal").modal('hide');

		}else{
			alert('กรุณาเลือกอย่างน้อย 1 รายการ');
		}
	
	});


	$('body').on("click",'button#AddNewPromotion',function(){

					// แสดง popup ด้วย sweet alert
					swal("Record Save!", "บันทึกรายการเรียบร้อย!", "success");
					// ปิด modal
					$(".promotionmodal").modal('hide');

	});


	$('body').on("click",'button#submitadd',function(){

		var getproduct_set_code   	= $("input#product_set_code").val();
		var getpmt_group_code  	= $("input#pmt_group_code").val();
		var getproduct_set_desc = $("input#product_set_desc").val();
		var getset_qty			= $("input#set_qty").val();
	  	var getunit_price_amt	= $("input#unit_price_amt").val();
	  	var getset_price_amt	= $("input#set_price_amt").val();
	  	var getuom          	= $("select#uom").val();
	  	var getdiscount_type	= $("select#discount_type").val();
	  	var getdiscount_amt		= $("input#discount_amt").val();

		//---Dropdown list
		var RecStatus      = $("select#txtRecStatusID").val();  

		var _token = $("input[name=_token]").val();


		//--------------------Detail -------------------------------
		var prod_code = [];
		$("input[name='prod_code[]']").each(function ()
		{
			prod_code.push($(this).val());
		});

		var prodtname = [];
		$("input[name='prodtname[]']").each(function ()
		{
			prodtname.push($(this).val());
		});

		//-----------End Detail --------------------------------------


		$.ajax({

			beforeSend:function() { 
				// Loading...
			},

			complete:function() {
				// Close Loading...
			},

			url:'submitProductSetadd',
			type:'POST',
			cache:false,
			data:{
				_token:_token,
				keyproduct_set_code:getproduct_set_code,
				keypmt_group_code:getpmt_group_code,
				keyproduct_set_desc:getproduct_set_desc,
				keyset_qty:getset_qty,
				keyunit_price_amt:getunit_price_amt,
				keyset_price_amt:getset_price_amt,
				keyuom:getuom,
				keydiscount_type:getdiscount_type,
				keydiscount_amt:getdiscount_amt,
				keyRecStatus:RecStatus,
				prod_code:prod_code,
				prodtname:prodtname
			},

			success: function(data)
			{
				if(data=="Insert_Success")
				{
					// แสดง popup ด้วย sweet alert
					swal("Record Save!", "บันทึกรายการเรียบร้อย!", "success");
					// ปิด modal
					$(".PmtTransMastModel").modal('hide');
					window.location.href = "pmtproductset";
				}
			},

		},"json");
	});

	$('body').on("click",'button#submitedit',function(){

		var getpmt_product_set_id = $("input#txtpmt_product_set_id").val();
		var getproduct_set_code   	= $("input#product_set_code").val();
		var getpmt_group_code  	= $("input#pmt_group_code").val();
		var getproduct_set_desc = $("input#product_set_desc").val();
		var getset_qty			= $("input#set_qty").val();
	  	var getunit_price_amt	= $("input#unit_price_amt").val();
	  	var getset_price_amt	= $("input#set_price_amt").val();
	  	var getuom          	= $("select#uom").val();
	  	var getdiscount_type	= $("select#discount_type").val();
	  	var getdiscount_amt		= $("input#discount_amt").val();

		//---Dropdown list
		var RecStatus      = $("select#txtRecStatusID").val();  

		var _token = $("input[name=_token]").val();


		//--------------------Detail -------------------------------
		var prod_code = [];
		$("input[name='prod_code[]']").each(function ()
		{
			prod_code.push($(this).val());
		});

		var prodtname = [];
		$("input[name='prodtname[]']").each(function ()
		{
			prodtname.push($(this).val());
		});

		//-----------End Detail --------------------------------------


		$.ajax({

			beforeSend:function() { 
				// Loading...
			},

			complete:function() {
				// Close Loading...
			},

			url:'submitProductSetedit',
			type:'POST',
			cache:false,
			data:{
				_token:_token,
				keyproduct_set_code:getproduct_set_code,
				keypmt_group_code:getpmt_group_code,
				keyproduct_set_desc:getproduct_set_desc,
				keyset_qty:getset_qty,
				keyunit_price_amt:getunit_price_amt,
				keyset_price_amt:getset_price_amt,
				keyuom:getuom,
				keydiscount_type:getdiscount_type,
				keydiscount_amt:getdiscount_amt,
				keyRecStatus:RecStatus,
				keygetpmt_product_set_id:getpmt_product_set_id,
				prod_code:prod_code,
				prodtname:prodtname
			},

			success: function(data)
			{
				if(data=="Insert_Success")
				{
					// แสดง popup ด้วย sweet alert
					swal("Record Save!", "บันทึกรายการเรียบร้อย!", "success");
					// ปิด modal
					$(".PmtTransMastModel").modal('hide');
					window.location.href = "pmtproductset";
				}
			},

		},"json");
	});

});