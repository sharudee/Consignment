<?php namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Custmast extends Model {

	protected $table='cos_invmast';
	protected $fillable = [
	 	'id' ,
		'cust_code',
		'name_title' ,
		'cust_name',
		'cust_surname',
		'sex',
		'address1',
		'address2',
		'prov_code',
		'prov_name',
		'post_code' ,
		'tel',
		'email_address',
		'mobile_no',
		'line_id',
		'map',
		'id_card',
		'tf_st',
		'tf_by',
		'tf_date',
		'created_by',
		'created_at',
		'updated_by',
		'updated_at'
	 ];

}
