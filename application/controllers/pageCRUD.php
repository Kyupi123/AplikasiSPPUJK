<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pageCRUD extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('modelSPP');
	}

	public function index()
	{
		$data['names'] = $this->modelSPP->getTableColumnNames();
		$data['table'] = $this->modelSPP->getTableContent();
		$data['metas'] = $this->modelSPP->getTableFieldMetadata();
		$this->load->view('include/partOne');
		$this->load->view('include/navigationBars');
		$this->load->view('crud', $data);
		$this->load->view('include/partTwo');

	}

	function tablesiswa(){
		$data['names'] = $this->modelSPP->getTableColumnNames("siswa");
		$data['table'] = $this->modelSPP->getTableContent("siswa");
		$data['kelas'] = $this->modelSPP->getTableContent("kelas");
		$data['spp'] = $this->modelSPP->getTableContent("spp");
		$data['metas'] = $this->modelSPP->getTableFieldMetadata("siswa");
		$this->load->view('include/partOne');
		$this->load->view('include/navigationBars');
		$this->load->view('crud', $data);
		$this->load->view('include/partTwo');
	}
	function tablekelas(){
		$data['names'] = $this->modelSPP->getTableColumnNames("kelas");
		$data['table'] = $this->modelSPP->getTableContent("kelas");
		$data['metas'] = $this->modelSPP->getTableFieldMetadata("kelas");
		$this->load->view('include/partOne');
		$this->load->view('include/navigationBars');
		$this->load->view('crud', $data);
		$this->load->view('include/partTwo');
	}
	function tablepetugas(){
		$data['names'] = $this->modelSPP->getTableColumnNames("petugas");
		$data['table'] = $this->modelSPP->getTableContent("petugas");
		$data['metas'] = $this->modelSPP->getTableFieldMetadata("petugas");
		$this->load->view('include/partOne');
		$this->load->view('include/navigationBars');
		$this->load->view('crud',$data);
		$this->load->view('include/partTwo');
	}
	function insertData(){
		$tableIdentifier = $this->input->post('tableIdentifier');
		$names = $this->modelSPP->getTableColumnNames($tableIdentifier);

		foreach ($names as $name){
			$data[$name] = $this->input->post($name);
		}
		$this->modelSPP->insertDatas($data, $tableIdentifier);
		redirect("pageCRUD/table".$tableIdentifier);
	}
	}
?>