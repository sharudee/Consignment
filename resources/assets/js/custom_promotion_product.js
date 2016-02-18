$(function(){
	// Event newpo Link
	$("a[rel=newpromotionproduct]").click(function(){
		$.get('promotionproductform',function(data){
			$("#promotionProduct_id").html(data);
			// เปิด modal
			$(".promotionProduct_class").modal('show');
		});
	});



});