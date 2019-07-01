<?php 

class Paciente_model extends CI_Model{

    //ListarPacientes
    public function listPacientes(){
        $query = $this->db->query("call FR_ListarPacientes();");
        return $query->result_array();
    }
    //Mostrar datos del usuario por el ID
    public function listPacientebyID($userid){
        $query = $this->db->query("call FR_ListarPacientesById('".$userid."');"); 
        return $query->row_array();
        
    }

    public function __construct()
    {
        parent::__construct();
        $this->load->database('default');
    }
   
    //Guardar usuario
    public function insertPaciente($doc,$name_ , $lastname , $lastname2 ,$ocupacion , $fecha_nac , $correo , $genero ,$telefono,$tipoSangre,$imagen,$institucion,$deporte){
  
        $this->db->query("CALL FR_InsertPaciente('".$doc."','".$name_."','".$lastname."','".$lastname2."' ,'".$ocupacion."' ,'".$fecha_nac."','".$correo."' ,'".$genero."','".$telefono."','".$tipoSangre."','".$imagen."','".$institucion."','".$deporte."' );"); 

    }

}