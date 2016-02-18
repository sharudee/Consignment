<?php namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Postmast extends Model {

	protected $table='post_mast';
	protected $fillable = [
		'post_code',
	 	'post_name',
	 	'prov_code',
	 ];


}
