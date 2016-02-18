<?php namespace App\Http\Controllers\promotion;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//use Illuminate\Http\Request;
use DB;
use Request;
use Validator;

// Model
use App\Http\Model\PmtMastModel;
class PmtDiscPayController extends Controller {

  
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

        return view('promotion.pmtdiscpay')->with('promotion_obj',$dictionaries);
    }



	public function pmtdiscpay()
	{
		$data_promotion = PmtMastModel::orderBy('pmt_no','asc')->get();
		return view('promotion.pmtdiscpay')->with('promotion_obj',$data_promotion);		
	}

	public function getpmtdiscpayform($id)
	{


			$pmt_obj_data = DB::table('pmt_mast')
								->where('pmt_mast_id', '=', $id)
								->select('pmt_no','pmt_name','pmt_mast_id')
								->get();

			$pmtdiscpay_list =DB::table('pmt_disc_payment_rate')
										->join('pmt_transaction_mast', 'pmt_transaction_mast.transaction_code', '=', 'pmt_disc_payment_rate.transaction_code')
										->select('pmt_transaction_mast.trnsaction_name','pmt_disc_payment_rate.*')
										->where('pmt_mast_id', '=', $id)
										->orderby('disc_pay_rate_id')
										->get();

			return  view('promotion.pmtdiscpayform_add')->with(['pmt_obj_data'=>$pmt_obj_data
																		,'pmtdiscpay_list' =>$pmtdiscpay_list]);

	}

	    public function submit_addeditpmtdiscpay()
	{
		$getpmt_mast_id =Request::input('pmt_mast_id') ;

			if(!empty($getpmt_mast_id  ))
			{

				//-----Delete ก่อน ----------------
				$gettransaction_code = Request::input('transaction_code');
				$getpurchase_rate_amt = Request::input('purchase_rate_amt');
				$getdiscount_type = Request::input('discount_type');
				$getdiscount_amt = Request::input('discount_amt');
				$getdiscount_percen = Request::input('discount_percen');


				DB::table('pmt_disc_payment_rate')->where('pmt_mast_id', '=', $getpmt_mast_id)->delete();

				$count_detail = count($gettransaction_code);
				if($count_detail)
				{
					for($i=0;$i<$count_detail;$i++)
					{

						$data_podetail = array(
								'pmt_mast_id'	=> $getpmt_mast_id,
								'transaction_code'	=> $gettransaction_code[$i],
								'purchase_rate_amt' =>$getpurchase_rate_amt[$i],
								'discount_type'=>$getdiscount_type[$i],
								'discount_amt'=>$getdiscount_amt[$i],
								'discount_percen'=>$getdiscount_percen[$i],
								'rec_status' =>'ACTIVE',
								'created_by' =>'admin',
								'created_at'	=> date('Y-m-d H:i:s')
						);
				
						
						DB::table('pmt_disc_payment_rate')->insert($data_podetail);
					}
					
				}

				return "Insert_Success";
			}
				
	}
	
}
