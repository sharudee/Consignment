<?php namespace App\Http\Controllers\Menu;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;
use Validator;
use DB ;
// Model
use App\Client;

class RolemenuController extends Controller {

	public function getrolemenu()
	{
		$data_obj_info = DB::table('su_role')
							->orderby('RoleName','asc')
							->get();


		return view('admin.rolemenu')->with('data_obj_info',$data_obj_info);
	}
	public function search_rolemenu()
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

		return view('admin.rolemenu')->with('data_obj_info',$data_obj_info);

	}

}
