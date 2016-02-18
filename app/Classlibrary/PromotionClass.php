<?php namespace App\Classlibrary;

use DB;
use Auth;
class PromotionClass {
	public function __construct()
	{

	}

	public static function GenPromotionNumber($dept_code ,$ai_year , &$id)
	{

		$pmt_running_id = DB::table('pmt_mast')->select(DB::raw('MAX(pmt_running_id) as id'))->first();
		$id = 0;
		$pmt_no ="";
		$count = 0;
		//$dept_code=  Auth::user()->current_dept_code_logon ;

		if($pmt_running_id->id) 
		{
			$id = $pmt_running_id->id;
		}else
		{
			$id = 0;
		}

		$id += 1;
		$count = strlen((string)$id) ;
		if ( $count == 1){
			$pmt_no = "000".(string)$id ;
		}  elseif ($count == 2)
		{
			$pmt_no = "00".(string)$id ;
		} elseif ($count ==3)
		{
			$pmt_no = "0".(string)$id ;
		}else
		{
			$pmt_no = (string)$id ;
		}

		$pmt_no = (string)$dept_code .(string)$ai_year . $pmt_no;

		return $pmt_no;
	}
}

