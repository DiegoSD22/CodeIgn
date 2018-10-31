<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invirtual extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('baseDatos');
        
    }
    function index(){
        $this->load->library('menu',array('Inicio','Contacto','Cursos','Acerca de'));
        $data['miMenu']= $this->menu->construirMenu();
        $this->load->view('invirtual/bienvenido',$data);
        $this->load->view('invirtual/headers');
    }
    function nuevo(){
        $this->load->view('invirtual/headers');
        $this->load->view('invirtual/formulario');
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