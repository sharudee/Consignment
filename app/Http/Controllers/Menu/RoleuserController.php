<?php namespace App\Http\Controllers\Menu;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;
use Validator;
use DB ;
// Model
use App\Client;


class RoleuserController extends Controller {

	public function getroleuser()
	{

        $data_obj_info = DB::table('users')
            ->join('su_role', 'users.role_id', '=', 'su_role.Su_Role_id')
            ->select('users.*','su_role.*')
            ->orderby('users.username','asc')
            ->get();


		return view('admin.roleuser')->with('data_obj_info',$data_obj_info);
	}
	public function search_roleuser()
	{
        $query = urldecode( Request::input('search'));

        if ($query) {

	        $data_obj_info = DB::table('users')
	            ->join('su_role', 'users.role_id', '=', 'su_role.Su_Role_id')
	            ->select('users.*','su_role.*')
            	->where('username', 'LIKE', "%$query%")
                ->orWhere('fullname', 'LIKE', "%$query%")
                ->orWhere('RoleName', 'LIKE', "%$query%")
                ->orWhere('RoleDescription', 'LIKE', "%$query%")
	            ->orderby('users.username','asc')
	            ->paginate(10);
        } else {
	        $data_obj_info = DB::table('users')
	            ->join('su_role', 'users.role_id', '=', 'su_role.Su_Role_id')
	            ->select('users.*','su_role.*')
	            ->orderby('users.username','asc')
	            ->paginate(10);

        }

		return view('admin.roleuser')->with('data_obj_info',$data_obj_info);

	}

}
