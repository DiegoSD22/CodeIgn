<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('usuario_m','m');
        $this->load->library('session');
    }
    
    function index(){
        $this->load->view('layout/header');
        $this->load->view('usuarios/index');
        $this->load->view('layout/footer');
    }
    
    public function mostrarUsuarios(){
        if( !is_null($this->session->userdata('id')) ){
            $result= $this->m->mostrarUsuarios();
            echo json_encode($result);
            //var_dump($this->session);
            //echo $_SERVER['HTTP_REFERER']; //compare(str,iniciosession) (if exist, fi contains)
        }else{
            redirect('consulta/iniciosesion');
        }
    }
    
    public function enviacorreo(){
        
            $to = 'diegosd2297@gmail.com';//tareasmendoza@yahoo.com
            $subject= 'Email de prueba';
            $mensaje='Este es mi primer envio de email con PHP';
            if(mail ($to, $subject, $mensaje)){
                echo 'Parece que envio el mail';
            }else{
                echo 'Fallò el envio de correo';
            }
            
            //1 Acabar validacion form con $_server
            //2 Envio de email con gmail
            //3 Crear store procedure mysql, lo mandas a llamar en codeigniter
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

