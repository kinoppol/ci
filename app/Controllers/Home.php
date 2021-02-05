<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('noppol');
	}
	
	public function prayut()
	{
		return view('prayutHome');
	}
}

