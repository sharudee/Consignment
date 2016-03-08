<?php namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class CosInvmast_ho extends Model {

	protected $connection = 'mysql2';
	protected $table='cos_invmast';
	protected $fillable = [
	 	'cos_entity' ,
		 'cos_no',
		 'doc_code',
		 'doc_no',
		 'doc_date',
		 'req_date',
		 'pmt_no',
		 'cust_code',
		 'cust_name',
		 'ship_to',
		 'ship_titlename',
		 'ship_custcode',
		 'ship_custname',
		 'ship_custsurname',
		 'ship_address1',
		 'ship_address2',
		 'ship_tel',
		 'prov_code',
		 'prov_name',
		'post_code',
		'email_address',
		'po_file',
		'map_file',
		'gp1',
		'gp2',
		'gp3',
		'disc_cust',
		'ref_no',
		'sm_code',
		'wh_code',
		'vat_rate',
		'tot_qty',
		'tot_amt',
		'tot_vatamt',
		 'tot_netamt',
		 'tot_discamt',
		 'tot_subamt',
		'pay_code',
		'pay_name',
		'pm_total_price',
		'pm_price',
		'remark1',
		 'remark2',
		  'doccan_by',
		  'doccan_date',
		  'doccan_rem',
		  'tf_st',
		  'tf_by',
		  'tf_date',
		  'ictran_code',
		  'doc_status',
		  'created_by',
		  'created_at',
		  'updated_by',
		  'updated_at'
	 ];

}
