<?php namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Commission extends Model {

	protected $table='commission_mast';
	protected $fillable = [
	 	'class',
	 	'sale_start',
	 	'sale_end',
	 	'commission_rate',
	 	'created_by',
	 	'updated_by'
	 ];

}
