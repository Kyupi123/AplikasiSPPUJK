<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pageLogin extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model("modelSPP");
		$this->load->library('form_validation');
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->view('include/partOne');
		$this->load->view('login');

	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array (
			'username' => $username,
			'password' => md5($password)
		);
		$cek = $this->modelSPP->cek_login("petugas", $where)->num_rows();
		if($cek > 0){
			$data_session = array(
				'nama' => $username,
				'status' => "login",
			);
			$this->session->set_userdata($data_session);

			redirect('pageDashboard');
		}else{
			echo "Username dan/atau password salah!";
		}
	}

	public function logout(){
		//$this->session->session_destroy();
		redirect(base_url("pageLogin"));
	} 
}
?>