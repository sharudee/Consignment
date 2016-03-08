<?php namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class PmtTransMastModel_ho extends Model {

	protected $connection = 'mysql2';
	protected $table='pmt_transaction_mast';
	protected $primaryKey = 'transaction_id';
	protected $fillable = [
	'transaction_id' ,
	  'transaction_code' ,
	  'pmt_group_code' ,
	  'transaction_name' ,
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
