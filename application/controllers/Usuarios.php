<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('usuario_m','m');
    }
    
    function index(){
        $this->load->view('layout/header');
        $this->load->view('usuarios/index');
        $this->load->view('layout/footer');
    }
    
    function mostrarUsuarios(){
        $result= $this->m->mostrarUsuarios();
        echo json_encode($result);
    }
    
    function agregarUsuario(){
        $result= $this->m->agregarUsuario();
        $msg['success']=false;
        if($result){
            $msg['success']=true;
        }
        echo json_encode($msg);
    }
}

