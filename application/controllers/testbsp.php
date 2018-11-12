<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testbsp extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('baseDatos');
        $this->load->library(array('session','form_validation'));
        $this->load->helper(array('url','form'));
    }
   
    
    function index(){
        $this->load->view('testbsp/index');
 
        }
}