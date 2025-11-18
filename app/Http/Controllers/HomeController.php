<?php 
namespace App\Http\Controllers;

class HomeController extends Controller 
{
     public function index()
    {
        var_dump(Request::get('user_id','eric'));
		die;
        return view('home', ['title' => 'Welcome']);
    }
}