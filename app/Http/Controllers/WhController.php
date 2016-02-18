<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//use Illuminate\Http\Request;

use Request;
use Validator;
//use Input;

// Model
use App\Http\Model\Whmast;

class WhController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data_wh = Whmast::orderBy('wh_code','asc')->get();

		
		return view('sales.whmast')->with('whmast',$data_wh);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('sales.whmast_create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$message = [
			'required'	=> 'กรุณาใส่ข้อมูล',
			'unique'	=> 'ข้อมูลซ้ำ',
			'numeric'	=> 'ต้องเป็นตัวเลขเท่านั้น',
			'max'		=> 'ข้อมูลเกิน :max ตัวอักษร'
		];


		$rules = array(
			'wh_code'	     	=> 'required|unique:wh_mast|Max:8',
			'wh_tdesc'		=> 'required|Max:60',
			'wh_edesc'		=> 'Max:60',
			'address1'		=> 'required|Max:50',
			'address2'		=> 'Max:50',
			'tel'			=> 'Max:50',
			'contatc_name'	=> 'Max:60'
			
		);

		$validator = Validator::make(Request::all(), $rules,$message);

		if ($validator->passes())
		{
			
			
			$data_wh = array(
				'wh_code' => Request::get('wh_code'),			
				'wh_tdesc' => Request::get('wh_tdesc'),
				'wh_edesc' => Request::get('wh_edesc'),
				'address1' => Request::get('address1'),
				'address2' => Request::get('address2'),
				'tel' => Request::get('tel'),
				'contact_name' => Request::get('contact_name'),
				'status' => Request::get('status'),
				'created_by' => Auth::user()->username,
				'updated_by' => Auth::user()->username
			);

			
		
			//Insert data to model Whmast
			$add_data = Whmast::create($data_wh);

			//dd($data_entity);
			

			/* **********  Save Data ************ */	


			// Reload Table Data
			$data_wh = array(
				'whmast' 		=> Whmast::orderBy('wh_code', 'asc')->get(),
				'refresh'	=> true
			);
	
			return view('sales.whmast_table')->with($data_wh);
			
		}else{
			if( Request::ajax() ) 
			{
				
				return view('sales.whmast_create')->withErrors($validator)->withInput(Request::all());				
			}

			return 0;
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$whmast = Whmast::find($id);

		return view('sales.whmast_show')->with('whmast',$whmast); 
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$edit_data = Whmast::find($id);

	
		return view('sales.whmast_edit')->with('whmast',$edit_data);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		
		$message = [
			'required'	=> 'กรุณาใส่ข้อมูล',
			'unique'	=> 'ข้อมูลซ้ำ',
			'numeric'	=> 'ต้องเป็นตัวเลขเท่านั้น',
			'max'		=> 'ข้อมูลเกิน :max ตัวอักษร'
		];


		$rules = array(
			'wh_code'	     	=> 'required|Max:8',
			'wh_tdesc'		=> 'required|Max:60',
			'wh_edesc'		=> 'Max:60',
			'address1'		=> 'required|Max:50',
			'address2'		=> 'Max:50',
			'tel'			=> 'Max:50',
			'contatc_name'	=> 'Max:60'
			
		);

		$validator = Validator::make(Request::all(), $rules,$message);

		if ($validator->passes())
		{
			

			$data_wh = array(
				'wh_code' => Request::get('wh_code'),			
				'wh_tdesc' => Request::get('wh_tdesc'),
				'wh_edesc' => Request::get('wh_edesc'),
				'address1' => Request::get('address1'),
				'address2' => Request::get('address2'),
				'tel' => Request::get('tel'),
				'contact_name' => Request::get('contact_name'),
				'status' => Request::get('status'),
				'created_by' => Auth::user()->username,
				'updated_by' => Auth::user()->username
			);
			

			$whmast 	=Whmast::find($id);
			$whmast->update($data_wh);

			//dd($data_entity);
			

			/* **********  Save Data ************ */	


			// Reload Table Data
			$whmast = array(
				'whmast' 		=> Whmast::orderBy('wh_code', 'asc')->get(),
				'refresh'	=> true
			);
	
			return view('sales.whmast_table')->with($whmast);

		}
		else{
			

			$edit_data = array(
				'wh_code' => Request::get('wh_code'),			
				'wh_tdesc' => Request::get('wh_tdesc'),
				'wh_edesc' => Request::get('wh_edesc'),
				'address1' => Request::get('address1'),
				'address2' => Request::get('address2'),
				'tel' => Request::get('tel'),
				'contact_name' => Request::get('contact_name'),
				'status' => Request::get('status'),
			);

			//dd($edit_data);

			if( Request::ajax() ) 
			{
				
				return view('sales.whmast_edit')->withErrors($validator)->with('whmast',$edit_data);
			}

			return 0;
		}

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$delete=Whmast::where('id',$id)->delete();

		$data_wh = array(
				'whmast' 		=> Whmast::orderBy('wh_code', 'asc')->get(),
				'refresh'	=> true
			);
	
			return view('sales.whmast_table')->with($data_wh);
	}

}
