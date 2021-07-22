<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("User_model");

    }

    public function index()
    {
        $data = array(
            'roles' => $this->User_model->getRoles(),

        );

        if ($this->session->userdata("login") && $this->session->userdata("rol") != 2 && $this->session->userdata("rol") != 3 ) {
            redirect(base_url() . "admin_dashboard");
        } else {
            if ($this->session->userdata("login") && $this->session->userdata("rol") != 1 && $this->session->userdata("rol") != 3) {
                redirect(base_url() . "studentsDashboard");

            } else {
                if ($this->session->userdata("login") && $this->session->userdata("rol") != 1 && $this->session->userdata("rol") != 2) {
                    redirect(base_url() . "techerDashboard");

                } else {

                    $this->load->view('login', $data);
                }
            }

        }


    }


    public function login()
    {

        $email = $this->input->post("email");
        $password = $this->input->post("password");
        $res = $this->User_model->login($email, $password);


        if (!$res) {
            $this->session->set_flashdata("error", "Msj");
            redirect(base_url() . "welcome");
        } else {
            $_SESSION['rol'] = $res->rol;
            $data = array(
                'id' => $res->id,
                'nombre' => $res->nombre,
                'apellido' => $res->apellido,
                'email' => $res->email,
                'rol' => $res->rol,
                'login' => TRUE
            );


        }


        if ($_SESSION['rol'] == 1) {
            $this->session->set_userdata($data);
            redirect(base_url() . "admin_dashboard");
        } else {
            if ($_SESSION['rol'] == 2) {
                $this->session->set_userdata($data);
                redirect(base_url() . "studentsDashboard");
            } else {
                $this->session->set_userdata($data);
                redirect(base_url() . "techerDashboard");
            }


        }


    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }


}
