<?php 

class Paciente_model extends CI_Model{

    public function getAll(){
        $query = $this->db->get("paciente");
        return $query->result_array();
    }

}