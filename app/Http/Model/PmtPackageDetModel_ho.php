<?php namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class PmtPackageDetModel_ho extends Model {

	protected $connection = 'mysql2';
	protected $table='pmt_package_det';
	protected $primaryKey = 'package_det_id';
	protected $fillable = [
		  'package_det_id' ,
		  'package_mast_id' ,
		  'pmt_product_set_id' ,
		  'set_qty' ,
		  'unit_price_amt' ,
		  'set_price_amt' ,
		  'uom' ,
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
