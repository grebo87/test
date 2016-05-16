<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Seguridad extends CI_Model {
	
	
	function __construct() {
		
		parent::__construct();
	}

	/*
	 * funcion validar()
	 * valida si el usuario existe en la base de datos
	 * valida la contraseña, el nombre de usuario y el estado del usuario
	 * 
	 */
	public function validar(){
	   $login    = $this->input->post('login');
	   $password = $this->input->post('password');
	   
	   $this->db->where('login',$login);
	   $this->db->where('password',$password);
	   $sql=$this->db->get('users');	  
	   return $sql;   
	   
		}
}