<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{   
    private $pathViewAdminUser = "admin.dashboard.";
    private $controllerName = "dashboard";

    public function __construct(){
        view()->share('controllerName',$this->controllerName);
    }
    public function index()
    {
        return view($this->pathViewAdminUser .'index');
    }
}