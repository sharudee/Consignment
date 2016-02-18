<?php namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Provmast extends Model {

	protected $table='prov_mast';
	protected $fillable = [
		'prov_code',
	 	'prov_name',
	 ];

}
