<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Formulario_model extends CI_Model {

    function __construct() {
        parent:: __construct();
        $this->load->database();
    }

    function registre($email) {
        $data = array(
            'email' => $this->input->post('email')
        );

        $this->db->insert('emails', $data);
    }

}
