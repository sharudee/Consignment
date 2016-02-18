<?php namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Whmast extends Model {

	protected $table='wh_mast';
	protected $fillable = [
	 	'wh_code',
	 	'wh_tdesc',
	 	'wh_edesc',
	 	'address1',
	 	'address2',
	 	'tel',
	 	'contact_name',
	 	'status',
	 	'created_by',
	 	'updated_by'
	 ];

}
