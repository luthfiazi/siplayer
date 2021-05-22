<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->Model('Model');
	}

	public function index()
	{
		// $data['nama'] = "luthfi azizi";
		// $data['pekerjaan'] = "Programmer";
		$data['pemain'] = $this->Model->get_pemain();

		$this->load->view('top');
		$this->load->view('table', $data);
		$this->load->view('bottom');
	}

	public function tambah_data()
	{
		$this->load->view('top');
		$this->load->view('tambah_data');
		$this->load->view('bottom');
	}
}
