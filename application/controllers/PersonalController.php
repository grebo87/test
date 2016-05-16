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
		if ($this->session->userdata('logged_in') == false) {
			$errors[] = 'No se encuentra Loggeado';
			$this->session->set_userdata(array('errors'=>$errors));
			redirect(base_url(), 'refresh');
		}
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
			$data['domicilio'] = $this->Personal->getDomicilio($id);
			$data['puesto'] = $this->Personal->getPuesto($data['personal']->puesto_id);
			$data['edad'] = $this->CalculaEdad($data['personal']->fecha_nacimiento);
			$data['view'] = $this->load->view('personal/show',$data,TRUE);
			$this->load->view('layauts/default',$data);
		} else {
			$this->session->set_flashdata('errors','No hay data');
			$this->session->set_flashdata('alert','danger');
			redirect(base_url().'personal', 'refresh');
		}
		
		
	}

	public function edit($id='')
	{
		$data= [];
		$data['personal'] = $this->Personal->getPersona($id);
		$data['puestos'] = $this->Personal->getPuestos();
		if ($data['personal']) {
			$data['title'] = "Personal";
			$data['domicilio'] = $this->Personal->getDomicilio($id);
			$data['puesto'] = $this->Personal->getPuesto($data['personal']->puesto_id);
			$data['edad'] = $this->CalculaEdad($data['personal']->fecha_nacimiento);
			$data['view'] = $this->load->view('personal/edit',$data,TRUE);
			$this->load->view('layauts/default',$data);
		} else {
			$this->session->set_flashdata('errors','No hay data');
			$this->session->set_flashdata('alert','danger');
			redirect(base_url().'personal', 'refresh');
		}
	}

	public function create()
	{
		$data= [];
		$data['title'] = "Personal";
		$data['puestos'] = $this->Personal->getPuestos();
		$data['view'] = $this->load->view('personal/create',$data,TRUE);
		$this->load->view('layauts/default',$data);
	}

	public function store()
	{
		$personal = $this->input->post('personal');
		$personal_id = $this->Personal->storePersonal($personal);
		$domicilio = $this->input->post('domicilio');
		$domicilio['personal_id'] = $personal_id;
		$domicilio_id = $this->Personal->storeDomicilio($domicilio);

		if ($domicilio_id) {
			$this->session->set_flashdata('errors','Datos Guardados');
			$this->session->set_flashdata('alert','success');
			redirect(base_url().'personal', 'refresh');
		} else {
			$this->session->set_flashdata('errors','Datos no Guardados');
			$this->session->set_flashdata('alert','danger');
			redirect(base_url().'personal/create', 'refresh');
		}
		
	}


	function CalculaEdad( $fecha ) {
	    list($Y,$m,$d) = explode("-",$fecha);
	    return( date("md") < $m.$d ? date("Y")-$Y-1 : date("Y")-$Y );
	}

	public function updateDomicilio()
	{
		$domicilio = $this->input->post('domicilio');
		$response = $this->Personal->updateDomicilio($domicilio);
		if ($response > 0) {
			$this->session->set_flashdata('errors','Datos Editados');
			$this->session->set_flashdata('alert','success');
			redirect(base_url().'personal', 'refresh');
		} else {
			$this->session->set_flashdata('errors','Datos no Editados');
			$this->session->set_flashdata('alert','danger');
			redirect(base_url().'personal/'.$domicilio['personal_id'].'/edit', 'refresh');
		}
		
	}


	public function updatePuesto()
	{
		$personal = $this->input->post('personal');
		$response = $this->Personal->updatePuesto($personal);
		if ($response > 0) {
			$this->session->set_flashdata('errors','Datos Editados');
			$this->session->set_flashdata('alert','success');
			redirect(base_url().'personal', 'refresh');
		} else {
			$this->session->set_flashdata('errors','Datos no Editados');
			$this->session->set_flashdata('alert','danger');
			redirect(base_url().'personal/'.$personal['personal_id'].'/edit', 'refresh');
		}
	}

	public function updateDatosGenerales()
	{
		$personal = $this->input->post('personal');
		$response = $this->Personal->updateDatosGenerales($personal);
		if ($response > 0) {
			$this->session->set_flashdata('errors','Datos Editados');
			$this->session->set_flashdata('alert','success');
			redirect(base_url().'personal', 'refresh');
		} else {
			$this->session->set_flashdata('errors','Datos no Editados');
			$this->session->set_flashdata('alert','danger');
			redirect(base_url().'personal/'.$personal['id'].'/edit', 'refresh');
		}
	}

	public function delete($id='')
	{
		
		$response = $this->Personal->delete($id);
		if ($response > 0) {
			$this->session->set_flashdata('errors','Datos Eliminados');
			$this->session->set_flashdata('alert','success');
			redirect(base_url().'personal', 'refresh');
		} else {
			$this->session->set_flashdata('errors','Datos no Eliminados');
			$this->session->set_flashdata('alert','danger');
			redirect(base_url().'personal', 'refresh');
		}
	}
}