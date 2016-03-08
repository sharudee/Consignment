<?php namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class PmtMastModel_ho extends Model {

	protected $connection = 'mysql2';
	protected $table='pmt_mast';
	protected $primaryKey = 'pmt_mast_id';
	protected $fillable = [
	  'pmt_mast_id' ,
	  'pmt_no' ,
	  'pmt_name' ,
	  'start_date' ,
	  'end_date' ,
	  'ref_doc_no' ,
	  'pmt_desc' ,
	  'pmt_type' ,
	  'gp_amt' ,
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
