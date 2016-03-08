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
use App\Http\Model\PmtConsigneeModel;
use App\Http\Model\PmtConsigneeModel_ho;
use App\Http\Model\PmtDiscPayModel;
use App\Http\Model\PmtDiscPayModel_ho;
use App\Http\Model\PmtDiscPmDenyModel;
use App\Http\Model\PmtDiscPmDenyModel_ho;
use App\Http\Model\PmtDiscShopModel;
use App\Http\Model\PmtDiscShopModel_ho;
use App\Http\Model\PmtGroupMastModel;
use App\Http\Model\PmtGroupMastModel_ho;
use App\Http\Model\PmtPackageDetModel;
use App\Http\Model\PmtPackageDetModel_ho;
use App\Http\Model\PmtPackageMastModel;
use App\Http\Model\PmtPackageMastModel_ho;
use App\Http\Model\PmtProductModel;
use App\Http\Model\PmtProductModel_ho;
use App\Http\Model\PmtProductSetModel;
use App\Http\Model\PmtProductSetModel_ho;
use App\Http\Model\PmtTransMastModel;
use App\Http\Model\PmtTransMastModel_ho;



class TransferController extends Controller {

	public function cos2ho()
	{
		$sql = "select * from cos_invmast where cust_code='" . Auth::user()->current_cust_code_logon . "' and doc_status='PAL' and ifnull(tf_st,'N')='N' and doc_code in (select doc_code from doc_mast where post_type='COS')";
		$data = DB::select($sql); 
		return view('transferdata.data_cos2ho')->with('sales',$data);
	}

	public function cos2ho_process()
	{
		

		// Customer Data

		$sqlcust = "select * from cust_mast where tf_st='N'";
		$cust = DB::select($sqlcust); 


		//dd($cust);
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
				'email_address'	=> $data_cust->email_address,
				'mobile_no'		=> $data_cust->mobile_no,
				'line_id'			=> $data_cust->line_id,
				'map'			=> $data_cust->map,
				'id_card'		=> $data_cust->id_card,
				'created_by'		=> $data_cust->created_by,
				'creaed_at'		=> $data_cust->created_at,
				'updated_by'		=> $data_cust->updated_by,
				'updated_at'		=> $data_cust->updated_at,
			);

			//dd($data_customer);

			$cust_data = Custmast_ho::create($data_customer);

			
			$data_cust_upd = array(
						'tf_st' => 'Y',			
						'tf_by' => Auth::user()->username,
						'tf_date' => date('Y-m-d'),
						'updated_by' => Auth::user()->username,
			);


			$data_update =Custmast::find($cust_id);
			$data_update->update($data_cust_upd);	
		}

		//************************************************************************************/		


		// Promotion Data

		// Table PmtConsignee
		$cos = PmtConsigneeModel::where('tf_st','N')->get();
		foreach ($cos as $data_cos) 
		{
			$consignee_id = $data_cos->consignee_id,
			$data_consignee = array(
				 'pmt_mast_id'	 	=> $data_cos->pmt_mast_id,
				  'entity_id' 		=> $data_cos->entity_id,
				  'discount_amt' 	=> $data_cos->discount_amt,
				  'rec_status' 		=> $data_cos->rec_status,
				  'tf_st'			=> 'Y',	
				  'tf_by'			=> Auth::user()->username,
				  'tf_date'		=> date('Y-m-d'),
				  'updated_by'		=> $data_cos->updated_by,
				  'updated_at' 		=> $data_cos->updated_at,
				  'created_by' 		=> $data_cos->created_by,
				  'created_at'		=> $data_cos->created_at 
			)


			$insert_data = PmtConsigneeModel_ho::create($data_consignee);

			
			$data_cos_upd = array(
						'tf_st' => 'Y',			
						'tf_by' => Auth::user()->username,
						'tf_date' => date('Y-m-d'),
						'updated_by' => Auth::user()->username,
			);


			$update_data =PmtConsigneeModel::find($consignee_id);
			$update_data->update($data_cos_upd);
		}
		

		// Table Pmt_Disc_Payment_Rate
		$discpay = PmtDiscPayModel::where('tf_st','N')->get();
		foreach ($discpay as $data_discpay) 
		{
			$disc_pay_rate_id = $data_discpay->disc_pay_rate_id,
			$data_discpayment = array(
				 'pmt_mast_id'	 	=> $data_discpay->pmt_mast_id,
				  'transaction_code' 	=> $data_discpay->transaction_code,
				  'purchase_rate_amt' => $data_discpay->purchase_rate_amt,
				  'discount_type' 	=> $data_discpay->discount_type,
				  'discount_amt'	=> $data_discpay->discount_amt, 
				  'rec_status' 		=> $data_discpay->rec_status,
				  'tf_st'			=> 'Y',	
				  'tf_by'			=> Auth::user()->username,
				  'tf_date'		=> date('Y-m-d'),
				  'updated_by'		=> $data_discpay->updated_by,
				  'updated_at' 		=> $data_discpay->updated_at,
				  'created_by' 		=> $data_discpay->created_by,
				  'created_at'		=> $data_discpay->created_at 
			)


			$insert_data = PmtDiscPayModel_ho::create($data_discpayment);

			
			$data_discpay_upd = array(
						'tf_st' => 'Y',			
						'tf_by' => Auth::user()->username,
						'tf_date' => date('Y-m-d'),
						'updated_by' => Auth::user()->username,
			);


			$update_data =PmtDiscPayModel::find($disc_pay_rate_id);
			$update_data->update($data_discpay_upd);
		}


		// Table Pmt_Disc_Premium_Deny
		$discpm = PmtDiscPMDenyModel::where('tf_st','N')->get();
		foreach ($discpm as $data_discpm) 
		{
			$disc_premium_deny_id = $data_discpm->disc_premium_deny_id,
			$data_discpremium = array(
				'pmt_mast_id' 		=> $data_discpm->pmt_mast_id,
				'pdsize_code' 		=> $data_discpm->pdsize_code,
				'discount_type' 	=> $data_discpm->discount_type,
				'discount_amt' 	=> $data_discpm->discount_amt,
				'discount_percen'	=> $data_discpm->discount_percen,
				'rec_status' 		=> $data_discpay->rec_status,
				'tf_st'			=> 'Y',	
				'tf_by'			=> Auth::user()->username,
				'tf_date'		=> date('Y-m-d'),
				'updated_by'		=> $data_discpm->updated_by,
				'updated_at' 		=> $data_discpm->updated_at,
				'created_by' 		=> $data_discpm->created_by,
				'created_at'		=> $data_discpm->created_at 
			)


			$insert_data = PmtDiscPayModel_ho::create($data_discpremium);

			
			$data_discpm_upd = array(
						'tf_st' => 'Y',			
						'tf_by' => Auth::user()->username,
						'tf_date' => date('Y-m-d'),
						'updated_by' => Auth::user()->username,
			);


			$update_data =PmtDiscPayModel::find($disc_premium_deny_id);
			$update_data->update($data_discpm_upd);
		}


		// Table Pmt_Disc_Shop_Rate
		$discsh = PmtDiscShopModel::where('tf_st','N')->get();
		foreach ($discsh as $data_discsh) 
		{
			$disc_shop_rate_id = $data_discsh->disc_shop_rate_id,
			$data_discshop = array(
				'pmt_mast_id' 		=> $data_discsh->pmt_mast_id,
				'transaction_code' 	=> $data_discsh->transaction_code,
				'purchase_rate_amt' 	=> $data_discsh->purchase_rate_amt,
				'discount_type' 	=> $data_discsh->discount_type,
				'discount_amt'		=> $data_discsh->discount_amt ,
				'premium_qty' 		=> $data_discsh->premium_qty,
				'premium_amt' 	=> $data_discsh->premium_amt,
				'rec_status' 		=> $data_discpay->rec_status,
				'tf_st'			=> 'Y',	
				'tf_by'			=> Auth::user()->username,
				'tf_date'		=> date('Y-m-d'),
				'updated_by'		=> $data_discsh->updated_by,
				'updated_at' 		=> $data_discsh->updated_at,
				'created_by' 		=> $data_discsh->created_by,
				'created_at'		=> $data_discsh->created_at 
			)


			$insert_data = PmtDiscShopModel_ho::create($data_discshop);

			
			$data_discsp_upd = array(
						'tf_st' => 'Y',			
						'tf_by' => Auth::user()->username,
						'tf_date' => date('Y-m-d'),
						'updated_by' => Auth::user()->username,
			);


			$update_data =PmtDiscShopModel::find($disc_shop_rate_id);
			$update_data->update($data_discsp_upd);
		}		


		// Table Pmt_Group
		$grp = PmtGroupModel::where('tf_st','N')->get();
		foreach ($grp as $data_grp) 
		{
			$pmt_group_id = $data_grp->pmt_group_id,
			$data_group = array(
				'pmt_group_code' 	=> $data_grp->pmt_group_code ,
				'pmt_group_name'	=> $data_grp->pmt_group_name  ,
				'rec_status' 		=> $data_discpay->rec_status,
				'tf_st'			=> 'Y',	
				'tf_by'			=> Auth::user()->username,
				'tf_date'		=> date('Y-m-d'),
				'updated_by'		=> $data_grp->updated_by,
				'updated_at' 		=> $data_grp->updated_at,
				'created_by' 		=> $data_grp->created_by,
				'created_at'		=> $data_grp->created_at 
			)


			$insert_data = PmtGroupModel_ho::create($data_group);

			
			$data_group_upd = array(
						'tf_st' => 'Y',			
						'tf_by' => Auth::user()->username,
						'tf_date' => date('Y-m-d'),
						'updated_by' => Auth::user()->username,
			);


			$update_data =PmtGroupModel::find($pmt_group_id);
			$update_data->update($data_group_upd);
		}	


		// Table Pmt_Mast
		$pm = PmtMastModel::where('tf_st','N')->get();
		foreach ($pm as $data_pm) 
		{
			$pmt_mast_id = $data_pm->pmt_mast_id,
			$data_pmmast = array(
				'pmt_no' 		=> $data_pm->pmt_no,
				'pmt_name' 		=> $data_pm->pmt_name,
				'start_date' 		=> $data_pm->start_date,
				'end_date' 		=> $data_pm->end_date,
				'ref_doc_no'		=> $data_pm->ref_doc_no ,
				'pmt_desc'		=> $data_pm->pmt_desc ,
				'pmt_type' 		=> $data_pm->pmt_type,
				'gp_amt'		=> $data_pm->gp_amt ,
				'rec_status' 		=> $data_pm->rec_status,
				'tf_st'			=> 'Y',	
				'tf_by'			=> Auth::user()->username,
				'tf_date'		=> date('Y-m-d'),
				'updated_by'		=> $data_pm->updated_by,
				'updated_at' 		=> $data_pm->updated_at,
				'created_by' 		=> $data_pm->created_by,
				'created_at'		=> $data_pm->created_at 
			)


			$insert_data = PmtMastModel_ho::create($data_pmmast);

			
			$data_pm_upd = array(
						'tf_st' => 'Y',			
						'tf_by' => Auth::user()->username,
						'tf_date' => date('Y-m-d'),
						'updated_by' => Auth::user()->username,
			);


			$update_data =PmtMastModel::find($pmt_mast_id);
			$update_data->update($data_pm_upd);
		}	


		// Table Pmt_Package_Mast
		$pkmast = PmtPackageMastModel::where('tf_st','N')->get();
		foreach ($pkmast as $data_pkmast) 
		{
			$package_mast_id = $data_pkmast->package_mast_id,
			$data_pmpkmast = array(
				'pmt_mast_id' 		=> $data_pkmast->pmt_mast_id,
				'pmt_product_set_id' 	=> $data_pkmast->pmt_product_set_id,
				'pdmodel_code'	=> $data_pkmast->pdmodel_code ,
				'pdsize_code'		=> $data_pkmast->pdsize_code ,
				'pdmodel_desc' 	=> $data_pkmast->pdmodel_desc,
				'pdsize_desc' 		=> $data_pkmast->pdsize_desc,
				'package_unit_price'	=> $data_pkmast->package_unit_price,
				'total_price_amt' 	=> $data_pkmast->total_price_amt,
				'special1_price_type'	=> $data_pkmast->special1_price_type ,
				'special1_disc_amt' 	=> $data_pkmast->special1_disc_amt,
				'special1_price_amt' 	=> $data_pkmast->special1_price_amt,
				'special2_price_type' 	=> $data_pkmast->special2_price_type,
				'special2_disc_amt1' 	=> $data_pkmast->special2_disc_amt1,
				'special2_disc_amt2' 	=> $data_pkmast->special2_disc_amt2,
				'special2_price_amt' 	=> $data_pkmast->special2_price_amt,
				'pm_total_price'	=> $data_pkmast->pm_total_price,
				'rec_status' 		=> $data_pkmast->rec_status,
				'tf_st'			=> 'Y',	
				'tf_by'			=> Auth::user()->username,
				'tf_date'		=> date('Y-m-d'),
				'updated_by'		=> $data_pkmast->updated_by,
				'updated_at' 		=> $data_pkmast->updated_at,
				'created_by' 		=> $data_pkmast->created_by,
				'created_at'		=> $data_pkmast->created_at 
			)


			$insert_data = PmtPackageMastModel_ho::create($data_pmpkmast);

			
			$data_pmmast_upd = array(
						'tf_st' => 'Y',			
						'tf_by' => Auth::user()->username,
						'tf_date' => date('Y-m-d'),
						'updated_by' => Auth::user()->username,
			);


			$update_data =PmtPackageMastModel::find($package_mast_id);
			$update_data->update($data_pmmast_upd);
		}


		// Table Pmt_Package_Det
		$pkdet = PmtPackageDetModel::where('tf_st','N')->get();
		foreach ($pkdet as $data_pkdet) 
		{
			$package_det_id = $data_pkdet->package_det_id,
			$data_pmpkdet = array(
				'package_mast_id' 	=> $data_pkdet->package_mast_id,
				'pmt_product_set_id' 	=> $data_pkdet->pmt_product_set_id,
				'set_qty'		=> $data_pkdet->set_qty ,
				'unit_price_amt' 	=> $data_pkdet->unit_price_amt,
				'set_price_amt' 	=> $data_pkdet->set_price_amt,
				'uom' 			=> $data_pkdet->uom,
				'rec_status' 		=> $data_pkdet->rec_status,
				'tf_st'			=> 'Y',	
				'tf_by'			=> Auth::user()->username,
				'tf_date'		=> date('Y-m-d'),
				'updated_by'		=> $data_pkdet->updated_by,
				'updated_at' 		=> $data_pkdet->updated_at,
				'created_by' 		=> $data_pkdet->created_by,
				'created_at'		=> $data_pkdet->created_at 
			)


			$insert_data = PmtPackageDetModel_ho::create($data_pmpkdet);

			
			$data_pmdet_upd = array(
						'tf_st' => 'Y',			
						'tf_by' => Auth::user()->username,
						'tf_date' => date('Y-m-d'),
						'updated_by' => Auth::user()->username,
			);


			$update_data =PmtPackageDetModel::find($package_det_id);
			$update_data->update($data_pmdet_upd);
		}




		// Table Pmt_Product
		$prod = PmtProductModel::where('tf_st','N')->get();
		foreach ($prod as $data_prod) 
		{
			$pmt_product_id = $data_prod->pmt_product_id,
			$data_pmprod = array(
				'pmt_product_set_id' 	=> $data_prod->pmt_product_set_id,
				'prod_code' 		=> $data_prod->prod_code,
				'prod_tname'		=> $data_prod->prod_tname ,
				'bar_code' 		=> $data_prod->bar_code,
				'pdgrp_code' 		=> $data_prod->pdgrp_code,
				'pdbrnd_code' 	=> $data_prod->pdbrnd_code,
				'pddsgn_code'		=> $data_prod->pddsgn_code ,
				'pdsize_code'		=> $data_prod->pdsize_code ,
				'pdcolor_code' 	=> $data_prod->pdcolor_code,
				'pdmodel_code' 	=> $data_prod->pdmodel_code,
				'pdgrp_desc'		=> $data_prod->pdgrp_desc ,
				'pdbrnd_desc' 		=> $data_prod->pdbrnd_desc,
				'pddsgn_desc'		=> $data_prod->pddsgn_desc ,
				'pdsize_desc' 		=> $data_prod->pdsize_desc,
				'pdcolor_desc'		=> $data_prod->pdcolor_desc ,
				'pdmodel_desc' 	=> $data_prod->pdmodel_desc,
				'unit_price_amt'	=> $data_prod->unit_price_amt ,
				'sale_default' 		=> $data_prod->sale_default,
				'tf_st'			=> 'Y',	
				'tf_by'			=> Auth::user()->username,
				'tf_date'		=> date('Y-m-d'),
				'updated_by'		=> $data_prod->updated_by,
				'updated_at' 		=> $data_prod->updated_at,
				'created_by' 		=> $data_prod->created_by,
				'created_at'		=> $data_prod->created_at 
			)


			$insert_data = PmtProductModel_ho::create($data_pmprod);

			
			$data_prod_upd = array(
						'tf_st' => 'Y',			
						'tf_by' => Auth::user()->username,
						'tf_date' => date('Y-m-d'),
						'updated_by' => Auth::user()->username,
			);


			$update_data =PmtProdModel::find($pmt_product_id);
			$update_data->update($data_prod_upd);
		}



		// Table Pmt_Product_Set
		$prodset = PmtProductSetModel::where('tf_st','N')->get();
		foreach ($prodset as $data_prodset) 
		{
			$pmt_product_set_id = $data_prodset->pmt_product_set_id,
			$data_pmprodset = array(
				'product_set_code' 	=> $data_prodset->product_set_code,
				'pmt_group_code' 	=> $data_prodset->pmt_group_code,
				'product_set_desc' 	=> $data_prodset->product_set_desc,
				'set_qty' 		=> $data_prodset->set_qty,
				'unit_price_amt' 	=> $data_prodset->unit_price_amt,
				'set_price_amt' 	=> $data_prodset->set_price_amt,
				'uom' 			=> $data_prodset->uom,
				'discount_type'	=> $data_prodset->discount_type ,
				'discount_amt' 	=> $data_prodset->discount_amt,
				'rec_status' 		=> $data_prodset->rec_status,
				'tf_st'			=> 'Y',	
				'tf_by'			=> Auth::user()->username,
				'tf_date'		=> date('Y-m-d'),
				'updated_by'		=> $data_prodset->updated_by,
				'updated_at' 		=> $data_prodset->updated_at,
				'created_by' 		=> $data_prodset->created_by,
				'created_at'		=> $data_prodset->created_at 
			)


			$insert_data = PmtProductSetModel_ho::create($data_pmprodset);

			
			$data_prodset_upd = array(
						'tf_st' => 'Y',			
						'tf_by' => Auth::user()->username,
						'tf_date' => date('Y-m-d'),
						'updated_by' => Auth::user()->username,
			);


			$update_data =PmtProductSetModel::find($pmt_product_set_id);
			$update_data->update($data_prodset_upd);
		}




		// Table Pmt_Transaction_mast
		$trans = PmtTransMastModel::where('tf_st','N')->get();
		foreach ($trans as $data_trans) 
		{
			$transaction_id = $data_trans->transaction_id,
			$data_pmtrans = array(
				'transaction_code' 	=> $data_trans->transaction_code ,
				'pmt_group_code' 	=> $data_trans->pmt_group_code ,
				'transaction_name' 	=> $data_trans->transaction_name ,
				'rec_status' 		=> $data_pkdet->rec_status,
				'tf_st'			=> 'Y',	
				'tf_by'			=> Auth::user()->username,
				'tf_date'		=> date('Y-m-d'),
				'updated_by'		=> $data_trans->updated_by,
				'updated_at' 		=> $data_trans->updated_at,
				'created_by' 		=> $data_trans->created_by,
				'created_at'		=> $data_trans->created_at 
			)


			$insert_data = PmtTransMastModel_ho::create($data_pmtrans);

			
			$data_trans_upd = array(
						'tf_st' => 'Y',			
						'tf_by' => Auth::user()->username,
						'tf_date' => date('Y-m-d'),
						'updated_by' => Auth::user()->username,
			);


			$update_data =PmtTransMastModel::find($transaction_id);
			$update_data->update($data_trans_upd);
		}




		//************************************************************************************/

		//  PO Data 


		$sql = "select * from cos_invmast where cust_code='" . Auth::user()->current_cust_code_logon . "' and doc_status='PAL' and ifnull(tf_st,'N')='N' and doc_code in (select doc_code from doc_mast where post_type='COS')";
		$data = DB::select($sql); 

		//dd($data);
		foreach ($data as $data_mast) 
		{
			$id = $data_mast->id;

			//dd($id);
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
				'vat_rate'	=> $data_mast->vat_rate,
				'doc_status'	=> $data_mast->doc_status,
				'tot_qty'	=> $data_mast->tot_qty,
				'tot_amt'	=> $data_mast->tot_amt,
				'tot_netamt'	=> $data_mast->tot_netamt,
				'tot_discamt'	=> $data_mast->tot_discamt,
				'created_by'	=> $data_mast->created_by,
				'created_at'	=> $data_mast->created_at			
			);
			
			//dd($data_cos_mast);


			$cos_invmast_insert = CosInvmast_ho::create($data_cos_mast);
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
								'item'			=> $data_det->item,
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
					$cos_invmast_det = CosInvdet_ho::create($data_cos_det);


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
					$cos_invmast_prod = CosInvdetproduct_ho::create($data_cos_product);
				}


				$data_upd = array(
						'tf_st' => 'Y',			
						'tf_by' => Auth::user()->username,
						'tf_date' => date('Y-m-d'),
						'doc_status' => 'APV',
						'updated_by' => Auth::user()->username,
				);


				$data_update =CosInvmast::find($id);
				$data_update->update($data_upd);	

				if($data_update)
				{
					return "Success";
					
				}

			}

		}


		
	}


	public function ho2cos()
	{
		$sql = "select * from cos_invmast where cust_code='" . Auth::user()->current_cust_code_logon . "' and ifnull(tf_st,'N')='N' and doc_code in (select doc_code from doc_mast where post_type='HO')";
		$data = DB::select($sql); 
		return view('transferdata.data_ho2cos')->with('sales',$data);
	
	}

}
