<?php namespace App\Http\Controllers\Menu;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;
use Validator;
use DB ;
use Auth;
// Model
use App\Client;
class MenuController extends Controller {

	public function getmenulist()
	{
		$data_obj_info = DB::table('su_menu')
							->orderby('Su_Menu_Id','asc')
							->get();


		return view('admin.menu')->with('data_obj_info',$data_obj_info);
	}
	public function search_menu()
	{
        $query = urldecode( Request::input('search'));

        if ($query) {
            $data_obj_info = DB::table('su_menu')
            	->where('MenuName', 'LIKE', "%$query%")
                ->orWhere('ProgramCode', 'LIKE', "%$query%")
                ->paginate(10);
        } else {
			$data_obj_info = DB::table('su_menu')
							->orderby('Su_Menu_Id','asc')
							->paginate(10);
        }

		return view('admin.menu')->with('data_obj_info',$data_obj_info);

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

		return redirect('/');//->with('contentmenu','TEST'); 
	}



	//-----------Form NEW --------------------
	public function geteditmenuform($Su_Menu_Id)
	{
        $data_obj_info = DB::table('su_menu')
			            ->join('su_system', 'su_menu.Su_System_Id', '=', 'su_system.Su_System_Id')
			            ->join('su_programlist', 'su_menu.ProgramCode', '=', 'su_programlist.ProgramCode')
			            ->select('su_menu.*','su_system.*' ,'su_programlist.*' ,'su_menu.Su_System_Id')
			            ->where ('Su_Menu_Id','=',$Su_Menu_Id)
			            ->get();


		return  view('admin.menu_form_edit')->with('data_obj',$data_obj_info);
	}


	public function getdeletemenuform($Su_Menu_Id)
	{
        $data_obj_info = DB::table('su_menu')
			            ->join('su_system', 'su_menu.Su_System_Id', '=', 'su_system.Su_System_Id')
			            ->join('su_programlist', 'su_menu.ProgramCode', '=', 'su_programlist.ProgramCode')
			            ->select('su_menu.*','su_system.*' ,'su_programlist.*' ,'su_menu.Su_System_Id')
			            ->where ('Su_Menu_Id','=',$Su_Menu_Id)
			            ->get();


		return  view('admin.menu_form_delete')->with('data_obj',$data_obj_info);
	}


	public function menunewform()
	{

		return  view('admin.menu_form_new');
	}

	public function summitnewmenu()
	{
		$username = Auth::user()->username ;
		if(!empty(Request::input('MenuName')))
		{
			$data_head = array(
				'MenuLevel'		=> Request::input('MenuLevel'),
				'MenuName'	=> Request::input('MenuName'),
				'MenuSeq'		=> Request::input('MenuSeq'),
				'Su_System_Id'			=> Request::input('Su_System_Id'),
				'ProgramCode'			=> Request::input('ProgramCode'), 
				'icon_class_name'			=> Request::input('icon_class_name'),
				'RecordStatus'		=> Request::input('RecordStatus'),
				'created_at'		=> date('Y-m-d H:i:s'),
				'created_by'		=> $username 
				);


			// Insert to po_heads
			$data_id = DB::table('su_menu')->insertGetId($data_head);

			if($data_id){
				return "Insert_Success";
			}
		}
	}

	public function summiteditmenu()
	{
		$username = Auth::user()->username ;
		$Su_Menu_Id = Request::input('Su_Menu_Id');


		if(!empty(Request::input('MenuName')))
		{
			$data_head = array(
				'MenuLevel'		=> Request::input('MenuLevel'),
				'MenuName'	=> Request::input('MenuName'),
				'MenuSeq'		=> Request::input('MenuSeq'),
				'Su_System_Id'			=> Request::input('Su_System_Id'),
				'ProgramCode'			=> Request::input('ProgramCode'), 
				'icon_class_name'			=> Request::input('icon_class_name'),
				'RecordStatus'		=> Request::input('RecordStatus'),
				'created_at'		=> date('Y-m-d H:i:s'),
				'created_by'		=> $username 
				);


			DB::table('su_menu')
            ->where('Su_Menu_Id', $Su_Menu_Id)
            ->update($data_head);

				return "Insert_Success";
			}
		}

	public function summitdeletemenu()
	{
		$username = Auth::user()->username ;
		$Su_Menu_Id = Request::input('Su_Menu_Id');
		if(!empty(Request::input('Su_System_Id')))
		{


			DB::table('su_menu')
            ->where('Su_Menu_Id', $Su_Menu_Id)
            ->delete();

				return "Insert_Success";
			}
		}
	

}
