$(function(){
	// Event newpo Link


$(document.body).on('click','a[rel=click_model_popup99]',function(){
		$.get('pdmodel_code/pdmodel_code',function(data){
			$("#pdmodelmodal2").html(data);
			// เปิด modal
			$(".pdmodelmodal2").modal('show');
		});
	});



	// Event submit  pdmodelmodal
	$('body').on('click','button#submit_select_mstmodel',function(){
		var pdmodel_code = $('input[name=radcus]:checked').val();
		var pdmodel_desc_h = $('input[name=radcus]:checked').attr('data-pdmodeldesc');
		$('input[name=pdmodel_code_package]').val(pdmodel_code);
		$('input[name=pdmodel_desc_h]').val(pdmodel_desc_h);
		$(".pdmodelmodal2").modal('hide');
	});


$('body').on('click','a[rel=click_pdsize_code_package]',function(){
		$.get('pdsize_code/pdsize_code/pdsize_code',function(data){
			$("#pdsize_code_modal").html(data);
			// เปิด modal
			$(".pdsize_code_modal").modal('show');
		});
	});



	// Event submit  pdmodelmodal
	$('body').on('click','button#submit_select_pdsize_code',function(){
		var pdsize_code = $('input[name=radcus]:checked').val();
		var pdsize_desc_h = $('input[name=radcus]:checked').attr('data-pdsizedesc');
		$('input[name=pdsize_code_package]').val(pdsize_code);
		$('input[name=pdsize_desc_h]').val(pdsize_desc_h);
		$(".pdsize_code_modal").modal('hide');
	});


	$('body').on('click','a[rel=click_product_set]',function(){
		$.get('pdsize_code/pdsize_code/pdsize_code/pdsize_code',function(data){
			$("#product_set_modal").html(data);
			// เปิด modal
			$(".product_set_modal").modal('show');
		});
	});



	// Event submit  submit_select_productset
	$('body').on('click','button#submit_select_productset',function(){
		var pmt_product_set = $('input[name=radcus]:checked').val();
		var pmt_product_desc = $('input[name=radcus]:checked').attr('data-pmtproductdesc');
		var package_unit_price = $('input[name=radcus]:checked').attr('data-unitpriceamt');
		$('input[name=pmt_product_set]').val(pmt_product_set);
		$('input[name=pmt_product_set_desc]').val(pmt_product_desc);
		$('input[name=package_unit_price]').val(package_unit_price); 
		$(".product_set_modal").modal('hide');
	})



	$('body').on('click','a[rel=click_premuim_set]',function(){
		$.get('pdsize_code/pdsize_code/pdsize_code/pdsize_code/premuim',function(data){
			$("#product_premuim_set_modal").html(data);
			// เปิด modal
			$(".product_premuim_set_modal").modal('show');
		});
	});



	// Event submit  click_premuim_set

	$('body').on('click','button#submit_select_premuimset',function(){
		
		var rows;


		var product_set_code=[];				//		data-prodtname="{{$cs->prod_tname}}"  
		var product_set_desc=[];				//		data-pdmodelcode="{{$cs->pdmodel_code}}"
		var set_qty=[];
		var unit_price_amt=[];
		var set_price_amt=[];
		var uom=[];

		$("input[name='product_premuim_setcode[]']:checked").each(function ()
		{
			product_set_code.push($(this).val());
			product_set_desc.push($(this).attr('data-premuimsetdesc'));		
			set_qty.push($(this).attr('data-premuimsetqty'));
			unit_price_amt.push($(this).attr('data-premuimsunitpriceamt'));
			set_price_amt.push($(this).attr('data-premuimsetpriceamt'));
			uom.push($(this).attr('data-premuimsetuom'));
		});
	

		if(product_set_code.length)
		{

			
			var mytable;
			for(rows=1;rows<=product_set_code.length;rows++)
			{
				mytable += "<tr>"+
						"<td>"+product_set_code[(rows-1)]+"<input type='hidden' name='product_set_code[]' value='"+product_set_code[(rows-1)]+"'></td>"+
						"<td>"+product_set_desc[(rows-1)]+"<input type='hidden' name='product_set_desc[]' value='"+product_set_desc[(rows-1)]+"'></td>"+
						"<td>"+set_qty[(rows-1)]+"<input type='hidden' name='set_qty[]' value='"+set_qty[(rows-1)]+"'></td>"+ 
						"<td>"+set_price_amt[(rows-1)]+"<input type='hidden' name='set_price_amt[]' value='"+set_price_amt[(rows-1)]+"'></td>"+
						"<td>"+uom[(rows-1)]+"<input type='hidden' name='uom[]' value='"+uom[(rows-1)]+"'></td>"+
						"<td><a href=\"#delete\" rel='pro_delete' class=\"btn btn-sm btn-danger\">Del</a></td>"+
					    "</tr>";        
			}

			$('#po_table tbody').prepend(mytable);

			// เรียกใช้ฟังก์ชันนับจำนวนรายการและราคารวม

			$(".product_premuim_set_modal").modal('hide');

		}else{
			alert('กรุณาเลือกอย่างน้อย 1 รายการ');
		}
	
	});


//-------------------submit_addnew_package --------------------

	$('body').on("click",'button#submit_addnew_package',function(){

		var pmt_mast_id = $("input#pmt_mast_id").val();
		var pmt_product_set_h= $("input#pmt_product_set").val(); 

		var pdmodel_code_h = $("input#pdmodel_code_package").val(); 
		var pdsize_code_h = $("input#pdsize_code_package").val(); 

		var pdmodel_desc_h = $("input#pdmodel_desc_h").val(); 
		var pdsize_desc_h = $("input#pdsize_desc_h").val(); 

		var package_unit_price_h = $("input#package_unit_price").val();  
		var total_price_amt_h = $("input#total_price_amt").val(); 
		var special1_price_amt_h = $("input#special1_price_amt").val(); 
		var special2_price_amt_h = $("input#special2_price_amt").val();  

		var pdmodel_desc_h = $("input#pdmodel_desc_h").val();  
		var pdsize_desc_h = $("input#pdsize_desc_h").val();  

		var _token = $("input[name=_token]").val();


		//--------------------Detail -------------------------------
		var product_set_code = [];
		$("input[name='product_set_code[]']").each(function ()
		{
			product_set_code.push($(this).val());
		});

		var product_set_desc = [];
		$("input[name='product_set_desc[]']").each(function ()
		{
			product_set_desc.push($(this).val());
		});

		var set_price_amt = [];
		$("input[name='set_price_amt[]']").each(function ()
		{
			set_price_amt.push($(this).val());
		});

		var uom = [];
		$("input[name='uom[]']").each(function ()
		{
			uom.push($(this).val());
		});

		var set_qty = [];
		$("input[name='set_qty[]']").each(function ()
		{
			set_qty.push($(this).val());
		});

		$.ajax({

			beforeSend:function() { 
				// Loading...
			},

			complete:function() {
				// Close Loading...
			},

			url:'submitaddnewpackage',
			type:'POST',
			cache:false,
			data:{
				_token:_token,
				pmt_mast_id_key:pmt_mast_id,
				pmt_product_set_h:pmt_product_set_h,
				pdmodel_code_h:pdmodel_code_h,
				pdsize_code_h:pdsize_code_h,
				pdmodel_desc_h:pdmodel_desc_h,
				pdsize_desc_h:pdsize_desc_h,
				package_unit_price_h:package_unit_price_h,
				total_price_amt_h:total_price_amt_h,
				special1_price_amt_h:special1_price_amt_h,
				special2_price_amt_h:special2_price_amt_h,
				product_set_code:product_set_code,
				product_set_desc:product_set_desc,
				set_price_amt:set_price_amt,
				set_qty:set_qty,
				uom:uom
			},

			success: function(data)
			{
				if(data=="Insert_Success")
				{
					// แสดง popup ด้วย sweet alert
					swal("Record Save!", "บันทึกรายการเรียบร้อย!", "success");
					// ปิด modal
					$(".consignnee_grp_modal").modal('hide');
					window.location.replace("http://localhost/cos/pmtpackagecontact/"+pmt_mast_id); 
					//redi window.location.href = "pmtpackagecontact";
				}
			},

		},"json");
	});

//------------------Summit Edit ------------------------------
	$('body').on("click",'button#submit_edit_package',function(){
		var package_mast_id = $("input#package_mast_id").val();
		var pmt_mast_id = $("input#pmt_mast_id").val();
		var pmt_product_set_h= $("input#pmt_product_set").val(); 

		var pdmodel_code_h = $("input#pdmodel_code_package").val(); 
		var pdsize_code_h = $("input#pdsize_code_package").val(); 

		var pdmodel_desc_h = $("input#pdmodel_desc_h").val(); 
		var pdsize_desc_h = $("input#pdsize_desc_h").val(); 

		var package_unit_price_h = $("input#package_unit_price").val();  
		var total_price_amt_h = $("input#total_price_amt").val(); 
		var special1_price_amt_h = $("input#special1_price_amt").val(); 
		var special2_price_amt_h = $("input#special2_price_amt").val();  

		var pdmodel_desc_h = $("input#pdmodel_desc_h").val();  
		var pdsize_desc_h = $("input#pdsize_desc_h").val();  

		var _token = $("input[name=_token]").val();


		//--------------------Detail -------------------------------
		var product_set_code = [];
		$("input[name='product_set_code[]']").each(function ()
		{
			product_set_code.push($(this).val());
		});

		var product_set_desc = [];
		$("input[name='product_set_desc[]']").each(function ()
		{
			product_set_desc.push($(this).val());
		});

		var set_price_amt = [];
		$("input[name='set_price_amt[]']").each(function ()
		{
			set_price_amt.push($(this).val());
		});

		var uom = [];
		$("input[name='uom[]']").each(function ()
		{
			uom.push($(this).val());
		});

		var set_qty = [];
		$("input[name='set_qty[]']").each(function ()
		{
			set_qty.push($(this).val());
		});

		$.ajax({

			beforeSend:function() { 
				// Loading...
			},

			complete:function() {
				// Close Loading...
			},

			url: pmt_mast_id+"/"+package_mast_id  ,
			type:'POST',
			cache:false,
			data:{
				_token:_token,
				pmt_mast_id_key:pmt_mast_id,
				package_mast_id:package_mast_id,
				pmt_product_set_h:pmt_product_set_h,
				pdmodel_code_h:pdmodel_code_h,
				pdsize_code_h:pdsize_code_h,
				pdmodel_desc_h:pdmodel_desc_h,
				pdsize_desc_h:pdsize_desc_h,
				package_unit_price_h:package_unit_price_h,
				total_price_amt_h:total_price_amt_h,
				special1_price_amt_h:special1_price_amt_h,
				special2_price_amt_h:special2_price_amt_h,
				product_set_code:product_set_code,
				product_set_desc:product_set_desc,
				set_price_amt:set_price_amt,
				set_qty:set_qty,
				uom:uom
			},

			success: function(data)
			{
				if(data=="Insert_Success")
				{
					// แสดง popup ด้วย sweet alert
					swal("Record Save!", "บันทึกรายการเรียบร้อย!", "success");
					// ปิด modal
					$(".consignnee_grp_modal").modal('hide');
					window.location.replace("http://localhost/cos/pmtpackagecontact/"+pmt_mast_id); 
					//redi window.location.href = "pmtpackagecontact";
				}
			},

		},"json");
	});
});


