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
    function borrarUsuario($data){
        $query= $this->db->delete('usuarios', array('id_user'=>$data['id_user']));
    }
    function actualizarUsuario($data){
        $this->db->set('usuario', $data['usuario']);
        $this->db->set('password', $data['password']);
        $this->db->set('tipo', $data['tipo']);
        $this->db->where('id_user', $data['id_user']);
        $this->db->update('usuarios');
    }
}

?>