<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asignatura extends CI_Controller {


    public function __construct(){
        parent::__construct();
        $this->load->model("Asignatura_model");
        if(!$this->session->userdata("login") || $this->session->userdata('rol') != 3){
            redirect(base_url()."welcome");
        }
    }

    public function listar()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/menu_teacher');
        $this->load->view('Teacher/asignatura');
        $this->load->view('layout/footer');


    }

    public function registrar()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/menu_teacher');
        $this->load->view('Teacher/crear_asignatura');
        $this->load->view('layout/footer');


    }

    public function editar($id)
    {
        $data  = array(
            'datos' => $this->Asignatura_model->getAsignatura($id),

        );
        $this->load->view('layout/header');
        $this->load->view('layout/menu_teacher');
        $this->load->view('Teacher/editar_asignatura', $data);
        $this->load->view('layout/footer');


    }



}
