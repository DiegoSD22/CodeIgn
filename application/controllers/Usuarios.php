<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('usuario_m', 'm');
        $this->load->library('session');
        $this->load->library('email');
        $this->load->library('parser');
    }

    function index() {
        if ($this->session->userdata('userRol')=="Admin") {
        $this->load->view('layout/header');
        $this->load->view('usuarios/index');
        $this->load->view('layout/footer');
        }else {
            redirect('consulta/iniciosesion');
        }
    }

    public function mostrarUsuarios() {
        if (!is_null($this->session->userdata('id'))) {
            $result = $this->m->mostrarUsuarios();
            echo json_encode($result);
            //var_dump($this->session);
            //echo $_SERVER['HTTP_REFERER']; //compare(str,iniciosession) (if exist, fi contains)
        } else {
            redirect('consulta/iniciosesion');
        }
    }
    
    public function correo(){
        $this->load->view('usuarios/contacto_v');

    }

    public function enviacorreo() {

        $this->load->library('email');
        $conf['mailtype']='text';
        $this->email->initialize($conf);
        $this->email->from('diegosd2297@gmail.com', 'Diego');
        $this->email->to('tareasmendoza@yahoo.com');
        $this->email->subject('Probando envio');
        $this->email->message('Probando...');
        if($this->email->send()){
            echo 'Correo enviado';
        }else{
            echo $this->email->print_debugger();
        }
        
        /*1 Acabar validacion form con $_server
         * <?php
    if($_SERVER["HTTP_REFERER"] != "my_http_referer.php") {
        die("You cannot access this script.");
        }
            ?>*/        
        //2 Envio de email con gmail
        //3 Crear store procedure mysql, lo mandas a llamar en codeigniter
    }

    public function agregarUsuario() {
        $result = $this->m->agregarUsuario();
        $msg['success'] = false;
        $msg['type'] = 'add';
        if ($result) {
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }

    public function editarUsuario() {
        $result = $this->m->editarUsuario();
        echo json_encode($result);
    }

    public function actualizarUsuario() {
        $result = $this->m->actualizarUsuario();
        $msg['success'] = false;
        $msg['type'] = 'act';
        if ($result) {
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }

    public function borrarUsuario() {
        $result = $this->m->borrarUsuario();
        $msg['success'] = false;
        if ($result) {
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }
    
    public function seleccionar(){
        $result=$this->m->seleccionar();
        $this->load->view('sesion/usuarios',$result);
        if($result){
            $msg['success']=true;
        }
        echo json_encode($msg);
    }
    
    public function ness(){
        $this->load->view('usuarios/ness');
    }

}
