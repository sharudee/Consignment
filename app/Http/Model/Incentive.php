<?php namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Incentive extends Model {

	protected $table='incentive_mast';
	protected $fillable = [
	 	'pdmodel_code',
	 	'start_date',
	 	'end_date',
	 	'incentive_amt',
	 	'created_by',
	 	'updated_by'
	 ];

}
