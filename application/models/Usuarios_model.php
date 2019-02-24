<?php 

class Usuarios_model extends CI_Model{

    public function get($usuario){
        $this->db->where('id_usuario',$usuario["idUsuario"]);
        $query = $this->db->get("usuario");
        return $query->row_array();
    }

    public function getAll(){
        $query = $this->db->get("usuario");
        return $query->result_array();
    }

}