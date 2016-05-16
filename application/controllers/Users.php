<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User');
		if ($this->session->userdata('logged_in') == false) {
			$errors[] = 'No se encuentra Loggeado';
			$this->session->set_userdata(array('errors'=>$errors));
			redirect(base_url(), 'refresh');
		}
	}

	public function index()
	{
		$data= [];		
		$data['users'] = $this->User->getUsers();
		$data['title'] = "Usuarios";
		$data['view'] = $this->load->view('users/table',$data,TRUE);
		$this->load->view('layauts/default',$data);
	}

	public function create()
	{
		$data= [];
		$data['title'] = "Usuarios";
		$data['view'] = $this->load->view('users/form-fields-create',$data,TRUE);
		$this->load->view('layauts/default',$data);
	}

	public function store()
	{
		$data= [
				'nombre'   => $this->input->post('nombre'),
				'apellido' => $this->input->post('apellido'),
				'cedula'   => $this->input->post('cedula'),
				'email'    => $this->input->post('email'),
				'login'    => $this->input->post('login'),
				'password' => $this->input->post('password'),
				'tipo'     => $this->input->post('tipo'),
				'status'   => '1',
				];

		$response = $this->User->store($data);
		if ($response) {			
			$this->session->set_flashdata('errors','Datos Guardados');
			$this->session->set_flashdata('alert','success');
			redirect(base_url().'users/', 'refresh');
		} else {
			$this->session->set_flashdata('errors','Datos no Guardados');
			$this->session->set_flashdata('alert','danger');
			redirect(base_url().'users/create', 'refresh');
		}
		

	}

	

	public function edit($id = '')
	{
		$data= [];
		$data['user'] = $this->User->getUser($id);
		$data['title'] = "Usuarios";
		$data['view'] = $this->load->view('users/form-fields-edit',$data,TRUE);
		$this->load->view('layauts/default',$data);
		
	}

	public function update()
	{
		$data= [
				'nombre'   => $this->input->post('nombre'),
				'apellido' => $this->input->post('apellido'),
				'cedula'   => $this->input->post('cedula'),
				'email'    => $this->input->post('email'),
				'tipo'     => $this->input->post('tipo'),
				'status'   => $this->input->post('status'),
				'id'       => $this->input->post('id'),
				];

		$response = $this->User->update($data);
	
		if ($response > 0) {
			$this->session->set_flashdata('errors','Datos Editados');
			$this->session->set_flashdata('alert','success');
			redirect(base_url().'users/', 'refresh');
		} else {			
			$this->session->set_flashdata('errors','Datos no Editados');
			$this->session->set_flashdata('alert','warning');
			redirect(base_url().'users/edit/'.$data['id'], 'refresh');
		}
	}

	public function delete($id = '')
	{
		
		$response = $this->User->delete($id);
	
		if ($response) {
			$this->session->set_flashdata('errors','Datos Eliminados');
			$this->session->set_flashdata('alert','success');
			redirect(base_url().'users/', 'refresh');
		} else {
			$this->session->set_flashdata('errors','Datos no Eliminados');
			$this->session->set_flashdata('alert','warning');
			redirect(base_url().'users/', 'refresh');
		}
	}


	public function show($id = '')
	{
		$data= [];
		$data['user'] = $this->User->getUser($id);
		$data['title'] = "Usuarios";
		$data['view'] = $this->load->view('users/show',$data,TRUE);
		$this->load->view('layauts/default',$data);		
	}

	public function perfil()
	{
		$data= [];
		$data['title'] = "Usuarios";
		$data['user'] = $this->User->getUser($this->session->userdata('id'));
		$data['view'] = $this->load->view('users/profile',$data,TRUE);
		$this->load->view('layauts/default',$data);
	}

	public function change_password()
	{
		$data= [
				'password_actual'    => $this->input->post('password_actual'),
				'password'           => $this->input->post('password1'),
				'confirm_password'   => $this->input->post('confirm_password'),
				'id'                 => $this->input->post('id'),
				];
		if ($data['password_actual'] == $this->User->getPassword($data['id'])) {
			
			$response = $this->User->changePassword($data);	
			if ($response > 0) {
				$this->session->set_flashdata('errors','password Editados');
				$this->session->set_flashdata('alert','success');
				redirect(base_url().'users/perfil', 'refresh');
			} else {			
				$this->session->set_flashdata('errors','password no Editados');
				$this->session->set_flashdata('alert','warning');
				redirect(base_url().'users/perfil', 'refresh');
			}

		} else {
				$this->session->set_flashdata('errors','El password Actual no es el mismo');
				$this->session->set_flashdata('alert','warning');
				redirect(base_url().'users/perfil', 'refresh');
		}
		
		
	}
}