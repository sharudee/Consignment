<?php namespace App\Http\Controllers\promotion;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//use Illuminate\Http\Request;
use Auth; // ไว้ตรวจสถานะการล็อกอิน
use DB;
use Request;
use Validator;
// Model
use App\Http\Model\PmtMastModel;
use App\Http\Model\PmtConsigneeModel;

class PmtConsigneeController extends Controller {


public function get_cust($cust_grp_code)
{
		$data_obj_info = DB::table('entity')
							->where('cust_grp', '=',  "$cust_grp_code")
							->select('entity_code','entity_tname','cust_grp')
							->orderby('entity_code','asc')
							->get();


		return view('popup.popup_cust_modal')->with('data_obj_info',$data_obj_info);
}

public function get_cust_grp()
{
		$data_obj_info = DB::table('custgrp_mast')->orderby('custgrp_code','asc')->get();
		return view('popup.popup_consignee_grp_modal')->with('data_obj_info',$data_obj_info);
}
	public function pmtconsignnee()
	{
		$data_promotion = PmtMastModel::where ('rec_status', '=', "ACTIVE")->orderBy('pmt_no','asc')->get();
		return view('promotion.pmtconsignnee')->with('promotion_obj',$data_promotion);
	}
	public function addpmtconsignneeform()
	{

		$cust_group = DB::table('custgrp_mast')->get();
		return  view('promotion.pmtconsignneeformadd')->with('cust_group',$cust_group);
	}


	public function getaddpmtconsignneeform($id )
	{
		$cust_group = DB::table('custgrp_mast')->get();

		$consignee_data = DB::table('pmt_consignee')->get();

		$pmt_obj_data = DB::table('pmt_mast')
							->where('pmt_mast_id', '=', $id)
							->select('pmt_no','pmt_name','pmt_mast_id')
							->get();


        $pmt_consignee_obj_data = DB::table('pmt_consignee')
            ->join('entity', 'pmt_consignee.entity_code', '=', 'entity.entity_code')
            ->select('pmt_consignee.consignee_id','pmt_consignee.entity_code','pmt_consignee.discount_amt', 'entity.entity_tname')
            ->where('pmt_consignee.pmt_mast_id', '=', $id)
            ->orderby('pmt_consignee.entity_code','asc')
            ->get();

  

		return  view('promotion.pmtconsignneeformedit')->with(['cust_group'=>$cust_group,'pmt_obj_data'=>$pmt_obj_data,'pmt_consignee_obj_data'=>$pmt_consignee_obj_data]);
	}

    public function search()
    {

        $query = urldecode( Request::input('search'));
     

        if ($query) {
            $dictionaries = PmtMastModel::where('pmt_no', 'LIKE', "%$query%")
                ->orWhere('pmt_name', 'LIKE', "%$query%")
                ->paginate(10);
        } else {
            $dictionaries = PmtMastModel::orderBy('pmt_no', 'desc')->paginate(10);
        }

        return view('promotion.pmtconsignnee')->with('promotion_obj',$dictionaries);
    }



    public function submit_addconsignee()
	{
		$username = Auth::user()->username ;
		$pmt_mast_id =Request::input('pmt_mast_id') ;

			if(!empty($pmt_mast_id  ))
			{
				//-----Delete ก่อน ----------------
				$getentity_code = Request::input('entity_code');


				DB::table('pmt_consignee')->where('pmt_mast_id', '=', $pmt_mast_id)->delete();

				$count_detail = count($getentity_code);
				if($count_detail)
				{
					for($i=0;$i<$count_detail;$i++)
					{

						$data_podetail = array(
								'pmt_mast_id'	=> $pmt_mast_id,
								'entity_code'	=> $getentity_code[$i],
								'discount_amt' =>0.00,
								'created_by' =>$username,
								'created_at'	=> date('Y-m-d H:i:s')
						);
						
						DB::table('pmt_consignee')->insert($data_podetail);
					}
					
				}

				return "Insert_Success";
			}
				
	}

}
