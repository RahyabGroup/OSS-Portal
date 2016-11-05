<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use Redirect;
class LanguageController extends Controller
{
    public function dashboard($lang)
	{
		Session_start();
		$langs=['fa','en'];
		if(in_array($lang,$langs)){
			Session::set('lang',$lang);
			return Redirect::back()->with('lang_msg','zzzz');
		}
	}
}
