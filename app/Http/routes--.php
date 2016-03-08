<?php

Route::get('/',"HomeController@index");

Route::get('home',"HomeController@home");

Route::get('sales','SaleController@sales');
Route::get('salesform','SaleController@salesform');
Route::get('salesshow/{id}','SaleController@salesshow');
Route::get('salesedit/{id}','SaleController@salesedit');
Route::get('salesproductform/{pmt_no}','SaleController@productform');
Route::get('salespromotionform/{pdate}','SaleController@salespromotionform');
Route::get('salestitleform','SaleController@salestitleform');
Route::get('salesprovform','SaleController@salesprovform');
Route::get('salespostform/{prov}','SaleController@salespostform');
Route::get('salespayform','SaleController@salespayform');
Route::get('salesdiscform/{pmt_no}','SaleController@salesdiscform');
Route::post('submitOrder','SaleController@submitOrder');
Route::post('editOrder','SaleController@editOrder');
Route::get('salesreport/{id}','SaleController@salesreport');
Route::get('salesfile/{id}','SaleController@salesfile');
Route::post('salesupload/{id}','SaleController@salesupload');
Route::get('salesshowfile/{id}','SaleController@salesshowfile');
//Route::get('uploadfile/{file_name}','SaleController@uploadfile');


Route::get('salespremiumform/{pmt_no}','SaleController@premiumform');


Route::get('commissionclass_cust','ComclassController@commissioncust');
Route::get('incentive_model','IncentiveController@incentivemodel');

Route::get('pcwork/{emp_code}', ['as' => 'pcwork.index', 'uses' => 'PcworkController@index']);
Route::get('pcwork/{emp_code}/create', ['as' => 'pcwork.create', 'uses' => 'PcworkController@create']);

Route::get('pctime', 'PcworkController@pctime');
Route::post('workIn', 'PcworkController@workIn');
Route::post('workOut', 'PcworkController@workOut');

Route::get('commissionclass/{class}', ['as' => 'comclass.index', 'uses' => 'ComclassController@index']);

Route::get('customer','CustomerController@index');
Route::post('submitcustomer','CustomerController@submitcustomer');
Route::get('customerlist','CustomerController@customerlist');
Route::get('customershow/{id}','CustomerController@customershow');
Route::get('customeredit/{id}','CustomerController@customeredit');
Route::post('editcustomer','CustomerController@editcustomer');


Route::get('data_cos2ho','TransferController@cos2ho');
Route::get('data_ho2cos','TransferController@ho2cos');
Route::get('cos2ho_process','TransferController@cos2ho_process');

Route::get('custorder','CustorderController@index');
Route::get('remand','RemandController@index');

Route::resource('entity', 'EntityController');
Route::resource('docmast', 'DocController');
Route::resource('whmast', 'WhController');
Route::resource('whmast', 'WhController');
Route::resource('pc', 'PcController');
Route::resource('pcwork', 'PcworkController', ['except' => ['index','create']]);
Route::resource('commission', 'CommissionController');
Route::resource('comclass', 'ComclassController', ['except' => ['index']]);
Route::resource('incentive', 'IncentiveController');



Route::get('admin',function(){
	if(Auth::check()){
		return redirect('home');
	}else{
		return redirect('/');
	}
});

// Submit Login
Route::post('admin/loginprocess','Admins\AdminController@loginprocess');

// Logout
Route::get('admin/logout','Admins\AdminController@logout');



//----------Popup -------------------------------------------------------
Route::get('getmstmodel','Promotion\PopupController@getmstmodel'); 
Route::get('get_pdsize_code','Promotion\PopupController@get_pdsize_code'); 
Route::get('get_pdgrp_code','Promotion\PopupController@get_pdgrp_code'); 
Route::get('get_pdbrnd_code','Promotion\PopupController@get_pdbrnd_code'); 
Route::get('get_pdcolor_code','Promotion\PopupController@get_pdcolor_code'); 
Route::get('get_pddsgn_code','Promotion\PopupController@get_pddsgn_code'); 
Route::get('popup_transmst_form','Promotion\PopupController@get_transmst_form'); 
Route::get('popup_transmst_discshop','Promotion\PopupController@get_transmst_discshop'); 

//Route::get('get_product_mst/{id}/{name}','Promotion\PmtProductSetController@get_product_mst');  
Route::get('get_product_mst','Promotion\PmtProductSetController@get_product_mst');  

//----------End Popup ---------------------------------------------------



//----------Promotion Controller ----------------------------------------

   //-------Master ------------------
	//----- กลุ่มข้อมูล -------------------------------------
	Route::get('pmtgrpmast','Promotion\PmtTrnsGrpMastController@pmtgrpmast');
	Route::get('addpmtgrpmastform','Promotion\PmtTrnsGrpMastController@addpmtgrpmastform');
	Route::get('editpmtgrpmastform/{pmt_group_id}','Promotion\PmtTrnsGrpMastController@editpmtgrpmastform'); 
	Route::get('search-pmtgrpMast','Promotion\PmtTrnsMastController@search'); 
	
	Route::post('submitaddpmtgrpmastform','Promotion\PmtTrnsGrpMastController@submitaddpmtgrpmastform'); 
	Route::post('submiteditpmtgrpmastform','Promotion\PmtTrnsGrpMastController@submiteditpmtgrpmastform'); 
	Route::post('pmtgrpmast-del','Promotion\PmtTrnsGrpMastController@pmtgrpmast_del');

	//----- End กลุ่มข้อมูล -------------------------------------


	//----- สร้าง ประเภทรายการ -------------------------------------
	Route::get('pmttrnsmast','Promotion\PmtTrnsMastController@pmttrnsmast');
	Route::get('addpmttrnsmastform','Promotion\PmtTrnsMastController@addpmttrnsmastform');
	Route::get('popup_mstgrp_modal_form','Promotion\PmtTrnsMastController@popup_mstgrp_modal_form'); 
	Route::get('editpmttrnsmastform/{pmt_transaction_id}','Promotion\PmtTrnsMastController@editpmttrnsmastform'); 
	Route::get('search-TrnsMast','Promotion\PmtTrnsMastController@search'); 

	Route::post('submitaddpmttrnsmastform','Promotion\PmtTrnsMastController@submitaddpmttrnsmastform');
	Route::post('submiteditpmttrnsmastform','Promotion\PmtTrnsMastController@submiteditpmttrnsmastform');
	Route::post('pmttrnsmast-del','Promotion\PmtTrnsMastController@pmttrnsmast_del');
	//-----------End สร้าง ประเภทรายการ ------------------------------
	Route::get('search-Productset','Promotion\PmtProductSetController@search'); 
	Route::get('pmtproductset','Promotion\PmtProductSetController@pmtproductset'); 
	Route::get('addpmtproductsetform','Promotion\PmtProductSetController@addpmtproductsetform'); 
	Route::get('editpmtproductsetform/{id}','Promotion\PmtProductSetController@get_pmtproductset_for_update'); 
	

	Route::post('submitProductSetadd','Promotion\PmtProductSetController@submitadd');   //----Insert Data 
	Route::post('submitProductSetedit','Promotion\PmtProductSetController@submitedit');   //----Edit Data 
	Route::post('submitProductSetdelete','Promotion\PmtProductSetController@submitdelete'); //----Delete Data
   //-------End Master --------------

	//-------------Promotion -------------------------------------------------


	Route::get('promotion','Promotion\PromotionController@index');
	Route::get('addpromotionform','Promotion\PromotionController@addpromotionform');
	Route::get('editpromotionform/{id}','Promotion\PromotionController@editpromotionform');  
	Route::get('search-promotion','Promotion\PromotionController@search'); 


	Route::post('submitpromotion','Promotion\PromotionController@submitpromotion');
	Route::post('submiteditpromotion','Promotion\PromotionController@submiteditpromotion');
	Route::post('promotion-del','Promotion\PromotionController@promotion_del'); 


	Route::get('search-pmtconsignnee','Promotion\PmtConsigneeController@search'); 
	Route::get('getcustgrpform','Promotion\PmtConsigneeController@get_cust_grp');  //---------Popup เลือก กลุ่มลูกคา้
	Route::get('getcustform/{cust_grp_code}','Promotion\PmtConsigneeController@get_cust'); //------Popup เลือก Customer
	Route::get('pmtconsignnee','Promotion\PmtConsigneeController@pmtconsignnee');  //---------หน้า หลัก 
	Route::get('addpmtconsignneeform','Promotion\PmtConsigneeController@addpmtconsignneeform');
	Route::get('getaddpmtconsignneeform/{pmt_id}','Promotion\PmtConsigneeController@getaddpmtconsignneeform');//---------ดึงข้อมูล ห้างจัดรายการ เพื่อเพิ่ม หรือแก้ไข

	Route::post('submitaddconsignee','Promotion\PmtConsigneeController@submit_addconsignee');  //---------บันทึก ห้างจัดรายการ



//----------Popup Modal ------------------------------
//popupmstgrpmodalform


//-----------End Popup Modal -------------------------

//Route::get('promotionproduct','Promotion\PromotionController@promotionproduct'); 
//Route::get('promotionproductform','Promotion\PromotionController@promotionproductform'); 

Route::get('search-pmtpackage','Promotion\PmtPackageController@search');
Route::get('pmtpackage','Promotion\PmtPackageController@pmtpackage');  //--Page แรก
Route::get('pmtpackagecontact/{pmt_mast_id}','Promotion\PmtPackageController@pmtpackagecontact'); 
Route::get('pmtpackagecontact/{pmt_mast_id}/{pmt_mast_id1}','Promotion\PmtPackageController@pdmodel_code'); 
Route::get('pmtpackagecontact/{pmt_mast_id}/{pmt_mast_id1}/{pmt_mast_id2}','Promotion\PmtPackageController@pdsize_code'); 
Route::get('pmtpackagecontact/{pmt_mast_id}/{pmt_mast_id1}/{pmt_mast_id2}/{pmt_mast_id3}','Promotion\PmtPackageController@getprodset'); 
Route::get('pmtpackagecontact/{pmt_mast_id}/{pmt_mast_id1}/{pmt_mast_id2}/{pmt_mast_id3}/{pmt_mast_id4}','Promotion\PmtPackageController@getpremuimset'); 
//Route::get('addpmtpackageform','Promotion\PmtPackageController@pmtpackageform'); 
Route::get('addnewpmtpackageform/{pmt_mast_id}','Promotion\PmtPackageController@addnewpmtpackageform');  //-----------New Package 
Route::get('editpmtpackageform/{pmt_mast_id}/{package_mast_id}','Promotion\PmtPackageController@loadforeditpmtpackageform');  //------Load Data for edit Package


Route::post('pmtpackagecontact/{pmt_mast_id}','Promotion\PmtPackageController@submitaddnewpackage');  //--------บันทึก New Package
Route::post('pmtpackagecontact/{pmt_mast_id}/{package_mast_id}','Promotion\PmtPackageController@submiteditpackage'); 
Route::put('pmtpackagecontact/{pmt_mast_id}/{package_mast_id}','Promotion\PmtPackageController@submitDeletePackage'); 

Route::get('pmtdiscpremiumdeny','Promotion\PmtDiscPremiumDenyController@pmtdiscpremiumdeny'); 
Route::get('search-pmtdiscpremiumdeny','Promotion\PmtDiscPremiumDenyController@search'); 
Route::get('getpmtdiscpremiumdenyform/{pmt_id}','Promotion\PmtDiscPremiumDenyController@getpmtdiscpremiumdenytoform'); //-------โหลดข้อมูลลงใน Form Add and Edit 

Route::post('submitaddeditdiscpremiumdeny','Promotion\PmtDiscPremiumDenyController@submit_addeditdiscpremiumdeny');  //---------บันทึก ่สวนลด






Route::get('pmtdiscshop','Promotion\PmtDiscShopController@pmtdiscshop'); 
Route::get('search-pmtdiscshop','Promotion\PmtDiscShopController@search'); 
Route::get('get-premuimset','Promotion\PmtDiscShopController@getpremuimset');  
Route::get('getpmtdiscshopform/{pmt_id}','Promotion\PmtDiscShopController@getpmtdiscshopform');  //----เปิด Form 
Route::post('submitaddeditdiscshop','Promotion\PmtDiscShopController@submit_addeditdiscshop');  //---------บันทึก ่สวนลดการซื้อสินค้าครบ
 

//Route::get('addpmtdiscshopform','Promotion\PmtDiscShopController@addpmtdiscshopform'); 


Route::get('pmtdiscpay','Promotion\PmtDiscPayController@pmtdiscpay'); 
Route::get('search-pmtdiscpay','Promotion\PmtDiscPayController@search'); 

Route::get('getpmtdiscpayform/{pmt_id}','Promotion\PmtDiscPayController@getpmtdiscpayform');  //----เปิด Form 
Route::post('submitaddeditpmtdiscpay','Promotion\PmtDiscPayController@submit_addeditpmtdiscpay');  //---------บันทึก ่สวนลดการชำระเงิน
 

Route::get('addpmtdiscpayform','Promotion\PmtDiscPayController@addpmtdiscpayform'); 
//----------End Promotion Controller ------------------------------------



//-----------Master Data -------------------------------------------------




Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);



