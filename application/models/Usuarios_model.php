<?php 

class Usuarios_model extends CI_Model{

    public function get($id){
        $query = $this->db->get("usuario",$id);
        return $query->result_row();
    }

    public function getAll(){
        $query = $this->db->get("usuario");
        return $query->result_array();
    }

}