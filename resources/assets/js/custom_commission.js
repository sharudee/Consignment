$(function(){




	// Event Add Promotion Form
	$('body').on('click','a[rel=addcust]',function(){
		$.get('commissionclass_cust',function(data){
			$("#custmodal").html(data);
			// เปิด modal
			$(".custmodal").modal('show');
		});
	});


	// Event submit Customer
	$('body').on('click','button#submitcust',function(){
		var cuscode = $('input[name=radcus]:checked').val();
		var cusname = $('input[name=radcus]:checked').attr('data-custname');
		$('input[name=cust_code]').val(cuscode);
		$('input[name=cust_name]').val(cusname);
		$(".custmodal").modal('hide');
	});

	 //Event submit Customer
	/*$('body').on('click','button#submitcust',function(){
		var cuscode = $('input[name=radcus]:checked').val();
		var cusname = $('input[name=radcus]:checked').attr('data-custname');
		$('input[name=cust_code]').val(cuscode);
		$('input[name=cust_name]').val(cusname);
		$(".custmodal").modal('hide');
	});
	*/
	

});