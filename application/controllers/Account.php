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
		//load view account
  		$this->load->view('account');

	}



	public function getDetails()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

		// set up session username
		$username = $this->session->userdata('username');
		//store function from model inside of the variable
		$userDetails = $this->Account_Model->getAccountDetails($username);


		if($userDetails == null){
			echo "nothing found";
		}else{
			echo "something found";
		}

		}


	public function updateAccount(){
		//load view update account
		$this->load->view('updateAccount');
	}

}


