<?php namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class PmtConsigneeModel_ho extends Model {

	protected $connection = 'mysql2';
	protected $table='pmt_consignee';
	protected $fillable = [
	  'consignee_id',
	  'pmt_mast_id' ,
	  'entity_id' ,
	  'discount_amt' ,
	  'rec_status' ,
	  'tf_st',
	  'tf_by',
	  'tf_date',
	  'updated_by',
	  'updated_at' ,
	  'created_by' ,
	  'created_at' 
	 ];

}
