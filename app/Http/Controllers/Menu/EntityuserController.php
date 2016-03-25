<?php namespace App\Http\Controllers\Menu;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;
use Validator;
use DB ;
// Model
use App\Client;
use Auth;

class EntityuserController extends Controller {

	public function getentityuserlist()
	{
		$data_obj_info = DB::table('users')
							->orderby('username','asc')
							->get();


		return view('admin.entityuser')->with('data_obj_info',$data_obj_info);
	}
	public function search_entityuser()
	{
        $query = urldecode( Request::input('search'));

        if ($query) {
            $data_obj_info = DB::table('users')
            	->where('username', 'LIKE', "%$query%")
                ->orWhere('fullname', 'LIKE', "%$query%")
                ->orWhere('tel', 'LIKE', "%$query%")
                ->paginate(10);
        } else {
			$data_obj_info = DB::table('users')
							->orderby('username','asc')
							->paginate(10);
        }

		return view('admin.entityuser')->with('data_obj_info',$data_obj_info);

	}

	public function getentityuserform($id )
	{
	

		$user_obj_data = DB::table('users')
							->where('id','=',$id)
							->get();


        $pmt_consignee_obj_data = DB::table('su_user_entity_allow')
            ->join('entity', 'su_user_entity_allow.CustomerCode', '=', 'entity.entity_code')
            ->select('su_user_entity_allow.*','su_user_entity_allow.entity_code as entitycode','entity.*')
            ->where('su_user_entity_allow.id', '=', $id)
            ->orderby('su_user_entity_allow.CustomerCode','asc')
            ->get();

  		return  view('admin.entityuser_form')->with(['user_obj_data'=>$user_obj_data,'pmt_consignee_obj_data'=>$pmt_consignee_obj_data]); 


	}

    public function submitaddCustAllow()
	{
		$username = Auth::user()->username ;
		$id = Request::input('user_id');

			if(!empty($id  ))
			{
				DB::table('su_user_entity_allow')
				->where('id', '=', $id)
				->delete();
				//-----Delete ก่อน ----------------
				$CustomerCode = Request::input('CustomerCode');
				$entitycode = Request::input('entitycode');
				 
				$count_detail = count($CustomerCode);
				if($count_detail)
				{

					for($i=0;$i<$count_detail;$i++)
					{

						$data_podetail = array(
								'id'	=> $id,
								'Entity_code'	=> $entitycode[$i],
								'CustomerCode'	=> $CustomerCode[$i],
								'created_by' =>$username,
								'created_at'	=> date('Y-m-d H:i:s')
						);
						
						DB::table('su_user_entity_allow')->insert($data_podetail);
					}
					
				}

				return "Insert_Success";
			}
				
	}


}
