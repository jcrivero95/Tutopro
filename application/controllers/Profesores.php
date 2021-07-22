<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profesores extends CI_Controller {


    public function __construct(){
        parent::__construct();
        $this->load->model("User_model");
        if(!$this->session->userdata("login") || $this->session->userdata('rol') != 1){
            redirect(base_url()."welcome");
        }
    }

    public function index()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/menus');
        $this->load->view('Teacher/list_teacher');
        $this->load->view('layout/footer');

    }

    public function listado()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/menus');
        $this->load->view('Teacher/list_estudiantes');
        $this->load->view('layout/footer');

    }

    public function Registrar()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/menus');
        $this->load->view('Teacher/registrar');
        $this->load->view('layout/footer');

    }

    public function CrearUsuario($id)
    {

        $data  = array(
            'email' => $this->User_model->getUsuarios($id),

        );

        $this->load->view('layout/header');
        $this->load->view('layout/menus');
        $this->load->view('Teacher/crear_usuario', $data);
        $this->load->view('layout/footer');

    }


}
