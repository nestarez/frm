<?php

class Consultas extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model("Usuarios_model","usuBD");
		$this->load->model("EstadoVisita_model","estVisitaBD");
		$this->load->model("Paciente_model","pacienteBD");
	}
    
    public function index()
	{
		$data["usuarios"] = $this->usuBD->getAll();
		$data["estadoVisitas"] = $this->estVisitaBD->getAll();
		$data["pacientes"] = $this->pacienteBD->getAll();
		$this->load->view('consultas', $data);
	}
    
}

