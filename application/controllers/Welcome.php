<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		
		if ($this->session->userdata('logged_in') == false) {
			$errors[] = 'No se encuentra Loggeado';
			$this->session->set_userdata(array('errors'=>$errors));
			redirect(base_url(), 'refresh');
		}
		$data= [];
		if( $this->session->userdata('errors') ){
				$data['errors'] = $this->session->userdata('errors');
				$this->session->unset_userdata('errors');
		}
		$data['title'] = "Home";
		$data['view'] = $this->load->view('home',$data,TRUE);
		$this->load->view('layauts/default',$data);
	}
	
}
