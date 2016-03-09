<?php namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class CosProduct_ho extends Model {

	protected $connection = 'mysql2';
	protected $table='cos_product';
	protected $fillable = [
		'cos_no',
		'cos_entity',
		'cust_code',
		'prod_code',
		'prod_name',
		'bar_code',
		'unit_price',
		'sale_price',
		'qty_production',
		'qty_return',
		'qty_sale',
		'qty_remand',
		'qty_bal',
		'pdgrp_code',
		'pdgrp_desc',
		'pdbrnd_code',
		'pdbrnd_desc',
		'pdtype_code',
		'pdtype_desc',
		'pddsgn_code',
		'pddsgn_desc',
		'pdsize_code',
		'pdsize_desc',
		'pdcolor_code',
		'pdcolor_desc',
		'pdmisc_code',
		'pdmisc_desc',
		'pdmodel_code',
		'pdmodel_desc',
		'tf_st',
		'tf_by',
		'tf_date',
		'prod_st',
		'created_by',
		'created_at',
		'updated_by',
		'updated_at'

	 ];

}
