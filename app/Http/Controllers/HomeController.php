<?php 
namespace App\Http\Controllers;

use Careminate\Http\Resquests\Request;

class HomeController extends Controller 
{
     public function index()
    {
        echo "Welcome to home index";
    }

    public function about()
    {
        echo "Welcome to home about now";
    }

     public function setting()
    {
        echo "Welcome to admin settings setting";
    }

      public function article($id,$slug='')
    {
        return "Welcome to home article $id and slug $slug";
    }

     public function api_any()
    {
        echo 'Welcome To api_any page ';
    }

    //  public function index()
    // {
    //     var_dump(Request::get('user_id','eric'));
	// 	die;
    //     return view('home', ['title' => 'Welcome']);
    // }

    // public function index()
    // {
    //     var_dump(Request::all());
	// 	die;
    //     return view('home', ['title' => 'Welcome']);
    // }

}