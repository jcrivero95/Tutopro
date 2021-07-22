<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Asignatura_model extends CI_Model
{

    public function getAsignatura($id){
        $this->db->where("id",$id);
        $this->db->from("asignatura a");
        $resultado = $this->db->get();
        return $resultado->row();

    }








}
