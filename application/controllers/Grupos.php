<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grupos extends CI_Controller {


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
        $this->load->view('Teacher/grupo');
        $this->load->view('layout/footer');


    }

    public function listar()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/menu_teacher');
        $this->load->view('Teacher/grupo');
        $this->load->view('layout/footer');


    }

    public function registrar()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/menu_teacher');
        $this->load->view('Teacher/crear_grupo');
        $this->load->view('layout/footer');


    }

}
