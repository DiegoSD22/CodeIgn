<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consulta extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('baseDatos');
        
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

}
?>