<?php 
namespace App\Http\Controllers\User;

use App\Models\User;
use App\Http\Controllers\Controller;

class UserController extends Controller 
{
     public function index()
    {
        var_dump(new User());
        die;
        return view('home', ['title' => 'Welcome']);
    }
}