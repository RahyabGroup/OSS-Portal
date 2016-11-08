<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class pagesController extends Controller
{
    public function welcome()
	{
		return view('welcome');
	}
    public function forofor()
	{
		return view('404');
	}
    
   
    public function aroosha_oss()
	{
		return view('aroosha_oss');
	}
    public function dashboard2()
	{
		return view('dashboard2');
	}
    
   
    public function index()
	{
		return view('index');
	}
   
    public function login()
	{
		return view('login');
	}
 
    public function register()
	{
		return view('register');
	}
   
   
	public function switch_lang()
	{
		return view('switch_lang');
	}
    public function lang_en()
	{
		return view('lang_en');
	}
    public function lang_fa()
	{
		return view('lang_fa');
	}
	public function define_lang()
	{
		return view('define_lang');
	}
	public function loginn()
	{
		return view('loginn');
	}
	public function checklogin()
	{
		return view('checklogin');
	}
	public function generate()
	{
		return view('generate');
	}
	public function dashboardTwo()
	{
		return view('dashboard2');
	}
public function dashboardThree()
	{
		return view('dashboard3');
	}
public function dashboardFour()
	{
		return view('dashboard4');
	}
	public function dashboardFive()
	{
		return view('dashboard5');
	}
	public function my_tickets()
	{
		return view('my_tickets');
	}
	public function dashboardSeven()
	{
		return view('dashboard7');
	}
	public function dashboardEight()
	{
		return view('dashboard8');
	}
	
	public function dashboardTest()
	{
		return view('dashboardTest');
	}
	public function getMyTask()
	{
		return view('getMyTask');
	}
	public function pagechat()
	{
		return view('page_chat');
	}
	public function ui_paneltwo()
	{
		return view('ui_panel2');
	}
	public function my_tasks()
	{
		return view('my_tasks');
	}
	public function my_sent_tasks()
	{
		return view('my_sent_tasks');
	}
	public function paginationx_my_sent_tasks()
	{
		return view('paginationx_my_sent_tasks');
	}
	
	public function taskDetailes_my_sent_tasks()
	{
		return view('taskDetailes_my_sent_tasks');
	}
	
	public function dashboardNine()
	{
		return view('dashboard9');
	}
	
	public function pagination()
	{
		return view('pagination');
	}
	
	
	public function paginationx()
	{
		return view('paginationx');
	}
	
	
	public function ui_panelx()
	{
		return view('ui_panelx');
	}
	
	public function data()
	{
		return view('data');
	}
	
	
	public function dashboardTen()
	{
		return view('dashboard10');
	}
	
	public function paginationDetaile()
	{
		return view('paginationDetaile');
	}
	
	public function variables()
	{
		return view('variables');
	}
	
	public function taskDetailes()
	{
		return view('taskDetailes');
	}
	
}
