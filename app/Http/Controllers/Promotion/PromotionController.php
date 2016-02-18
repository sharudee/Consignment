<?php namespace App\Http\Controllers\Promotion;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//use Illuminate\Http\Request;
use DB;
use Request;
use Validator;
use Auth;
// Model
use App\Http\Model\PmtMastModel;
use PromotionClass;


class PromotionController extends Controller {

	public function index()
	{

		$data_promotion = PmtMastModel::orderBy('pmt_no','asc')->get();
		return view('promotion.promotion_contact')->with('promotion_obj',$data_promotion);

	}
	public function addpromotionform()
	{

		return  view('promotion.promotion_add_form');
	}

	public function editpromotionform($id)
	{


		$data_obj = PmtMastModel::where('pmt_mast_id','=',$id)->orderBy('pmt_mast_id','desc')->get();

		return view('promotion.promotion_add_form_edit')->with('result_data_obj',$data_obj);


	}

	public function promotion_del()
	{

		$id = Request::input('deleteID');
		$result = PmtMastModel::where('pmt_mast_id','=',$id);
		$result->delete();

		if($result){
			return redirect('promotion');
		}
	}
	
	public function submiteditpromotion()
	{


		$id  =  Request::input('txtpmt_mast_id'); 
		$dept_code = Auth::user()->current_dept_code_logon ;
		//$transaction_id  = Trim(Request::get('txtPmtNo'));

				$start_date= Request::get('txtStartdateID');
				$start_date =  date_create_from_format('Y-m-d',$start_date);
				$start_date = date_format($start_date ,"Y/m/d");


				$end_date= Request::get('txtenddateID');
				$end_date =  date_create_from_format('Y-m-d',$end_date);
				$end_date = date_format($end_date ,"Y/m/d");


		$data_edit = array(		
				'pmt_name' => Trim(Request::get('txtPmtName')),
				'start_date' =>$start_date , 
				'end_date' => $end_date,
				'ref_doc_no' => trim(Request::get('txtDocRef')),
				'pmt_desc' => trim(Request::get('txtPmtDesc')),
				'pmt_type' => trim(Request::get('txtPmtType')),	
				'gp_amt' => trim(Request::get('txtGpAmt')),	
				'dept_code' => $dept_code,
				'rec_status' => trim(Request::get('txtRecStatus')),	
		  		'updated_by' => 'admin',
	  			'updated_at' => date('Y-m-d H:i:s')		
			);




		$PmtMastModel 	=PmtMastModel::find($id);
		$PmtMastModel->update($data_edit);
		//flash()->success('Success', 'แก้ไขข้อมูลเรียบร้อยแล้ว.');
		return redirect('promotion');





	}
    public function search()
    {

        $query = urldecode( Request::input('search'));

        if ($query) {
            $data_promotion = PmtMastModel::where('pmt_no', 'LIKE', "%$query%")
                ->orWhere('pmt_name', 'LIKE', "%$query%")
                ->orWhere('rec_status', 'LIKE', "%$query%")
                ->paginate(10);
        } else {
            $data_promotion = PmtMastModel::orderBy('pmt_no', 'desc')->paginate(10);
        }

		return view('promotion.promotion_contact')->with('promotion_obj',$data_promotion);

    }


	public function submitpromotion()
	{

		if(!empty(Request::input('txtPmtNameKey')))

		{
				$start_date=date_create_from_format('d/m/Y',Request::input('txtStartdateKey'));
				$start_date = date_format($start_date,"Y/m/d");

				$end_date=date_create_from_format('d/m/Y',Request::input('textEnddateKey'));
				$end_date = date_format($end_date,"Y/m/d");

				$dept_code = Auth::user()->current_dept_code_logon ;
				$created_by = Auth::user()->username ;

				$strYear = date("Y",strtotime($start_date));
				$id = 0;
				$pmt_no =  PromotionClass::GenPromotionNumber($dept_code ,$strYear ,$id);


			$data_head = array(
				'pmt_no'		=> $pmt_no ,
				 'pmt_running_id' =>$id ,
				'pmt_name'		=> Request::input('txtPmtNameKey'),
				'start_date'	=> $start_date ,
				'end_date'		=> $end_date,
				'ref_doc_no'	=> Request::input('txtDocRefKey'),
				'pmt_desc'		=> Request::input('txtPmtDescKey'),
				'pmt_type'		=> Request::input('txtPmtTypeKey'),
				'gp_amt'		=> Request::input('txtGpAmtKey'),
				'dept_code'	=>$dept_code,
				'rec_status'		=> Request::input('txtRecStatusKey'),
				'created_at'		=> date('Y-m-d H:i:s'),
				'created_by'		=> $created_by
			);

			// Insert to po_heads
			$Pmt_data_id = DB::table('pmt_mast')->insertGetId($data_head);
			// Insert to po_details
			if($Pmt_data_id){
				// ต้องเลือกรายสินค้าอย่างน้อย 1 รายการ
				/*
				if( Request::ajax() ) {
					$data_promotion = PmtMastModel::orderBy('pmt_no','asc')->get();
					return view('promotion.promotion_contact')->with('promotion_obj',$data_promotion);
				}
				*/
				return "Insert_Success";

			}
		}else
		{
			return "Insert_Not_Success";
		}
	}

}
