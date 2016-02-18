var App = function() {
	var  EntityCreate  = function() {
		//alert("Ok");

		//รับค่าจาก Form
		var isbn = $("input[name=isbn]");
		var title = $("input[name=title]");
		var author = $("input[name=author]");
		var publisher = $("input[name=publisher]");
		var image = $("input[name=image]");
		var button = $("button#submit");
		var result = $("div.showresult");
		var _token = $("input[name=_token]")

		//Event
		$(button).click(function(){
			//alert(isbn.val());

			// Post Data to Controller
			$.ajax({
				url: '../book',
				type: 'post' ,
				cache: false ,
				data: {
					isbn:isbn.val() ,
					title:title.val() ,
					author:author.val(),
					publisher:publisher.val(),
					_token:_token.val()
				} ,
				beforeSend:function(){
					result.html("กำลังส่งข้อมูล");
				},
				complete:function(){
					//result.html("ส่งข้อมูลเรียบร้อยแล้ว");
				},
				success:function(data){
					result.html(data);


					//Reset form value
					$("form#add_book").trigger('reset');
					$(isbn).focus();
				}

			},"json");	

			return false;  // disable form submit
		});
	}


	var ShowEntity = function(){
		//alert("Ok");

		$("div.showresult").load("showentity");   // ใช้ Ajax
	}

	
	return {
		init: function() {
			//initial here
		},

		doEntityCreate:function () {
			EntityCreate();
		},

		doShowEntity:function (){
			ShowEntity();
		}
	};
}();