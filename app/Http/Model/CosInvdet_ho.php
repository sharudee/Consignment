<?php namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class CosInvdet_ho extends Model {

	protected $connection = 'mysql2';
	protected $table='cos_invdet';
	protected $fillable = [
	 	'cos_entity' ,
		 'cos_no',
		 'doc_code',
		 'doc_no',
		 'cos_invmast_id',
		  'item',
		  'prod_code',
		  'prod_name',
		  'bar_code',
		  'uom_code',
		  'unit_price',
		  'sale_price',
		  'disc_rate',
		  'vat_rate',
		  'qty',
		  'amt',
		  'disc_amt',
		  'vat_amt',
		  'net_amt',
		  'ds_no',
		  'sku',
		  'sp_size',
		  'sp_size_desc',
		  'pmt_product_set_id',
		  'created_by',
		  'created_at',
		  'updated_by',
		  'updated_at'
	 ];

}
