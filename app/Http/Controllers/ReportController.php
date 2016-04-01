<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//use Illuminate\Http\Request;

use Auth;
use Request;
use App;
use MPDF;
use DB;

class ReportController extends Controller {

	public function productreport()
	{

		return view('report.product_report');
	}

	public function productbrand1()
	{
		$sqlbrand = "select distinct pdbrnd_code , pdbrnd_desc from product order by pdbrnd_code";
		$brand = DB::select($sqlbrand); 

		return view('report.product_brand1')->with('brand',$brand);
	}

	public function productbrand2()
	{
		$sqlbrand = "select distinct pdbrnd_code , pdbrnd_desc from product order by pdbrnd_code";
		$brand = DB::select($sqlbrand); 

		return view('report.product_brand2')->with('brand',$brand);
	}

	public function productdesign1()
	{
		$sqldesign = "select distinct pddsgn_code , pddsgn_desc from product order by pddsgn_code";
		$design = DB::select($sqldesign); 

		return view('report.product_design1')->with('design',$design);
	}

	public function productdesign2()
	{
		$sqldesign = "select distinct pddsgn_code , pddsgn_desc from product order by pddsgn_code";
		$design = DB::select($sqldesign); 

		return view('report.product_design2')->with('design',$design);
	}

	public function productcolor1()
	{
		$sqlcolor = "select distinct pdcolor_code , pdcolor_desc from product order by pdcolor_code";
		$color = DB::select($sqlcolor); 

		return view('report.product_color1')->with('color',$color);
	}

	public function productcolor2()
	{
		$sqlcolor = "select distinct pdcolor_code , pdcolor_desc from product order by pdcolor_code";
		$color = DB::select($sqlcolor); 

		return view('report.product_color2')->with('color',$color);
	}

	public function productsize1()
	{
		$sqlsize = "select distinct pdsize_code , pdsize_desc from product order by pdsize_code";
		$size = DB::select($sqlsize); 

		return view('report.product_size1')->with('size',$size);
	}

	public function productsize2()
	{
		$sqlsize = "select distinct pdsize_code , pdsize_desc from product order by pdsize_code";
		$size = DB::select($sqlsize); 

		return view('report.product_size2')->with('size',$size);
	}

	public function productcode1($brand1,$brand2,$design1,$design2,$color1,$color2,$size1,$size2)
	{
		

		$sqlcode = "select distinct prod_code , prod_tname from product where pdbrnd_code between '". $brand1 . "'  and '". $brand2 ."' and pddsgn_code between '" . $design1 . "' and '" . $design2. "' and pdcolor_code between '".$color1 . "' and '" . $color2. "' and pdsize_code between '". $size1. "' and '" . $size2 . "'  order by prod_code";
		$prod_code = DB::select($sqlcode); 

		return view('report.product_code1')->with('prod_code',$prod_code);
	}

	public function productcode2($brand1,$brand2,$design1,$design2,$color1,$color2,$size1,$size2)
	{
		

		$sqlcode = "select distinct prod_code , prod_tname from product where pdbrnd_code between '". $brand1 . "'  and '". $brand2 ."' and pddsgn_code between '" . $design1 . "' and '" . $design2. "' and pdcolor_code between '".$color1 . "' and '" . $color2. "' and pdsize_code between '". $size1. "' and '" . $size2 . "'  order by prod_code";
		$prod_code = DB::select($sqlcode); 

		return view('report.product_code2')->with('prod_code',$prod_code);
	}

	public function productprint()
	{
		if (Request::Input('brand1') == "")
		{
			$brand1 = "0";
		}
		else
		{
			$brand1 = Request::Input('brand1');
		}

		if (Request::Input('brand2') == "")
		{
			$brand2 = "Z";
		}
		else
		{
			$brand2 = Request::Input('brand2');
		}

		if (Request::Input('design1') == "")
		{
			$design1 = "0";
		}
		else
		{
			$design1 = Request::Input('design1');
		}

		if (Request::Input('design2') == "")
		{
			$design2 = "Z";
		}
		else
		{
			$design2 = Request::Input('design2');
		}

		if (Request::Input('color1') == "")
		{
			$color1 = "0";
		}
		else
		{
			$color1 = Request::Input('color1');
		}

		if (Request::Input('color2') == "")
		{
			$color2 = "Z";
		}
		else
		{
			$color2 = Request::Input('color2');
		}

		if (Request::Input('size1') == "")
		{
			$size1 = "0";
		}
		else
		{
			$size1 = Request::Input('size1');
		}

		if (Request::Input('size2') == "")
		{
			$size2 = "Z";
		}
		else
		{
			$size2 = Request::Input('size2');
		}


		if (Request::Input('prod_code1') == "")
		{
			$prod_code1 = "0";
		}
		else
		{
			$prod_code1 = Request::Input('prod_code1');
		}

		if (Request::Input('prod_code2') == "")
		{
			$prod_code2 = "Z";
		}
		else
		{
			$prod_code2 = Request::Input('prod_code2');
		}

		$sql = "select distinct prod_code , prod_tname , pdgrp_desc , pdbrnd_desc , pddsgn_desc , pdcolor_desc , pdsize_desc  from product where pdbrnd_code between '". $brand1 . "'  and '". $brand2 ."' and pddsgn_code between '" . $design1 . "' and '" . $design2. "' and pdcolor_code between '".$color1 . "' and '" . $color2. "' and pdsize_code between '". $size1. "' and '" . $size2 . "'  and prod_code between '" . $prod_code1 . "' and '" . $prod_code2  . "' order by prod_code";
		$data = DB::select($sql);

		$content ='<p><h2>Product</h2></p>
		<table border="1" bordercolor="#424242" cellpadding="0" cellspacing="0">
			<tr>
			<td align="center" bgcolor="#D5D5D5" height="25">Product Code</td>	
			<td align="center" bgcolor="#D5D5D5">Product Name</td>
			<td align="center" bgcolor="#D5D5D5">Group</td>	
			<td align="center" bgcolor="#D5D5D5">Brand</td>	
			<td align="center" bgcolor="#D5D5D5">Design</td>	
			<td align="center" bgcolor="#D5D5D5">Color</td>	
			<td align="center" bgcolor="#D5D5D5">Size</td>
			</tr align="center" bgcolor="#D5D5D5">';

			 foreach ($data as  $dbarr) { 
				
			
			$content = $content . '<tr>
			<td width="150" align="left" height="25"><font size="3">' . $dbarr->prod_code . '</td>	
			<td width="200"><font size="3">' . $dbarr->prod_tname . '</td>
			<td width="80"><font size="3">' . $dbarr->pdgrp_desc . '</td>	
			<td width="70" align="left" ><font size="3">' . $dbarr->pdbrnd_desc . '</td>	
			<td width="80" align="left"><font size="3">' . $dbarr->pddsgn_desc . '</td>	
			<td width="100" align="left"><font size="3">' . $dbarr->pdcolor_desc . '</td>	
			<td width="80"><font size="3">' . $dbarr->pdsize_desc . '</td>
			</tr>';
			} 
		
		$content = $content . '</table><br>';


		$mpdf = new mPDF('th', 'A4', '0', 'Tahoma'); 
		$mpdf->WriteHTML($content);
		$mpdf->Output();

	}



	public function salereport()
	{

		return view('report.sale_report');
	}

	public function saleentity1()
	{
		$sqlentity = "select entity_code , entity_tname from entity where cust_grp='HO' order by entity_code";
		$entity = DB::select($sqlentity); 

		return view('report.sale_entity1')->with('entity',$entity);
	}

	public function saleentity2()
	{
		$sqlentity = "select entity_code , entity_tname from entity where cust_grp='HO' order by entity_code";
		$entity = DB::select($sqlentity); 

		return view('report.sale_entity2')->with('entity',$entity);
	}

	public function salecust1()
	{
		$sqlcust = "select entity_code , entity_tname from entity where cust_grp<>'HO' order by entity_code";
		$cust = DB::select($sqlcust); 

		return view('report.sale_cust1')->with('cust',$cust);
	}

	public function salecust2()
	{
		$sqlcust = "select entity_code , entity_tname from entity where cust_grp<>'HO' order by entity_code";
		$cust = DB::select($sqlcust); 

		return view('report.sale_cust2')->with('cust',$cust);
	}

	public function saledoccode1()
	{
		$sqldoc = "select doc_code , doc_desc from doc_mast   order by doc_code";
		$doc = DB::select($sqldoc); 

		return view('report.sale_doccode1')->with('doc',$doc);
	}

	public function saledoccode2()
	{
		$sqldoc = "select doc_code , doc_desc from doc_mast   order by doc_code";
		$doc = DB::select($sqldoc); 

		return view('report.sale_doccode2')->with('doc',$doc);
	}

	public function saledocno1($entity1,$entity2,$cust1,$cust2,$doc_code1,$doc_code2,$date1,$date2)
	{
		$sqldocno = "select doc_no , doc_date , cust_code from cos_invmast  where cos_entity between '" . $entity1 . "' and '" . $entity2 . "' and cust_code between '" . $cust1 . "' and '" . $cust2 . "' and doc_date between '" . $date1  . "'  and '" . $date2. "' and doc_code between '" . $doc_code1 . "' and '" . $doc_code2 . "' order by doc_no";
		//dd($sqldocno);
		$docno = DB::select($sqldocno); 

		return view('report.sale_docno1')->with('docno',$docno);
	}

	public function saledocno2($entity1,$entity2,$cust1,$cust2,$doc_code1,$doc_code2,$date1,$date2)
	{
		$sqldocno = "select doc_no , doc_date , cust_code from cos_invmast  where cos_entity between '" . $entity1 . "' and '" . $entity2 . "' and cust_code between '" . $cust1 . "' and '" . $cust2 . "' and doc_date between '" . $date1  . "'  and '" . $date2. "' and doc_code between '" . $doc_code1 . "' and '" . $doc_code2 . "' order by doc_no";
		//dd($sqldocno);
		$docno = DB::select($sqldocno); 

		return view('report.sale_docno2')->with('docno',$docno);
	}

	public function saleprint()
	{
		if (Request::Input('entity1') == "")
		{
			$entity1 = "0";
		}
		else
		{
			$entity1 = Request::Input('entity1');
		}

		if (Request::Input('entity2') == "")
		{
			$entity2 = "Z";
		}
		else
		{
			$entity2 = Request::Input('entity2');
		}

		if (Request::Input('doc_code1') == "")
		{
			$doc_code1 = "0";
		}
		else
		{
			$doc_code1 = Request::Input('doc_code1');
		}

		if (Request::Input('doc_code2') == "")
		{
			$doc_code2 = "Z";
		}
		else
		{
			$doc_code2 = Request::Input('doc_code2');
		}

		if (Request::Input('doc_date1') == "")
		{
			$doc_date1 = "1900-01-01";
		}
		else
		{
			$date1 = date_create_from_format('d/m/Y', Request::Input('doc_date1'));
			$doc_date1 = date_format($date1, 'Y-m-d');
		}

		if (Request::Input('doc_date2') == "")
		{
			$doc_date2 = "9999-12-31";
		}
		else
		{
			$date2 = date_create_from_format('d/m/Y', Request::Input('doc_date2'));
			$doc_date2 = date_format($date1, 'Y-m-d');
		}

		if (Request::Input('cust1') == "")
		{
			$cust1 = "0";
		}
		else
		{
			$cust1 = Request::Input('cust1');
		}

		if (Request::Input('cust2') == "")
		{
			$cust2 = "Z";
		}
		else
		{
			$cust2 = Request::Input('cust2');
		}


		if (Request::Input('doc_no1') == "")
		{
			$doc_no1 = "0";
		}
		else
		{
			$doc_no1 = Request::Input('doc_no1');
		}

		if (Request::Input('doc_no2') == "")
		{
			$doc_no2 = "Z";
		}
		else
		{
			$doc_no2 = Request::Input('doc_no2');
		}

		$sql = "select  id , doc_code , doc_no , doc_date , cust_code , ref_no , created_by , created_at , tot_discamt , tot_netamt  from cos_invmast  where cos_entity between '" . $entity1 . "' and '" . $entity2 . "' and cust_code between '" . $cust1 . "' and '" . $cust2 . "' and doc_date between '" . $doc_date1  . "'  and '" . $doc_date2. "' and doc_code between '" . $doc_code1 . "' and '" . $doc_code2 . "' and  doc_no between '" . $doc_no1 ."' and '" . $doc_no2 . "' order by doc_no";
		//dd($sql);
		$data = DB::select($sql); 

		$n = 1;
		$content ='<p><h2>Sales Report</h2></p>
		<table border="0" bordercolor="#424242" cellpadding="0" cellspacing="0">
			<tr>
			<td align="center" bgcolor="#D5D5D5" height="25">Item</td>	
			<td align="center" bgcolor="#D5D5D5">Doc No.</td>
			<td align="center" bgcolor="#D5D5D5">Doc Date</td>	
			<td align="center" bgcolor="#D5D5D5">Ref No.</td>	
			<td align="center" bgcolor="#D5D5D5">Cust Code</td>	
			<td align="center" bgcolor="#D5D5D5">Created By</td>	
			</tr align="center" bgcolor="#D5D5D5">
			<tr>	
			<td bgcolor="#D5D5D5"></td>
			<td width="210" align="left" bgcolor="#D5D5D5">Product Code</td>
			<td  width="300" align="left" bgcolor="#D5D5D5">Product Name</td>	
			<td  width="80" align="center" bgcolor="#D5D5D5">Unit</td>	
			<td bgcolor="#D5D5D5">Sale Price</td>	
			<td bgcolor="#D5D5D5">Qty &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Amount</td>


			</tr>';
			 foreach ($data as  $dbarr) { 
				
			
			$content = $content . '<tr>
			<td width="30" align="center" height="25"><font size="3">' . $n . '</td>	
			<td width="100" align="left"><font size="3">' . $dbarr->doc_code .'-'. $dbarr->doc_no  . '</td>
			<td width="80" align="center"><font size="3">' . $dbarr->doc_date . '</td>	
			<td width="100" align="left" ><font size="3">' . $dbarr->ref_no. '</td>	
			<td width="100" align="center"><font size="3">' . $dbarr->cust_code . '</td>	
			<td width="250" align="left"><font size="3">' . $dbarr->created_by .' / ' . $dbarr->created_at . '</td>	
			</tr>';
			
			
				$content = $content . '<tr><td colspan=6 width="100%"><table>';
				
				$sqldet = "select  item , prod_code , prod_name ,uom_code , sale_price , qty , amt from cos_invdet  where cos_invmast_id='" . $dbarr->id. "' order by item";
				//dd($sqldet);
				$datadet = DB::select($sqldet); 
				foreach ($datadet as  $dbdet) { 

					$content = $content . '<tr>
					<td width="20px" align="center" height="25"><font size="3"> </td>	
					<td width="40px" align="center" height="25"><font size="3">' . $dbdet->item . '</td>	
					<td width="150px" align="left"><font size="2">' . $dbdet->prod_code  . '</td>
					<td width="300px" align="left"><font size="2">' . $dbdet->prod_name . '</td>	
					<td width="80px" align="left" ><font size="3">' . $dbdet->uom_code. '</td>	
					<td width="100px" align="right"><font size="3">' . number_format($dbdet->sale_price,2) . '</td>	
					<td width="80px" align="right"><font size="3">' . $dbdet->qty . '</td>	
					<td width="100px" align="right"><font size="3">' . number_format($dbdet->amt,2) . '</td>	
					</tr>';	

				}
				
				$content = $content . '<tr>
					<td width="20px" align="center" height="25"><font size="3"> </td>	
					<td width="40px" align="center" height="25"><font size="3"></td>	
					<td width="150px" align="left"><font size="2"></td>
					<td width="300px" align="left"><font size="2"></td>	
					<td width="80px" align="left" ><font size="3"></td>	
					<td width="100px" align="right"><font size="3"></td>	
					<td width="80px" align="right"><font size="3">ส่วนลด</td>	
					<td width="100px" align="right"><font size="3">' . number_format($dbarr->tot_discamt,2) . '</td>	
					</tr>';	
				$content = $content . '<tr>
					<td width="20px" align="center" height="25"><font size="3"> </td>	
					<td width="40px" align="center" height="25"><font size="3"></td>	
					<td width="150px" align="left"><font size="2"></td>
					<td width="300px" align="left"><font size="2"></td>	
					<td width="80px" align="left" ><font size="3"></td>	
					<td width="100px" align="right"><font size="3"></td>	
					<td width="80px" align="right"><font size="3">รวมทั้ั้งสิ้น</td>	
					<td width="100px" align="right"><font size="3">' . number_format($dbarr->tot_netamt,2) . '</td>	
					</tr>';		
				
				$content = $content . '</table></td></tr>';
				$n++;	
			} 

		
		$content = $content . '</table><br>';


		$mpdf = new mPDF('th', 'A4', '0', 'Tahoma'); 
		$mpdf->WriteHTML($content);
		$mpdf->Output();

	}

}
