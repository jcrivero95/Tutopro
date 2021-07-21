<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

    public function login($email, $password)
    {
        $this->db->where("email", $email);
        $this->db->where("password", $password);

        $resultados = $this->db->get("usuarios");
        if ($resultados->num_rows() > 0) {
            return $resultados->row();
        } else {
            return false;
        }

    }

    public function getRoles()
    {
        $resultados = $this->db->get("roles");
        return $resultados->result();
    }

    public function getUsuarios($id){
        $this->db->where("id",$id);
        $resultado = $this->db->get("profesores");
        return $resultado->row();
    }

}
