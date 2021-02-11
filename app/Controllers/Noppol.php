<?php

namespace App\Controllers;
use App\Models\UsersModel;
class Noppol extends BaseController
{
    public function index(){
        $userModel = new UsersModel();
      
        print_r($userModel->getUsers());
 
        return view('menu').view('noppol');
    }
    public function register(){
        $register = new UsersModel();
        $userData=array(
            'username'=>$_GET['username'],
            'password'=>md5(trim($_GET['password'])),
            'email'=>$_GET['email'],

        );
        return $register->addUser($userData);
    }
    public function education(){
        return view('menu').view('noppol_edu');
    }
    public function hobby(){
        return view('menu').view('noppol_hobby');
    }
    public function contact(){
        return view('menu').view('noppol_contact');
    }
}
