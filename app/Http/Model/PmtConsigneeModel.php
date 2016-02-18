<?php namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class PmtConsigneeModel extends Model {

	protected $table='pmt_consignee';
	protected $fillable = [
	  'consignee_id',
	  'pmt_mast_id' ,
	  'entity_id' ,
	  'discount_amt' ,
	  'rec_status' ,
	  'updated_by',
	  'updated_at' ,
	  'created_by' ,
	  'created_at' 
	 ];


}
