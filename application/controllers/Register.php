<?php

class Register extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//Load in the model.
		$this->load->helper('url');
		$this->load->model('Register_Model');
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->view('register');

	}
	function registerPage()
	{
		$this->load->view('register');
	}


	public function insert()
	{
		$this->Register_Model->insert_user();
		$this->load->view('login');

	}

	public function auto_insert()
	{
		$data['username'] = $this->input->post('username');
		$data['password'] = $this->input->post('password');
		$data['telephone'] = $this->input->post('telephone');
		$data['email'] = $this->input->post('email');
		$data['dob'] = $this->input->post('dob');
		$data['firstname'] = $this->input->post('first_name');
		$data['lastname'] = $this->input->post('last_name');

		$this->Register_Model->insert_user($data);

		$this->load->view('successful_sign_up');
	}

	public function select(){
		$data['result'] = $this->Register_Model->select_users();

		$this->load->view('pratice',$data);
	}


}



