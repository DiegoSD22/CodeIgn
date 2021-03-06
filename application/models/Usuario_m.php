<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Usuario_m extends CI_Model {
    
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function mostrarUsuarios(){
        $query= $this->db->get('usuarios');
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return false;
        }
    }
    
    public function agregarUsuario(){
        $field=array(
          'usuario'=> $this->input->post('txtUsuario'),
            'password'=> $this->input->post('txtPassword'),
            'tipo'=> $this->input->post('txtTipo')
        );
        $this->db->insert('usuarios', $field);
        if($this->db->affected_rows()>0){
            return true;
        }else{
            return false;
        }
    }
    
    
    public function editarUsuario(){
        $id_user= $this->input->get('id_user');
        $this->db->where('id_user', $id_user);
        $query=$this->db->get('usuarios');
        if($query->num_rows()>0){
            return $query->row();
        }else{
            return false;
        }
    }
    
    public function actualizarUsuario(){
        $id_user= $this->input->post('txtId');
        $field=array(
          'usuario'=> $this->input->post('txtUsuario'),
            'password'=> $this->input->post('txtPassword'),
            'tipo'=> $this->input->post('txtTipo')
        );
        $this->db->where('id_user', $id_user);
        $this->db->update('usuarios', $field);
        if($this->db->affected_rows()>0){
            return true;
        }else{
            return false;
        }
    }
    
    public function borrarUsuario(){
        $id_user= $this->input->get('id_user');
        $this->db->where('id_user', $id_user);
        $this->db->delete('usuarios');
        if($this->db->affected_rows()>0){
            return true;
        }else{
            return false;
        }
    }
    
    /*CREATE OR REPLACE PROCEDURE insertuser(MY_User IN VARCHAR2, MY_Pass IN VARCHAR2, MY_Tipo IN VARCHAR2) BEGIN INSERT INTO usuarios(usuario, password, tipo) VALUES(MY_User, MY_Pass, MY_Tipo); END*/
    
    public function agregarUsuarioSP($usuario, $password, $tipo) {
        $insert_user_stored_proc = "CALL insert_user(?, ?, ?)";
        $data = array('usuario' => $usuario, 'password' => $password, 'tipo' => $tipo);
        $result = $this->db->query($insert_user_stored_proc, $data);
        if ($result !== NULL) {
            return TRUE;
        }
        return FALSE;
    }
    
    
    /*CREATE OR REPLACE PROCEDURE Selector() BEGIN SELECT * FROM usuarios; END*/
    
     
    public function seleccionar(){
    $query = $this->db->query("CALL Selector()");
      return $query->result();
    }
}