<?php if ( !defined('BASEPATH')) exit('No direct script access allowed');

class BaseDatos extends CI_Model{
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    function crearUsuario($data){
        $this->db->insert('usuarios', array('usuario'=>$data['usuario'], 
            'password'=>$data['password'], 'tipo'=>$data['tipo']));
    }
    function obtenerUsuario(){
        $query= $this->db->query('SELECT * from usuarios');
        if($query->num_rows()>0)return $query;
        else return false;
    }
}

?>