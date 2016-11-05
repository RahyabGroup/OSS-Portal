<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    public function getLogin()
	{
		return view('login');
	}
	public function postLogin()
	{
		$input = Input::all();
		$rules = array('email'=>'required','password'=>'required');
		$v = validator::make($input,$rules);
		if($v->failes())
		{
			return Redirect::to('login')->withErrors($v);
		}
		else
		{
		$credentials = array('email'=>$input['email'],'password'=> $input['password']);
		if(Auth::attempt($credentials))
		{
			return Redirect::to('admin');
		}
		else
		{
			return Redirect::to('login');
		}
		}
	}
	
	public function logout()
	{
		Auth::logout();
		return Redirect::to('/');
	}
}
