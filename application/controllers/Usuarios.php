<?php

class Usuarios extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model("Usuarios_model","usuBD");
	}
	
    
    public function index()
	{
		$data["usuarios"] = $this->usuBD->getAll();
		$this->load->view('usuarios', $data);
	}

	public function getAll(){
		$response["data"] = $this->usuBD->getAll();
		echo json_encode($response);
	}
	
	public function get($id){
		$response["data"] = $this->usuBD->get($id);
		echo json_encode($response);
	}
}
