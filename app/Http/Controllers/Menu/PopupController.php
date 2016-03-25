<?php namespace App\Http\Controllers\Menu;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//use Illuminate\Http\Request;
use Auth;
use DB;
use Request;
use Validator;
class PopupController extends Controller {

	public function get_popup_system_modal_form()
	{
		$data_obj_info = DB::table('su_system')
							->where('RecordStatus','=','ACTIVE')
							->orderBy('SystemCode','asc')
							->get();
		return view('popup.popup_system_modal')->with('data_obj_info',$data_obj_info);
	} 

	public function get_popup_program_modal_form()
	{
		$data_obj_info = DB::table('su_programlist')
							->where('RecordStatus','=','ACTIVE')
							->orderBy('ProgramCode','asc')
							->get();
		return view('popup.popup_program_modal')->with('data_obj_info',$data_obj_info);
	} 

	public function get_popup_emtity_modal_form()
	{
		$data_obj_info = DB::table('entity')
							->where('cust_grp','=','HO')
							->orderBy('entity_code','asc')
							->get();
		return view('popup.popup_entity_modal')->with('data_obj_info',$data_obj_info);
	} 

	public function get_popup_cust_modal_form($cust_grp_code)
	{
		
		$data_obj_info = DB::table('entity')
							->where('cust_grp','=',$cust_grp_code)
							->orderBy('entity_code','asc')
							->get();
		return view('popup.popup_cust_modal2')->with('data_obj_info',$data_obj_info);
	} 

	public function get_pop_cust_allow_form($cust_grp_code)
	{
		

		$data_obj_info = DB::table('entity')
							->where('cust_grp','=',$cust_grp_code)
							->orderBy('entity_code','asc')
							->get();
		return view('popup.pop_cust_allow_form_modal')->with('data_obj_info',$data_obj_info);
	} 




	public function get_popup_role_modal_form()
	{
		$data_obj_info = DB::table('su_role')
							->where('RecordStatus','=','ACTIVE')
							->orderBy('RoleName','asc')
							->get();
		return view('popup.popup_role_modal')->with('data_obj_info',$data_obj_info);
	} 


	public function get_popup_dept_form()
	{
		$data_obj_info = DB::table('dept_mast')
						->orderBy('dept_code','asc')
						->get();
		return view('popup.popup_dept_modal')->with('data_obj_info',$data_obj_info);
	} 

	public function get_menu_by_system_form_popup($role_id,$system_id)
	{
		$su_system_obj_data  =  DB::table('su_system')
							->where('Su_System_Id','=',$system_id)
							->get();

		$menu_obj_data	=  DB::table('su_menu')
							->where('Su_System_Id','=',$system_id)
							->orderby('Su_System_Id','asc')
							->orderby('MenuSeq','asc')
							->get();	
			
  		return  view('popup.popup_menu_by_system_form_modal')->with(['menu_obj_data'=>$menu_obj_data,'su_system_obj_data'=>$su_system_obj_data]); 
	}
	
	public function get_popup_entity_and_cust_allow_form()
	{
		$user_id  = Auth::user()->id ;
		$entity_obj   =  DB::table('su_user_entity_allow')
							->join('entity', 'entity.entity_code', '=', 'su_user_entity_allow.CustomerCode')
							->select('entity.*','su_user_entity_allow.*')
							->where('su_user_entity_allow.id','=',$user_id)
							->orderby('su_user_entity_allow.CustomerCode','asc')
							->get();

			
  		return  view('popup.pop_cust_allow_form_list_modal')->with(['entity_obj'=>$entity_obj]); 
	}
public function get_cust_grp()
{
		$data_obj_info = DB::table('custgrp_mast')->orderby('custgrp_code','asc')->get();
		return view('popup.popup_consignee_grp_modal')->with('data_obj_info',$data_obj_info);
}
}
