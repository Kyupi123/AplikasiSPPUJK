<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pageTransaksi extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('include/partOne');
		$this->load->view('include/navigationBars');
		$this->load->view('laporan');
		$this->load->view('include/partTwo');

	}
}
?>