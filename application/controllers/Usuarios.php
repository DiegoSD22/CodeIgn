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
    
    public function mostrarUsuarios(){
        $result= $this->m->mostrarUsuarios();
        echo json_encode($result);
    }
    
    public function agregarUsuario(){
        $result= $this->m->agregarUsuario();
        $msg['success']=false;
        $msg['type']='add';
        if($result){
            $msg['success']=true;
        }
        echo json_encode($msg);
    }
    
    public function editarUsuario(){
        $result= $this->m->editarUsuario();
        echo json_encode($result);
    }
    
    public function actualizarUsuario(){
        $result= $this->m->actualizarUsuario();
        $msg['success']=false;
        $msg['type']='act';
        if($result){
            $msg['success']=true;
        }
        echo json_encode($msg);
    }
    
    public function borrarUsuario(){
        $result= $this->m->borrarUsuario();
        $msg['success']=false;
        if($result){
            $msg['success']=true;
        }
        echo json_encode($msg);
    }
}

