<?php 
namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

class DashboardController extends Controller 
{
    // public function __invoke($id)
    // public function __invoke($id = null)
    // public function __invoke($year = null, $month = null)
    public function __invoke($id)
    {
        echo  "User".$id;
    }
}