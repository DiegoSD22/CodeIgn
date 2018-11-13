<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consulta extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('baseDatos');
        $this->load->library(array('session','form_validation'));
        $this->load->helper(array('url','form'));
        $this->load->helper('url');
        
    }
    function index(){
        $data['usuarios']=$this->baseDatos->obtenerUsuario();
        $this->load->view('invirtual/headers');
        $this->load->view('sesion/usuarios',$data);
    }
            function nuevo(){
        $this->load->view('invirtual/headers');
        $this->load->view('sesion/formulario');
    }
    function recibirDatos(){
        
        $data=array(
            'usuario' => $this->input->post('usuario'),
            'password' => $this->input->post('password'),
            'tipo' => $this->input->post('tipo')
        );
        $this->baseDatos->crearUsuario($data);
        $this->load->view('invirtual/headers');
        $this->load->view('invirtual/bienvenido');
    }
    function nuevoborrar(){
        $this->load->view('invirtual/headers');
        $this->load->view('sesion/formularioborrar');
    }
    
    function borrar(){
        $data=array(
            'id_user'=> $this->input->post('id_user')
        );
        $this->baseDatos->borrarUsuario($data);
        $this->load->view('invirtual/headers');
        $this->load->view('invirtual/bienvenido');
    }
    
    function nuevoact(){
        $this->load->view('invirtual/headers');
        $this->load->view('sesion/formularioact');
    }
    function actualizar(){
        $data=array(
            'id_user' => $this->input->post('id_user'),
            'usuario' => $this->input->post('usuario'),
            'password' => $this->input->post('password'),
            'tipo' => $this->input->post('tipo')
        );
        $this->baseDatos->actualizarUsuario($data);
        $this->load->view('invirtual/headers');
        $this->load->view('invirtual/bienvenido');
    }
    
    function iniciosesion(){
        $this->load->view('invirtual/headers');        
        $this->form_validation->set_rules('usuario', 'usuario', 'required');
        $this->form_validation->set_rules('password', 'password', 'required', array('required' => 'You must provide a %s.'));
        $this->form_validation->set_rules('tipo', 'tipo', 'required');
        $this->form_validation->set_message('required', 'El %s es requerido');        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('sesion/inicio');
        } else {
            $usuario = $this->input->post('usuario');
            $password = $this->input->post('password');
            $tipo= $this->input->post('tipo');
            //comprobamos si existen en la base de datos enviando los datos al modelo
            $login = $this->baseDatos->verificar($usuario, $password, $tipo);
            $data['usuario']=$usuario;
            if ($login && $tipo=='A')
            {
                $this->load->view('invirtual/headers');
                $this->load->view('invirtual/bienvenido', $data);
            }
            else if($login && $tipo=='U'){
                $this->load->view('invirtual/headers');
                $this->load->view('invirtual/bienvenidousuario', $data);
            }
        }
    }
    
    
    
    

}
?>