<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Citas_model extends CI_Model
{

    public function getCita($id){
        $this->db->select("c.nombre, c.id");
        $this->db->from("citas c");
        $this->db->where("c.id",$id);
        $resultados = $this->db->get();
        return $resultados->result();

    }

    public function getCitas($id){
        $this->db->where("id",$id);
        $resultado = $this->db->get("citas");
        return $resultado->row();
    }




}
