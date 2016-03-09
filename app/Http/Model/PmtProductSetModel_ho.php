<?php namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class PmtProductSetModel_ho extends Model {

	protected $connection = 'mysql2';
	protected $table='pmt_product_set';
	protected $primaryKey = 'pmt_product_set_id';
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
	  'tf_st',
	  'tf_by',
	  'tf_date',
	  'updated_by' ,
	  'updated_at' ,
	  'created_by' ,
	  'created_at' 
	 ];

}
