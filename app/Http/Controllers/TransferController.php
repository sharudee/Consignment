<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//use Illuminate\Http\Request;

use Auth;
use Request;
use DB;
use App\Http\Model\CosInvmast;
use App\Http\Model\CosInvmast_ho;
use App\Http\Model\CosInvdet;
use App\Http\Model\CosInvdet_ho;
use App\Http\Model\CosInvdetproduct;
use App\Http\Model\CosInvdetproduct_ho;
use App\Http\Model\Custmast;
use App\Http\Model\Custmast_ho;


class TransferController extends Controller {

	public function cos2ho()
	{
		$sql = "select * from cos_invmast where cust_code='" . Auth::user()->current_cust_code_logon . "' and doc_status='PAL' and ifnull(tf_st,'N')='N' and doc_code in (select doc_code from doc_mast where post_type='COS')";
		$data = DB::select($sql); 
		return view('transferdata.data_cos2ho')->with('sales',$data);
	}

	public function cos2ho_process()
	{
		$sql = "select * from cos_invmast where cust_code='" . Auth::user()->current_cust_code_logon . "' and doc_status='PAL' and ifnull(tf_st,'N')='N' and doc_code in (select doc_code from doc_mast where post_type='COS')";
		$data = DB::select($sql); 

		foreach ($data as $data_mast) 
		{
			$id = $data_mast->id;
			$data_cos_mast = array(
				'cos_entity'	=> $data_mast->cos_entity,
				'cos_no'	=> $data_mast->cos_no,
				'doc_code'	=> $data_mast->doc_code,
				'doc_no' 	=> $data_mast->doc_no,
				'doc_date' 	=> $data_mast->doc_date,  
				'req_date' 	=> $data_mast->req_date,   
				'pmt_no' 	=> $data_mast->pmt_no, 
				'cust_code'	=> $data_mast->cust_code,
				'cust_name'	=> $data_mast->cust_name,
				'ship_titlename'	=> $data_mast->ship_titlename,
				'ship_custname'	=> $data_mast->ship_custname,
				'ship_custsurname'	=> $data_mast->ship_custsurname, 
				'ship_address1'	=> $data_mast->ship_address1,
				'ship_address2'	=> $data_mast->ship_address2,
				'prov_code'	=> $data_mast->prov_code,
				'prov_name'	=> $data_mast->prov_name,
				'post_code'	=> $data_mast->post_code,
				'ship_tel'		=> $data_mast->ship_tel,
				'email_address'	=> $data_mast->email_address,
				'po_file'	=> $data_mast->po_file,
				'gp1'		=> $data_mast->gp1,
				'gp2'		=> $data_mast->gp2,
				'gp3'		=> $data_mast->gp3,
				'pay_code'	=> $data_mast->pay_code,
				'pay_name'	=> $data_mast->pay_name,
				'pm_total_price'	=> $data_mast->pm_total_price,
				'pm_price'	=> $data_mast->pm_price,
				'remark1'	=> $data_mast->remark1,
				'vat_rate'	=> $data_mast->$vat_rate,
				'doc_status'	=> $data_mast->$doc_status,
				'tot_qty'	=> $data_mast->$tot_qty,
				'tot_amt'	=> $data_mast->$tot_amt,
				'tot_netamt'	=> $data_mast->$tot_netamt,
				'tot_discamt'	=> $data_mast->tot_discamt,
				'created_by'	=> $data_mast->created_by,
				'created_at'	=> $data_mast->created_at			
			);


			$cos_invmast_insert = CosInvmast_ho::create('data_cos_mast');
			$insertedId = $cos_invmast_insert->id;

			if($cos_invmast_insert)
			{
				
				$det = Cosinvdet::where('id',$id)->get();

				foreach ($det as $data_det) 
				{
					$data_cos_det = array(

								'cos_invmast_id'	=> $insertedId,
								'cos_entity'		=> $data_det->cos_entity,
								'cos_no'		=> $data_det->cos_no,
								'doc_code'		=> $data_det->doc_code,
								'doc_no'		=> $data_det->doc_no,
								'item'			=> $data_det->item
								'prod_code'		=> $data_det->prod_code,
								'prod_name' 		=> $data_det->prod_name,
								'qty'			=> $data_det->qty,
								'sale_price'		=> $data_det->sale_price,
								'amt'			=> $data_det->amt,
								'vat_rate'		=> $data_det->vat_rate,
								'sp_size'		=> $data_det->sp_size,
								'sp_size_desc'		=> $data_det->sp_size_desc,
								'pmt_product_set_id' 	=> $data_det->pmt_product_set_id,
								'created_by'		=> $data_det->crested_by,
								'created_at'		=> $data_det->created_at

							);
					$cos_invmast_det = CosInvdet_ho::create('data_cos_det');


				}

				$prod = Cosinvdetproduct::where('id',$id)->get();

				foreach ($prod as $data_prod) 
				{
					$data_cos_product = array(
								'cos_invmast_id'	=> $insertedId,
								'item'			=> $data_prod->item,
								'prod_code'		=> $data_prod->prod_code,
								'prod_name'		=> $data_prod->prod_name,
								'barcode'		=> $data_prod->barcode,
								'uom_code'		=> $data_prod->uom_code,
								'sale_price'		=> $data_prod->sale_price,
								'qty'			=> $data_prod->qty,	
								'amt'			=> $data_prod->amt,
								'sp_size_desc'		=> $data_prod->sp_size_desc,
								'created_by'		=> $data_prod->created_by,
								'created_at'		=> $data_prod->creaed_at

							);
					$cos_invmast_prod = CosInvdetproduct_ho::create('data_cos_product');
				}


				$data_upd = array(
						'tf_st' => 'Y',			
						'tf_by' => Auth::user()->username,
						'tf_date' => date('Y-m-d'),
				);


				$data_update =CosInvmast::find($id);
				$data_update->update($data_upd);	

			}

		}


		// Customer Data
		$cust = custmast::where('tf_st','N')->get();

	
		foreach ($cust as $data_cust) 
		{
			$cust_id = $data_cust->id;
			$data_customer = array(
				'cust_code'		=> $data_cust->cust_code,
				'name_title'		=> $data_cust->name_title,
				'cust_name'		=> $data_cust->cust_name,
				'cust_surname'	=> $data_cust->cust_surname,
				'sex'			=> $data_cust->sex,
				'address1'		=> $data_cust->address1,
				'address2'		=> $data_cust->address2,
				'prov_code'		=> $data_cust->prov_code,	
				'prov_name'		=> $data_cust->prov_name,
				'post_code'		=> $data_cust->post_code,
				'tel'			=> $data_cust->tel,
				'email_address'	=> $data_cust->email_address
				'mobile_no'		=> $data_cust->mobie_no,
				'line_id'			=> $data_cust->line_id,
				'map'			=> $data_cust->map,
				'id_card'		=> $data_cust->id_card,
				'created_by'		=> $data_cust->created_by,
				'creaed_at'		=> $data_cust->created_at,
				'updated_by'		=> $data_cust->updated_by,
				'updated_at'		=> $data_cust->updated_at,
			);

			$cust_data = Custmast_ho::create('data_customer');

			
			$data_cust_upd = array(
						'tf_st' => 'Y',			
						'tf_by' => Auth::user()->username,
						'tf_date' => date('Y-m-d'),
			);


			$data_update =Custmast::find($cust_id);
			$data_update->update($data_cust_upd);	
		}
	}

}
