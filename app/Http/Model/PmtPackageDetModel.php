<?php namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class PmtPackageDetModel extends Model {

	//pmt_package_det

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
		  'updated_by' ,
		  'updated_at' ,
		  'created_by' ,
		  'created_at' 
	 ];

}
