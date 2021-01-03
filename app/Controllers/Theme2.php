<?php

namespace App\Controllers;

use App\Models\ThemeModel;

class Theme2 extends BaseController
{

	protected $themeModel;
	public function __construct()
	{
		$this->themeModel = new ThemeModel();
	}

	public function index()
	{
		$data = [
			'tittle' => 'Theme 2'
		];


		return view('theme/theme2/index', $data);
	}

	public function guestbook()
	{
		$gb = $this->themeModel->findAll();
		$data = [
			'tittle' => 'Theme 2 | GuestBook',
			'gb' => $gb
		];


		return view('theme/theme2/guestbook', $data);
	}

	public function save()
	{

		$slug = url_title($this->request->getVar('tittle'), '', true);


		$this->themeModel->save([
			'slug' => $slug,
			'nama' => $this->request->getVar('name'),
			'status' => $this->request->getVar('status'),
			'pesan' => $this->request->getVar('pesan')
		]);


		session()->setFlashdata('pesan', 'Pesan berhasil dikirim');

		return redirect()->to('/' . $slug);
	}



	//--------------------------------------------------------------------


}
