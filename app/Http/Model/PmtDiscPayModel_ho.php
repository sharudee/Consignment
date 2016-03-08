<?php namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class PmtDiscPayModel_ho extends Model {

	protected $connection = 'mysql2';
	protected $table='pmt_disc_payment_rate';
	protected $primaryKey = 'disc_pay_rate_id';
	protected $fillable = [
		  'disc_pay_rate_id' ,
		  'pmt_mast_id' ,
		  'transaction_code' ,
		  'purchase_rate_amt' ,
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
