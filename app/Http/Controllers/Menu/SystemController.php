<?php namespace App\Http\Controllers\Menu;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Request;
use Validator;
use DB ;
// Model
use App\Client;

class SystemController extends Controller {

	public function getsystemlist()
	{
		$data_obj_info = DB::table('su_system')
							->orderby('SystemCode','asc')
							->get();


		return view('admin.system')->with('data_obj_info',$data_obj_info);
	}
	public function search_system()
	{
        $query = urldecode( Request::input('search'));

        if ($query) {
            $data_obj_info = DB::table('su_system')
            	->where('SystemCode', 'LIKE', "%$query%")
                ->orWhere('SystemNameThai', 'LIKE', "%$query%")
                ->paginate(10);
        } else {
			$data_obj_info = DB::table('su_system')
							->orderby('SystemCode','asc')
							->get()
							->paginate(10);
        }

		return view('admin.system')->with('data_obj_info',$data_obj_info);

	}

	//-----------Form NEW --------------------
	public function geteditsystemform($Su_System_Id)
	{
		$data_obj =	DB::table('su_system')
			            	->where('Su_System_Id', '=', $Su_System_Id)
			                ->get();

		return  view('admin.system_form_edit')->with('data_obj',$data_obj);
	}


	public function getdeletesystemform($Su_System_Id)
	{
		$data_obj =	DB::table('su_system')
			            	->where('Su_System_Id', '=', $Su_System_Id)
			                ->get();

		return  view('admin.system_form_delete')->with('data_obj',$data_obj);
	}


	public function systemnewform()
	{

		return  view('admin.system_form_new');
	}

	public function summitnewsystem()
	{
		$username = Auth::user()->username ;
		$SystemCode =  Request::input('SystemCode');

		$check 	= DB::table('su_system')
			            ->where ('SystemCode','=',$SystemCode)
			            ->first();


		if ( $check <> NULL) 
		{
			return "Insert_No_Success";
		}	            


		if(!empty(Request::input('SystemCode')))
		{
			$data_head = array(
				'SystemCode'			=> Request::input('SystemCode'),
				'SystemNameThai'		=> Request::input('SystemNameThai'),
				'SystemNameEng'		=> Request::input('SystemNameEng'),
				'SystemSeq'			=> Request::input('SystemSeq'),
				'RecordStatus'		=> Request::input('RecordStatus'),
				'created_at'		=> date('Y-m-d H:i:s'),
				'created_by'		=> $username 
				);


			// Insert to po_heads
			$data_id = DB::table('su_system')->insertGetId($data_head);

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

	public function summiteditsystem()
	{
		$username = Auth::user()->username ;
		$Su_System_Id = Request::input('Su_System_Id');
		if(!empty(Request::input('SystemCode')))
		{
			$data_head = array(
				'SystemCode'			=> Request::input('SystemCode'),
				'SystemNameThai'		=> Request::input('SystemNameThai'),
				'SystemNameEng'		=> Request::input('SystemNameEng'),
				'SystemSeq'			=> Request::input('SystemSeq'),
				'RecordStatus'		=> Request::input('RecordStatus'),
				'updated_at'		=> date('Y-m-d H:i:s'),
				'updated_by'		=> $username 
				);


			DB::table('su_system')
            ->where('Su_System_Id', $Su_System_Id)
            ->update($data_head);

				return "Insert_Success";
			}
		}

	public function summitdeletesystem()
	{
		$username = Auth::user()->username ;
		$Su_System_Id = Request::input('Su_System_Id');
		if(!empty(Request::input('Su_System_Id')))
		{


			DB::table('su_system')
            ->where('Su_System_Id', $Su_System_Id)
            ->delete();

				return "Insert_Success";
			}
		}
	

}
