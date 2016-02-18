<?php namespace App\Http\Controllers\promotion;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//use Illuminate\Http\Request;
use DB;
use Request;
use Validator;

// Model
use App\Http\Model\PmtTransMastModel;
use App\Http\Model\PmtGroupMastModel;

class PmtTrnsMastController extends Controller {


	public function pmttrnsmast()
	{
		$data_obj = PmtTransMastModel::orderBy('transaction_code','pmt_group_code','asc')->paginate(100);
		return view('promotion.pmttrnsmast')->with('pmttrnsmast_obj',$data_obj);
	}

	public function addpmttrnsmastform()
	{
		return  view('promotion.pmttrnsmastform_add');
	}


	public function popup_mstgrp_modal_form()
	{
		$data_obj = PmtGroupMastModel::orderBy('pmt_group_code','asc')->get();
		return  view('promotion.popup_mstgrp_modal')->with('pmtgrpmast_obj',$data_obj);
	}


    public function search()
    {

        $query = urldecode( Request::input('search'));

        if ($query) {
            $dictionaries = PmtTransMastModel::where('transaction_code', 'LIKE', "%$query%")
                ->orWhere('pmt_group_code', 'LIKE', "%$query%")
                ->orWhere('trnsaction_name', 'LIKE', "%$query%")
                ->paginate(10);
        } else {
            $dictionaries = PmtTransMastModel::orderBy('transaction_code', 'desc')->paginate(10);
        }

        return view('promotion.pmttrnsmast')->with('pmttrnsmast_obj',$dictionaries);
    }


    public function editpmttrnsmastform($pmt_transaction_id)
	{

        $data_obj = DB::table('pmt_transaction_mast')
            ->join('pmt_group_mast', 'pmt_transaction_mast.pmt_group_code', '=', 'pmt_group_mast.pmt_group_code')
            ->select('pmt_transaction_mast.*', 'pmt_group_mast.pmt_group_name')
            ->where('pmt_transaction_mast.transaction_id', '=', $pmt_transaction_id)
            ->get();

		return view('promotion.pmttrnsmastform_edit')->with('result_data_obj',$data_obj);
	}


	public function pmttrnsmast_del()
	{

		$id = Request::input('deleteID');
		$result = PmtTransMastModel::where('transaction_ID','=',$id);
		$result->delete();

		if($result){
			return redirect('pmttrnsmast');
		}
	}


	public function submiteditpmttrnsmastform()
	{


		$transaction_id  =  Request::input('txtedittransactionid'); 

		$data_edit = array(		
				'trnsaction_name' => Trim(Request::get('txt_trnsaction_name')),
				'pmt_group_code' =>Trim(Request::get('txt_pmt_group_code')), 
				'rec_status' => trim(Request::get('txtRecStatus')),	
		  		'updated_by' => 'admin',
	  			'updated_at' => date('Y-m-d H:i:s')		
			);

		$PmtGroupMastModel 	=PmtTransMastModel::find($transaction_id);
		$PmtGroupMastModel->update($data_edit);
		//flash()->success('Success', 'แก้ไขข้อมูลเรียบร้อยแล้ว.');
		return redirect('pmttrnsmast');


	}
    public function submitaddpmttrnsmastform()
	{


		if(!empty(Request::input('txttransactioncodeKey')))
		{
			$data_head = array(
				'transaction_code'			=> Request::input('txttransactioncodeKey'),
				'pmt_group_code'			=> Request::input('txtpmtgroupcodekey'),
				'trnsaction_name'			=> Request::input('txttrnsactionnamekey'),
				'rec_status'		=> Request::input('RecStatusKey'),
				'created_by'		=> 'admin',
				'created_at'		=> date('Y-m-d H:i:s')
				);
	
			$data_id = DB::table('pmt_transaction_mast')->insertGetId($data_head);

			if($data_id){
				return "Insert_Success";
			}
		}
	}


}
