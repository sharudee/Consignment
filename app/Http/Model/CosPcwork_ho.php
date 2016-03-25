<?php namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class CosPcwork_ho extends Model {

	protected $connection = 'mysql2';
	protected $table='cos_pcwork';
	protected $fillable = [
	 	'year' ,
		'month',
		'cust_code',
		'emp_code',
		 'work_date',
		 'work_type',
		 'pc_type',
		 'time_start',
		 'time_end',
  		'tf_st',
  		'tf_by',
  		'tf_date',
		'created_by',
		'created_at',
		'updated_by',
		'updated_at'
	 ];

}
