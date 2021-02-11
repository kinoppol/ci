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
    public function register_form(){
        return view('register_form');
    }
    public function register(){
        $register = new UsersModel();
        $userData=array(
            'username'=>$_POST['username'],
            'password'=>md5(trim($_POST['password'])),
            'email'=>$_POST['email'],

        );
        if($register->addUser($userData)==0){
            return "ลงทะเบียนสำเร็จ"; 
        }else{
            return "ลงทะเบียนล้มเหลว";
        }
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
