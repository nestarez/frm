<?php

class Pacientes extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("Paciente_model", "pacienteBD");
    }

    public function index() {
        $pacientes = $this->pacienteBD->listPacientes();

        $data['pacientes'] = $pacientes;

        $this->load->view('pacientes', $data);
    }

    public function savePaciente() {

        $doc = $this->input->post('dni');
        $name_ = $this->input->post('name_');
        $lastname = $this->input->post('lastname');
        $lastname2 = $this->input->post('lastname2');
        $ocupacion = $this->input->post('ocupacion');
        $fecha_nac = $this->input->post('fecha_nac');
        $correo = $this->input->post('correo');
        $genero = $this->input->post('genero');
        $telefono = $this->input->post('telefono');
        $tipoSangre = $this->input->post('tipoSangre');
        $imagen = $this->input->post('imagen');
        $institucion = $this->input->post('institucion');
        $deporte = $this->input->post('deporte');

        $response = $this->pacienteBD->insertPaciente($doc, $name_, $lastname, $lastname2, $ocupacion, $fecha_nac, $correo, $genero, $telefono, $tipoSangre, $imagen, $institucion, $deporte);
        echo json_encode($response);
    }

    public function nuevo() {
        $data['uri'] = 'nuevo';
        $this->load->view("paciente_new", $data);
    }

    public function showPaciente() {

        $userid = $this->input->post('idPaciente');

        $usuario = $this->usuBD->listUsersbyID($userid);

        //$data['usuario'] = $usuario;
        //Tu estas usando una funcion ajax, lo que hace el ajax es evitar volver a cargar la pagina
        //Cuando haces esto de aca abajito, recargas nuevamente tu pagina, por lo que es como si
        //no le devolvieras nada a tu ajax.
        //$this->load->view('usuarios', $data);
        //Que sad tu cancion
        //Como tu estas llamando un ajax, en realidad deberias devolverle tu data ($usuario)
        //y el ajax solo recibe en formato json, por lo que lo unico que debes hacer es esto
        // oko :'''''v ,
        echo json_encode($usuario);
    }

    // public function getAll(){
    // 	$response = $this->usuBD->getAll();
    // 	echo json_encode($response);
    // }
    // public function get(){	
    // 	$usuario = array(
    // 		'idUsuario' => $this->input->post('idUsuario'),
    // 		'nombre' => "Prueba"
    // 	);
    // 	$response = $this->usuBD->get($usuario);
    // 	echo json_encode($response);
    // }
}
