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

Route::get('commissionclass/{class}', ['as' => 'comclass.index', 'uses' => 'ComclassController@index']);


Route::resource('entity', 'EntityController');
Route::resource('docmast', 'DocController');
Route::resource('whmast', 'WhController');
Route::resource('whmast', 'WhController');
Route::resource('pc', 'PcController');
Route::resource('pcwork', 'PcworkController', ['except' => ['index','create']]);
Route::resource('commission', 'CommissionController');
Route::resource('comclass', 'ComclassController', ['except' => ['index']]);
Route::resource('incentive', 'IncentiveController');



//----------Promotion Controller ----------------------------------------
Route::get('promotion','PromotionController@index');
Route::get('addpromotionform','PromotionController@addpromotionform');

Route::get('promotionconsignnee','PromotionController@promotionconsignnee');
Route::get('promotionproduct','PromotionController@promotionproduct'); 
Route::get('promotiondiscount','PromotionController@promotiondiscount'); 

Route::get('promotionconsignneeform','PromotionController@promotionconsignneeform');
Route::get('promotionproductform','PromotionController@promotionproductform'); 
Route::get('promotiondiscountform','PromotionController@promotiondiscountform'); 

//----------End Promotion Controller ------------------------------------





Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);



