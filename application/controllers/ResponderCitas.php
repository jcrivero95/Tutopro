<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ResponderCitas extends CI_Controller {


    public function __construct(){
        parent::__construct();
        $this->load->model("Citas_model");
        if(!$this->session->userdata("login") || $this->session->userdata('rol') != 3){
            redirect(base_url()."welcome");
        }
    }

    public function index($id)
    {
        $data = array(
            'perro' => $this->Citas_model->getCita($id),

        );

        $this->load->view('layout/header');
        $this->load->view('layout/menu_teacher');
        $this->load->view('Teacher/responder_citas', $data);
        $this->load->view('layout/footer');


    }

}
