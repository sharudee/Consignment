$(function(){

	// Brand
	$('body').on('click','a[rel=addbrand1]',function(){
		
		$.get('productbrand1',function(data){
			$("#brandmodal").html(data);
			// เปิด modal
			$(".brandmodal").modal('show');
		});
	});

	$('body').on('click','a[rel=addbrand2]',function(){
		
		$.get('productbrand2',function(data){
			$("#brandmodal").html(data);
			// เปิด modal
			$(".brandmodal").modal('show');
		});
	});

	$('body').on('change','input[name="radbrand1"]', function() {
	  	var brand = $('input[name=radbrand1]:checked').val();
		

		$('input[name=brand1]').val(brand);
		$(".brandmodal").modal('hide');
	});


	$('body').on('change','input[name="radbrand2"]', function() {
	  	var brand = $('input[name=radbrand2]:checked').val();
		

		$('input[name=brand2]').val(brand);
		$(".brandmodal").modal('hide');
	});

	// Event submit 
	$('body').on('click','button#submitbrand1',function(){
		var brand = $('input[name=radbrand1]:checked').val();

		$('input[name=brand1]').val(brand);
		$(".brandmodal").modal('hide');
	});

	$('body').on('click','button#submitbrand2',function(){
		var brand = $('input[name=radbrand2]:checked').val();

		$('input[name=brand2]').val(brand);
		$(".brandmodal").modal('hide');
	});


	// Design
	$('body').on('click','a[rel=adddesign1]',function(){
		
		$.get('productdesign1',function(data){
			$("#designmodal").html(data);
			// เปิด modal
			$(".designmodal").modal('show');
		});
	});

	$('body').on('click','a[rel=adddesign2]',function(){
		
		$.get('productdesign2',function(data){
			$("#designmodal").html(data);
			// เปิด modal
			$(".designmodal").modal('show');
		});
	});

	$('body').on('change','input[name="raddesign1"]', function() {
	  	var design = $('input[name=raddesign1]:checked').val();
		

		$('input[name=design1]').val(design);
		$(".designmodal").modal('hide');
	});


	$('body').on('change','input[name="raddesign2"]', function() {
	  	var design = $('input[name=raddesign2]:checked').val();
		

		$('input[name=design2]').val(design);
		$(".designmodal").modal('hide');
	});

	// Event submit 
	$('body').on('click','button#submitdesign1',function(){
		var design = $('input[name=raddesign1]:checked').val();

		$('input[name=design1]').val(design);
		$(".designmodal").modal('hide');
	});

	$('body').on('click','button#submitdesign2',function(){
		var design = $('input[name=raddesign2]:checked').val();

		$('input[name=design2]').val(design);
		$(".designmodal").modal('hide');
	});



	// Color
	$('body').on('click','a[rel=addcolor1]',function(){
		
		$.get('productcolor1',function(data){
			$("#colormodal").html(data);
			// เปิด modal
			$(".colormodal").modal('show');
		});
	});

	$('body').on('click','a[rel=addcolor2]',function(){
		
		$.get('productcolor2',function(data){
			$("#colormodal").html(data);
			// เปิด modal
			$(".colormodal").modal('show');
		});
	});

	$('body').on('change','input[name="radcolor1"]', function() {
	  	var color = $('input[name=radcolor1]:checked').val();
		

		$('input[name=color1]').val(color);
		$(".colormodal").modal('hide');
	});


	$('body').on('change','input[name="radcolor2"]', function() {
	  	var color = $('input[name=radcolor2]:checked').val();
		

		$('input[name=color2]').val(color);
		$(".colormodal").modal('hide');
	});

	// Event submit 
	$('body').on('click','button#submitcolor1',function(){
		var color = $('input[name=radcolor1]:checked').val();

		$('input[name=color1]').val(color);
		$(".colormodal").modal('hide');
	});

	$('body').on('click','button#submitcolor2',function(){
		var color = $('input[name=radcolor2]:checked').val();

		$('input[name=color2]').val(color);
		$(".colormodal").modal('hide');
	});

	
	// Size
	$('body').on('click','a[rel=addsize1]',function(){
		
		$.get('productsize1',function(data){
			$("#sizemodal").html(data);
			// เปิด modal
			$(".sizemodal").modal('show');
		});
	});

	$('body').on('click','a[rel=addsize2]',function(){
		
		$.get('productsize2',function(data){
			$("#sizemodal").html(data);
			// เปิด modal
			$(".sizemodal").modal('show');
		});
	});

	$('body').on('change','input[name="radsize1"]', function() {
	  	var size = $('input[name=radsize1]:checked').val();
		

		$('input[name=size1]').val(size);
		$(".sizemodal").modal('hide');
	});


	$('body').on('change','input[name="radsize2"]', function() {
	  	var size = $('input[name=radsize2]:checked').val();
		

		$('input[name=size2]').val(size);
		$(".sizemodal").modal('hide');
	});

	// Event submit 
	$('body').on('click','button#submitsize1',function(){
		var size = $('input[name=radsize1]:checked').val();

		$('input[name=size1]').val(size);
		$(".sizemodal").modal('hide');
	});

	$('body').on('click','button#submitcolor2',function(){
		var size = $('input[name=radsize2]:checked').val();

		$('input[name=size2]').val(size);
		$(".sizemodal").modal('hide');
	});



	// Product Code
	$('body').on('click','a[rel=addprod1]',function(){
		var brand1 = $('input#brand1').val();
		var brand2 = $('input#brand2').val();
		var design1 = $('input#design1').val();	
		var design2 = $('input#design2').val();
		var color1 = $('input#color1').val();	
		var color2 = $('input#color2').val();	
		var size1 = $('input#size1').val();
		var size2 = $('input#size2').val();


		if(brand1=='')
		{
			brand1 = "0";
		}
		if(brand2=='')
		{
			brand2 = "Z";
		}
		if(design1=='')
		{
			design1 = "0";
		}
		if(design2=='')
		{
			design2 = "Z";
		}

		if(color1=='')
		{
			color1 = "0";
		}
		if(color2=='')
		{
			color2 = "Z";
		}

		if(size1=='')
		{
			size1 = "0";
		}
		if(size2=='')
		{
			size2 = "Z";
		}

		$.get('productcode1/'+brand1+'/'+brand2+'/'+design1+'/'+design2+'/'+color1+'/'+color2+'/'+size1+'/'+size2,function(data){
			$("#codemodal").html(data);
			// เปิด modal
			$(".codemodal").modal('show');
		});
	});

	$('body').on('click','a[rel=addprod2]',function(){
		
		var brand1 = $('input#brand1').val();
		var brand2 = $('input#brand2').val();
		var design1 = $('input#design1').val();	
		var design2 = $('input#design2').val();
		var color1 = $('input#color1').val();	
		var color2 = $('input#color2').val();	
		var size1 = $('input#size1').val();
		var size2 = $('input#size2').val();


		if(brand1=='')
		{
			brand1 = "0";
		}
		if(brand2=='')
		{
			brand2 = "Z";
		}
		if(design1=='')
		{
			design1 = "0";
		}
		if(design2=='')
		{
			design2 = "Z";
		}

		if(color1=='')
		{
			color1 = "0";
		}
		if(color2=='')
		{
			color2 = "Z";
		}

		if(size1=='')
		{
			size1 = "0";
		}
		if(size2=='')
		{
			size2 = "Z";
		}

		$.get('productcode2/'+brand1+'/'+brand2+'/'+design1+'/'+design2+'/'+color1+'/'+color2+'/'+size1+'/'+size2,function(data){
			$("#codemodal").html(data);
			// เปิด modal
			$(".codemodal").modal('show');
		});
	});

	$('body').on('change','input[name="radcode1"]', function() {
	  	var prod = $('input[name=radcode1]:checked').val();
		

		$('input[name=prod_code1]').val(prod);
		$(".codemodal").modal('hide');
	});


	$('body').on('change','input[name="radcode2"]', function() {
	  	var prod = $('input[name=radcode2]:checked').val();
		

		$('input[name=prod_code2]').val(prod);
		$(".codemodal").modal('hide');
	});

	// Event submit 
	$('body').on('click','button#submitcode1',function(){
		var prod = $('input[name=radcode1]:checked').val();

		$('input[name=prod_code1]').val(prod);
		$(".codemodal").modal('hide');
	});

	$('body').on('click','button#submitcode2',function(){
		var prod = $('input[name=radcode2]:checked').val();

		$('input[name=prod_code2]').val(prod);
		$(".codemodal").modal('hide');
	});



	// Entity
	$('body').on('click','a[rel=addentity1]',function(){
		
		$.get('saleentity1',function(data){
			$("#entitymodal").html(data);
			// เปิด modal
			$(".entitymodal").modal('show');
		});
	});

	$('body').on('click','a[rel=addentity2]',function(){
		
		$.get('saleentity2',function(data){
			$("#entitymodal").html(data);
			// เปิด modal
			$(".entitymodal").modal('show');
		});
	});

	$('body').on('change','input[name="radentity1"]', function() {
	  	var entity = $('input[name=radentity1]:checked').val();
		

		$('input[name=entity1]').val(entity);
		$(".entitymodal").modal('hide');
	});


	$('body').on('change','input[name="radentity2"]', function() {
	  	var entity = $('input[name=radentity2]:checked').val();
		

		$('input[name=entity2]').val(entity);
		$(".entitymodal").modal('hide');
	});

	// Customer
	$('body').on('click','a[rel=addcust1]',function(){
		
		$.get('salecust1',function(data){
			$("#custmodal").html(data);
			// เปิด modal
			$(".custmodal").modal('show');
		});
	});

	$('body').on('click','a[rel=addcust2]',function(){
		
		$.get('salecust2',function(data){
			$("#custmodal").html(data);
			// เปิด modal
			$(".custmodal").modal('show');
		});
	});

	$('body').on('change','input[name="radcust1"]', function() {
	  	var cust = $('input[name=radcust1]:checked').val();
		

		$('input[name=cust1]').val(cust);
		$(".custmodal").modal('hide');
	});


	$('body').on('change','input[name="radcust2"]', function() {
	  	var cust = $('input[name=radcust2]:checked').val();
		

		$('input[name=cust2]').val(cust);
		$(".custmodal").modal('hide');
	});

	// Doc Code
	$('body').on('click','a[rel=adddoc1]',function(){
		
		$.get('saledoccode1',function(data){
			$("#docmodal").html(data);
			// เปิด modal
			$(".docmodal").modal('show');
		});
	});

	$('body').on('click','a[rel=adddoc2]',function(){
		
		$.get('saledoccode2',function(data){
			$("#docmodal").html(data);
			// เปิด modal
			$(".docmodal").modal('show');
		});
	});

	$('body').on('change','input[name="raddoc1"]', function() {
	  	var doc = $('input[name=raddoc1]:checked').val();
		

		$('input[name=doc_code1]').val(doc);
		$(".docmodal").modal('hide');
	});


	$('body').on('change','input[name="raddoc2"]', function() {
	  	var doc = $('input[name=raddoc2]:checked').val();
		

		$('input[name=doc_code2]').val(doc);
		$(".docmodal").modal('hide');
	});


	// Doc Date
	$("#doc_date1").datepicker({
		dateFormat: 'dd/mm/yy'
	});

	$("#doc_date2").datepicker({
		dateFormat: 'dd/mm/yy'
	});



	// Doc no
	$('body').on('click','a[rel=adddocno1]',function(){
		var entity1 = $('input#entity1').val();
		var entity2 = $('input#entity2').val();
		var cust1 = $('input#cust1').val();	
		var cust2 = $('input#cust2').val();
		var doc_code1 = $('input#doc_code1').val();	
		var doc_code2 = $('input#doc_code2').val();	

		var idate1 = $('input#doc_date1').val();
		var darr1 = idate1.split('/');
		var vdate1 = darr1[2]+'-'+darr1[1]+'-'+darr1[0];

		var idate2 = $('input#doc_date2').val();
		var darr2 = idate2.split('/');
		var vdate2 = darr2[2]+'-'+darr2[1]+'-'+darr2[0];

		if(entity1=='')
		{
			entity1 = "A";
		}
		if(entity2=='')
		{
			entity2 = "Z";
		}
		if(cust1=='')
		{
			cust1 = "A";
		}
		if(cust2=='')
		{
			cust2 = "Z";
		}

		if(doc_code1=='')
		{
			doc_code1 = "A";
		}
		if(doc_code2=='')
		{
			doc_code2 = "Z";
		}

		if(idate1=='')
		{
			vdate1 = "1990-01-01";
		}
		if(idate2=='')
		{
			vdate2 = "9999-12-31";
		}

		$.get('saledocno1/'+entity1+'/'+entity2+'/'+cust1+'/'+cust2+'/'+doc_code1+'/'+doc_code2+'/'+vdate1+'/'+vdate2,function(data){
			$("#docnomodal").html(data);
			// เปิด modal
			$(".docnomodal").modal('show');
		});
	});

	$('body').on('click','a[rel=adddocno2]',function(){
		var entity1 = $('input#entity1').val();
		var entity2 = $('input#entity2').val();
		var cust1 = $('input#cust1').val();	
		var cust2 = $('input#cust2').val();
		var doc_code1 = $('input#doc_code1').val();	
		var doc_code2 = $('input#doc_code2').val();	

		var idate1 = $('input#doc_date1').val();
		var darr1 = idate1.split('/');
		var vdate1 = darr1[2]+'-'+darr1[1]+'-'+darr1[0];

		var idate2 = $('input#doc_date2').val();
		var darr2 = idate2.split('/');
		var vdate2 = darr2[2]+'-'+darr2[1]+'-'+darr2[0];

		if(entity1=='')
		{
			entity1 = "A";
		}
		if(entity2=='')
		{
			entity2 = "Z";
		}
		if(cust1=='')
		{
			cust1 = "A";
		}
		if(cust2=='')
		{
			cust2 = "Z";
		}

		if(doc_code1=='')
		{
			doc_code1 = "A";
		}
		if(doc_code2=='')
		{
			doc_code2 = "Z";
		}

		if(idate1=='')
		{
			vdate1 = "1990-01-01";
		}
		if(idate2=='')
		{
			vdate2 = "9999-12-31";
		}

		$.get('saledocno2/'+entity1+'/'+entity2+'/'+cust1+'/'+cust2+'/'+doc_code1+'/'+doc_code2+'/'+vdate1+'/'+vdate2,function(data){
			$("#docnomodal").html(data);
			// เปิด modal
			$(".docnomodal").modal('show');
		});
	});

	$('body').on('change','input[name="radno1"]', function() {
	  	var no = $('input[name=radno1]:checked').val();
		

		$('input[name=doc_no1]').val(no);
		$(".docnomodal").modal('hide');
	});


	$('body').on('change','input[name="radno2"]', function() {
	  	var no = $('input[name=radno2]:checked').val();
		

		$('input[name=doc_no2]').val(no);
		$(".docnomodal").modal('hide');
	});
});