<?php namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admins\LoginRequest;
use Auth; // ไว้ตรวจสถานะการล็อกอิน
use Hash; // เข้ารหัส
use App\User; // Model
use DB;

class AdminController extends Controller {
	
	public function loginprocess(LoginRequest $request)
	{
		// รับค่าจากฟอร์ม login
		$username = $request->input('username');
		$password = $request->input('password');



		// if(Hash::check("$2y$10$aa.1su1Zov4lOCk2.imrfOr51VMgtYbMB3a1x4Daiv7ejsJ79XgNu") == 1234)
		// {
		// 	return "Correct";
		// }

		// เช็คสิทธิ์กับฐานข้อมูล
		if(Auth::attempt(['username' => $username,'password'=>$password])){
		/*	if(Auth::user()->role_id == 2)
			{
			 	return redirect()->intended('/admin/dashboard');
			}else if(Auth::user()->role_id == 3){
			   	return redirect()->intended('/manager/dashboard');
			}*/
		$user_id = Auth::user()->id; 
		$role_id = Auth::user()->role_id ;
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
	                                     .'<a href="'.$DataLevel1->RouteUrl.'"> <i></i> <i></i>'. '<i class="'.$DataLevel1->icon_class_name.'"></i>'.$DataLevel1->MenuName .'</a>'
	                                .'</li>'
	                           		;

	                     $tmplevel1  =  $contentLevel1  ; 			
					}

					$tmp  = $contentLevel0 .$contentLevel1 .$contentfooter ;

				}

				$data_head = array(
					'menu_dynamic'		=> $tmp,
					'updated_at'		=> date('Y-m-d H:i:s'),
					'updated_by'		=> $username 
					);

			DB::table('users')
            ->where('id', $user_id)
            ->update($data_head);


			return redirect()->intended('home');
		
		}else{
			return redirect()->back()->with('message',"Error!! Username or Password Incorrect. \nPlease try again.");
		}
	}

	 // สำหรับทำการ Logout
	 public function logout(){
	      Auth::logout();
	      return redirect('/');
	 }

}
