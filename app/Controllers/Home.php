<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('home/index');
	}

	public function theme1()
	{
		return view('theme/theme1/index');
	}

	public function theme2()
	{
		$data = [
			'tittle' => 'Theme 2'
		];

		return view('theme/theme2/index', $data);
	}

	public function theme3()
	{
		return view('theme/theme3/index');
	}




	//--------------------------------------------------------------------


}
