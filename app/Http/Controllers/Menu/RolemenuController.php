<?php namespace App\Http\Controllers\Menu;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;
use Validator;
use DB ;
use Auth;
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

	
	public function getrolemenu_form($Role_id)
	{
		$rolemenu_obj_data  =  DB::table('su_role')
									->where ('Su_Role_id','=',$Role_id)
									->get();	

		$su_system_obj_data  =  DB::table('su_system')
									->where ('RecordStatus','=','ACTIVE')
									->orderby('SystemSeq','ASC')
									->get();			
  		return  view('admin.rolemenu_form')->with(['su_system_obj_data'=>$su_system_obj_data ,'rolemenu_obj_data'=>$rolemenu_obj_data]); 
	}

	public function getrolemenu_form_by_system($role_id,$system_id)
	{
	
		$rolemenu_obj_data  =  DB::table('su_role')
							->where('Su_Role_id','=',$role_id)
							->get();

		$su_system_obj_data  =  DB::table('su_system')
							->where('Su_System_Id','=',$system_id)
							->get();

		$menu_obj_data	=  DB::table('su_rolemenudetail')
							->join('su_menu', 'su_menu.Su_Menu_Id', '=', 'su_rolemenudetail.Su_Menu_Id')
							->join('su_role', 'su_role.Su_Role_id', '=', 'su_rolemenudetail.Su_Role_id')
							->where('su_menu.Su_System_Id','=',$system_id)
							->where('su_role.Su_Role_id','=',$role_id)
							->orderby('su_menu.Su_System_Id','asc')
							->orderby('su_menu.MenuSeq','asc')
							->get();	
			
  		return  view('admin.rolemenu_system_form')->with(['su_system_obj_data'=>$su_system_obj_data,'rolemenu_obj_data'=>$rolemenu_obj_data ,'menu_obj_data'=>$menu_obj_data]); 
	}


    public function submitAssignMenuToRole()
	{

		$username = Auth::user()->username ;
		$Su_Role_id = Request::input('Su_Role_id');
		$Su_System_Id = Request::input('Su_System_Id'); 

			if(!empty($Su_Role_id  ))
			{

				//---------------Delete Menu ------------------------
			$MenuObj =   DB::table('su_menu')
			            ->where('Su_System_Id', '=', $Su_System_Id)
			            ->orderby('Su_Menu_Id','asc')
			            ->get();
			foreach ($MenuObj as  $MenuObj_data)
			{
				$Su_Menu_Id = $MenuObj_data->Su_Menu_Id ;

				DB::table('su_rolemenudetail')
				->where('Su_Role_id', '=', $Su_Role_id)
				->where('Su_Menu_Id', '=', $Su_Menu_Id)
				->delete();
			}

				//----------------End ----------------------
				//-----Delete ก่อน ----------------
				$Su_Menu_Id = Request::input('Su_Menu_Id');

				 
				$count_detail = count($Su_Menu_Id);
				if($count_detail)
				{

					for($i=0;$i<$count_detail;$i++)
					{

						$data_podetail = array(
								'Su_Role_id'	=> $Su_Role_id,
								'Su_Menu_Id'	=> $Su_Menu_Id[$i],
								'RecordStatus'	=> "ACTIVE",
								'created_by' =>$username,
								'created_at'	=> date('Y-m-d H:i:s')
						);
						
						DB::table('su_rolemenudetail')->insert($data_podetail);
					}
					
				}

				return "Insert_Successzz";
			}
				
	}
}
