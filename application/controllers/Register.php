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


//	public function insert()
//	{
//		$this->Register_Model->insert_user();
//		$this->load->view('login');
//
//	}

	public function auto_insert()
	{
		$username = $data['username'] = $this->input->post('username');
		$password = $data['password'] = $this->input->post('password');
		$telephone = $data['telephone'] = $this->input->post('telephone');
		$email = $data['email'] = $this->input->post('email');
		$dob = $data['dob'] = $this->input->post('dob');
		$firstname = $data['firstname'] = $this->input->post('first_name');
		$lastname = $data['lastname'] = $this->input->post('last_name');



		$this->Register_Model->insert_user($data);

		$userDetails= array(
			'username'  => $username,
			'password' => $password,
			'telephone'  => $telephone,
			'email'  => $email,
			'dob'  => $dob,
			'firstname'  => $firstname,
			'lastname'  => $lastname,
		);

		$this->session->set_userdata($userDetails);

		$this->load->view('login');

		//store data in a session





	}

	public function select(){
		$data['result'] = $this->Register_Model->select_users();

		$this->load->view('pratice',$data);
	}


}



