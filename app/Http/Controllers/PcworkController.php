<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//use Illuminate\Http\Request;

 use Auth;
use Request;
use Validator;
use Carbon;
use DB;
use MPDF;

// Model
use App\Http\Model\CosPcwork;
use App\Http\Model\CosPcmast;

class PcworkController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($emp_code)
	{
		if($emp_code=='pctime')
		{
			return view('commission.pctime');
		}

		if($emp_code=='pc')
		{
			$data_pc = CosPcmast::where('cust_code',Auth::user()->current_cust_code_logon)->orderBy('emp_code','asc')->get();
			return view('commission.pc')->with('pc',$data_pc);
		}


		$data_pc = CosPcwork::where('cust_code',Auth::user()->current_cust_code_logon)->where('emp_code',$emp_code)->orderBy('work_date','asc')->get();

		$pc = CosPcmast::where('cust_code',Auth::user()->current_cust_code_logon)->where('emp_code',$emp_code)->get(['emp_name']);
		//dd($pc);
		
		return view('commission.pcwork')->with(array('pcwork'=>$data_pc,
							'emp_code'=>$emp_code
							));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($emp_code)
	{
		return view('commission.pcwork_create')->with('emp_code',$emp_code);
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
			'unique_with'	=> 'มีการ Gen ข้อมูลไปแล้ว'

		];


		$rules = array(
			'year'		=> 'required|unique_with:cos_pcwork,month,emp_code|max:4|',
			'month'	     	=> 'required|max:2',
				
			
		);

		$validator = Validator::make(Request::all(), $rules,$message);

		if ($validator->passes())
		{
			
			$info = cal_days_in_month( CAL_GREGORIAN , Request::get('month') , Request::get('year') ) ;

			for($i=1;$i<=$info;$i++)
			{

				$data_pc = array(
					'year' => Request::get('year'),
					'month' => Request::get('month'),
					'cust_code' => Auth::user()->current_cust_code_logon,
					'emp_code' => Request::get('emp_code'),
					'work_date' => Request::get('year').'-'. Request::get('month') . '-' . $i ,
					'work_type' => '1',
					'pc_type' => 'P',			
					'created_by' => Auth::user()->username,
					'updated_by' => Auth::user()->username
				);

				
			
				//Insert data to model Entity
				$add_data = CosPcwork::create($data_pc);
			}
			//dd($data_entity);
			

			/* **********  Save Data ************ */	


			// Reload Table Data
			$data_pc = array(
				'pcwork' 		=> CosPcwork::where('cust_code',Auth::user()->current_cust_code_logon)->where('emp_code', Request::get('emp_code'))->orderBy('work_date', 'asc')->get(),
				'refresh'		=> true
			);
	
			return view('commission.pcwork_table')->with($data_pc);
			
		}else{
			if( Request::ajax() ) 
			{
				
				return view('commission.pcwork_create')->withErrors($validator)->withInput(Request::all())->with('emp_code',Request::get('emp_code'));				
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
		$edit_data = CosPcwork::find($id);

		return view('commission.pcwork_edit')->with('pcwork',$edit_data);
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
			'work_date'		=> 'required',
			
		);

		$validator = Validator::make(Request::all(), $rules,$message);

		if ($validator->passes())
		{
			
			
			$data_pc = array(
				'emp_code' => Request::get('emp_code'),			
				'work_date' => Request::get('work_date'),
				'work_type' => Request::get('work_type'),
				'pc_type' => Request::get('pc_type'),
				'created_by' => Auth::user()->username,
				'updated_by' => Auth::user()->username
			);


			$pc 	=CosPcwork::find($id);
			$pc->update($data_pc);

			//dd($data_entity);
			

			/* **********  Save Data ************ */	


			// Reload Table Data
			$data_pc = array(
				'pcwork' 		=> CosPcwork::where('cust_code',Auth::user()->current_cust_code_logon)->where('emp_code', Request::get('emp_code'))->orderBy('work_date', 'asc')->get(),
				'refresh'		=> true
			);
	
			return view('commission.pcwork_table')->with($data_pc);
			

		}
		else{
			

			$edit_data = array(
				'emp_code' => Request::get('emp_code'),			
				'work_date' => Request::get('work_date'),
				'work_type' => Request::get('work_type'),
				'pc_type' => Request::get('pc_type'),
			);

			//dd($edit_data);

			if( Request::ajax() ) 
			{

				return view('commission.pcwork_edit')->withErrors($validator)->with('pcwork' ,$edit_data);
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
		//
	}

	public function pctime()
	{
		return view('commission.pctime');
	}

	public function printtime($emp_code)
	{
		return view('commission.pcwork_printtime')->with('emp_code',$emp_code);
	}

	public function printreport()
	{
		$message = [
			'required'	=> 'กรุณาใส่ข้อมูล',
			'numeric'	=> 'ต้องเป็นตัวเลขเท่านั้น',
			'max'		=> 'ข้อมูลเกิน :max ตัวอักษร',
			'unique_with'	=> 'มีการ Gen ข้อมูลไปแล้ว'

		];


		$rules = array(
			'year'		=> 'required|max:4',
			'month'	     	=> 'required|max:2',
				
			
		);

		$validator = Validator::make(Request::all(), $rules,$message);

		if ($validator->passes())
		{

			$content ='
		<p><h2>Purchase Order</h2></p>';

		$mpdf = new mPDF('th', 'A4', '0', 'Tahoma'); 
		$mpdf->WriteHTML($content);
		$mpdf->Output();
		
		}else{
			if( Request::ajax() ) 
			{
				
				return view('commission.pcwork_printtime')->withErrors($validator)->withInput(Request::all())->with('emp_code',Request::get('emp_code'));				
			}

			return 0;
		}

	}


	public function workIn()
	{

		
		$emp_code = Request::input('emp_code');
		$time_start = date('H:i:s');
		$updated_by = Auth::user()->current_cust_code_logon;
		
		$code = DB::table('cos_pcmast')->where('cust_code',Auth::user()->current_cust_code_logon)->where('emp_code',$emp_code)->pluck('emp_code');
		if(!empty($code))
		{	
			$wdate = DB::table('cos_pcwork')->where('cust_code',Auth::user()->current_cust_code_logon)->where('work_date',date('Y-m-d'))->where('emp_code',$emp_code)->pluck('work_date');
			if(!empty($wdate))
			{
				$time = DB::table('cos_pcwork')->where('cust_code',Auth::user()->current_cust_code_logon)->where('work_date',date('Y-m-d'))->where('emp_code',$emp_code)->pluck('time_start');

				if(empty($time))
				{
					$pc 	=CosPcwork::where('cust_code',Auth::user()->current_cust_code_logon)->where('work_date',date('Y-m-d'))->where('emp_code',$emp_code);
					$pc->update(array('time_start' => $time_start , 'updated_by' => $updated_by));

					if($pc)
					{
						return "Insert_Success";
					}
				}
				else
				{
					return "Insert_Fail";
				}
			}
			else
			{
				return "No_WorkDate";
			}
		}
		else
		{
			return "No_Data";
		}

	}


	public function workOut()
	{

		
		$emp_code = Request::input('emp_code');
		$time_end = date('H:i:s');
		$updated_by = Auth::user()->current_cust_code_logon;
		
		$code = DB::table('cos_pcmast')->where('cust_code',Auth::user()->current_cust_code_logon)->where('emp_code',$emp_code)->pluck('emp_code');
		if(!empty($code))
		{	
			$wdate = DB::table('cos_pcwork')->where('cust_code',Auth::user()->current_cust_code_logon)->where('work_date',date('Y-m-d'))->where('emp_code',$emp_code)->pluck('work_date');
			if(!empty($wdate))
			{
				$time = DB::table('cos_pcwork')->where('cust_code',Auth::user()->current_cust_code_logon)->where('work_date',date('Y-m-d'))->where('emp_code',$emp_code)->pluck('time_end');

				if(empty($time))
				{
					$pc 	=CosPcwork::where('cust_code',Auth::user()->current_cust_code_logon)->where('work_date',date('Y-m-d'))->where('emp_code',$emp_code);
					$pc->update(array('time_end' => $time_end , 'updated_by' => $updated_by));

					if($pc)
					{
						return "Insert_Success";
					}
				}
				else
				{
					return "Insert_Fail";
				}
			}
			else
			{
				return "No_WorkDate";
			}
		}
		else
		{
			return "No_Data";
		}
	}




}
