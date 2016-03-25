<?php namespace App\Http\Controllers\Menu;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;
use Validator;
use DB ;
// Model
use App\Client;
use Auth;

class ProgramController extends Controller {

	public function getprogramlist()
	{
		$data_obj_info = DB::table('su_programlist')
							->orderby('ProgramCode','asc')
							->get();


		return view('admin.program')->with('data_obj_info',$data_obj_info);
	}
	public function search_program()
	{
        $query = urldecode( Request::input('search'));

        if ($query) {
            $data_obj_info = DB::table('su_programlist')
            	->where('ProgramCode', 'LIKE', "%$query%")
                ->orWhere('ProgramDescription', 'LIKE', "%$query%")
                ->paginate(10);
        } else {
			$data_obj_info = DB::table('su_programlist')
							->orderby('ProgramCode','asc')
							->paginate(10);
        }

		return view('admin.program')->with('data_obj_info',$data_obj_info);

	}

	//programnewform
	public function programnewform()
	{

		return  view('admin.program_form_new');
	}

	public function geteditprogramform($Su_ProgramList_Id)
	{
		$data_obj =	DB::table('su_programlist')
			            	->where('Su_ProgramList_Id', '=', $Su_ProgramList_Id)
			                ->get();

		return  view('admin.program_form_edit')->with('data_obj',$data_obj);
	}


	public function getdeleteprogramform($Su_ProgramList_Id)
	{
		$data_obj =	DB::table('su_programlist')
			            	->where('Su_ProgramList_Id', '=', $Su_ProgramList_Id)
			                ->get();

		return  view('admin.program_form_delete')->with('data_obj',$data_obj);
	}

	public function summitnewprogram()
	{

		$username = Auth::user()->username ;

		$ProgramCode = Request::input('ProgramCode');
		$check 	= DB::table('su_programlist')
			            ->where ('ProgramCode','=',$ProgramCode)
			            ->first();


		if ( $check <> NULL) 
		{
			return "Insert_No_Success";
		}	            


		if(!empty(Request::input('ProgramCode')))
		{
			$data_head = array(
				'ProgramCode'		=> Request::input('ProgramCode'),
				'ProgramDescription'=> Request::input('ProgramDescription'),
				'RouteUrl'			=> Request::input('RouteUrl'),
				'SortSeq'			=> Request::input('SortSeq'),
				'RecordStatus'		=> Request::input('RecordStatus'),
				'created_at'		=> date('Y-m-d H:i:s'),
				'created_by'		=> $username 
				);


			// Insert to po_heads
			$data_id = DB::table('su_programlist')->insertGetId($data_head);

			// Insert to po_details
			if($data_id){
				return "Insert_Success";
 
			}
		}
	}

	public function summiteditprogram()
	{
		$username = Auth::user()->username ;
		$Su_ProgramList_Id = Request::input('Su_ProgramList_Id');
		if(!empty(Request::input('ProgramCode')))
		{
			$data_head = array(
				'ProgramCode'			=> Request::input('ProgramCode'),
				'ProgramDescription'		=> Request::input('ProgramDescription'),
				'RouteUrl'		=> Request::input('RouteUrl'),
				'SortSeq'			=> Request::input('SortSeq'),
				'RecordStatus'		=> Request::input('RecordStatus'),
				'updated_at'		=> date('Y-m-d H:i:s'),
				'updated_by'		=> $username 
				);


			DB::table('su_programlist')
            ->where('Su_ProgramList_Id', $Su_ProgramList_Id)
            ->update($data_head);

				return "Insert_Success";
			}
		}

	public function summitdeleteprogram()
	{
		$username = Auth::user()->username ;
		$Su_ProgramList_Id = Request::input('Su_ProgramList_Id');
		if(!empty(Request::input('Su_ProgramList_Id')))
		{


			DB::table('su_programlist')
            ->where('Su_ProgramList_Id', $Su_ProgramList_Id)
            ->delete();

				return "Insert_Success";
			}
		}
	

}
