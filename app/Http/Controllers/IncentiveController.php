<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//use Illuminate\Http\Request;
use Request;
use Validator;
//use Carbon\Carbon;

// Model
use App\Http\Model\Incentive;
use App\Http\Model\PmtProductModel;

class IncentiveController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data_incentive = Incentive::orderBy('pdmodel_code','asc')->get();

		
		return view('sales.incentive')->with('incentive',$data_incentive);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('sales.incentive_create');
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
			'unique_with'	=> 'ข้อมูลซ้ำ',
			'numeric'	=> 'ต้องเป็นตัวเลขเท่านั้น',
			'max'		=> 'ข้อมูลเกิน :max ตัวอักษร',
			'between'	=> 'ค่าต้องอยู่ระว่าง :min - :max.'
		];


		$rules = array(
			'pdmodel_code'     	=> 'required|unique_with:incentive_mast,start_date|Max:4',
			'start_date'		=> 'required|date|unique_with:incentive_mast,pdmodel_code',
			'end_date'		=> 'required|date',
			'incentive_amt'	=> 'required|between:1,99999',
			
			
		);

		$validator = Validator::make(Request::all(), $rules,$message);

		if ($validator->passes())
		{
			

			$data_incentive = array(
				'pdmodel_code' => Request::get('pdmodel_code'),			
				'start_date' => Request::get('start_date'),
				'end_date' => Request::get('end_date'),
				'incentive_amt' => Request::get('incentive_amt'),
				'created_by' => Auth::user()->username,
				'updated_by' => Auth::user()->username
			);

			
		
			//Insert data to model Entity
			$add_data = Incentive::create($data_incentive);

			//dd($data_entity);
			

			/* **********  Save Data ************ */	


			// Reload Table Data
			$data_incentive = array(
				'incentive' 		=> Incentive::orderBy('pdmodel_code', 'asc')->get(),
				'refresh'	=> true
			);
	
			return view('sales.incentive_table')->with($data_incentive);
			
		}else{
			if( Request::ajax() ) 
			{
				return view('sales.incentive_create')->withErrors($validator)->withInput(Request::all());			
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
		$edit_data = Incentive::find($id);

		

		return view('sales.incentive_edit')->with('incentive',$edit_data);
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
			'unique_with'	=> 'ข้อมูลซ้ำ',
			'numeric'	=> 'ต้องเป็นตัวเลขเท่านั้น',
			'max'		=> 'ข้อมูลเกิน :max ตัวอักษร',
			'between'	=> 'ค่าต้องอยู่ระว่าง :min - :max.'
		];


		$rules = array(
			'pdmodel_code'     	=> 'required|Max:4',
			'start_date'		=> 'required|date_format:"d/m/Y"',
			'end_date'		=> 'required|date_format:"d/m/Y"',
			'incentive_amt'	=> 'required|between:1,99999',
			
			
		);

		//dd($rules);

		$validator = Validator::make(Request::all(), $rules,$message);

		//dd(Request::all());
		if ($validator->passes())
		{
			
			$sdate = date_create_from_format('d/m/Y', Request::get('start_date'));
			$start_date = date_format($sdate, 'Y-m-d');
			
			$edate = date_create_from_format('d/m/Y', Request::get('end_date'));
			$end_date = date_format($edate, 'Y-m-d');

			$data_incentive = array(
				'pdmodel_code' => Request::get('pdmodel_code'),			
				'start_date' => $start_date,
				'end_date' => $end_date,
				'incentive_amt' => Request::get('incentive_amt'),
				'created_by' => Auth::user()->username,
				'updated_by' => Auth::user()->username
			);

			
		
			//Edit data to model Entity
			/*$update = Entity::find($id);
			$update->fill(Input::all());
			$update->save();
			*/
			//$update=Request::all();
			$incentive 	=Incentive::find($id);
			$incentive->update($data_incentive);

			//dd($data_entity);
			

			/* **********  Save Data ************ */	


			// Reload Table Data
			$incentive = array(
				'incentive' 		=> Incentive::orderBy('start_date', 'desc')->get(),
				'refresh'	=> true
			);
	
			return view('sales.incentive_table')->with($incentive);
		}
		else{
			
			$edit_data = array(
				'pdmodel_code' => Request::get('pdmodel_code'),			
				'start_date' => Request::get('start_date'),
				'end_date' => Request::get('end_date'),
				'incentive_amt' => Request::get('incentive_amt'),
			);

			
			if( Request::ajax() ) 
			{
				
				return view('sales.incentive_edit')->withErrors($validator)->with('incentive', $edit_data);
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
		$delete=Incentive::where('id',$id)->delete();

		$data_incentive = array(
				'incentive' 		=> Incentive::orderBy('start_date', 'desc')->get(),
				'refresh'	=> true
			);
	
			return view('sales.incentive_table')->with($data_incentive);
	}

	public function incentivemodel()
	{
		//$cust_group = DB::table('customers')->groupBy('CustGroup')->get(['CustGroup']);
		//dd($cust_group);
		//return view('pages.addpoform')->with('cust_group',$cust_group);
		$data_model = PmtProductModel::distinct()->select('pdmodel_code','pdmodel_desc')->orderBy('pdmodel_code','asc')->get();
		//dd($data_cust);
		return view('sales.incentive_model')->with('model',$data_model);
	}

}
