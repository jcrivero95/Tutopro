<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CitasProfesor extends CI_Controller {


    public function __construct(){
        parent::__construct();
        if(!$this->session->userdata("login") || $this->session->userdata('rol') != 3){
            redirect(base_url()."welcome");
        }
    }

    public function index()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/menu_teacher');
        $this->load->view('Teacher/citas');
        $this->load->view('layout/footer');


    }

}
