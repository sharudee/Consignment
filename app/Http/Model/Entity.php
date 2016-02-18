<?php namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Entity extends Model {

	protected $table='entity';
	protected $fillable = [
	 	'entity_code',
	 	'entity_tname',
	 	'entity_ename',
	 	'cust_grp',
	 	'tax_rate',
	 	'ent_ctrl',
	 	'cos_no',
	 	'dsgrp_type',
	 	'sale_type',
	 	'ret_type',
	 	'created_by',
	 	'updated_by'
	 ];

}
