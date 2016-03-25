<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
//use Illuminate\Http\Request;

use Request;
use Validator;
//use Felixkiss\UniqueWithValidator\UniqueWithValidatorServiceProvider;

//use Input;

// Model
use App\Http\Model\CosPcmast;

class PcController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data_pc = CosPcmast::where('cust_code',Auth::user()->current_cust_code_logon)->orderBy('emp_code','asc')->get();

		
		return view('commission.pc')->with('pc',$data_pc);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('commission.pc_create');
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
			//'unique'	=> 'ข้อมูลซ้ำ',
			//'numeric'	=> 'ต้องเป็นตัวเลขเท่านั้น',
			'max'		=> 'ข้อมูลเกิน :max ตัวอักษร',
			'email'		=> 'รูปแบบ email ไม่ถูกต้อง',
			'unique_with'	=> 'ข้อมูลซ้ำ',
		];


		$rules = array(
			'emp_code'	     	=> 'required|unique_with:cos_pcmast,cust_code|max:6',
			//'cust_code'		=> 'required',
			'emp_name'		=> 'required|max:50',
			'tel'			=> 'required|max:30',
			'email'			=> 'email|max:30',			
			
		);

		$validator = Validator::make(Request::all(), $rules,$message);

		if ($validator->passes())
		{
			
			

			$data_pc = array(
				'cust_code' => Auth::user()->current_cust_code_logon,
				'emp_code' => Request::get('emp_code'),			
				'emp_name' => Request::get('emp_name'),
				'tel' => Request::get('tel'),
				'email' => Request::get('email'),
				'created_by' => Auth::user()->username,
				'updated_by' => Auth::user()->username
			);

			
		
			//Insert data to model Entity
			$add_data = CosPcmast::create($data_pc);

			//dd($data_entity);
			

			/* **********  Save Data ************ */	


			// Reload Table Data
			$data_pc = array(
				'pc' 		=> CosPcmast::where('cust_code',Auth::user()->current_cus_code_logon)->orderBy('emp_code', 'asc')->get(),
				'refresh'	=> true
			);
	
			return view('commission.pc_table')->with($data_pc);
			
		}else{
			if( Request::ajax() ) 
			{
				
				return view('commission.pc_create')->withErrors($validator)->withInput(Request::all());				
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
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$edit_data = CosPcmast::find($id);

		return view('commission.pc_edit')->with('pc',$edit_data);

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
			'emp_code'	     	=> 'required|Max:6',
			'emp_name'		=> 'required|Max:50',
			'tel'			=> 'required|Max:30',
			'email'			=> 'Max:30',			
			
		);

		$validator = Validator::make(Request::all(), $rules,$message);

		if ($validator->passes())
		{
			
			
			$data_pc = array(
				'emp_code' => Request::get('emp_code'),			
				'emp_name' => Request::get('emp_name'),
				'tel' => Request::get('tel'),
				'email' => Request::get('email'),
				'created_by' => Auth::user()->username,
				'updated_by' => Auth::user()->username
			);


			$pc 	=CosPcmast::find($id);
			$pc->update($data_pc);

			//dd($data_entity);
			

			/* **********  Save Data ************ */	


			// Reload Table Data
			$pc = array(
				'pc' 		=> CosPcmast::where('cust_code',Auth::user()->current_cust_code_logon)->orderBy('emp_code', 'asc')->get(),
				'refresh'	=> true
			);
	
			return view('commission.pc_table')->with($pc);

		}
		else{
			

			$edit_data = array(
				'emp_code' => Request::get('emp_code'),			
				'emp_name' => Request::get('emp_name'),
				'tel' => Request::get('tel'),
				'email' => Request::get('email'),
			);

			//dd($edit_data);

			if( Request::ajax() ) 
			{

				return view('commission.pc_edit')->withErrors($validator)->with('pc' ,$edit_data);
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
		$delete=CosPcmast::where('id',$id)->delete();

		$data_pc = array(
				'pc' 		=> CosPcmast::where('cust_code',Auth::user()->current_cust_code_logon)->orderBy('emp_code', 'asc')->get(),
				'refresh'	=> true
			);
	
		return view('commission.pc_table')->with($data_pc);
		
		
	}

}
