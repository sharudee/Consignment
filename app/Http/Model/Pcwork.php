<?php namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Pcwork extends Model {

	protected $table='cos_pcwork';
	//protected $primaryKey = 'emp_code';
	protected $fillable = [
	 	'year',
	 	'month',
	 	'cust_code',
	 	'emp_code',
	 	'work_date',
	 	'work_type',
	 	'pc_type',
	 	'time_start',
	 	'time_end',
	 	'created_by',
	 	'updated_by'
	 ];
	


}
