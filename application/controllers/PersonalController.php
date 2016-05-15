<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Clase para gestionar el Personal
*/
class PersonalController extends CI_Controller 
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Personal');
	}

	public function index()
	{
		$data= [];
		$data['personal'] = $this->Personal->getPersonal();
		$data['title'] = "Personal";
		$data['view'] = $this->load->view('personal/index',$data,TRUE);
		$this->load->view('layauts/default',$data);
	}

	public function show($id='')
	{
		$data= [];
		$data['personal'] = $this->Personal->getPersona($id);
		if ($data['personal']) {
			$data['title'] = "Personal";
			$data['view'] = $this->load->view('personal/show',$data,TRUE);
			$this->load->view('layauts/default',$data);
		} else {
			$errors[] = 'No hay data';
			$this->session->set_userdata(array('errors'=>$errors));
			redirect(base_url().'personal', 'refresh');
		}
		
		
	}

	public function edit($id='')
	{
		echo $id;
	}

	public function update()
	{
		echo "update";
	}
}