<?php
class Account extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//Load in the model.
		$this->load->helper('url');
		$this->load->model('Account_Model');
		$this->load->library('session');
	}

	public function index()
	{

		$this->load->view('account');

	}




	public function AccountPage()
	{
		//Get the information from our information model.
		//send the information to our new view, for further information
		$this->load->view('account');

	}



	public function getDetails()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

		$username = $this->session->userdata('username');
		$userDetails = $this->Account_Model->getAccountDetails($username);


		if($userDetails == null){
			echo "nothing found";
		}else{
			echo "something found";
		}












		}


	public function updateAccount(){
		$this->load->view('updateAccount');
	}







}


