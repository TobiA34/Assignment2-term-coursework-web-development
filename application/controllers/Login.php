<?php
 class Login extends CI_Controller
 {

	 public function __construct()
	 {
		 parent::__construct();
		 //Load in the model.
		 $this->load->helper('url');
		 $this->load->model('Login_Model');
		 $this->load->library('session');
	 }

	 public function index()
	 {

		 $this->load->view('login');

	 }


	 public function User_Login()
	 {
		 $active_user = $this->input->post('username');
//		var_dump($active_user);
		 $is_user = get_cookie('active_user', TRUE);

		 if (!$is_user) {
			 set_cookie('active_user', $active_user, 10000);

		 } else {
			 delete_cookie('active_user');
		 }

		 $this->index();
	 }


	 public function loginPage()
	 {
		 //Get the information from our information model.
		 //send the information to our new view, for further information
		 $this->load->view('login');

	 }

	 public function adminPage()
	 {
		 //Get the information from our information model.
		 //send the information to our new view, for further information
		 $this->load->view('admin');

	 }


	 public function checkLogin()
	 {
		 $this->load->helper(array('form', 'url'));

		 $this->load->library('form_validation');


		 $this->form_validation->set_rules('username', 'Username', 'required');
		 $this->form_validation->set_rules('password', 'Password', 'required');

		 $username = $this->input->post('username');
		 $password = $this->input->post('password');

		 $user = $this->Login_Model->login_users($username,$password);




		 if ($user  == null) {
			 //declaring session
			 $this->load->view('login');
			 echo "<h2>Your Account is Invalid</h2>";

 		 } else {
			 $this->load->view('admin');

		 }
	 }

	 public function logout()
	 {
		 //removing session
//		 $this->session->unset_userdata('user');
		 redirect("login");
	 }


}





//if($this->form_validation->run() == TRUE) {
//	//$this->load->view('admin');
//	//get the values from our form.
//	$username = $this->input->post('username');
//	$password = $this->input->post('password');
//
//
//
//	//run the validation part.
//
//
//
//
//	//Check feedback from our database.
//
//	$result = $this->Login_Model->login_users($username,$password);
//	//if (!empty($this->session->userdata['user_id']))
//	if($result === "No User")
//	{
//		//load view login as done with the form validation. Pass a variable through with the appropriate error.
//		//Incorrect credentials.
//		//User not found.
//
//		$this->load->view('login');
//		echo "Incorrect credentials .<br>";
//		echo "User not found";
//
//
//	}
//	else
//	{
//		var_dump($username);
//		var_dump($password);
//
//
//		//load the welcome/home page view
////				set_cookie('userID',$user_id,30000);
//		$this->load->view('admin');
//
//
//	}
//
//
//} else {
//	$this->load->view('login');
//}
