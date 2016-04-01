<?php namespace App\Http\Controllers\Report;

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

class RptpromotionContoller extends Controller {

	public function  rpt_promotion($id)
	{

		//-------------Promotion Info ----------------------------------------------------
		$content1 =   DB::table('pmt_mast')
			            ->where('pmt_mast.pmt_mast_id', '=', $id)
			            ->get();

			foreach ($content1 as  $contentTmp) 
			{
				$pmt_mast_id    = $contentTmp->pmt_mast_id;
				$pmt_no 		= $contentTmp->pmt_no;
				$pmt_name 		= $contentTmp->pmt_name ;
				$start_date  	= $contentTmp->start_date;
				$end_date 		= $contentTmp->end_date;
				$ref_doc_no     = $contentTmp->ref_doc_no;
				$pmt_desc 		= $contentTmp->pmt_desc;
				$pmt_type       = $contentTmp->pmt_type;
				$gp_amt 		= $contentTmp->gp_amt;
				$dept_code		= $contentTmp->dept_code;

				$contentTXT1 = '<p><h4>'.'เลขที่โปรโมชั่น '.$pmt_no .'</h4></p>' 
						     	.'<table>'
		     					.'<tr>'
								.'<td width="120">ชื่อโปรโมชั่น ' .'</td>' . '<td width="300">'.$pmt_name.'</td>'
								.'<tr>'
										.'<td width="120">ช่วงเวลา</td>'
										.'<td width="200">' . Carbon::parse($start_date)->format('d/m/Y') .' ถึง '. Carbon::parse($end_date)->format('d/m/Y'). '</td>'
								.'</tr>'
								.'<tr>'
									.'<td width="120">เลขเอกสารอ้างอิง ' .'</td>' . '<td width="300">' .$ref_doc_no.'</td>'
									. '<td width="100">'.'GP: '.$gp_amt.'</td>'
								.'</tr>'
								.'<tr>'
									.'<td width="120">รายละเอียด ' .'</td>' 
								.'</tr>'
								.'<tr>'
									.'<td width="120"> ' .'</td>' . '<td width="600">' .$pmt_desc.'</td>'
								.'</tr>'
								.'</tr>'
								.'</table>'
							;
			}
		//-------------ห้างที่ จัดรายการ  ----------------------------------------------------
		$content2 = "";
		$content2 = DB::table('pmt_consignee')
		            ->join('entity', 'pmt_consignee.entity_code', '=', 'entity.entity_code')
		            ->select('pmt_consignee.consignee_id','pmt_consignee.entity_code','pmt_consignee.discount_amt', 'entity.entity_tname')
		            ->where('pmt_consignee.pmt_mast_id', '=', $pmt_mast_id)
		            ->orderby('pmt_consignee.entity_code','asc')
		            ->get();

		$contentTXT2h = '<tr>'
						.'<td width="120">ห้างจัดรายการ' .'</td>' 
						.'</tr>'
			.'<table border="1" bordercolor="#424242" cellpadding="0" cellspacing="0">'
			.'<tr>'	
			.'<td align="center" bgcolor="#D5D5D5" height="25">รหัส</td>'
			.'<td align="center" bgcolor="#D5D5D5">ห้าง-รา้น</td>'
			.'</tr align="center" bgcolor="#D5D5D5">'
			;

			 foreach ($content2 as  $content2Tmp) 
			 {
				$contentTXT2d = $contentTXT2d_tmp . '<tr>'
				.'<td width="100" align="left" height="25">' . $content2Tmp->entity_code . '</td>'	
				.'<td width="500">' . $content2Tmp->entity_tname . '</td>'
				.'</tr>'
				;

				$contentTXT2d_tmp = $contentTXT2d ;
			 }
				
			 $contentTXT2d = $contentTXT2d .'</table>' ;

			 $contentTXT2 = $contentTXT2h . $contentTXT2d ;
		//-------------ส่วนลด ไม่รับของแถม ขขขขขขขขขขขขขขขขข
		$content3 = "";
		$content3 = DB::table('pmt_disc_premium_deny')
		            ->where('pmt_disc_premium_deny.pmt_mast_id', '=', $pmt_mast_id)
		            ->orderby('pmt_disc_premium_deny.pdsize_code','asc')
		            ->get();

		$contentTXT3h = '<p></p>'
						.'<tr>'
						.'<td width="300">การให้ส่วนลดสำหรับลูกค้าไม่รับของแถม' .'</td>' 
						.'</tr>'

			.'<table border="1" bordercolor="#424242" cellpadding="0" cellspacing="0">'
			.'<tr>'	
			.'<td align="center" bgcolor="#D5D5D5" height="25">ส่วนลดตามขนาด</td>'
			.'<td align="center" bgcolor="#D5D5D5">ส่วนลด(บาท)</td>'
			.'<td align="center" bgcolor="#D5D5D5">ส่วนลด(%)</td>'
			.'</tr align="center" bgcolor="#D5D5D5">'
			;

			 foreach ($content3 as  $content3Tmp) 
			 {
				$contentTXT3d = $contentTXT3d_tmp . '<tr>'
				.'<td width="300" align="center" height="25">' . $content3Tmp->pdsize_desc . '</td>'	
				.'<td width="150" align="right" >' .'  '. number_format($content3Tmp->discount_amt,2) . '</td>'
				.'<td width="150" align="right" >' .'  '. number_format($content3Tmp->discount_percen * 100,2) . '%' . '</td>'
				.'</tr>'
				;

				$contentTXT3d_tmp = $contentTXT3d ;
			 }
				
			 $contentTXT3d = $contentTXT3d .'</table>' ;

			 $contentTXT3 = $contentTXT3h . $contentTXT3d ;

		//-------------ส่วนลด กร๊ซื้อสินค้าครบ  ----------------------------------------------------

		$content4 = "";
		$content4 = DB::table('pmt_disc_shop_rate')
					->join('pmt_group_mast', 'pmt_group_mast.pmt_group_code', '=', 'pmt_disc_shop_rate.transaction_code') 
		            ->where('pmt_disc_shop_rate.pmt_mast_id', '=', $pmt_mast_id)
		            ->select('pmt_disc_shop_rate.*','pmt_group_mast.*')
		            ->orderby('pmt_disc_shop_rate.purchase_rate_amt','asc')
		            ->get();

		$contentTXT4h = '<p></p>'
						.'<tr>'
						.'<td width="300">การให้ส่วนลด กรณีซื้อสินค้าครบตามกำหนด' .'</td>' 
						.'</tr>'

			.'<table border="1" bordercolor="#424242" cellpadding="0" cellspacing="0">'
			.'<tr>'	
			.'<td align="center" bgcolor="#D5D5D5" height="25">ซื้อครบ</td>'
			.'<td align="center" bgcolor="#D5D5D5" >รายละเอียดส่วนลด</td>'
			.'<td align="center" bgcolor="#D5D5D5">มูลค่า(บาท)</td>'
			.'<td align="center" bgcolor="#D5D5D5">ส่วนลด(%)</td>'
			.'</tr align="center" bgcolor="#D5D5D5">'
			;

			 foreach ($content4 as  $content4Tmp) 
			 {
				$contentTXT4d = $contentTXT4d_tmp . '<tr>'
				.'<td width="150" align="left" height="25">' .'  '. number_format($content4Tmp->purchase_rate_amt,2) . '</td>'
				.'<td width="250" align="left" >' . $content4Tmp->pmt_group_name .' '. $content4Tmp->product_set_name . '</td>'	
				.'<td width="100" align="right" >' .'  '. number_format($content4Tmp->discount_amt,2) . '</td>'
				.'<td width="100" align="right" >' .'  '. number_format($content4Tmp->discount_percen * 100,2) . '%' . '</td>'
				.'</tr>'
				;

				$contentTXT4d_tmp = $contentTXT4d ;
			 }
				
			 $contentTXT4d = $contentTXT4d .'</table>' ;

			 $contentTXT4 = $contentTXT4h . $contentTXT4d ;

		//-------------ส่วนลด การชำระเงิน  ----------------------------------------------------

		$content5 = "";
		$content5 = DB::table('pmt_disc_payment_rate')
					->join('pmt_group_mast', 'pmt_group_mast.pmt_group_code', '=', 'pmt_disc_payment_rate.transaction_code') 
		            ->where('pmt_disc_payment_rate.pmt_mast_id', '=', $pmt_mast_id)
		            ->select('pmt_disc_payment_rate.*','pmt_group_mast.*')
		            ->orderby('pmt_disc_payment_rate.purchase_rate_amt','asc')
		            ->get();

		$contentTXT5h = '<p></p>'
						.'<tr>'
						.'<td width="300">การให้ส่วนลด การชำระเงิน' .'</td>' 
						.'</tr>'

			.'<table border="1" bordercolor="#424242" cellpadding="0" cellspacing="0">'
			.'<tr>'	
			.'<td align="center" bgcolor="#D5D5D5" height="25">ซื้อครบ</td>'
			.'<td align="center" bgcolor="#D5D5D5" >รายละเอียดส่วนลด</td>'
			.'<td align="center" bgcolor="#D5D5D5">มูลค่า(บาท)</td>'
			.'<td align="center" bgcolor="#D5D5D5">ส่วนลด(%)</td>'
			.'</tr align="center" bgcolor="#D5D5D5">'
			;

			 foreach ($content5 as  $content5Tmp) 
			 {
				$contentTXT5d = $contentTXT5d_tmp . '<tr>'
				.'<td width="150" align="left" height="25">' .'  '. number_format($content5Tmp->purchase_rate_amt,2) . '</td>'
				.'<td width="250" align="left" >' . $content5Tmp->pmt_group_name .' '. $content5Tmp->product_set_name . '</td>'	
				.'<td width="100" align="right" >' .'  '. number_format($content5Tmp->discount_amt,2) . '</td>'
				.'<td width="100" align="right" >' .'  '. number_format($content5Tmp->discount_percen ,2) . '%' . '</td>'
				.'</tr>'
				;

				$contentTXT5d_tmp = $contentTXT5d ;
			 }
				
			 $contentTXT5d = $contentTXT5d .'</table>' ;

			 $contentTXT5 = $contentTXT5h . $contentTXT5d ;

		//------------- รายการ Product Package  ----------------------------------------------------

		$content6 = "";
		$content6 = DB::table('pmt_package_mast')
		            ->where('pmt_package_mast.pmt_mast_id', '=', $pmt_mast_id)
		            ->orderby('pmt_package_mast.pdmodel_code','pmt_package_mast.pdsize_code','asc')
		            ->get();

		$contentTXT6h = '<p></p>'
						.'<tr>'
						.'<td width="300">รายการจัดสินค้าโปรโมชั่น' .'</td>' 
						.'</tr>'

			.'<table border="1" bordercolor="#424242" cellpadding="0" cellspacing="0">'
			.'<tr>'	
			.'<td align="center" bgcolor="#D5D5D5" height="25">รุ่น</td>'
			.'<td align="center" bgcolor="#D5D5D5" >ขนาด</td>'
			.'<td align="center" bgcolor="#D5D5D5">ราคา</td>'
			.'<td align="center" bgcolor="#D5D5D5">มูลค่าของแถม</td>'
			.'<td align="center" bgcolor="#D5D5D5">มูลค่าทั้งชุด</td>'
			.'<td align="center" bgcolor="#D5D5D5">ราคาพิเศษ</td>'
			.'<td align="center" bgcolor="#D5D5D5">ราคาลดพิเศษ</td>'
			.'</tr align="center" bgcolor="#D5D5D5">'
			;

			 foreach ($content6 as  $content6Tmp) 
			 {
				$contentTXT6d = $contentTXT6d_tmp . '<tr>'
				.'<td width="150" align="left" height="25">' .'  '. $content6Tmp->pdmodel_desc . '</td>'
				.'<td width="250" align="left" >' . $content6Tmp->pdsize_desc . '</td>'	
				.'<td width="100" align="right" >' .'  '. number_format($content6Tmp->package_unit_price,2) . '</td>'
				.'<td width="100" align="right" >' .'  '. number_format($content6Tmp->pm_total_price,2) . '</td>'
				.'<td width="100" align="right" >' .'  '. number_format($content6Tmp->total_price_amt,2) . '</td>'
				.'<td width="100" align="right" >' .'  '. number_format($content6Tmp->special1_price_amt,2) . '</td>'
				.'<td width="100" align="right" >' .'  '. number_format($content6Tmp->special2_price_amt ,2) . '</td>'
				.'</tr>'
				;

				$contentTXT6d_tmp = $contentTXT6d ;
			 }
				
			 $contentTXT6d = $contentTXT6d .'</table>' ;

			 $contentTXT6 = $contentTXT6h . $contentTXT6d ;

		$contentAll = $contentTXT1  . $contentTXT2 . $contentTXT3 . $contentTXT4 . $contentTXT5 . $contentTXT6 ;

		$mpdf = new mPDF('th', 'A4', '0', 'Tahoma'); 
		$mpdf->WriteHTML($contentAll);
		$mpdf->Output();
	}

}
