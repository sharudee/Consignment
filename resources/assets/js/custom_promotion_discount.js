$(function(){
	// Event newpo Link
	$("a[rel=newpromotiondiscount1111]").click(function(){
		$.get('promotiondiscountform',function(data){
			$("#promotiondiscount_id").html(data);
			// เปิด modal
			$(".promotiondiscount_class").modal('show');
		});
	});



});