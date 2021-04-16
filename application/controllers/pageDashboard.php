<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pageDashboard extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model("modelSPP");
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('include/partOne');
		$this->load->view('include/navigationBars');
		$this->load->view('dashboard');
		$this->load->view('include/partTwo');

	}
}
?>