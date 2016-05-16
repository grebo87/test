<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Clase para gestionar el Personal
*/
class SeguridadController extends CI_Controller 
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Seguridad');
	}

	public function login()
	{
		$data= [];
		if( $this->session->userdata('errors') ){
				$data['errors'] = $this->session->userdata('errors');
				$this->session->unset_userdata('errors');
		}
		$this->load->view('login',$data);
	}

	public function postLogin()
	{
		$response = $this->Seguridad->validar();
		if ($response->num_rows() === 1) {
			$resultado = $response->row();
			$this->auth->set_session($resultado);
			redirect(base_url().'home', 'refresh');
		} else {
			$errors[] = 'Login o password incorrecto';
			$this->session->set_userdata(array('errors'=>$errors));
			redirect(base_url(), 'refresh');
		}
		
	}

	public function logout()
	{
		$this->auth->logout();
		$errors[] = 'La sessión se ha cerrado correctamente.';
		$this->session->set_userdata(array('errors'=>$errors));
        redirect(base_url(),'refresh');
	}

}

	