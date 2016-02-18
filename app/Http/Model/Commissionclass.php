<?php namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Commissionclass extends Model {

	protected $table='commission_class';
	protected $fillable = [
	 	'cust_code',
	 	'cust_name',
	 	'class',
	 	'sale_target',
	 	'created_by',
	 	'updated_by'
	 ];

}
