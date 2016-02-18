<?php namespace App\Http\Controllers\promotion;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//use Illuminate\Http\Request;
use DB;
use Request;
use Validator;
use PromotionClass;
// Model
use App\Http\Model\PmtGroupMastModel;

class PmtTrnsGrpMastController extends Controller {

	public function pmtgrpmast()
	{

		

		$data_obj = PmtGroupMastModel::orderBy('pmt_group_code','desc')->get();
		return view('promotion.pmtgrpmast')->with('pmtgrpmast_obj',$data_obj);
	}

	public function pmtgrpmast_del()
	{
		$id = Request::input('deleteID');
		//$users = DB::table('users')->select('name', 'email as user_email')->get();

		$result = PmtGroupMastModel::where('pmt_group_id','=',$id);
		$result->delete();

		if($result){
			return redirect('pmtgrpmast');
		}
	}
/*	public function editpmtgrpmastform($pmt_group_id)
	{
		//return $pmt_group_id;
		return  view('promotion.pmtgrpmastform_edit');
	}*/

	public function editpmtgrpmastform($pmt_group_id)
	{

		$data_obj = PmtGroupMastModel::where('pmt_group_id','=',$pmt_group_id)->orderBy('pmt_group_code','desc')->get();

		return view('promotion.pmtgrpmastform_edit')->with('pmtgrpmast_obj',$data_obj);
	}

	public function addpmtgrpmastform()
	{
		return  view('promotion.pmtgrpmastform_add');
	}

	public function submiteditpmtgrpmastform()
	{
		$id = Request::input('deleteID');
		$pmt_group_code = Request::get('txt_pmt_group_code');
		$data_edit = array(		
				'pmt_group_name' => Trim(Request::get('txt_pmt_group_name')),
				'rec_status' => trim(Request::get('txtRecStatus')),	
		  		'updated_by' => 'admin',
	  			'updated_at' => date('Y-m-d H:i:s')		
			);

		$PmtGroupMastModel 	=PmtGroupMastModel::find($pmt_group_code);
		$PmtGroupMastModel->update($data_edit);

		return redirect('pmtgrpmast');


	}

    public function search()
    {

        $query = urldecode( Request::input('search'));

        if ($query) {
            $dictionaries = PmtGroupMastModel::where('pmt_group_code', 'LIKE', "%$query%")
                ->orWhere('pmt_group_name', 'LIKE', "%$query%")
                ->orWhere('rec_status', 'LIKE', "%$query%")
                ->paginate(10);
        } else {
            $dictionaries = PmtGroupMastModel::orderBy('transaction_code', 'desc')->paginate(10);
        }

        return view('promotion.pmttrnsmast')->with('pmttrnsmast_obj',$dictionaries);
    }



	public function submitaddpmtgrpmastform()
	{


		if(!empty(Request::input('groupcodeKey')))
		{
			$data_head = array(
				'pmt_group_code'			=> Request::input('groupcodeKey'),
				'pmt_group_name'			=> Request::input('groupnameKey'),
				'rec_status'		=> Request::input('RecStatusKey'),
				'created_at'		=> date('Y-m-d H:i:s')
				);


			// Insert to po_heads
			$data_id = DB::table('pmt_group_mast')->insertGetId($data_head);

			// Insert to po_details
			if($data_id){
				// ต้องเลือกรายสินค้าอย่างน้อย 1 รายการ
				/*
				if( Request::ajax() ) {
					$data_promotion = PmtMastModel::orderBy('pmt_no','asc')->get();
					return view('promotion.promotion_contact')->with('promotion_obj',$data_promotion);
				}
				*/
				return "Insert_Success";
           // flash()->success('Success', 'เพิ่มข่าวสารเรียบร้อยแล้ว.');

           // return redirect('pmtgrpmast');
			}
		}
	}
}
