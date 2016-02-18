<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//use Illuminate\Http\Request;

use Request;
use Validator;

// Model
use App\Http\Model\Commission;
use App\Http\Model\Entity;

class CommissionController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data_com = Commission::orderBy('class','asc')->get();

		
		return view('sales.commission')->with('commission',$data_com);

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('sales.commission_create');
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
			'numeric'	=> 'ต้องเป็นตัวเลขเท่านั้น',
			'max'		=> 'ข้อมูลเกิน :max ตัวอักษร',
			'unique_with'	=> 'ข้อมูลซ้ำ',
			'between'	=> 'ค่าต้องอยู่ระว่าง :min - :max.'

		];


		$rules = array(
			'class'		=> 'required|unique_with:commission_mast,sale_start|max:2',
			'sale_start'     	=> 'required|unique_with:commission_mast,class|numeric|between:1,9999999.99',
			'sale_end'     	=> 'required|numeric|between:1,9999999.99',				
			'commission_rate'     	=> 'required|numeric|between:1,99',
			
		);

		$validator = Validator::make(Request::all(), $rules,$message);

		if ($validator->passes())
		{
			
			

				$data_com = array(
					'class' => Request::get('class'),
					'sale_start' => Request::get('sale_start'),
					'sale_end' => Request::get('sale_end'),
					'commission_rate' => Request::get('commission_rate') ,			
					'created_by' => Auth::user()->username,
					'updated_by' => Auth::user()->username
				);

				
			
				//Insert data to model Entity
				$add_data = Commission::create($data_com);
			
			//dd($data_entity);
			

			/* **********  Save Data ************ */	


			// Reload Table Data
			$data_com = array(
				'commission' 		=> Commission::orderBy('class', 'asc')->get(),
				'refresh'		=> true
			);
	
			return view('sales.commission_table')->with($data_com);
			
		}else{
			if( Request::ajax() ) 
			{
				
				return view('sales.commission_create')->withErrors($validator)->withInput(Request::all());				
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
		$edit_data = Commission::find($id);

		return view('sales.commission_edit')->with('commission',$edit_data);
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
			'numeric'	=> 'ต้องเป็นตัวเลขเท่านั้น',
			'max'		=> 'ข้อมูลเกิน :max ตัวอักษร',
			'unique'	=> 'ข้อมูลซ้ำ',
			'between'	=> 'ค่าต้องอยู่ระว่าง :min - :max.'

		];


		$rules = array(
			'class'		=> 'required|max:2',
			'sale_start'     	=> 'required|numeric|between:1,9999999.99',
			'sale_end'     	=> 'required|numeric|between:1,9999999.99',				
			'commission_rate'     	=> 'required|numeric|between:1,99',
			
		);

		$validator = Validator::make(Request::all(), $rules,$message);

		if ($validator->passes())
		{
			
			$data_com = array(
					'class' => Request::get('class'),
					'sale_start' => Request::get('sale_start'),
					'sale_end' => Request::get('sale_end'),
					'commission_rate' => Request::get('commission_rate') ,			
					'created_by' => Auth::user()->username,
					'updated_by' => Auth::user()->username
				);


			$commission	=Commission::find($id);
			$commission ->update($data_com);

			//dd($data_entity);
			

			/* **********  Save Data ************ */	


			// Reload Table Data
			$commission = array(
				'commission' 		=> Commission::orderBy('class', 'asc')->get(),
				'refresh'	=> true
			);
	
			return view('sales.commission_table')->with($commission);

		}
		else{
			

			$edit_data = array(
				'class' => Request::get('class'),
				'sale_start' => Request::get('sale_start'),
				'sale_end' => Request::get('sale_end'),
				'commission_rate' => Request::get('commission_rate') ,			
			);

			//dd($edit_data);

			if( Request::ajax() ) 
			{

				return view('sales.commission_edit')->withErrors($validator)->with('commission' ,$edit_data);
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
		$delete=Commission::where('id',$id)->delete();

		$data_com = array(
				'commission' 		=>Commission::orderBy('class', 'asc')->get(),
				'refresh'	=> true
			);
	
		return view('sales.commission_table')->with($data_com);
	}

	/*public function commissioncust()
	{
		//$cust_group = DB::table('customers')->groupBy('CustGroup')->get(['CustGroup']);
		//dd($cust_group);
		//return view('pages.addpoform')->with('cust_group',$cust_group);
		$data_cust = Entity::orderBy('entity_code','asc')->get();
		//dd($data_cust);
		return view('sales.commissionclass_cust')->with('cust',$data_cust);
	}*/

}
