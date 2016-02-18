$(function(){
	// Event newpo Link
/*	$("a[rel=newconsignnee]").click(function(){
		$.get('addpmtconsignneeform',function(data){
			$("#promotionconsignnee").html(data);
			// เปิด modal
			$(".promotionconsignnee").modal('show');
		});
	});


*/
	// Popup Add Mst Grp Data
	$('body').on('click','a[rel=click_consignnee_grp_modal]',function(){
		$.get('getcustgrpform',function(data){
			$("#consignnee_grp_modal").html(data);
			// เปิด modal
			$(".consignnee_grp_modal").modal('show');
		});
	});

	// Event submit  Mst Grp Data
	$('body').on('click','button#submit_select_custgrp',function(){
		var custgrp_code = $('input[name=radcus]:checked').val();
		var custgrp_name = $('input[name=radcus]:checked').attr('data-custgrpname');
		$('input[name=custgrp_code]').val(custgrp_code);
		$('input[name=custgrp_name]').val(custgrp_name);
		$(".consignnee_grp_modal").modal('hide');
	});

	// Popup Customer  $.get('customerform/'+$('select#cust_group').val(),function(data){    getcustform
	$('body').on('click','a[rel=click_consignnee_modal]',function(){
		var custgrp_code =$('input[name=custgrp_code]').val();
		if ( custgrp_code.length )
		{
		}else
		{
			custgrp_code = "No Parameter";
		}

		$.get('getcustform/'+custgrp_code,function(data){ 
			$("#consignnee_modal").html(data);
			// เปิด modal
			$(".consignnee_modal").modal('show');
		});
	});

	// Event submit  Customer




	$('body').on('click','button#submit_select_cus',function(){
		
		var rows;

		var entity_code=[];				//		data-prodtname="{{$cs->prod_tname}}"  
		var entity_tname=[];				//		data-pdmodelcode="{{$cs->pdmodel_code}}"


		$("input[name='entity_code_popup[]']:checked").each(function ()
		{
			entity_code.push($(this).val());
			entity_tname.push($(this).attr('data-entitytname'));		

		});
	

		if(entity_code.length)
		{

			
			var mytable;
			for(rows=1;rows<=entity_code.length;rows++)
			{
				mytable += "<tr>"+
						"<td>"+entity_code[(rows-1)]+"<input type='hidden' name='entity_code[]' value='"+entity_code[(rows-1)]+"'></td>"+
						"<td>"+entity_tname[(rows-1)]+"<input type='hidden' name='entity_tname[]' value='"+entity_tname[(rows-1)]+"'></td>"+
						"<td><a href=\"#delete\" rel='pro_delete' class=\"btn btn-sm btn-danger\">Del</a></td>"+
					    "</tr>";        
			}

			$('#po_table tbody').prepend(mytable);

			// เรียกใช้ฟังก์ชันนับจำนวนรายการและราคารวม

			$(".consignnee_modal").modal('hide');

		}else{
			alert('กรุณาเลือกอย่างน้อย 1 รายการ');
		}
	
	});





	$('body').on("click",'button#submitAssignConsignee',function(){

		var pmt_mast_id = $("input#pmt_mast_id").val();
		var getdiscount_amt  	= 0.00;

		var _token = $("input[name=_token]").val();


		//--------------------Detail -------------------------------
		var entity_code = [];
		$("input[name='entity_code[]']").each(function ()
		{
			entity_code.push($(this).val());
		});

/*		var discount_amt = [];
		$("input[name='discount_amt[]']").each(function ()
		{
			prodtname.push($(this).val());
		});*/

		//-----------End Detail --------------------------------------


		$.ajax({

			beforeSend:function() { 
				// Loading...
			},

			complete:function() {
				// Close Loading...
			},

			url:'submitaddconsignee',
			type:'POST',
			cache:false,
			data:{
				_token:_token,
				pmt_mast_id:pmt_mast_id,
				entity_code:entity_code
			},

			success: function(data)
			{
				if(data=="Insert_Success")
				{
					// แสดง popup ด้วย sweet alert
					swal("Record Save!", "บันทึกรายการเรียบร้อย!", "success");
					// ปิด modal
					$(".consignnee_grp_modal").modal('hide');
					window.location.href = "pmtconsignnee";
				}
			},

		},"json");
	});

});