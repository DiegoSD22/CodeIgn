<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Formulario extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('formulario_model');
        $this->load->library(array('session', 'form_validation'));
        $this->load->helper(array('url', 'form'));
        $this->load->helper('url');
    }

    public function index() {
        $this->load->view('sesion/formulario_view');
    }

    public function registre() {

        $email = $this->input->post('email');

        $this->form_validation->set_rules('email', 'EMAIL', 'trim|required|valid_email|is_unique[emails.email]');

        if ($this->form_validation->run() == FALSE) {
            echo validation_errors();
        } else {
            if (!$this->formulario_model->registre($email)) {
                echo "Enviado con exito";
            } else {
                echo "Algo salió mal";
            }
        }
    }

}
