<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Usuario_m extends CI_Model {
    
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    function mostrarUsuarios(){
        $query= $this->db->get('usuarios');
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return false;
        }
    }
    
    function agregarUsuario(){
        $field=array(
          'usuario'=> $this->input->post('txtUsuario'),
            'password'=> $this->input->post('txtPassword'),
            'tipo'=> $this->input->post('txtTipo')
        );
        $this->db->insert('usuarios', $field);
        if($this->db->affected_rows()>0){
            return true;
        }else{
            return false;
        }
    }
    
}