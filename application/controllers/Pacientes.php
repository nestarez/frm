<?php

class Pacientes extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model("Paciente_model","pacienteBD");
	}
    
    public function index()
	{
		$this->load->view('pacientes');
	}

	public function getAll(){
		$response = $this->pacienteBD->getAll();
		echo json_encode($response);
	}
    
}

