<?php namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Custgrp extends Model {

	protected $table='custgrp_mast';
	protected $fillable = [
	 	'custgrp_code',
	 	'custgrp_name'
	 ];

}
