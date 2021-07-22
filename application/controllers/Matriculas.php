<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matriculas extends CI_Controller {


    public function __construct(){
        parent::__construct();
        if(!$this->session->userdata("login") || $this->session->userdata('rol') != 2){
            redirect(base_url()."welcome");
        }
    }

    public function listado()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/menu_student');
        $this->load->view('Estudents/matricula');
        $this->load->view('layout/footer');


    }

    public function matricular()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/menu_student');
        $this->load->view('Estudents/matricular');
        $this->load->view('layout/footer');


    }

}
