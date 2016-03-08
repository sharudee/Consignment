$(function(){

	// Event Submitcos2ho
	
	$('body').on("click",'button#Submitcos2ho',function(){
	
		//alert("pk");
		$.ajax({

			beforeSend:function() { 
				// Loading...
			},

			complete:function() {
				// Close Loading...
			},

			url:'cos2ho_process',
			type:'GET',
			cache:false,
			
			success: function(data)
			{
				//alert(data);
				if(data == "Success")
				{
					

					swal({ 
					  title: "Process Complete!",
					   text: "ประมวลผลเรียบร้อย!",
					    type: "success" 
					  },
					  function(){
					    window.location.reload();
					});
					
				}
	
			},
			 

		},"json");
		
	});


	



});