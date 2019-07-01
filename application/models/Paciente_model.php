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
    
    public function update($paciente) {
        $this->db->set("nro_documento", $paciente["nro_documento"]);
        $this->db->set("nombres", $paciente["nombres"]);
        $this->db->set("ap_paterno", $paciente["ap_paterno"]);
        $this->db->set("ap_materno", $paciente["ap_materno"]);
        $this->db->set("id_ocupacion", $paciente["id_ocupacion"]);
        $this->db->set("fecha_nacimiento", $paciente["fecha_nacimiento"]);
        $this->db->set("correo", $paciente["correo"]);
        $this->db->set("genero", $paciente["genero"]);
        $this->db->set("telefono", $paciente["telefono"]);
        $this->db->set("id_tipo_sangre", $paciente["id_tipo_sangre"]);
        $this->db->set("imagen", $paciente["imagen"]);
        $this->db->set("id_institucion", $paciente["id_institucion"]);
        $this->db->set("id_deporte", $paciente["id_deporte"]);
        $this->db->where("id_paciente", $paciente["id_paciente"]);
        $this->db->update($this->table);
    }

    public function delete($paciente) {
        $this->db->delete($this->table, array("id_paciente" => $paciente["id_paciente"]));
    }

    public function get($paciente) {
        $this->db->where("id_paciente", $paciente["id_paciente"]);
        $query = $this->db->get($this->table);
        return $query->row();
    }

    public function getAll() {
        $query = $this->db->get($this->table);
        return $query->result_array();
    }
    
    public function getByCodigo($paciente) {
        $this->db->where("codigo", $paciente["codigo"]);
        $query = $this->db->get($this->table);
        return $query->row();
    }

}