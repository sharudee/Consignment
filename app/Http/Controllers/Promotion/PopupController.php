<?php namespace App\Http\Controllers\Promotion;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//use Illuminate\Http\Request;
use DB;
use Request;
use Validator;
class PopupController extends Controller {

	//---------------Popup ----------------------------
	public function getmstmodel()
	{
		$data_obj_info = DB::table('product')->groupby('pdmodel_code')->orderBy('pdmodel_code','asc')->get();
		return view('popup.popup_mstmodel_modal')->with('data_obj_info',$data_obj_info);
	} 

	public function get_pdsize_code()
	{
		$data_obj_info = DB::table('product')->groupby('pdsize_code')->orderBy('pdsize_code','asc')->get();

		return view('popup.popup_pdsize_code_modal')->with('data_obj_info',$data_obj_info);
	} 

	public function get_pdgrp_code()
	{
		$data_obj_info = DB::table('product')->groupby('pdgrp_code')->orderBy('pdgrp_code','asc')->get();
		return view('popup.popup_pdgrp_code_modal')->with('data_obj_info',$data_obj_info);
	} 
	public function get_pdbrnd_code()
	{
		$data_obj_info = DB::table('product')->groupby('pdbrnd_code')->orderBy('pdbrnd_code','asc')->get();
		return view('popup.popup_pdbrnd_code_modal')->with('data_obj_info',$data_obj_info);
	} 

	public function get_pdcolor_code()
	{
		$data_obj_info = DB::table('product')->groupby('pdcolor_code')->orderBy('pdcolor_code','asc')->get();
		return view('popup.popup_pdcolor_code_modal')->with('data_obj_info',$data_obj_info);
	} 
	public function get_pddsgn_code()
	{
		$data_obj_info = DB::table('product')->groupby('pddsgn_code')->orderBy('pddsgn_code','asc')->get();
		return view('popup.popup_pddsgn_code_modal')->with('data_obj_info',$data_obj_info);
	} 

	public function get_transmst_form()
	{
		$condition = "PAYMENT";
		$data_obj_info = DB::table('pmt_transaction_mast')
						->where('pmt_group_code', '=', "$condition")
						->where ('rec_status', '=', "ACTIVE")
						->orderBy('transaction_code','asc')
						->get();
		return view('popup.popup_transmst_modal')->with('data_obj_info',$data_obj_info);
	} 
	public function get_transmst_discshop()
	{
		$condition = "DISC%";
		$data_obj_info = DB::table('pmt_transaction_mast')
						->where('pmt_group_code', 'like', "$condition")
						->where ('rec_status', '=', "ACTIVE")
						->orderBy('transaction_code','asc')
						->get();
		return view('popup.popup_transmst_modal')->with('data_obj_info',$data_obj_info);
	} 

}


