<?php namespace App\Http\Controllers\Menu;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;
use Validator;
use DB ;
// Model
use App\Client;


class EntityuserController extends Controller {

	public function getentityuserlist()
	{
		$data_obj_info = DB::table('users')
							->orderby('username','asc')
							->get();


		return view('admin.entityuser')->with('data_obj_info',$data_obj_info);
	}
	public function search_entityuser()
	{
        $query = urldecode( Request::input('search'));

        if ($query) {
            $data_obj_info = DB::table('users')
            	->where('username', 'LIKE', "%$query%")
                ->orWhere('fullname', 'LIKE', "%$query%")
                ->orWhere('tel', 'LIKE', "%$query%")
                ->paginate(10);
        } else {
			$data_obj_info = DB::table('users')
							->orderby('username','asc')
							->paginate(10);
        }

		return view('admin.entityuser')->with('data_obj_info',$data_obj_info);

	}

}
