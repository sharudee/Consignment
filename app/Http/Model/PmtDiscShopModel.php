<?php namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class PmtDiscShopModel extends Model {

	//pmt_disc_shop_rate

	protected $table='pmt_disc_shop_rate';
	protected $primaryKey = 'disc_shop_rate_id';
	protected $fillable = [
	  'disc_shop_rate_id' ,
	  'pmt_mast_id' ,
	  'transaction_code' ,
	  'purchase_rate_amt' ,
	  'discount_type' ,
	  'discount_amt' ,
	  'premium_qty' ,
	  'premium_amt' ,
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
