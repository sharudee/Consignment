<?php namespace App\Http\Controllers\Menu;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Hash;
use Request;
use Validator;
use Auth;
use DB ;
// Model
use App\Client;

class UserController extends Controller {



	//Getuserlist
	public function Getuserlist()
	{
		$data_obj_info = DB::table('users')
							->orderby('username','asc')
							->get();


		return view('admin.user')->with('data_obj_info',$data_obj_info);
	}
	public function search_user()
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

		return view('admin.user')->with('data_obj_info',$data_obj_info);

	}



	public function GetRolemenudetail()
	{
		$role_id = 1 ; //Auth::user()->role_id ;
		$contentfooter = '</ul>'.'</li>' ;
		$MenuLevel0 =   DB::table('su_menu')
			            ->join('su_rolemenudetail', 'su_menu.Su_Menu_Id', '=', 'su_rolemenudetail.Su_Menu_Id')
			            ->join('su_programlist', 'su_menu.ProgramCode', '=', 'su_programlist.ProgramCode')
			            ->join('su_system', 'su_menu.Su_System_Id', '=', 'su_system.Su_System_Id')
			            ->select('su_menu.*' 
			            		,'su_rolemenudetail.*'
			            		,'su_programlist.*'
			            		,'su_system.*')
			            ->where('su_rolemenudetail.su_role_id', '=', $role_id)
			            ->where('su_menu.MenuLevel', '=', 0)
			            ->orderby('su_system.SystemSeq','asc')
			            ->get();

			    $tmp = '';
			    $tmplevel1 = '';
				foreach ($MenuLevel0 as  $DataLevel0) 
				{
					$contentLevel1 = DB::table('su_menu')
						            ->join('su_rolemenudetail', 'su_menu.Su_Menu_Id', '=', 'su_rolemenudetail.Su_Menu_Id')
						            ->join('su_programlist', 'su_menu.ProgramCode', '=', 'su_programlist.ProgramCode')
						            ->select('su_menu.*' 
						            	,'su_rolemenudetail.*'
						            	,'su_programlist.*')
						            ->where('su_rolemenudetail.su_role_id', '=', $role_id)
						            ->where('su_menu.MenuLevel', '=', 1)
						            ->where('su_menu.Su_System_Id', '=', $DataLevel0->Su_System_Id)
						            	->orderby('su_menu.Su_System_Id','asc')
						            	->orderby('su_menu.MenuSeq','asc')
						            ->get();

	                $contentLevel0 =  $tmp .'<li>'
		                            		.'<a href="#"><i class="'.$DataLevel0->icon_class_name.'"></i>'. $DataLevel0->MenuName.'<span class="fa arrow"></span></a>'
		                            		.'<ul class="nav nav-second-level">'  ;
		            $tmplevel1  = '';
					foreach ($contentLevel1 as  $DataLevel1) 
					{
						$contentLevel1  =  $tmplevel1.
	                                 '<li>'
	                                     .'<a href="{{URL::to(' .$DataLevel1->RouteUrl.')}}"> <i></i> <i></i>'. '<i class="'.$DataLevel1->icon_class_name.'"></i>'.$DataLevel1->MenuName .'</a>'
	                                .'</li>'
	                           		;

	                     $tmplevel1  =  $contentLevel1  ; 			
					}

					$tmp  = $contentLevel0 .$contentLevel1 .$contentfooter ;

				}
				//$content  = $contentLevel0 + $contentLevel1 + $contentfooter ;

				//return  $tmp  ;
				//contentmenu

		return view::make('include.sidebar_lv')->with('contentmenu',$tmp); 
	}



	//-----------Form NEW --------------------
	public function getedituserform($user_id)
	{
        $data_obj_info = DB::table('users')
			            ->join('su_role', 'users.Role_id', '=', 'su_role.Su_Role_id')
			            ->select('users.*','su_role.*')
			            ->where ('id','=',$user_id)
			            ->first();

		$entity_code = $data_obj_info->entity_logon_default;
		$cust_code    = $data_obj_info->cust_code_logon_default ;


		$cust_grp_obj = DB::table('entity')
			            ->select('entity.entity_code','entity.entity_tname','entity.cust_grp')
			            ->where ('entity_code','=',$cust_code )
			            ->get();

		$entity_obj = DB::table('entity')
			            ->select('entity.entity_code','entity.entity_tname')
			            ->where ('entity_code','=',$entity_code)
			            ->get();

		$cust_obj   = DB::table('entity')
			            ->select('entity.entity_code','entity.entity_tname')
			            ->where ('entity_code','=',$cust_code)
			            ->get();
        $data_obj_info = DB::table('users')
			            ->join('su_role', 'users.Role_id', '=', 'su_role.Su_Role_id')
			            ->select('users.*','su_role.*')
			            ->where ('id','=',$user_id)
			            ->get();
		return view('admin.user_form_edit')->with(['data_obj'=>$data_obj_info
													,'entity_obj'=>$entity_obj
													,'cust_obj'=>$cust_obj
													,'cust_grp_obj' =>$cust_grp_obj]);

	}


	public function getdeleteuserform($user_id)
	{
        $data_obj_info = DB::table('users')
			            ->join('su_role', 'users.Role_id', '=', 'su_role.Su_Role_id')
			            ->select('users.*','su_role.*')
			            ->where ('id','=',$user_id)
			            ->first();

		$entity_code = $data_obj_info->entity_logon_default;
		$cust_code    = $data_obj_info->cust_code_logon_default ;


		$entity_obj = DB::table('entity')
			            ->select('entity.entity_code','entity.entity_tname')
			            ->where ('entity_code','=',$entity_code)
			            ->get();

		$cust_obj   = DB::table('entity')
			            ->select('entity.entity_code','entity.entity_tname')
			            ->where ('entity_code','=',$cust_code)
			            ->get();
        $data_obj_info = DB::table('users')
			            ->join('su_role', 'users.Role_id', '=', 'su_role.Su_Role_id')
			            ->select('users.*','su_role.*')
			            ->where ('id','=',$user_id)
			            ->get();
		return view('admin.user_form_delete')->with(['data_obj'=>$data_obj_info
													,'entity_obj'=>$entity_obj
													,'cust_obj'=>$cust_obj]);
	}


	public function usernewform()
	{

		return  view('admin.user_form_new');
	}

	public function submitnewuser()
	{
		$username_login = Auth::user()->username ;
		$username = Request::input('username');

		$check 	= DB::table('users')
			            ->where ('username','=',$username)
			            ->first();


		if ( $check <> NULL) 
		{
			return "Insert_No_Success";
		}	            


		$password = Request::input('password');
		$password_Encrp  = Hash::Make($password);
		if(!empty(Request::input('username')) 
			And !empty(Request::input('fullname')) 
			and !empty(Request::input('role_id')) 
			and !empty(Request::input('entity_logon_default')) 
			and !empty(Request::input('current_dept_code_logon')) 
			and !empty(Request::input('cust_code_logon_default')) )
		{
			$data_head = array(
				'username'		=>$username,
				'fullname'		=> Request::input('fullname'),
				'password'		=> $password_Encrp,
				'email'			=> Request::input('email'),
				'tel'			=> Request::input('tel'), 
				'role_id'						=> Request::input('role_id'),
				'entity_logon_default'			=> Request::input('entity_logon_default'),
				'cust_code_logon_default'		=> Request::input('cust_code_logon_default'),
				'current_entity_code_logon'		=> Request::input('entity_logon_default'),
				'current_cust_code_logon'		=> Request::input('cust_code_logon_default'),
				'current_cust_name_logon'		=> Request::input('cust_name'),
				'current_dept_code_logon'		=> Request::input('current_dept_code_logon'),
				'RecordStatus'		=> Request::input('RecordStatus'),
				'created_at'		=> date('Y-m-d H:i:s'),
				'created_by'		=> $username_login 
				);

			// Insert to po_heads

			$data_id = DB::table('users')->insertGetId($data_head);

			if($data_id){
				return "Insert_Success";
			}
		}
	}

	public function submitedituser()
	{
		$username = Auth::user()->username ;
		$user_id = Request::input('id');
		
		if(!empty(Request::input('id')) 
			and !empty(Request::input('username')) 
			And !empty(Request::input('fullname')) 
			and !empty(Request::input('role_id')) 
			and !empty(Request::input('entity_logon_default')) 
			and !empty(Request::input('current_dept_code_logon')) 
			and !empty(Request::input('cust_code_logon_default')) )
		{
			$data_head = array(
				'username'		=> Request::input('username'),
				'fullname'		=> Request::input('fullname'),
				'email'			=> Request::input('email'),
				'tel'			=> Request::input('tel'), 
				'role_id'						=> Request::input('role_id'),
				'entity_logon_default'			=> Request::input('entity_logon_default'),
				'cust_code_logon_default'		=> Request::input('cust_code_logon_default'),
				'current_entity_code_logon'		=> Request::input('entity_logon_default'),
				'current_cust_code_logon'		=> Request::input('cust_code_logon_default'),
				'current_cust_name_logon'		=> Request::input('cust_name'),
				'current_dept_code_logon'		=> Request::input('current_dept_code_logon'),
				'RecordStatus'		=> Request::input('RecordStatus'),
				'updated_at'		=> date('Y-m-d H:i:s'),
				'updated_by'		=> $username 
				);


			DB::table('users')
            ->where('id', $user_id)
            ->update($data_head);

				return "Insert_Success";
			}else
			{
				return "no_Success";
			}
		}

	public function submitdeleteuser()
	{
		$username = Auth::user()->username ;
		$user_id = Request::input('id');
		if(!empty(Request::input('id')))
		{


			DB::table('users')
            ->where('id', $user_id)
            ->delete();

				return "Insert_Success";
			}
		}
	


	//--------------Re Password -----------------------------------
	public function repassword()
	{
		return view('admin.user_form_repassword_contact');
	}
	public function repassword_form()
	{
		return view('admin.user_form_repassword');
	}
	public function submitRePassword()
	{
		$username = Request::input('username');
		$password_old = Request::input('password_old');
		$password_new = Request::input('password_new');


		//if(Auth::attempt(['username' => $username,'tel'=>$password_old]))
		$data_obj_info = DB::table('users')
			            ->where ('username','=',$username)
			            ->where ('tel','=',$password_old)
			            ->first();
		if(!empty($data_obj_info->id))
		{
			$user_id = $data_obj_info->id;
			if(strlen($password_new) >= 4 )
			{
				$password_Encrp  = Hash::Make($password_new);
				$data_head = array(
					'password'		=> $password_Encrp,
					'updated_at'		=> date('Y-m-d H:i:s'),
					'updated_by'		=> $username 
					);

				DB::table('users')
		            ->where('id', $user_id)
		            ->update($data_head);

					return "Insert_Success";
			}else
			{
				return  "length"; //-------เพื่อบอกว่าใส่ ความยาวไม่เป็นไปตามข้อกำหนด
			}
		}else
		{
			return "NO-USER";
		}

	}


//-----------------Re Change Entity 

	public function get_ChangeEntity()
	{

		return view('admin.user_change_entity');
	}	
	public function get_ChangeEntity_from()
	{
	
		return  view('admin.user_change_entity_form'); 
	}	

	public function SubmitChangeEntity()
	{
		$user_id = $username = Auth::user()->id ;
		$current_entity_code_logon = Request::input('current_entity_code_logon');
		$current_cust_code_logon = Request::input('current_cust_code_logon');
		$current_cust_name_logon = Request::input('current_cust_name_logon');
		$current_dept_code_logon = Request::input('current_dept_code_logon');


		if(!empty($user_id))
		{
	
				$data_head = array(
					'current_entity_code_logon'		=> $current_entity_code_logon,
					'current_cust_code_logon'		=> $current_cust_code_logon,
					'current_cust_name_logon'		=> $current_cust_name_logon,
					'current_dept_code_logon'		=> $current_dept_code_logon,
					'updated_at'		=> date('Y-m-d H:i:s'),
					'updated_by'		=> $username 
					);

				DB::table('users')
		            ->where('id', $user_id)
		            ->update($data_head);

					return "Insert_Success";
		}else
		{
				return "Insert_no_Success";
			
		}
	

	}

}
