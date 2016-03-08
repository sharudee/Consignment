<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//use Illuminate\Http\Request;

use Request;
use DB;
use Auth;


// Model
use App\Http\Model\Custmast;

class CustomerController extends Controller {

	public function index()
	{

		return view('sales.customer');

	}

	public function submitcustomer()
	{
			//$cust_name = Request::input('ship_custname');
			if(!empty(Request::input('ship_custname')))
			{	
				
				$name = DB::table('cust_mast')->where('cust_name',Request::input('ship_custname'))->where('cust_surname',Request::input('ship_custsurname'))->pluck('cust_name');

				if(empty($name))
				{
					$sql = "select ifnull(substr(max(cust_code),-5,5),0)+1 no  from cust_mast where cust_code like 'CS%'";
					$data = DB::select($sql);
					$cust_code = 'CS' . str_pad($data[0]->no,5,'0',STR_PAD_LEFT);

					$data_customer = array(
						'cust_code'		=> $cust_code,
						'name_title'		=> Request::input('ship_titlename'),
						'cust_name'		=> Request::input('ship_custname'),
						'cust_surname'	=> Request::input('ship_custsurname'), 
						'address1'		=> Request::input('ship_address1'),
						'address2'		=> Request::input('ship_address2'),
						'prov_code'		=> Request::input('prov_code'),
						'prov_name'		=> Request::input('prov_name'),
						'post_code'		=> Request::input('post_code'),
						'tel'			=> Request::input('tel'),
						'email_address'	=> Request::input('email'),
						'mobile_no'		=> Request::input('mobile_no'),
						'line_id'			=> Request::input('line_id'),
						'id_card'		=> Request::input('id_card'),	
						'sex'			=> Request::input('sex'),	
						'created_by'		=> Auth::user()->username,
						'created_at'		=> date('Y-m-d H:i:s')
					);

					//Insert to po_head
					$customer_insert = DB::table('cust_mast')->insert($data_customer);

					if($customer_insert)
					{
						return "Insert_Success";
					}
				}
				else
				{
					return "Data_Duplicate";
				}
				
			}
	}

	public function customerlist()
	{
		$data_cust = Custmast::orderBy('cust_code','asc')->get();

		
		return view('sales.customerlist')->with('customer',$data_cust);

	}

	public function customershow($id)
	{
		$data_cust = Custmast::find($id);

		//dd($data_cust);
		return view('sales.customer_show')->with('custmast',$data_cust);

	}

	public function customeredit($id)
	{
		$data_cust = Custmast::find($id);

		//dd($data_cust);
		return view('sales.customer_edit')->with('custmast',$data_cust);

	}


	public function editcustomer()
	{
			//$cust_name = Request::input('ship_custname');
			if(!empty(Request::input('ship_custname')))
			{	


					$id = Request::input('id');
					$data_customer = array(
						'name_title'		=> Request::input('ship_titlename'),
						'cust_name'		=> Request::input('ship_custname'),
						'cust_surname'	=> Request::input('ship_custsurname'), 
						'address1'		=> Request::input('ship_address1'),
						'address2'		=> Request::input('ship_address2'),
						'prov_code'		=> Request::input('prov_code'),
						'prov_name'		=> Request::input('prov_name'),
						'post_code'		=> Request::input('post_code'),
						'tel'			=> Request::input('tel'),
						'email_address'	=> Request::input('email'),
						'mobile_no'		=> Request::input('mobile_no'),
						'line_id'			=> Request::input('line_id'),
						'id_card'		=> Request::input('id_card'),	
						'sex'			=> Request::input('sex'),	
						'created_by'		=> Auth::user()->username,
						'created_at'		=> date('Y-m-d H:i:s')
					);

					//Insert to po_head
					//$customer_insert = DB::table('cust_mast')->insert($data_customer);

					$data_update =Custmast::find($id);
					$data_update->update($data_customer);
					
					if($data_update)
					{
						return "Success";
					}
				
				
			}
	}
}
