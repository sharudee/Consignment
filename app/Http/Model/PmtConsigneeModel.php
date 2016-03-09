<?php namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class PmtConsigneeModel extends Model {

	protected $table='pmt_consignee';
	protected $primaryKey = 'consignee_id';
	protected $fillable = [
	  'consignee_id',
	  'pmt_mast_id' ,
	  'entity_code' ,
	  'discount_amt' ,
	  'tf_st',
	  'tf_by',
	  'tf_date',
	  'updated_by',
	  'updated_at' ,
	  'created_by' ,
	  'created_at' 
	 ];


}
