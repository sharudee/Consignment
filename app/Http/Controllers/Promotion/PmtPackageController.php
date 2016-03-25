<?php namespace App\Http\Controllers\promotion;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//use Illuminate\Http\Request;
use DB;
use Request;
use Validator;
// Model
use App\Http\Model\PmtMastModel;
use App\Http\Model\PmtConsigneeModel;

class PmtPackageController extends Controller {

    public function search()
    {

        $query = urldecode( Request::input('search'));

        if ($query) {
            $data_promotion = PmtMastModel::where('pmt_no', 'LIKE', "%$query%")
                ->orWhere('pmt_name', 'LIKE', "%$query%")
                ->orWhere('rec_status', 'LIKE', "%$query%")
                ->paginate(10);
        } else {
            $data_promotion = PmtMastModel::orderBy('pmt_no', 'desc')->paginate(10);
        }

        return view('promotion.pmtpackage')->with('promotion_obj',$data_promotion);
    }


	public function pmtpackage() //----หน้าแรก
	{
		$data_promotion = PmtMastModel::where ('rec_status', '=', "ACTIVE")->orderBy('pmt_no','asc')->get();
		return view('promotion.pmtpackage')->with('promotion_obj',$data_promotion);
	}

	public function pmtpackagecontact($pmt_mast_id) //----หน้าแรก
	{

        $data_h_obj_info = DB::table('pmt_mast')
			            ->where('pmt_mast.pmt_mast_id', '=', $pmt_mast_id)
			            ->select('pmt_no','pmt_name','pmt_mast_id')
			            ->get();

        $data_obj_info = DB::table('pmt_mast')
			            ->join('pmt_package_mast', 'pmt_mast.pmt_mast_id', '=', 'pmt_package_mast.pmt_mast_id')
			            ->select('pmt_mast.pmt_no','pmt_mast.pmt_name','pmt_package_mast.*')
			            ->where('pmt_mast.pmt_mast_id', '=', $pmt_mast_id)
			            ->orderby('pmt_package_mast.pdmodel_code','asc')
			            ->get();


		return view('promotion.pmtpackage_contact')->with(['data_h_obj_info'=>$data_h_obj_info,'data_obj_info'=>$data_obj_info]);

	}
	public function pdmodel_code($pmt_mast_id,$ppp) //----หน้าแรก

	{
		$data_obj_info = DB::table('product')->groupby('pdmodel_code')->orderBy('pdmodel_code','asc')->get();
		return view('popup.popup_mstmodel_modal')->with('data_obj_info',$data_obj_info);
	} 


	public function pdsize_code($id,$id2,$id3)
	{
		$pdgrp_code1 = 'MT';
		$data_obj_info = DB::table('product')
							->where('pdgrp_code', '=',"$pdgrp_code1" )
							->groupby('pdsize_code')->orderBy('pdsize_code','asc')->get();

		return view('popup.popup_pdsize_code_modal')->with('data_obj_info',$data_obj_info);
	} 

	public function getprodset($id,$id2,$id3,$id4)
	{
		$data_cond1 = "PM";
        $data_obj_info = DB::table('pmt_product_set')
			            ->select('pmt_product_set.*')
			            ->where('pmt_group_code', '<>', "$data_cond1")
			            ->where('rec_status', '=', "ACTIVE")
			            ->orderby('product_set_code','asc')
			            ->get();

		return  view('popup.popup_productset_modal')->with('data_obj_info',$data_obj_info); 
	}

	public function getpremuimset($id,$id2,$id3,$id4,$id5)
	{
		$data_cond1 = "PM";
        $data_obj_info = DB::table('pmt_product_set')
			            ->select('pmt_product_set.*')
			            ->where('pmt_group_code', '=', "$data_cond1")
			            ->orderby('product_set_code','asc')
			            ->get();

		return  view('popup.popup_productpremuimset_modal')->with('data_obj_info',$data_obj_info); 
	}

	public function addnewpmtpackageform($pmt_mast_id)
	{
        $data_obj_info = DB::table('pmt_mast')
			            ->select('pmt_mast.*')
			            ->where('pmt_mast_id', '=', "$pmt_mast_id")
			            ->get();

		return view('promotion.pmtpackageform_add')->with('pmt_mast_id_obj_info',$data_obj_info); 
	}

	public function loadforeditpmtpackageform($pmt_mast_id ,$package_mast_id )
	{

        $data_obj_info = DB::table('pmt_mast')
			            ->select('pmt_mast.*')
			            ->where('pmt_mast_id', '=', "$pmt_mast_id")
			            ->get();

		$data_obj_package_mast_info = DB::table('pmt_package_mast')
						->join('pmt_product_set', 'pmt_package_mast.pmt_product_set_id', '=', 'pmt_product_set.pmt_product_set_id')
			            ->select('pmt_package_mast.*','pmt_product_set.product_set_code','pmt_product_set.product_set_desc')
			            ->where('package_mast_id', '=', "$package_mast_id")
			            ->get();


			            
		$data_obj_package_det_info = DB::table('pmt_package_det')
						->join('pmt_product_set', 'pmt_product_set.pmt_product_set_id', '=', 'pmt_package_det.pmt_product_set_id')
						->select('pmt_package_det.*','pmt_product_set.product_set_code','pmt_product_set.product_set_desc')
			            ->where('pmt_package_det.package_mast_id', '=', "$package_mast_id")
			            ->get();

		return view('promotion.pmtpackageform_edit')->with(['pmt_mast_id_obj_info'=>$data_obj_info
															,'data_obj_package_mast_info'=>$data_obj_package_mast_info
															,'data_obj_package_det_info'=>$data_obj_package_det_info]); 
	}

	public function loadfordeletepmtpackageform($pmt_mast_id ,$package_mast_id )
	{

        $data_obj_info = DB::table('pmt_mast')
			            ->select('pmt_mast.*')
			            ->where('pmt_mast_id', '=', "$pmt_mast_id")
			            ->get();

		$data_obj_package_mast_info = DB::table('pmt_package_mast')
						->join('pmt_product_set', 'pmt_package_mast.pmt_product_set_id', '=', 'pmt_product_set.pmt_product_set_id')
			            ->select('pmt_package_mast.*','pmt_product_set.product_set_code','pmt_product_set.product_set_desc')
			            ->where('package_mast_id', '=', "$package_mast_id")
			            ->get();


			            
		$data_obj_package_det_info = DB::table('pmt_package_det')
						->join('pmt_product_set', 'pmt_product_set.pmt_product_set_id', '=', 'pmt_package_det.pmt_product_set_id')
						->select('pmt_package_det.*','pmt_product_set.product_set_code','pmt_product_set.product_set_desc')
			            ->where('pmt_package_det.package_mast_id', '=', "$package_mast_id")
			            ->get();

		return view('promotion.pmtpackageform_delete')->with(['pmt_mast_id_obj_info'=>$data_obj_info
															,'data_obj_package_mast_info'=>$data_obj_package_mast_info
															,'data_obj_package_det_info'=>$data_obj_package_det_info]); 
	}


	public function loadforeditpmtpackageformDelete($pmt_mast_id ,$package_mast_id )
	{
		



        $data_obj_info = DB::table('pmt_mast')
			            ->select('pmt_mast.*')
			            ->where('pmt_mast_id', '=', "$pmt_mast_id")
			            ->get();

		$data_obj_package_mast_info = DB::table('pmt_package_mast')
						->join('pmt_product_set', 'pmt_package_mast.pmt_product_set_id', '=', 'pmt_product_set.pmt_product_set_id')
			            ->select('pmt_package_mast.*','pmt_product_set.product_set_code','pmt_product_set.product_set_desc')
			            ->where('package_mast_id', '=', "$package_mast_id")
			            ->get();


			            
		$data_obj_package_det_info = DB::table('pmt_package_det')
						->join('pmt_product_set', 'pmt_product_set.pmt_product_set_id', '=', 'pmt_package_det.pmt_product_set_id')
						->select('pmt_package_det.*','pmt_product_set.product_set_code','pmt_product_set.product_set_desc')
			            ->where('pmt_package_det.package_mast_id', '=', "$package_mast_id")
			            ->get();

		return view('promotion.pmtpackageform_delete')->with(['pmt_mast_id_obj_info'=>$data_obj_info
															,'data_obj_package_mast_info'=>$data_obj_package_mast_info
															,'data_obj_package_det_info'=>$data_obj_package_det_info]); 
	}

	
    public function submiteditpackage($pmt_mast_id ,$package_mast_id)
	{
		$getpmt_mast_id_key  = Request::input('pmt_mast_id_key'); 
		$getpackage_mast_id =   Request::input('package_mast_id');  

		$chk_approve_pmt = DB::table('pmt_mast')
			            ->where('pmt_mast_id', '=', $pmt_mast_id)
			            ->first();
		//-----ถ้ามีค่า แสดงว่าต้องไม่สามารถ แก้ไขอะไรได้อีก
	
		if ($chk_approve_pmt->approve_status == "APPROVED" OR $chk_approve_pmt->approve_status =="CANCEL") 
		{
			return $chk_approve_pmt->approve_status;
		}	


			if(!empty($getpackage_mast_id  ))
			{
				//------------Data Head ---------------------------------
				$get_pdmodel_code_h = Request::input('pdmodel_code_h'); 
				$get_pdsize_code_h = Request::input('pdsize_code_h'); 
				$get_pdmodel_desc_h = Request::input('pdmodel_desc_h'); 
				$get_pdsize_desc_h = Request::input('pdsize_desc_h'); 

				$get_package_unit_price_h = Request::input('package_unit_price_h'); 
				$get_total_price_amt_h  = Request::input('total_price_amt_h'); 
				$get_special1_price_amt_h  = Request::input('special1_price_amt_h'); 
				$get_special2_price_amt_h  = Request::input('special2_price_amt_h'); 

				$getpmt_product_set_h = Request::input('pmt_product_set_h'); 
				//-------------------------------------------------------

				$getproduct_set_code = Request::input('product_set_code'); 
				$getproduct_set_desc = Request::input('product_set_desc'); 
				$getset_price_amt = Request::input('set_price_amt'); 
				$getset_qty  = Request::input('set_qty'); 
				$pm_total_price  = Request::input('pm_total_price'); 
				$getuom = Request::input('uom');
				
				

				$obj_h_pmt_product_set_id = DB::table('pmt_product_set')
					            	->select('pmt_product_set_id')
					            	->where('product_set_code', '=', "$getpmt_product_set_h")
					            	->first();

				
				//----------Insert Head ----------------------------
					$data_head = array(
						  'pmt_mast_id' => $getpmt_mast_id_key,
						  'pmt_product_set_id' => $obj_h_pmt_product_set_id->pmt_product_set_id ,
						  'pdmodel_code' => $get_pdmodel_code_h,
						  'pdsize_code' => $get_pdsize_code_h,
						  'pdmodel_desc' => $get_pdmodel_desc_h ,
						  'pdsize_desc' => $get_pdsize_desc_h,
						  'package_unit_price'=> $get_package_unit_price_h,
						  'total_price_amt' => $get_total_price_amt_h,
						  'special1_price_type' => "BAHT" ,
						  'special1_disc_amt' => 0.00,
						  'special1_price_amt' => $get_special1_price_amt_h,
						  'special2_price_type' => "BAHT",
						  'special2_disc_amt1' => 0.00,
						  'special2_disc_amt2' => 0.00,
						  'special2_price_amt' => $get_special2_price_amt_h,
						  'pm_total_price'=> $pm_total_price,
						  'rec_status' => 'ACTIVE',
						  'created_by'		=> 'admin',
						  'created_at'		=> date('Y-m-d H:i:s')
						);

			
					DB::table('pmt_package_mast')
		            	->where('package_mast_id', $getpackage_mast_id)
		            	->update($data_head);

			    $package_mast_id_new = $getpackage_mast_id ;// DB::table('pmt_package_mast')->insertGetId($data_head);

			    DB::table('pmt_package_det')->where('package_mast_id', '=', $getpackage_mast_id)->delete();

				$count_detail = count($getproduct_set_code);
				if($count_detail > 0)
				{
					for($i=0;$i<$count_detail;$i++)
					{

						$obj_pmt_product_set_id = DB::table('pmt_product_set')
					            	->select('pmt_product_set_id')
					            	->where('product_set_code', '=', "$getproduct_set_code[$i]")
					            	->first();


						$data_podetail = array(
							  	'package_mast_id' =>$package_mast_id_new  ,
							  	'pmt_product_set_id' =>$obj_pmt_product_set_id->pmt_product_set_id,
							  	'set_qty' =>$getset_qty[$i],
							  	'unit_price_amt'  => 0.00 ,
							  	'set_price_amt' => $getset_price_amt[$i],
							  	'uom' =>$getuom[$i],
							  	'rec_status' =>'ACTIVE',
								'created_by' =>'admin',
								'created_at'	=> date('Y-m-d H:i:s')
						);
						
						DB::table('pmt_package_det')->insert($data_podetail);
					}
					
				}

				return "Insert_Success";
			}
	}
    public function submitDeletePackage($pmt_mast_id ,$package_mast_id)
	{
	
		$getpmt_mast_id_key  = Request::input('pmt_mast_id_key'); 
		$getpackage_mast_id =   Request::input('package_mast_id');  

		$chk_approve_pmt = DB::table('pmt_mast')
			            ->where('pmt_mast_id', '=', $pmt_mast_id)
			            ->first();
		//-----ถ้ามีค่า แสดงว่าต้องไม่สามารถ แก้ไขอะไรได้อีก
	
		if ($chk_approve_pmt->approve_status == "APPROVED" OR $chk_approve_pmt->approve_status =="CANCEL") 
		{
			return "Insert_No_Success";
		}	
			if(!empty($getpackage_mast_id  ))
			{

			
					DB::table('pmt_package_mast')
		            	->where('package_mast_id', $getpackage_mast_id)
		            	->delete();

			    	DB::table('pmt_package_det')
			    		->where('package_mast_id', $getpackage_mast_id)
			    		->delete();



				return "Insert_Success";
			}
	}

    public function submitaddnewpackage($id)
	{

		$getpmt_mast_id_key  = Request::input('pmt_mast_id_key'); 

			if(!empty($getpmt_mast_id_key  ))
			{
				//------------Data Head ---------------------------------
				$get_pdmodel_code_h = Request::input('pdmodel_code_h'); 
				$get_pdsize_code_h = Request::input('pdsize_code_h'); 
				$get_pdmodel_desc_h = Request::input('pdmodel_desc_h'); 
				$get_pdsize_desc_h = Request::input('pdsize_desc_h'); 

				$get_package_unit_price_h = Request::input('package_unit_price_h'); 
				$get_total_price_amt_h  = Request::input('total_price_amt_h'); 
				$get_special1_price_amt_h  = Request::input('special1_price_amt_h'); 
				$get_special2_price_amt_h  = Request::input('special2_price_amt_h'); 

				$getpmt_product_set_h = Request::input('pmt_product_set_h'); 
				//-------------------------------------------------------

				$getproduct_set_code = Request::input('product_set_code'); 
				$getproduct_set_desc = Request::input('product_set_desc'); 
				$getset_price_amt = Request::input('set_price_amt'); 
				$getset_qty  = Request::input('set_qty'); 
				$pm_total_price  = Request::input('pm_total_price'); 
				$getuom = Request::input('uom');
				
				

				$obj_h_pmt_product_set_id = DB::table('pmt_product_set')
					            	->select('pmt_product_set_id')
					            	->where('product_set_code', '=', "$getpmt_product_set_h")
					            	->first();

				
				//----------Insert Head ----------------------------
					$data_head = array(
						  'pmt_mast_id' => $getpmt_mast_id_key,
						  'pmt_product_set_id' => $obj_h_pmt_product_set_id->pmt_product_set_id ,
						  'pdmodel_code' => $get_pdmodel_code_h,
						  'pdsize_code' => $get_pdsize_code_h,
						  'pdmodel_desc' => $get_pdmodel_desc_h ,
						  'pdsize_desc' => $get_pdsize_desc_h,
						  'package_unit_price'=> $get_package_unit_price_h,
						  'total_price_amt' => $get_total_price_amt_h,
						  'special1_price_type' => "BAHT" ,
						  'special1_disc_amt' => 0.00,
						  'special1_price_amt' => $get_special1_price_amt_h,
						  'special2_price_type' => "BAHT",
						  'special2_disc_amt1' => 0.00,
						  'special2_disc_amt2' => 0.00,
						  'special2_price_amt' => $get_special2_price_amt_h,
						  'pm_total_price'=> $pm_total_price,
						  'rec_status' => 'ACTIVE',
						  'created_by'		=> 'admin',
						  'created_at'		=> date('Y-m-d H:i:s')
						);

			

			    $package_mast_id_new = DB::table('pmt_package_mast')->insertGetId($data_head);

				$count_detail = count($getproduct_set_code);
				if($package_mast_id_new)
				{
					for($i=0;$i<$count_detail;$i++)
					{

						$obj_pmt_product_set_id = DB::table('pmt_product_set')
					            	->select('pmt_product_set_id')
					            	->where('product_set_code', '=', "$getproduct_set_code[$i]")
					            	->first();


						$data_podetail = array(
							  	'package_mast_id' =>$package_mast_id_new  ,
							  	'pmt_product_set_id' =>$obj_pmt_product_set_id->pmt_product_set_id,
							  	'set_qty' =>$getset_qty[$i],
							  	'unit_price_amt'  => 0.00 ,
							  	'set_price_amt' => $getset_price_amt[$i],
							  	'uom' =>$getuom[$i],
							  	'rec_status' =>'ACTIVE',
								'created_by' =>'admin',
								'created_at'	=> date('Y-m-d H:i:s')
						);
						
						DB::table('pmt_package_det')->insert($data_podetail);
					}
					
				}

				return "Insert_Success";
			}
				
	}

}
