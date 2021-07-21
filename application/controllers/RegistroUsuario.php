<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegistroUsuario extends CI_Controller {


	public function index()
	{

        $this->load->view('Estudents/registro_usuario');

	}
}
