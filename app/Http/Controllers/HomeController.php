<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use Auth;
class HomeController extends Controller {

	public function index()
	{

		return view("auth.login");
		//return view("home.index");
	}
	public function home()
	{

		return view("home.index");
	}
}
