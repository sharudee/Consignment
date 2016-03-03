<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//use Illuminate\Http\Request;
use Request;
use Validator;
use Auth;

// Model
use App\Http\Model\Commissionclass;
use App\Http\Model\Commission;
use App\Http\Model\Entity;

class ComclassController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($class)
	{
		$data_class = Commissionclass::where('class',$class)->orderBy('cust_code','asc')->get();
		return view('masterdata.commissionclass')->with(['commissionclass'=>$data_class,
								'class' => $class]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$data_class = Commission::orderBy('class','asc')->get();
		return view('masterdata.commissionclass_create')->with('commission',$data_class);
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
			'unique'	=> 'ข้อมูลซ้ำ',
			'between'	=> 'ค่าต้องอยู่ระว่าง :min - :max.'

		];


		$rules = array(
			'cust_code'	=> 'required|unique:commission_class|max:8',
			'class'		=> 'required|max:2',
			'sale_target'    	=> 'required|numeric|between:1,9999999.99',

			
		);

		$validator = Validator::make(Request::all(), $rules,$message);

		if ($validator->passes())
		{
			
			

				$data_class = array(
					'cust_code' => Request::get('cust_code'),
					'cust_name' => Request::get('cust_name'),
					'class' => Request::get('class'),
					'sale_target' => Request::get('sale_target'),	
					'created_by' => Auth::user()->username,
					'updated_by' => Auth::user()->username
				);

				
			
				//Insert data to model Entity
				$add_data = Commissionclass::create($data_class);
			
			//dd($data_entity);
			

			/* **********  Save Data ************ */	


			// Reload Table Data
			$data_class = array(
				'commission' 		=> Commission::orderBy('class', 'asc')->get(),
				'refresh'		=> true
			);
	
			return view('masterdata.commission_table')->with($data_class);
			
		}else{
			if( Request::ajax() ) 
			{
				$data_class = Commission::orderBy('class','asc')->get();
				return view('masterdata.commissionclass_create')->withErrors($validator)->withInput(Request::all())->with('commission',$data_class);				
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
		$edit_data = Commissionclass::find($id);

		$data_class = Commission::orderBy('class','asc')->get();

		return view('masterdata.commissionclass_edit')->with(['commissionclass' =>$edit_data,
									'commission' =>$data_class]);
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
			'cust_code'	=> 'required|max:8',
			'class'		=> 'required|max:2',
			'sale_target'    	=> 'required|numeric|between:1,9999999.99',

			
		);

		$validator = Validator::make(Request::all(), $rules,$message);
		if ($validator->passes())
		{
			
			$data_class = array(
					'cust_code' => Request::get('cust_code'),
					'cust_name' => Request::get('cust_name'),
					'class' => Request::get('class'),
					'sale_target' => Request::get('sale_target'),	
					'created_by' => Auth::user()->username,
					'updated_by' => Auth::user()->username
				);



			$commissionclass	=Commissionclass::find($id);
			$commissionclass ->update($data_class);

			//dd($data_entity);
			

			/* **********  Save Data ************ */	


			// Reload Table Data
			$commissionclass = array(
				'commissionclass' 		=> Commissionclass::orderBy('cust_code', 'asc')->get(),
				'refresh'	=> true
			);
	
			return view('masterdata.commissionclass_table')->with($commissionclass);

		}
		else{
			

			$edit_data = array(
				'cust_code' => Request::get('cust_code'),
				'cust_name' => Request::get('cust_name'),
				'class' => Request::get('class'),
				'sale_target' => Request::get('sale_target'),				
			);

			//dd($edit_data);

			if( Request::ajax() ) 
			{

				return view('masterdata.commission_edit')->withErrors($validator)->with('commissionclass' ,$edit_data);
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
		$delete=Commissionclass::where('id',$id)->delete();

		$data_class = array(
				'commissionclass' 		=>Commissionclass::orderBy('cust_code', 'asc')->get(),
				'refresh'	=> true
			);
	
		return view('masterdata.commissionclass_table')->with($data_class);
	}

	
	public function commissioncust()
	{
		//$cust_group = DB::table('customers')->groupBy('CustGroup')->get(['CustGroup']);
		//dd($cust_group);
		//return view('pages.addpoform')->with('cust_group',$cust_group);
		$data_cust = Entity::orderBy('entity_code','asc')->get();
		//dd($data_cust);
		return view('masterdata.commissionclass_cust')->with('cust',$data_cust);
	}
}
