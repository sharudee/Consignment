<?php namespace App\Http\Controllers\Menu;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;
use Validator;
use DB ;
use Auth;
// Model
use App\Client;
class RoleController extends Controller {

	public function getrolelist()
	{
		$data_obj_info = DB::table('su_role')
							->orderby('RoleName','asc')
							->get();


		return view('admin.role')->with('data_obj_info',$data_obj_info);
	}
	public function search_role()
	{
        $query = urldecode( Request::input('search'));

        if ($query) {
            $data_obj_info = DB::table('su_role')
            	->where('RoleName', 'LIKE', "%$query%")
                ->orWhere('RoleDescription', 'LIKE', "%$query%")
                ->orWhere('PermissionsType', 'LIKE', "%$query%")
                ->paginate(10);
        } else {
			$data_obj_info = DB::table('su_role')
							->orderby('RoleName','asc')
							->paginate(10);
        }

		return view('admin.role')->with('data_obj_info',$data_obj_info);

	}


	//-----------Form NEW --------------------
	public function geteditroleform($Su_Role_id)
	{
		$data_obj =	DB::table('su_role')
			            	->where('Su_Role_id', '=', $Su_Role_id)
			                ->get();

		return  view('admin.role_form_edit')->with('data_obj',$data_obj);
	}


	public function getdeleteroleform($Su_Role_id)
	{
		$data_obj =	DB::table('su_role')
			            	->where('Su_Role_id', '=', $Su_Role_id)
			                ->get();

		return  view('admin.role_form_delete')->with('data_obj',$data_obj);
	}


	public function rolenewform()
	{

		return  view('admin.role_form_new');
	}

	public function summitnewrole()
	{
		$username = Auth::user()->username ;

		$RoleName = Request::input('RoleName');
		$check 	= DB::table('su_role')
			            ->where ('RoleName','=',$RoleName)
			            ->first();


		if ( $check <> NULL) 
		{
			return "Insert_No_Success";
		}	            


		if(!empty(Request::input('RoleName')))
		{
			$data_head = array(
				'RoleName'			=> Request::input('RoleName'),
				'RoleDescription'		=> Request::input('RoleDescription'),
				'PermissionsType'		=> Request::input('PermissionsType'),
				'RecordStatus'		=> Request::input('RecordStatus'),
				'updated_at'		=> date('Y-m-d H:i:s'),
				'updated_by'		=> $username 
				);


			// Insert to po_heads
			$data_id = DB::table('su_role')->insertGetId($data_head);

			// Insert to po_details
			if($data_id){
				return "Insert_Success";
			}
		}
	}

	public function summiteditrole()
	{
		$username = Auth::user()->username ;
		$Su_Role_id = Request::input('Su_Role_id');
		if(!empty(Request::input('RoleName')))
		{
			$data_head = array(
				'RoleName'			=> Request::input('RoleName'),
				'RoleDescription'		=> Request::input('RoleDescription'),
				'PermissionsType'		=> Request::input('PermissionsType'),
				'RecordStatus'		=> Request::input('RecordStatus'),
				'updated_at'		=> date('Y-m-d H:i:s'),
				'updated_by'		=> $username 
				);


			DB::table('su_role')
            ->where('Su_Role_id', $Su_Role_id)
            ->update($data_head);

				return "Insert_Success";
			}
		}

	public function summitdeleterole()
	{
		$username = Auth::user()->username ;
		$Su_Role_id = Request::input('Su_Role_id');
		if(!empty(Request::input('Su_Role_id')))
		{


			DB::table('su_role')
            ->where('Su_Role_id', $Su_Role_id)
            ->delete();

				return "Insert_Success";
			}
		}
}
