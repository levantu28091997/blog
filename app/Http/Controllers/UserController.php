<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class UserController extends Controller
{   
    private $pathViewAdminUser = "admin.user.";
    private $controllerName = "user";

    public function __construct(){
        view()->share('controllerName',$this->controllerName);
    }
    public function index()
    {
        return view($this->pathViewAdminUser .'index');
    }
    public function form($id=null)
    {
        return view($this->pathViewAdminUser .'form',['id'=>$id]);
    }
    public function change($status, $id)
    {
        return view($this->pathViewAdminUser .'change',['status'=>$status,'id'=>$id]);
    }
    public function delete()
    {
        return redirect()->route('user/form');
    }
}