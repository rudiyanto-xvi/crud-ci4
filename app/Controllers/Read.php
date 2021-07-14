<?php

namespace App\Controllers;

class Read extends BaseController
{
	public function index()
	{
		$data['title'] = 'Menu';

		echo view('templates/header', $data);
		echo view('menu/index', $data);
		echo view('templates/footer', $data);

		// $this->load->view('templates/header', $data);
		// $this->load->view('menu/index', $data);
		// $this->load->view('templates/footer', $data);
	}
}
