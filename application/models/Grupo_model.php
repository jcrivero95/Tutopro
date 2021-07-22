<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Grupo_model extends CI_Model
{

    public function getGrupo($id){
        $this->db->where("id",$id);
        $this->db->from("grupo g");
        $resultado = $this->db->get();
        return $resultado->row();

    }








}
