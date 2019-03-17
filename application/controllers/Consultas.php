<?php

class Consultas extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model("Usuarios_model","usuBD");
		$this->load->model("EstadoVisita_model","estVisitaBD");
	}
    
    public function index()
	{
		$data["usuarios"] = $this->usuBD->getAll();
		$data["estadoVisitas"] = $this->estVisitaBD->getAll();
		$this->load->view('consultas', $data);
	}
    
}

