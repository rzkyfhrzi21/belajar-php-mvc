<?php

class About extends Controller
{
	public function index($nama = 'Riz++', $pekerjaan = 'Pro++', $umur = '18++')
	{
		$data['nama'] = $nama;
		$data['pekerjaan'] = $pekerjaan;
		$data['umur'] = $umur;
		$data['judul'] = 'About Me';
		$this->view('templates/header', $data);
		$this->view('about/index', $data);
		$this->view('templates/footer');
	}
	public function page()
	{
		$data['judul'] = 'Pages';
		$this->view('templates/header', $data);
		$this->view('About/page');
		$this->view('templates/footer');
	}
}
