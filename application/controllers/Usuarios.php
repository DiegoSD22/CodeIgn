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
    
//Función para cargar pagina inicial
    function index() {
        $this->load->view('usuarios/usuario');
    }

//Función para cargar la vista administrador    
    function admin(){
        if ($this->session->userdata('userRol')=="Admin") {
        $this->load->view('layout/header');
        $this->load->view('usuarios/index');
        $this->load->view('layout/footer');
        }else {
            redirect('consulta/iniciosesion');
        }
    }

    
//Función para cargar los usuarios guardados en la BD    
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

//Función para cargar la vista correo    
    public function correo(){
        $this->load->view('usuarios/contacto_v');

    }

//Función para enviar un correo    
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
        //4 Subir un archivo al servidor
        //5 Como generar un PDF con PHP e integrarlo a codeigniter
    }

//Función para agregar un usuario a la BD llamando al modelo    
    public function agregarUsuario() {
        $result = $this->m->agregarUsuario();
        $msg['success'] = false;
        $msg['type'] = 'add';
        if ($result) {
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }

//Función para mostrar los datos de un usuario en especifico de la BD llamando al modelo    
    public function editarUsuario() {
        $result = $this->m->editarUsuario();
        echo json_encode($result);
    }

//Función para cambiar datos de un usuario llamando al modelo    
    public function actualizarUsuario() {
        $result = $this->m->actualizarUsuario();
        $msg['success'] = false;
        $msg['type'] = 'act';
        if ($result) {
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }

//Función para borrar un usuario de la BD llamando al modelo    
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

    
//Función para cargar los usuarios guardados en la BD (con Store Procedure)    
    public function PruebaSP(){
        $result=$this->m->seleccionar();
        echo json_encode($result);
    }
}
