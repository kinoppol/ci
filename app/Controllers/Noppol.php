<?php

namespace App\Controllers;

class Noppol extends BaseController
{
    public function index(){
        return view('menu').view('noppol');
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
