<?php 

class EstadoVisita_model extends CI_Model{

    public function getAll(){
        $query = $this->db->get("estado_visita");
        return $query->result_array();
    }

}