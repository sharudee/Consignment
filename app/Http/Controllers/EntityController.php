<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//use Illuminate\Http\Request;

use Request;
use Validator;
use Input;
use Auth;
use MPDF;
use DB;

// Model
use App\Http\Model\Entity;
use App\Http\Model\Custgrp;


class EntityController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		$data_entity = Entity::orderBy('entity_code','asc')->get();

		
		return view('masterdata.entity')->with('entity',$data_entity);
							
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$data_grp = Custgrp::orderBy('custgrp_code','asc')->get();

		return view('masterdata.entity_create')->with('custgrp',$data_grp);
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
			'entity_code'     	=> 'required|unique:entity|Max:8',
			'entity_tname'		=> 'required|Max:50',
			'entity_ename'		=> 'Max:50',
			'ent_ctrl'		=> 'Max:8',
			'cos_no'		=> 'required|Max:3',
			'tax_rate'		=> 'required|Numeric',
			'cust_grp'		=> 'required|Max:4',
			'dsgrp_type'		=> 'required',
			'sale_type'		=> 'required|Max:8',
			'ret_type'		=> 'required|Max:8'
			
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

			$data_entity = array(
				'entity_code' => Request::get('entity_code'),			
				'entity_tname' => Request::get('entity_tname'),
				'entity_ename' => Request::get('entity_ename'),
				'cust_grp' => Request::get('cust_grp'),
				'tax_rate' => Request::get('tax_rate'),
				'ent_ctrl' => Request::get('ent_ctrl'),
				'cos_no' => Request::get('cos_no'),
				'dsgrp_type' => Request::get('dsgrp_type'),
				'sale_type' => Request::get('sale_type'),
				'ret_type' => Request::get('ret_type'),
				'created_by' => Auth::user()->username,
				'updated_by' => Auth::user()->username
			);

			
		
			//Insert data to model Entity
			$add_data = Entity::create($data_entity);

			//dd($data_entity);
			

			/* **********  Save Data ************ */	


			// Reload Table Data
			$data_entity = array(
				'entity' 		=> Entity::orderBy('entity_code', 'asc')->get(),
				'refresh'	=> true
			);
	
			return view('masterdata.entity_table')->with($data_entity);
			
		}else{
			if( Request::ajax() ) 
			{
				$data_grp = Custgrp::orderBy('custgrp_code','asc')->get();
				return view('masterdata.entity_create')->withErrors($validator)->withInput(Request::all())->with('custgrp',$data_grp);			
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
		$entity = Entity::find($id);

		return view('masterdata.entity_show')->with('entity',$entity); 
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$edit_data = Entity::find($id);

		$data_grp = Custgrp::orderBy('custgrp_code','asc')->get();

		return view('masterdata.entity_edit')->with([
							'custgrp' 	=> $data_grp ,
							'entity' 		=> $edit_data
							]);
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
			'entity_code'     	=> 'required|Max:8',
			'entity_tname'		=> 'required|Max:50',
			'entity_ename'		=> 'Max:50',
			'ent_ctrl'		=> 'Max:8',
			'cos_no'		=> 'required|Max:3',
			'tax_rate'		=> 'required|Numeric',
			'cust_grp'		=> 'required|Max:4',
			'dsgrp_type'		=> 'required',
			'sale_type'		=> 'required|Max:8',
			'ret_type'		=> 'required|Max:8'
			
		);

		//dd($rules);

		$validator = Validator::make(Request::all(), $rules,$message);

		//dd(Request::all());
		if ($validator->passes())
		{
			
			/* กรณี Save ทุก Field จาก Form 
 			$store	= new Entity;
			
			$store->fill(Request::all());
			$store->save();
			*/

			/* **********  Save Data ************ */	

			
			//$modified = date('Y-m-d H:i:s')

			$data_entity = array(
				'entity_code' => Request::get('entity_code'),			
				'entity_tname' => Request::get('entity_tname'),
				'entity_ename' => Request::get('entity_ename'),
				'cust_grp' => Request::get('cust_grp'),
				'tax_rate' => Request::get('tax_rate'),
				'ent_ctrl' => Request::get('ent_ctrl'),
				'cos_no' => Request::get('cos_no'),
				'dsgrp_type' => Request::get('dsgrp_type'),
				'sale_type' => Request::get('sale_type'),
				'ret_type' => Request::get('ret_type'),
				'created_by' => Auth::user()->username,
				'updated_by' => Auth::user()->username
			);

			
		
			//Edit data to model Entity
			/*$update = Entity::find($id);
			$update->fill(Input::all());
			$update->save();
			*/
			//$update=Request::all();
			$entity 	=Entity::find($id);
			$entity->update($data_entity);

			//dd($data_entity);
			

			/* **********  Save Data ************ */	


			// Reload Table Data
			$entity = array(
				'entity' 		=> Entity::orderBy('entity_code', 'asc')->get(),
				'refresh'	=> true
			);
	
			return view('masterdata.entity_table')->with($entity);
			/*return view('sales.entity_edit')->with([
							'custgrp' 	=> $data_grp ,
							'entity' 		=> $entity
							]);
			*/
		}
		else{
			//$edit_data = Entity::find($id);
			//$edit_data=Request::all();
			//dd($edit_data);
			
			//dd($data_entity);

			$edit_data = array(
				'entity_code' => Request::input('entity_code'),			
				'entity_tname' => Request::get('entity_tname'),
				'entity_ename' => Request::get('entity_ename'),
				'cust_grp' => Request::get('cust_grp'),
				'tax_rate' => Request::get('tax_rate'),
				'ent_ctrl' => Request::get('ent_ctrl'),
				'cos_no' => Request::get('cos_no'),
				'dsgrp_type' => Request::get('dsgrp_type'),
				'sale_type' => Request::get('sale_type'),
				'ret_type' => Request::get('ret_type'),
				//'created_by' => 'admin',
				//'updated_by' => 'admin'
			);

			//dd($edit_data);

			$data_grp = Custgrp::orderBy('custgrp_code','asc')->get();
			if( Request::ajax() ) 
			{
				
				/*return view('sales.entity_edit')->with([
							'custgrp' 	=> $data_grp, 
							'entity' 		=> $edit_data
							]) ->withErrors($validator)->withInput(Request::all());				
				*/
				//return view('sales.entity_edit')->withErrors($validator)->withInput(Request::all());
				return view('masterdata.entity_edit')->withErrors($validator)->with([
							'custgrp' 	=> $data_grp, 
							'entity' 		=> $edit_data
							]);
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
		/*$delete = Entity::find($id);
		$delete->delete();
		*/
		$delete=Entity::where('id',$id)->delete();

		$data_entity = array(
				'entity' 		=> Entity::orderBy('entity_code', 'asc')->get(),
				'refresh'	=> true
			);
	
			return view('masterdata.entity_table')->with($data_entity);
	}


	public function entityprint()
	{

		$data_grp = Custgrp::orderBy('custgrp_code','asc')->get();
		return view('masterdata.entity_print')->with('custgrp',$data_grp);
	}

	public function entityreport()
	{
		
		if (Request::Input('entity_code1') == "")
		{
			$entity1 = "A";
		}
		else
		{
			$entity1 = Request::Input('entity_code1');
		}

		if (Request::Input('entity_code2') == "")
		{
			$entity2 = "Z";
		}
		else
		{
			$entity2 = Request::Input('entity_code2');
		}

		$sql = "select entity_code , entity_tname , entity_ename , cos_no , cust_grp , tax_rate , ent_ctrl , dsgrp_type , sale_type from entity where entity_code between '" . $entity1  . "' and '" .  $entity2  . "'  and cust_grp between '" .  Request::Input('cust_grp1') . "' and '" . Request::Input('cust_grp2') . "' order by entity_code";
		$data = DB::select($sql);

		$content ='<p><h2>Entity</h2></p>
		<table border="1" bordercolor="#424242" cellpadding="0" cellspacing="0">
			<tr>
			<td align="center" bgcolor="#D5D5D5" height="25">Entity Code</td>	
			<td align="center" bgcolor="#D5D5D5">Entity Name (Thai)</td>
			<td align="center" bgcolor="#D5D5D5">Entity Name (English)</td>	
			<td align="center" bgcolor="#D5D5D5">COS No.</td>	
			<td align="center" bgcolor="#D5D5D5">Cust Group</td>	
			<td align="center" bgcolor="#D5D5D5">Tax Rate</td>	
			<td align="center" bgcolor="#D5D5D5">Sale Type</td>
			</tr align="center" bgcolor="#D5D5D5">';

			 foreach ($data as  $dbarr) { 
				
			
			$content = $content . '<tr>
			<td width="50" align="left" height="25"><font size="3">' . $dbarr->entity_code . '</td>	
			<td width="200"><font size="3">' . $dbarr->entity_tname . '</td>
			<td width="200"><font size="3">' . $dbarr->entity_ename . '</td>	
			<td width="70" align="center" ><font size="3">' . $dbarr->cos_no . '</td>	
			<td width="80" align="center"><font size="3">' . $dbarr->cust_grp . '</td>	
			<td width="80" align="right"><font size="3">' . $dbarr->tax_rate . '</td>	
			<td width="80"><font size="3">' . $dbarr->sale_type . '</td>
			</tr>';
			} 
		
		$content = $content . '</table><br>';


		$mpdf = new mPDF('th', 'A4', '0', 'Tahoma'); 
		$mpdf->WriteHTML($content);
		$mpdf->Output();

	}

}
