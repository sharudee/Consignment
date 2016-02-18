<?php namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Docmast extends Model {

	protected $table='doc_mast';
	protected $fillable = [
	 	'doc_code',
	 	'doc_desc',
	 	'doc_ctrl',
	 	'ictran_code',
	 	'post_type',
	 	'created_by',
	 	'updated_by'
	 ];


}
