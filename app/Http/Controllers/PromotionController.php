<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PromotionController extends Controller {

	public function index()
	{

		return  view('promotion.promotion_contact');
	}
	public function addpromotionform()
	{
	

		return  view('promotion.promotion_add_form');
	}

	public function promotionconsignnee()
	{

		return  view('promotion.promotion_consignnee');
	}
	public function promotionconsignneeform()
	{

		return  view('promotion.promotion_consignnee_form');
	}


	public function promotionproduct()
	{

		return  view('promotion.promotion_product');
	}

	public function promotionproductform()
	{

		return  view('promotion.promotion_product_form');
	}


	public function promotiondiscount()
	{

		return  view('promotion.promotion_discount');
	}
	public function promotiondiscountform()
	{

	
		return  view('promotion.promotion_discount_form');
	}

}
