<?php namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class PmtGroupMastModel extends Model {

	//pmt_disc_premium_deny

	protected $table='pmt_group_mast';
	protected $primaryKey = 'pmt_group_code';
	protected $fillable = [
	  'pmt_group_id',
	  'pmt_group_code' ,
	  'pmt_group_name' ,
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
