<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Consulta extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('baseDatos');
        $this->load->library(array('session', 'form_validation'));
        $this->load->helper(array('url', 'form'));
        $this->load->helper('url');
    }

    function index() {
        $data['usuarios'] = $this->baseDatos->obtenerUsuario();
        $this->load->view('invirtual/headers');
        $this->load->view('sesion/usuarios', $data);
    }

    function nuevo() {
        $this->load->view('invirtual/headers');
        $this->load->view('sesion/formulario');
    }

    function recibirDatos() {

        $data = array(
            'usuario' => $this->input->post('usuario'),
            'password' => $this->input->post('password'),
            'tipo' => $this->input->post('tipo')
        );
        $this->form_validation->set_rules('usuario', 'USUARIO', 'required|trim|is_unique[usuarios.usuario]');
        if ($this->form_validation->run() == FALSE) {
            echo "Este usuario ya existe";
        } else {
            if (!$this->baseDatos->crearUsuario($data)) {
                echo "Enviado con exito";
            } else {
                echo "Algo salió mal";
            }
        }
    }

    function nuevoborrar() {
        $this->load->view('invirtual/headers');
        $this->load->view('sesion/formularioborrar');
    }

    function borrar() {
        $data = array(
            'id_user' => $this->input->post('id_user')
        );
        $this->baseDatos->borrarUsuario($data);
    }

    function nuevoact() {
        $this->load->view('invirtual/headers');
        $this->load->view('sesion/formularioact');
    }

    function actualizar() {
        $data = array(
            'id_user' => $this->input->post('id_user'),
            'usuario' => $this->input->post('usuario'),
            'password' => $this->input->post('password'),
            'tipo' => $this->input->post('tipo')
        );
        $this->form_validation->set_rules('usuario', 'USUARIO', 'trim|required|is_unique[usuarios.usuario]');
        if ($this->form_validation->run() == FALSE) {
            echo "Este usuario ya existe";
        } else {
            if (!$this->baseDatos->actualizarUsuario($data)) {
                echo "Enviado con exito";
            } else {
                echo "Algo salió mal";
            }
        }
    }

    function iniciosesion() {
        $this->load->view('invirtual/headers');
        $this->form_validation->set_rules('usuario', 'usuario', 'required');
        $this->form_validation->set_rules('password', 'password', 'required', array('required' => 'You must provide a %s.'));
        $this->form_validation->set_message('required', 'El %s es requerido');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('sesion/inicio');
        } else {
            $usuario = $this->input->post('usuario');
            $password = $this->input->post('password');
            //comprobamos si existen en la base de datos enviando los datos al modelo
            $login = $this->baseDatos->verificar($usuario, $password);
            $tipo = $this->baseDatos->obtenerTipo($usuario);
            $data['usuario'] = $usuario;
            if ($login && $tipo == 'Administrador') {                
                $this->load->view('layout/header');
                $this->load->view('usuarios/index');
                $this->load->view('layout/footer');
                $userData['id']='1';
                $userData['userRol'] = 'Admin';
                $userData['userName'] = $usuario;
                $this->session->set_userdata($userData);
            } else if ($login && $tipo == 'Usuario') {
                $this->load->view('invirtual/headers');
                $this->load->view('usuarios/usuario', $data);
                $userData['id']='4';
                $userData['userRol'] = 'User';
                $userData['userName'] = $usuario;
                $this->session->set_userdata($userData);
            }
        }
    }
    
    function cerrarSesion(){
        $this->session->sess_destroy();
        $this->iniciosesion();
       
    }

}

?>