<?php namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class PmtDiscPmDenyModel_ho extends Model {

	protected $connection = 'mysql2';
	protected $table='pmt_disc_premium_deny';
	protected $primaryKey = 'disc_premium_deny_id';
	protected $fillable = [
	  'disc_premium_deny_id' ,
	  'pmt_mast_id' ,
	  'pdsize_code' ,
	  'discount_type' ,
	  'discount_amt' ,
	  'discount_percen',
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
