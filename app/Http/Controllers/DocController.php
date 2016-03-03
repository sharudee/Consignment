<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//use Illuminate\Http\Request;

use Request;
use Validator;
use Auth;
//use Input;

// Model
use App\Http\Model\Docmast;

class DocController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data_doc = Docmast::orderBy('doc_code','asc')->get();

		
		return view('masterdata.docmast')->with('docmast',$data_doc);

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('masterdata.docmast_create');
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
			'doc_code'	     	=> 'required|unique:doc_mast|Max:4',
			'doc_desc'		=> 'required|Max:40',
			'doc_ctrl'		=> 'required|Max:4',
			'ictran_code'		=> 'required|Max:4',
			'post_type'		=> 'required|Max:4'
			
		);

		$validator = Validator::make(Request::all(), $rules,$message);

		if ($validator->passes())
		{
			
			/* กรณี Save ทุก Field จาก Form 
 			$store	= new Entity;
			
			$store->fill(Request::all());
			$store->save();
			*/

			/* **********  Save Data ************ */	

			
			//$modified = date('Y-m-d H:i:s')

			$data_doc = array(
				'doc_code' => Request::get('doc_code'),			
				'doc_desc' => Request::get('doc_desc'),
				'doc_ctrl' => Request::get('doc_ctrl'),
				'ictran_code' => Request::get('ictran_code'),
				'post_type' => Request::get('post_type'),
				'created_by' => Auth::user()->username,
				'updated_by' => Auth::user()->username
			);

			
		
			//Insert data to model Entity
			$add_data = Docmast::create($data_doc);

			//dd($data_entity);
			

			/* **********  Save Data ************ */	


			// Reload Table Data
			$data_doc = array(
				'docmast' 		=> Docmast::orderBy('doc_code', 'asc')->get(),
				'refresh'	=> true
			);
	
			return view('masterdata.docmast_table')->with($data_doc);
			
		}else{
			if( Request::ajax() ) 
			{
				
				return view('masterdata.docmast_create')->withErrors($validator)->withInput(Request::all());				
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
		$edit_data = Docmast::find($id);

		return view('masterdata.docmast_edit')->with('docmast',$edit_data);
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
			'doc_code'	     	=> 'required|Max:4',
			'doc_desc'		=> 'required|Max:40',
			'doc_ctrl'		=> 'required|Max:4',
			'ictran_code'		=> 'required|Max:4',
			'post_type'		=> 'required|Max:4'
			
		);

		$validator = Validator::make(Request::all(), $rules,$message);

		//dd(Request::all());
		if ($validator->passes())
		{
			
			$data_doc = array(
				'doc_code' => Request::get('doc_code'),			
				'doc_desc' => Request::get('doc_desc'),
				'doc_ctrl' => Request::get('doc_ctrl'),
				'ictran_code' => Request::get('ictran_code'),
				'post_type' => Request::get('post_type'),
				'created_by' => Auth::user()->username,
				'updated_by' => Auth::user()->username
			);


			$docmast 	=Docmast::find($id);
			$docmast->update($data_doc);

			//dd($data_entity);
			

			/* **********  Save Data ************ */	


			// Reload Table Data
			$docmast = array(
				'docmast' 		=> Docmast::orderBy('doc_code', 'asc')->get(),
				'refresh'	=> true
			);
	
			return view('masterdata.docmast_table')->with($docmast);

		}
		else{
			

			$edit_data = array(
				'doc_code' => Request::get('doc_code'),			
				'doc_desc' => Request::get('doc_desc'),
				'doc_ctrl' => Request::get('doc_ctrl'),
				'ictran_code' => Request::get('ictran_code'),
				'post_type' => Request::get('post_type'),
			);

			//dd($edit_data);

			if( Request::ajax() ) 
			{

				return view('masterdata.docmast_edit')->withErrors($validator)->with('docmast' ,$edit_data);
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
		$delete=Docmast::where('id',$id)->delete();

		$data_doc = array(
				'docmast' 		=> Docmast::orderBy('doc_code', 'asc')->get(),
				'refresh'	=> true
			);
	
		return view('masterdata.docmast_table')->with($data_doc);
	}

}
