<?php namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class PmtProductSetModel extends Model {

	//pmt_product_set

	protected $table='pmt_product_set';
	protected $fillable = [
	  'pmt_product_set_id' ,
	  'product_set_code' ,
	  'pmt_group_code' ,
	  'product_set_desc' ,
	  'set_qty' ,
	  'unit_price_amt' ,
	  'set_price_amt' ,
	  'uom' ,
	  'discount_type' ,
	  'discount_amt' ,
	  'rec_status' ,
	  'updated_by' ,
	  'updated_at' ,
	  'created_by' ,
	  'created_at' 
	 ];

}
