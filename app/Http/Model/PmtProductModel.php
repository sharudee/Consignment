<?php namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class PmtProductModel extends Model {

	//pmt_product

	protected $table='pmt_product';
	protected $fillable = [
	  'pmt_product_id' ,
	  'pmt_product_set_id' ,
	  'prod_code' ,
	  'prod_tname' ,
	  'bar_code' ,
	  'pdgrp_code' ,
	  'pdbrnd_code' ,
	  'pddsgn_code' ,
	  'pdsize_code' ,
	  'pdcolor_code' ,
	  'pdmodel_code' ,
	  'pdgrp_desc' ,
	  'pdbrnd_desc' ,
	  'pddsgn_desc' ,
	  'pdsize_desc' ,
	  'pdcolor_desc' ,
	  'pdmodel_desc' ,
	  'unit_price_amt' ,
	  'sale_default' ,
	  'updated_by' ,
	  'updated_at' ,
	  'created_by' ,
	  'created_at'
	 ];

}
