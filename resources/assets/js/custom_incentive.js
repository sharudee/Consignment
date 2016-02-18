$(function(){


	


	// Event Add Promotion Form
	$('body').on('click','a[rel=addmodel]',function(){
		$.get('incentive_model',function(data){
			$("#modelmodal").html(data);
			// เปิด modal
			$(".modelmodal").modal('show');
		});
	});




	 //Event submit 
	$('body').on('click','button#submitmodel',function(){
		var modelcode = $('input[name=radcus]:checked').val();
		//var cusname = $('input[name=radcus]:checked').attr('data-custname');
		$('input[name=pdmodel_code]').val(modelcode);
		//$('input[name=cust_name]').val(cusname);
		$(".modelmodal").modal('hide');
	});
	
	

});