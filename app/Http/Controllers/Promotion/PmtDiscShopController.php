<?php namespace App\Http\Controllers\promotion;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//use Illuminate\Http\Request;
use DB;
use Request;
use Validator;

// Model
use App\Http\Model\PmtMastModel;


class PmtDiscShopController extends Controller {
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

        return view('promotion.pmtdiscshop')->with('promotion_obj',$dictionaries);
    }


	public function pmtdiscshop()
	{
		$data_promotion = PmtMastModel::orderBy('pmt_no','asc')->get();
		return view('promotion.pmtdiscshop')->with('promotion_obj',$data_promotion);
	}


	public function getpmtdiscshopform($id)
	{


			$pmt_obj_data = DB::table('pmt_mast')
								->where('pmt_mast_id', '=', $id)
								->select('pmt_no','pmt_name','pmt_mast_id')
								->get();

			$disc_shop_list =DB::table('pmt_disc_shop_rate')
										->join('pmt_transaction_mast', 'pmt_transaction_mast.transaction_code', '=', 'pmt_disc_shop_rate.transaction_code')
										->select('pmt_transaction_mast.trnsaction_name','pmt_disc_shop_rate.*')
										->where('pmt_mast_id', '=', $id)
										->orderby('disc_shop_rate_id')
										->get();

			return  view('promotion.pmtdiscshopform_add')->with(['pmt_obj_data'=>$pmt_obj_data
																		,'disc_shop_list' =>$disc_shop_list]);

	}

	public function getpremuimset()
	{
		$data_cond1 = "PM";
        $data_obj_info = DB::table('pmt_product_set')
			            ->select('pmt_product_set.*')
			            ->where('pmt_group_code', '=', "$data_cond1")
			            ->orderby('product_set_code','asc')
			            ->get();

		return  view('popup.popup_premuimset_modal_discshop')->with('data_obj_info',$data_obj_info); 
	}

	//----submit_addeditdiscshop
	    public function submit_addeditdiscshop()
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
				$getproduct_set_code = Request::input('product_set_code'); //--------กรณ๊เป็นรายการสินค้า
				//$getproduct_set_name = Request::input('product_set_name');


				DB::table('pmt_disc_shop_rate')->where('pmt_mast_id', '=', $getpmt_mast_id)->delete();

				$count_detail = count($gettransaction_code);
				if($count_detail)
				{
					for($i=0;$i<$count_detail;$i++)
					{

						$getproduct_set_name =  DB::table('pmt_product_set')
								            ->select('pmt_product_set.product_set_desc')
								            ->where('product_set_code', '=', "$getproduct_set_code[$i]")
								            ->first();



						if (count($getproduct_set_name) ){
							$product_set_desc = $getproduct_set_name->product_set_desc; 
						}
						else
						{
							$product_set_desc = "";
						}
						         

						$data_podetail = array(
								'pmt_mast_id'	=> $getpmt_mast_id,
								'transaction_code'	=> $gettransaction_code[$i],
								'product_set_code'=>$getproduct_set_code[$i],
								'product_set_name'=>$product_set_desc,
								'purchase_rate_amt' =>$getpurchase_rate_amt[$i],
								'discount_type'=>$getdiscount_type[$i],
								'discount_amt'=>$getdiscount_amt[$i],
								'discount_percen'=>$getdiscount_percen[$i],
								'rec_status' =>'ACTIVE',
								'created_by' =>'admin',
								'created_at'	=> date('Y-m-d H:i:s')
						);
				
						
						DB::table('pmt_disc_shop_rate')->insert($data_podetail);
					}
					
				}

				return "Insert_Success";
			}
				
	}

}
