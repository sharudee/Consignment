<?php namespace App\Http\Controllers\promotion;

use App\Http\Controllers\Controller;
use DB;
use Request;
use Validator;
// Model
use App\Http\Model\PmtMastModel;

class PmtDiscPremiumDenyController extends Controller {


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

        return view('promotion.pmtdiscpremiumdeny')->with('promotion_obj',$dictionaries);
    }



	public function pmtdiscpremiumdeny()
	{

		$data_promotion = PmtMastModel::orderBy('pmt_no','asc')->get();
		return view('promotion.pmtdiscpremiumdeny')->with('promotion_obj',$data_promotion);
	}

public function getpmtdiscpremiumdenytoform($id)
{


		$pmt_obj_data = DB::table('pmt_mast')
							->where('pmt_mast_id', '=', $id)
							->select('pmt_no','pmt_name','pmt_mast_id')
							->get();

		$discpremiumdeny_list =DB::table('pmt_disc_premium_deny')
									->where('pmt_mast_id', '=', $id)
									->orderby('pdsize_code')
									->get();

		return  view('promotion.pmtdiscpremiumdenyform_add')->with(['pmt_obj_data'=>$pmt_obj_data
																	,'discpremiumdeny_list' =>$discpremiumdeny_list]);

}

/*submitaddeditdiscpremiumdeny
*/
    public function submit_addeditdiscpremiumdeny()
	{
		$getpmt_mast_id =Request::input('pmt_mast_id') ;

			if(!empty($getpmt_mast_id  ))
			{

				//-----Delete ก่อน ----------------
				$getpdsize_code = Request::input('pdsize_code');
				$getpdsize_desc = Request::input('pdsize_desc');
				$getdiscount_type = Request::input('discount_type');
				$getdiscount_amt = Request::input('discount_amt');
				$getdiscount_percen = Request::input('discount_percen');


				DB::table('pmt_disc_premium_deny')->where('pmt_mast_id', '=', $getpmt_mast_id)->delete();

				$count_detail = count($getpdsize_code);
				if($count_detail)
				{
					for($i=0;$i<$count_detail;$i++)
					{

						$data_podetail = array(
								'pmt_mast_id'	=> $getpmt_mast_id,
								'pdsize_code'	=> $getpdsize_code[$i],
								'pdsize_desc' =>$getpdsize_desc[$i],
								'discount_type'=>$getdiscount_type[$i],
								'discount_amt'=>$getdiscount_amt[$i],
								'discount_percen'=>$getdiscount_percen[$i],
								'rec_status' =>'ACTIVE',
								'created_by' =>'admin',
								'created_at'	=> date('Y-m-d H:i:s')
						);
				
						
						DB::table('pmt_disc_premium_deny')->insert($data_podetail);
					}
					
				}

				return "Insert_Success";
			}
				
	}

}