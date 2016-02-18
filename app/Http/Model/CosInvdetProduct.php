<?php namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class CosInvdetProduct extends Model {

	protected $table='cos_invdet_product';
	protected $fillable = [
		 'cos_invmast_id',
		  'item',
		  'prod_code',
		  'prod_name',
		  'bar_code',
		  'uom_code',
		  'unit_price',
		  'sale_price',
		  'qty',
		  'amt',
		  'sp_size_desc',
		  'created_by',
		  'created_at',
		  'updated_by',
		  'updated_at'
	 ];

}
