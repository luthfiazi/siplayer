<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	public function index()
	{
		$data['nama'] = "luthfi azizi";
		$data['pekerjaan'] = "Programmer";
		$this->load->view('top');
		$this->load->view('table', $data);
		$this->load->view('bottom');
	}

	public function tampilkan()
	{
		echo "Hello Bandung";
	}
}
