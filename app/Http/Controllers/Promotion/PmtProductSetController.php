<?php namespace App\Http\Controllers\promotion;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//use Illuminate\Http\Request;
use DB;
use Request;
use Validator;

// Model
use App\Http\Model\PmtProductSetModel;
use App\Http\Model\PmtProductModel;

class PmtProductSetController extends Controller {

	public function get_product_mst()
	{
		 $pdmodel_code= Request::input('pdmodel_code') ;
		 $pdsize_code= Request::input('pdsize_code') ;
		 $pdgrp_code= Request::input('pdgrp_code') ;
		 $pdbrnd_code= Request::input('pdbrnd_code') ;
		 $pdcolor_code= Request::input('pdcolor_code') ;
		 $pddsgn_code= Request::input('pddsgn_code') ;

		if(empty($pdmodel_code)) {$pdmodel_code ="" ;} 
		if(empty($pdsize_code)) {$pdsize_code ="" ;} 
		if(empty($pdgrp_code)) {$pdgrp_code ="" ;} 
		if(empty($pdbrnd_code)) {$pdbrnd_code ="" ;} 
		if(empty($pdcolor_code)) {$pdcolor_code ="" ;} 
		if(empty($pddsgn_code)) {$pddsgn_code ="" ;} 




         $data = DB::table('product')->where('pdmodel_code', 'LIKE', "%$pdmodel_code%")
                ->where ('pdsize_code', 'LIKE', "%$pdsize_code%")
                ->where ('pdgrp_code', 'LIKE', "%$pdgrp_code%")
                ->where ('pdbrnd_code', 'LIKE', "%$pdbrnd_code%") 
                ->where ('pdcolor_code', 'LIKE', "%$pdcolor_code%") 
                ->where ('pddsgn_code', 'LIKE', "%$pddsgn_code%") 
                ->get();

        if (count($data) ==0){
        	return view('popup.popup_warning'); 
        }else
        {
        	return view('popup.popup_product_modal')->with('data_obj_info',$data);
        }
	
	} 


	//pmtproductset
	public function pmtproductset()
	{
		$data = PmtProductSetModel::orderBy('product_set_code','asc')->get();
		return view('promotion.pmtproductset')->with('productset_obj',$data);
	}
	public function addpmtproductsetform()
	{ 
		$mst_uom = DB::table('mst_uom')->get();
		return view('promotion.pmtproductsetform_add')->with('mst_uom',$mst_uom);

	}

	/*public function popupmstgrpmodalform()
	{
		$cust_info = DB::table('pmt_group_mast')->orderBy('pmt_group_code','asc')->get();
		return view('promotion.popup_mstgrp_modal')->with('cust_info',$cust_info);
	}*/

    public function search()
    {

        $query = urldecode( Request::input('search'));


        if ($query) {
            $dictionaries = PmtProductSetModel::where('product_set_code', 'LIKE', "%$query%")
                ->orWhere('pmt_group_code', 'LIKE', "%$query%")
                ->orWhere('product_set_desc', 'LIKE', "%$query%")
                ->paginate(10);
        } else {
            $dictionaries = PmtProductSetModel::orderBy('product_set_code', 'desc')->paginate(10);
        }
    
		return view('promotion.pmtproductset')->with('productset_obj',$dictionaries);
    }


    public function get_pmtproductset_for_update($id)
	{
		//------Head ------------

		$obj_mt_product_set  = DB::table('pmt_product_set')->where('pmt_product_set_id', '=', "$id")->get();
	
		//------Detail -----------
		$obj_pmt_product= PmtProductModel::where('pmt_product_set_id', '=', "$id")->orderBy('pmt_product_id','asc')->get();
	
		
		$mst_uom = DB::table('mst_uom')->get();
	

		return view('promotion.pmtproductsetform_edit')->with(['mst_uom'=>$mst_uom, 'obj_mt_product_set'=>$obj_mt_product_set,'obj_pmt_product'=>$obj_pmt_product]);
	}	

    public function submitadd()
	{
		if(!empty(Request::input('keyproduct_set_code')))
		{
			$data_head = array(
				'product_set_code' => Request::input('keyproduct_set_code') ,
				'pmt_group_code' => Request::input('keypmt_group_code') ,
				'product_set_desc' => Request::input('keyproduct_set_desc') ,
				'set_qty' => Request::input('keyset_qty') ,
				'unit_price_amt' => Request::input('keyunit_price_amt') ,
				'set_price_amt' => Request::input('keyset_price_amt') ,
				'uom' => Request::input('keyuom') ,
				'discount_type' => Request::input('keydiscount_type') ,
				'discount_amt' => Request::input('keydiscount_amt') ,
				'rec_status' => Request::input('keyRecStatus') ,
				'created_by'		=> 'admin',
				'created_at'		=> date('Y-m-d H:i:s')
				);

			$pmt_product_set_id = DB::table('pmt_product_set')->insertGetId($data_head);

			if($pmt_product_set_id){
				$getprod_code = Request::input('prod_code');
				$getprod_tname= Request::input('prodtname');

				$count_po = count($getprod_code);
				if($count_po)
				{
					for($i=0;$i<$count_po;$i++)
					{
						$Product_data = DB::table('product')->where('prod_code',$getprod_code[$i])->first();
						$bar_code = $Product_data->bar_code ;
						//$getprod_tname=$Product_data->$getprod_tname[$i] ;
						$pdgrp_code= $Product_data->pdgrp_code ;
						$pdbrnd_code= $Product_data->pdbrnd_code ;
						$pddsgn_code= $Product_data->pddsgn_code ;
						$pdsize_code= $Product_data->pdsize_code ;
						$pdcolor_code= $Product_data->pdcolor_code ;
						$pdmodel_code= $Product_data->pdmodel_code ;

						$pdgrp_desc= $Product_data->pdgrp_desc ;
						$pdbrnd_desc= $Product_data->pdbrnd_desc ;
						$pddsgn_desc= $Product_data->pddsgn_desc ;
						$pdsize_desc= $Product_data->pdsize_desc ;
						$pdcolor_desc= $Product_data->pdcolor_desc ;
						$pdmodel_desc= $Product_data->pdmodel_desc ;
						$data_podetail = array(
								'pmt_product_set_id'	=> $pmt_product_set_id,
								'prod_code'	=> $getprod_code[$i],
								'prod_tname' =>$getprod_tname[$i],
								'bar_code' =>$bar_code,
								'pdgrp_code'=>$pdgrp_code,
								'pdbrnd_code'=>$pdbrnd_code,
								'pddsgn_code'=>$pddsgn_code,
								'pdsize_code'=>$pdsize_code,
								'pdcolor_code'=>$pdcolor_code,
								'pdmodel_code'=>$pdmodel_code,
								'pdgrp_desc'=>$pdgrp_desc,
								'pdbrnd_desc'=>$pdbrnd_desc,
								'pddsgn_desc'=>$pddsgn_desc,
								'pdsize_desc'=>$pdsize_desc,
								'pdcolor_desc'=>$pdcolor_desc,
								'pdmodel_desc'=>$pdmodel_desc,
								'created_by' =>'admin',
								'created_at'	=> date('Y-m-d H:i:s')
						);

						DB::table('pmt_product')->insert($data_podetail);
					}
					//DB::table('pmt_product')->insert($data_podetail);
				}

				return "Insert_Success";
			}
		}		
	}


    public function submitedit()
	{
		$pmt_product_set_id =Request::input('keygetpmt_product_set_id') ;

		
		if(!empty($pmt_product_set_id ))
		{
			$data_head = array(
				'product_set_code' => Request::input('keyproduct_set_code') ,
				'pmt_group_code' => Request::input('keypmt_group_code') ,
				'product_set_desc' => Request::input('keyproduct_set_desc') ,
				'set_qty' => Request::input('keyset_qty') ,
				'unit_price_amt' => Request::input('keyunit_price_amt') ,
				'set_price_amt' => Request::input('keyset_price_amt') ,
				'uom' => Request::input('keyuom') ,
				'discount_type' => Request::input('keydiscount_type') ,
				'discount_amt' => Request::input('keydiscount_amt') ,
				'rec_status' => Request::input('keyRecStatus') ,
				'updated_by'		=> 'admin',
				'updated_at'		=> date('Y-m-d H:i:s')
				);

			//Update Header -------------------
	
			DB::table('pmt_product_set')
            ->where('pmt_product_set_id', $pmt_product_set_id)
            ->update($data_head);

			//$pmt_product_set_id = DB::table('pmt_product_set')->insertGetId($data_head);



			if($pmt_product_set_id){
				//-----Delete ก่อน ----------------
				DB::table('pmt_product')->where('pmt_product_set_id', '=', $pmt_product_set_id)->delete();

				$getprod_code = Request::input('prod_code');
				$getprod_tname= Request::input('prodtname');

				$count_po = count($getprod_code);
				if($count_po)
				{
					for($i=0;$i<$count_po;$i++)
					{
						$Product_data = DB::table('product')->where('prod_code',$getprod_code[$i])->first();
						$bar_code = $Product_data->bar_code ;
						//$getprod_tname=$Product_data->$getprod_tname[$i] ;
						$pdgrp_code= $Product_data->pdgrp_code ;
						$pdbrnd_code= $Product_data->pdbrnd_code ;
						$pddsgn_code= $Product_data->pddsgn_code ;
						$pdsize_code= $Product_data->pdsize_code ;
						$pdcolor_code= $Product_data->pdcolor_code ;
						$pdmodel_code= $Product_data->pdmodel_code ;

						$pdgrp_desc= $Product_data->pdgrp_desc ;
						$pdbrnd_desc= $Product_data->pdbrnd_desc ;
						$pddsgn_desc= $Product_data->pddsgn_desc ;
						$pdsize_desc= $Product_data->pdsize_desc ;
						$pdcolor_desc= $Product_data->pdcolor_desc ;
						$pdmodel_desc= $Product_data->pdmodel_desc ;
						$data_podetail = array(
								'pmt_product_set_id'	=> $pmt_product_set_id,
								'prod_code'	=> $getprod_code[$i],
								'prod_tname' =>$getprod_tname[$i],
								'bar_code' =>$bar_code,
								'pdgrp_code'=>$pdgrp_code,
								'pdbrnd_code'=>$pdbrnd_code,
								'pddsgn_code'=>$pddsgn_code,
								'pdsize_code'=>$pdsize_code,
								'pdcolor_code'=>$pdcolor_code,
								'pdmodel_code'=>$pdmodel_code,
								'pdgrp_desc'=>$pdgrp_desc,
								'pdbrnd_desc'=>$pdbrnd_desc,
								'pddsgn_desc'=>$pddsgn_desc,
								'pdsize_desc'=>$pdsize_desc,
								'pdcolor_desc'=>$pdcolor_desc,
								'pdmodel_desc'=>$pdmodel_desc,
								'updated_by' =>'admin',
								'updated_at'	=> date('Y-m-d H:i:s')
						);

						DB::table('pmt_product')->insert($data_podetail);
					}
				}

				return "Insert_Success";
			}
		}		
	}


	public function submitdelete()
	{
		$id = Request::input('deleteID');
		//$users = DB::table('users')->select('name', 'email as user_email')->get();

		$result = PmtProductSetModel::where('pmt_product_set_id','=',$id);
		$result->delete();

		if($result){
			return redirect('pmtproductset');
		}
	}
}
