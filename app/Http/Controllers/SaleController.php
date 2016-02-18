<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//use Illuminate\Http\Request;

use Auth;
use Request;
use App;
use MPDF;
use Validator;
use Carbon;
use File;
use Response;
use URL;
use Redirect;



use DB;
use App\Http\Model\Custgrp;
use App\Http\Model\Titlemast;
use App\Http\Model\Provmast;
use App\Http\Model\Postmast;
use App\Http\Model\PmtMastModel;
use App\Http\Model\PmtTransMastModel;
use App\Http\Model\Entity;
use App\Http\Model\Docmast;
use App\Http\Model\CosInvmast;
use App\Http\Model\CosInvdet;
use App\Http\Model\CosInvdetProduct;
use App\Http\Model\PmtProductModel;
use App\Http\Model\Pcwork;
use App\Http\Model\Pcmast;
use App\Http\Model\PmtDiscShopModel;

class SaleController extends Controller {

	public function sales()
	{
		$data_sales = CosInvmast::where('cust_code',Auth::user()->current_cust_code_logon)->OrderBy('doc_no','desc')->get();
		return view('sales.sales')->with('sales',$data_sales);
	}

	public function salesform()
	{
		$doc_code = DB::table('doc_mast')->where('doc_code', 'PO')->pluck('doc_code');
		$cos_no = DB::table('entity')->where('entity_code', Auth::user()->current_cust_code_logon)->pluck('cos_no');
		
		$doc_head = $doc_code . $cos_no. date('ym');

		$sql = "select ifnull(substr(max(doc_no),-4,4),0)+1 no  from cos_invmast where doc_no like '" . $doc_head . "%'";
		$data = DB::select($sql);
		$doc_no = $doc_head . str_pad($data[0]->no,4,'0',STR_PAD_LEFT);
		//dd($data[0]->no);
		return view('sales.add_salesform')->with('doc_no',$doc_no);
	}

	public function salesshow($id)
	{	
		
		$data_mast = CosInvmast::find($id);

		$data_det = CosInvdet::where('cos_invmast_id',$id)->OrderBy('item','asc')->get();
		//dd($data_sales);
		return view('sales.sales_show')->with(['data_mast'=>$data_mast,
							'data_det'=>$data_det]);
	}



	public function salesedit($id)
	{	
		
		$data_mast = CosInvmast::find($id);

		$data_det = CosInvdet::where('cos_invmast_id',$id)->OrderBy('item','asc')->get();
		//dd($data_sales);
		return view('sales.sales_edit')->with(['data_mast'=>$data_mast,
							'data_det'=>$data_det]);
	}

	public function salesfile($id)
	{	
		
		
		//dd($data_sales);
		return view('sales.sales_upload')->with('id',$id);
	}

	public function salesupload($id)
	{	
		
		 if (Request::hasFile('pofile')){
			$file = Request::file('pofile');
					//dd($file);
			$name = time() . '-' . $file->getClientOriginalName();
			 		
			$extension = Request::file('pofile')->getClientOriginalExtension();

			$path = 'resources/views/atth_file';

			 		// Moves file to folder on server
			if($file->move($path, $name))
			{

			
				$data_file = array(
						'po_file' => $name,			
						'updated_by' => Auth::user()->username,
				);


				$po =CosInvmast::find($id);
				$po->update($data_file);


			}
		}




		$data_sales = CosInvmast::where('cust_code',Auth::user()->current_cust_code_logon)->OrderBy('doc_no','desc')->get();
		return view('sales.sales')->with('sales',$data_sales);
	}


	public function salesshowfile($id)
	{	
		
		$po_name = DB::table('cos_invmast')->where('id', $id)->pluck('po_file');
		//dd($data_sales);
		
		if(!empty($po_name))
		{
			$path = 'resources/views/atth_file/' .$po_name;
		}


		$file = URL::to($path);


		return  redirect($file);
	}



	public function productform($pmt_no)
	{
		$sql = "select b.pmt_product_set_id , b.pdmodel_code , b.pdmodel_desc , b.pdsize_code , b.pdsize_desc, b.special1_price_amt , b.special2_price_amt , ifnull(c.discount_amt,0) discount_amt , ifnull(b.pm_total_price,0) pm_total_price from pmt_mast a , pmt_package_mast b Left JOIN pmt_disc_premium_deny c on b.pdsize_code = c.pdsize_code where a.pmt_mast_id=b.pmt_mast_id and a.pmt_no='" . $pmt_no . "'";
		$data = DB::select($sql); 

		return view('sales.salesproductform')->with('prod',$data);
	}

	public function premiumform($pmt_no)
	{
		$sql = "select distinct  d.pmt_product_set_id ,  d.product_set_code , d.product_set_desc , d.set_qty , d.set_price_amt from pmt_mast a , pmt_package_mast b , pmt_package_det c , pmt_product_set d where a.pmt_mast_id=b.pmt_mast_id and b.package_mast_id = c.package_mast_id and c.pmt_product_set_id = d.pmt_product_set_id and a.pmt_no='" . $pmt_no . "'";
		$data = DB::select($sql); 

		return view('sales.salespremiumform')->with('prod',$data);
	}

	public function salespromotionform($pdate)
	{
		$sql = "select * from pmt_mast , pmt_consignee where pmt_mast.pmt_mast_id = pmt_consignee.pmt_mast_id and pmt_mast.start_date <='" . $pdate . "' and pmt_mast.end_date >='" . $pdate . "' and pmt_consignee.entity_code='" . Auth::user()->current_cust_code_logon ."'";
		
		$data_pmt = DB:: select($sql);
		//dd($data_pmt);
		
		return view('sales.salespromotionform')->with('pmt',$data_pmt);
	}

	public function salestitleform()
	{
		$data_title = Titlemast::orderBy('title_name','asc')->get();
		return view('sales.salestitleform')->with('title',$data_title);
	}

	public function salespostform($prov)
	{
		
		$data_post = Postmast::where('prov_code',$prov)->orderBy('post_code','asc')->get();
		return view('sales.salespostform')->with('post',$data_post);
	}

	public function salesprovform()
	{
		$data_prov = Provmast::orderBy('prov_name','asc')->get();
		return view('sales.salesprovform')->with('prov',$data_prov);
	}

	public function salespayform()
	{
		$data_pay = PmtTransMastModel::where('pmt_group_code','PAYMENT')->orderBy('transaction_code','asc')->get();
		return view('sales.salespayform')->with('pay',$data_pay);
	}

	public function salesdiscform($pmt_no)
	{
		$sql = "select c.transaction_code , c.trnsaction_name ,purchase_rate_amt, b.discount_amt from pmt_mast a , pmt_disc_shop_rate b , pmt_transaction_mast c where a.pmt_mast_id = b.pmt_mast_id and a.pmt_no ='" . $pmt_no . "' and b.transaction_code=c.transaction_code ";
		
		$data_disc = DB:: select($sql);
		return view('sales.salesdiscform')->with('disc',$data_disc);
	}


	public function  submitOrder()
	{
		
		$message = [
			'required'	=> 'กรุณาใส่ข้อมูล',
			'unique'	=> 'ข้อมูลซ้ำ',
			'numeric'	=> 'ต้องเป็นตัวเลขเท่านั้น',
			'max'		=> 'ข้อมูลเกิน :max ตัวอักษร'
		];


		$rules = array(
			'ship_titlename'	=> 'required|Max:10',
			'ship_custname'	=> 'required|Max:50',
			'ship_custsurname'	=> 'required|Max:50',
			'ship_address1'	=> 'required|Max:50',
			'ship_address2'	=> 'Max:50',
			'ship_tel'		=> 'Max:30'
			
		);

		$validator = Validator::make(Request::all(), $rules,$message);

		

		if ($validator->passes())
		{

			if(!empty(Request::input('doc_no')))
			{	
				

				// หา Doc No ใหม่
				$doc_code = DB::table('doc_mast')->where('doc_code', 'PO')->pluck('doc_code');
				$cos_no = DB::table('entity')->where('entity_code', Auth::user()->current_cust_code_logon)->pluck('cos_no');
				
				$doc_head = $doc_code . $cos_no. date('ym');

				$sql = "select ifnull(substr(max(doc_no),-4,4),0)+1 no  from cos_invmast where doc_no like '" . $doc_head . "%'";
				$data = DB::select($sql);
				$doc_no = $doc_head . str_pad($data[0]->no,4,'0',STR_PAD_LEFT);	



				//
				
				$data_entity = Entity::where('entity_code',Auth::user()->current_cust_code_logon)->get(['entity_tname','cos_no','sale_type','tax_rate']);
				
				$cos_entity = "B10";
				$doc_code = "PO";
				$cust_name = $data_entity[0]->entity_tname;
				$cos_no = $data_entity[0]->cos_no;
				$tax_rate = $data_entity[0]->tax_rate;

				$ddate = date_create_from_format('d/m/Y', Request::input('doc_date'));
				$doc_date = date_format($ddate, 'Y-m-d');

				$rdate = date_create_from_format('d/m/Y', Request::input('req_date'));
				$req_date = date_format($rdate, 'Y-m-d');

				$getqty = Request::input('qty');
				$getprice = Request::input('price');
				$disc_amt = Request::input('disc_amt');
				$count_qty = count($getqty);
				$tot_amt = 0;
				$net_amt = 0;

				for($j=0;$j<$count_qty;$j++)
				{	
					$tot_amt += $getqty[$j] * $getprice[$j];
				}

				$net_amt = $tot_amt - $disc_amt;
				$tot_qty = array_sum($getqty);


				$data_cos_mast = array(
					'cos_entity'	=> $cos_entity,
					'cos_no'	=> $cos_no,
					'doc_code'	=> $doc_code,
					'doc_no' 	=> $doc_no,
					'doc_date' 	=> $doc_date,  
					'req_date' 	=> $req_date,   
					'pmt_no' 	=> Request::input('pmt_no'), 
					'cust_code'	=> Auth::user()->current_cust_code_logon,
					'cust_name'	=> $cust_name,
					'ship_titlename'	=> Request::input('ship_titlename'),
					'ship_custname'	=> Request::input('ship_custname'),
					'ship_custsurname'	=> Request::input('ship_custsurname'), 
					'ship_address1'	=> Request::input('ship_address1'),
					'ship_address2'	=> Request::input('ship_address2'),
					'prov_code'	=> Request::input('prov_code'),
					'prov_name'	=> Request::input('prov_name'),
					'post_code'	=> Request::input('post_code'),
					'ship_tel'		=> Request::input('tel'),
					'email_address'	=> Request::input('email_address'),
					//'po_file'		=> Request::input('po_file'),
					'gp1'		=> Request::input('gp1'),
					'gp2'		=> Request::input('gp2'),
					'gp3'		=> Request::input('gp3'),
					'pay_code'	=> Request::input('pay_code'),
					'pay_name'	=> Request::input('pay_name'),
					'vat_rate'	=> $tax_rate,
					'doc_status'	=> 'PAL',
					'tot_qty'		=> $tot_qty,
					'tot_amt'	=> $tot_amt,
					'tot_netamt'	=> $net_amt,
					'tot_discamt'	=> Request::input('disc_amt'),
					'pm_total_price'	=> Request::input('pm_total_price'),
					'pm_price'	=> Request::input('pm_price'),
					'remark1'	=> Request::input('remark'),
					'created_by'	=> Auth::user()->username,
					'created_at'	=> date('Y-m-d H:i:s')
				);

				//dd($data_cos_mast);

				//Insert to po_head
				$cos_invmast_insert = DB::table('cos_invmast')->insertGetId($data_cos_mast);


				//Insert to po_details

				if($cos_invmast_insert)
				{
					//à¸£à¸±à¸šà¸„à¹ˆà¸²à¸•à¸±à¸§à¹à¸›à¸£à¸²à¸ˆà¸²à¸ JQuery à¹€à¸›à¹‡à¸™à¸•à¸±à¸§à¹à¸›à¸£à¸² Array
					$getprodcode = Request::input('procode');
					$getprodname = Request::input('proname');
					$getqty = Request::input('qty');
					$getprice = Request::input('price');
					$getsp_size = Request::input('sp_size');
					$getsp_size_desc = Request::input('sp_size_desc');

					$getprodset = Request::input('prodset');

					$count_item = count($getprodcode);

					//dd($count_item);

					// à¸–à¹‰à¸²à¸—à¸µà¸à¸²à¸£à¸šà¸±à¸™à¸—à¸¶à¸à¸£à¸²à¸¢à¸à¸²à¸£à¸ªà¸´à¸™à¸„à¹‰à¸²
					if($count_item)
					{
						$item = 1;
						$item_prod = 1;
						for($i=0;$i<$count_item;$i++)
						{
							$data_cos_det = array(

								'cos_invmast_id'	=> $cos_invmast_insert,
								'cos_entity'		=> $cos_entity,
								'cos_no'		=> $cos_no,
								'doc_code'		=> $doc_code,
								'doc_no'		=> Request::input('doc_no'),
								'item'			=> $item,
								'prod_code'		=> $getprodcode[$i],
								'prod_name' 		=> $getprodname[$i],
								'qty'			=> $getqty[$i],
								'sale_price'		=> $getprice[$i],
								'amt'			=> $getqty[$i] * $getprice[$i],
								'vat_rate'		=> $tax_rate,
								'sp_size'		=> $getsp_size[$i],
								'sp_size_desc'	=> $getsp_size_desc[$i],
								'pmt_product_set_id' 	=> $getprodset[$i],
								'created_by'		=> Auth::user()->username,
								'created_at'		=> date('Y-m-d H:i:s')

							);

							DB::table('cos_invdet')->insert($data_cos_det);

							//echo $getprodset[$i];

							$data_prod = PmtProductModel::where('pmt_product_set_id',$getprodset[$i])->first();
							
							$data_set = array(
								'cos_invmast_id'	=> $cos_invmast_insert,
								'item'			=> $item_prod,
								'prod_code'		=> $data_prod->prod_code,
								'prod_name'		=> $data_prod->prod_tname,
								'barcode'		=> $data_prod->bar_code,
								'uom_code'		=> $data_prod->uom_code,
								'sale_price'		=> $getprice[$i],
								'qty'			=> $getqty[$i],	
								'amt'			=> $getqty[$i] * $getprice[$i],
								'sp_size_desc'		=> $getsp_size_desc[$i],
								'created_by'		=> Auth::user()->username,
								'created_at'		=> date('Y-m-d H:i:s')

							);

							//dd($data_set);

							DB::table('cos_invdet_product')->insert($data_set);


							$item_prod ++;

							//dd($data_prod);	

							$item ++;

						}

						/*$sales = array(
							'sales' 		=> CosInvmast::where('cust_code','CXXXX')->OrderBy('doc_date','desc')->get(),
							'refresh'	=> true,
							'data_success'		=>"Insert_Success"
						);*/
						

						return "Insert_Success";
					}



				}
			}

			

		}else{
			if( Request::ajax() ) 
			{
				
				$doc_code = DB::table('doc_mast')->where('doc_code', 'PO')->pluck('doc_code');
				$cos_no = DB::table('entity')->where('entity_code', Auth::user()->current_cust_code_logon)->pluck('cos_no');
				
				$doc_head = $doc_code . $cos_no. date('ym');

				$sql = "select ifnull(substr(max(doc_no),-4,4),0)+1 no  from cos_invmast where doc_no like '" . $doc_head . "%'";
				$data = DB::select($sql);
				$doc_no = $doc_head . str_pad($data[0]->no,4,'0',STR_PAD_LEFT);
				
				
				return  view('sales.add_salesform')->withErrors($validator)->withInput(Request::all())->with('doc_no',$doc_no);				
				
				/*$errors = $validator->errors();
				    $errors =  json_decode($errors); 

				    return response()->json([
				        'success' => false,
				        'message' => $errors
				    ]);*/
			}

			return 0;
		}	


	}

	public function  editOrder()
	{
		
		if(!empty(Request::input('doc_no')))
		{	
			
			$id = Request::input('id');

			$can = Request::input('can');

			if($can=="Y")
			{
				$status = "OCL";
			}
			else
			{
				$status ="PAL";
			}

			
			$data_entity = Entity::where('entity_code',Auth::user()->current_cust_code_logon)->get(['entity_tname','cos_no','sale_type','tax_rate']);
			
			$cos_entity = "B10";
			$doc_code = "PO";
			$cust_name = $data_entity[0]->entity_tname;
			$cos_no = $data_entity[0]->cos_no;
			$tax_rate = $data_entity[0]->tax_rate;

			$ddate = date_create_from_format('d/m/Y', Request::input('doc_date'));
			$doc_date = date_format($ddate, 'Y-m-d');

			$rdate = date_create_from_format('d/m/Y', Request::input('req_date'));
			$req_date = date_format($rdate, 'Y-m-d');

			$getqty = Request::input('qty');
			$getprice = Request::input('price');
			$disc_amt = Request::input('disc_amt');
			$count_qty = count($getqty);
			$tot_amt = 0;
			$net_amt = 0;

			for($j=0;$j<$count_qty;$j++)
			{	
				$tot_amt += $getqty[$j] * $getprice[$j];
			}

			$net_amt = $tot_amt - $disc_amt;
			$tot_qty = array_sum($getqty);


			$data_cos_mast = array(
				'cos_entity'	=> $cos_entity,
				'cos_no'	=> $cos_no,
				'doc_code'	=> $doc_code,
				'doc_no' 	=> Request::input('doc_no'),
				'doc_date' 	=> $doc_date,  
				'req_date' 	=> $req_date,   
				'pmt_no' 	=> Request::input('pmt_no'), 
				'cust_code'	=> Auth::user()->current_cust_code_logon,
				'cust_name'	=> $cust_name,
				'ship_titlename'	=> Request::input('ship_titlename'),
				'ship_custname'	=> Request::input('ship_custname'),
				'ship_custsurname'	=> Request::input('ship_custsurname'), 
				'ship_address1'	=> Request::input('ship_address1'),
				'ship_address2'	=> Request::input('ship_address2'),
				'prov_code'	=> Request::input('prov_code'),
				'prov_name'	=> Request::input('prov_name'),
				'post_code'	=> Request::input('post_code'),
				'ship_tel'		=> Request::input('tel'),
				'email_address'	=> Request::input('email_address'),
				'po_file'	=> Request::input('po_file'),
				'gp1'		=> Request::input('gp1'),
				'gp2'		=> Request::input('gp2'),
				'gp3'		=> Request::input('gp3'),
				'pay_code'	=> Request::input('pay_code'),
				'pay_name'	=> Request::input('pay_name'),
				'pm_total_price'	=> Request::input('pm_total_price'),
				'pm_price'	=> Request::input('pm_price'),
				'remark1'	=> Request::input('remark'),
				'vat_rate'	=> $tax_rate,
				'doc_status'	=> $status,
				'tot_qty'	=> $tot_qty,
				'tot_amt'	=> $tot_amt,
				'tot_netamt'	=> $net_amt,
				'tot_discamt'	=> Request::input('disc_amt'),
				'created_by'	=> Auth::user()->username,
				'created_at'	=> date('Y-m-d H:i:s')
			);

			//dd($data_cos_mast);
			//Insert to po_head
			$cos_invmast_insert = DB::table('cos_invmast')->insertGetId($data_cos_mast);


			//Insert to po_details

			if($cos_invmast_insert)
			{
				//à¸£à¸±à¸šà¸„à¹ˆà¸²à¸•à¸±à¸§à¹à¸›à¸£à¸²à¸ˆà¸²à¸ JQuery à¹€à¸›à¹‡à¸™à¸•à¸±à¸§à¹à¸›à¸£à¸² Array
				$getprodcode = Request::input('procode');
				$getprodname = Request::input('proname');
				$getqty = Request::input('qty');
				$getprice = Request::input('price');
				$getsp_size = Request::input('sp_size');
				$getsp_size_desc = Request::input('sp_size_desc');

				$getprodset = Request::input('prodset');


				$count_item = count($getprodcode);

				//dd($count_item);

				// à¸–à¹‰à¸²à¸—à¸µà¸à¸²à¸£à¸šà¸±à¸™à¸—à¸¶à¸à¸£à¸²à¸¢à¸à¸²à¸£à¸ªà¸´à¸™à¸„à¹‰à¸²
				if($count_item)
				{
					$item = 1;
					$item_prod = 1;
					for($i=0;$i<$count_item;$i++)
					{
						$data_cos_det = array(

							'cos_invmast_id'	=> $cos_invmast_insert,
							'cos_entity'		=> $cos_entity,
							'cos_no'		=> $cos_no,
							'doc_code'		=> $doc_code,
							'doc_no'		=> Request::input('doc_no'),
							'item'			=> $item,
							'prod_code'		=> $getprodcode[$i],
							'prod_name' 		=> $getprodname[$i],
							'qty'			=> $getqty[$i],
							'sale_price'		=> $getprice[$i],
							'amt'			=> $getqty[$i] * $getprice[$i],
							'vat_rate'		=> $tax_rate,
							'sp_size'		=> $getsp_size[$i],
							'sp_size_desc'		=> $getsp_size_desc[$i],
							'pmt_product_set_id' 	=> $getprodset[$i],
							'created_by'		=> Auth::user()->username,
							'created_at'		=> date('Y-m-d H:i:s')

						);

						DB::table('cos_invdet')->insert($data_cos_det);

						$data_prod = PmtProductModel::where('pmt_product_set_id',$getprodset[$i])->first();
						
						//dd($data_cos_det);
						//dd($data_prod);
							$data_set = array(
								'cos_invmast_id'	=> $cos_invmast_insert,
								'item'			=> $item_prod,
								'prod_code'		=> $data_prod->prod_code,
								'prod_name'		=> $data_prod->prod_tname,
								'barcode'		=> $data_prod->bar_code,
								'uom_code'		=> $data_prod->uom_code,
								'sale_price'		=> $getprice[$i],
								'qty'			=> $getqty[$i],	
								'amt'			=> $getqty[$i] * $getprice[$i],
								'sp_size_desc'		=> $getsp_size_desc[$i],
								'created_by'		=> Auth::user()->username,
								'created_at'		=> date('Y-m-d H:i:s')

							);

							//dd($data_set);

							DB::table('cos_invdet_product')->insert($data_set);


							$item_prod ++;


						$item ++;

					}

					if(!empty($id))
					{
						$delete_mast=CosInvmast::where('id',$id)->delete();
						$delete_det = CosInvdet::where('cos_invmast_id',$id)->delete();
						$delete_product = CosInvdetProduct::where('cos_invmast_id',$id)->delete();
					}

					return "Edit_Success";
				}





			}
		}


	}

	public function  salesreport($id)
	{
		$data_mast = CosInvmast::find($id);
		$data_det = CosInvdetProduct::where('cos_invmast_id',$id)->OrderBy('item','asc')->get();

		$sql = "select a.emp_code , a.emp_name from cos_pcmast a , cos_pcwork b where b.cust_code='" . $data_mast->cust_code . "' and  b.work_date='" . $data_mast->doc_date. "' and b.work_type='1' and a.emp_code = b.emp_code and a.cust_code=b.cust_code";
		$data_sale = DB::select($sql);

		$cust_name = DB::table('entity')->where('entity_code',$data_mast->cust_code)->pluck('entity_tname');
		$i =1;
		$content ='
		<p><h2>Purchase Order</h2></p>
		     	<table>
		     	<tr>
		     	<td width="100">เลขที่</td>
			<td width="300">' . $data_mast->doc_no . '</td>
			<td width="80">วันที่</td>
			<td width="120">' . Carbon::parse($data_mast->doc_date)->format('d/m/Y') . '</td>
			<td width="80">วันที่ส่ง</td>
			<td width="120">'. Carbon::parse($data_mast->req_date)->format('d/m/Y') . '</td>
			</tr>

			<tr>
		     	<td width="100">ห้าง</td>
			<td width="300">' . $cust_name . '</td>
			<td width="80">ผู้ซื้อ</td>
			<td  colspan=3 width="320">' . $data_mast->ship_titlename . $data_mast->ship_custname . ' ' . $data_mast->ship_custsurname. '</td>
			
			</tr>

			

			<tr>
		     	<td width="100">Promotion</td>
			<td width="300">' . $data_mast->pmt_no . '</td>
			<td width="80">ที่อยู่</td>
			<td  colspan=3 width="320">' . $data_mast->ship_address1 . '</td>
			</tr>


			<tr>
		     	<td width="100">GP</td>
			<td width="300">' . $data_mast->gp1 . '   ' . $data_mast->gp2 . '   ' . $data_mast->gp3 . '</td>
			<td width="80"> </td>
			<td  colspan=3 width="320">' . $data_mast->ship_address2 . '  ' . $data_mast->prov_name . '  ' . $data_mast->post_code .  '</td>
			</tr>

			<tr>
		     	<td width="100"></td>
			<td width="300"></td>
			<td width="80">โทรศัพท์</td>
			<td width="120">' . $data_mast->ship_tel . '</td>
			<td width="80">Email</td>
			<td width="120">'. $data_mast->email_address  . '</td>
			</tr>
			</table><br>

			<table border="1" bordercolor="#424242" cellpadding="0" cellspacing="0">
			<tr>
			<td align="center" bgcolor="#D5D5D5" height="25">Item</td>	
			<td align="center" bgcolor="#D5D5D5">Product Code</td>
			<td align="center" bgcolor="#D5D5D5">Product Name</td>	
			<td align="center" bgcolor="#D5D5D5">Qty</td>	
			<td align="center" bgcolor="#D5D5D5">Price</td>	
			<td align="center" bgcolor="#D5D5D5">Amount</td>	
			<td align="center" bgcolor="#D5D5D5">Special Size</td>
			</tr align="center" bgcolor="#D5D5D5">';

			 foreach ($data_det as  $dbarr) { 
				
			
			$content = $content . '<tr>
			<td width="50" align="right" height="25">' . $dbarr->item . '</td>	
			<td width="150">' . $dbarr->prod_code . '</td>
			<td width="200">' . $dbarr->prod_name . '</td>	
			<td width="80" align="right" >' . $dbarr->qty . '</td>	
			<td width="100" align="right">' . number_format($dbarr->sale_price,2) . '</td>	
			<td width="100" align="right">' . number_format($dbarr->amt,2) . '</td>	
			<td width="100">' . $dbarr->sp_size_desc . '</td>
			</tr>';
			} 
		
		$content = $content . '
			<tr>
			<td width="50" align="right" height="30"></td>	
			<td width="150"></td>
			<td width="200">รวม</td>	
			<td width="80" align="right" >' . $data_mast->tot_qty . '</td>	
			<td width="100" align="right"></td>	
			<td width="100" align="right">' . number_format($data_mast->tot_amt,2) . '</td>	
			<td width="100"></td>
			</tr>
			<tr>
			<td width="480" align="right" height="30" colspan=4></td>	
			<td width="100" align="right">ส่วนลด</td>	
			<td width="100" align="right">' . number_format($data_mast->tot_discamt,2) . '</td>	
			<td width="100"></td>
			</tr>
			<tr>
			<td width="480" align="right" height="30" colspan=4></td>	
	
			<td width="100" align="right">รวมทั้งสิ้น</td>	
			<td width="100" align="right">' . number_format($data_mast->tot_netamt,2) . '</td>	
			<td width="100"></td>
			</tr>
			</table><br>';
		$content = $content . 'ชำระเงินโดย : ' . $data_mast->pay_name;

		$content = $content .'<br><br>พนักงานขาย';
		$content = $content . '<table>';
		 foreach ($data_sale as  $dbsale) { 
				
			
			$content = $content . '<tr>
			<td width="50" align="right" height="25">' . $i . '</td>	
			<td width="150">' . $dbsale->emp_name . '</td>
			</tr>';
			$i++;
			} 
		$content = $content . '</table>';


		$mpdf = new mPDF('th', 'A4', '0', 'Tahoma'); 
		$mpdf->WriteHTML($content);
		$mpdf->Output();


	}
}
