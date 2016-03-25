<?php namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class CosPcmast extends Model {

	protected $table='cos_pcmast';
	protected $fillable = [
	 	'cust_code',
  		'emp_code',
  		'emp_name',
  		'tel',
  		'email',
  		'tf_st',
  		'tf_by',
  		'tf_date',
		'created_by',
		'created_at',
		'updated_by',
		'updated_at'
	 ];

}
