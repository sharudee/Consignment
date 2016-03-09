<?php namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class PmtTransMastModel extends Model {

	//pmt_transaction_mast

	protected $table='pmt_transaction_mast';
	protected $primaryKey = 'transaction_id';
	protected $fillable = [
	'transaction_id' ,
	  'transaction_code' ,
	  'pmt_group_code' ,
	  'trnsaction_name' ,
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
