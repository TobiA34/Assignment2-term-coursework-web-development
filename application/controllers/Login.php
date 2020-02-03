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

	 	//load view login
		 $this->load->view('login');

	 }


	 public function User_Login()
	 {
	 	// get the post from the user and store it in a variable called active user
		 $active_user = $this->input->post('username');
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
		//load view login
		 $this->load->view('login');

	 }

	 public function adminPage()
	 {
		//load view admin
		 $this->load->view('admin');

	 }


	 public function checkLogin()
	 {
		 $this->load->helper(array('form', 'url'));

		 $this->load->library('form_validation');


		 // set validation for username and password
		 $this->form_validation->set_rules('username', 'Username', 'required');
		 $this->form_validation->set_rules('password', 'Password', 'required');

		 //get post from username and password input field and store it in a variable
		 $username = $this->input->post('username');
		 $password = $this->input->post('password');

		 // use the variable to pass through as a parameter from the function login users from the login model and store it in user variable
		 $user = $this->Login_Model->login_users($username,$password);

		 //check to see if user is null then display message and redirect them to the login page
		 if ($user  == null) {

			 $this->load->view('login');
			 echo "<h2>Your Account is Invalid</h2>";

 		 } else {
		 	// create an array which holds the username
			 $newdata = array(
				 'username'  => $username,

			 );
			//then set the session
			 $this->session->set_userdata($newdata);

			 $this->session->set_userdata($user);


			 $this->load->view('account');

		 }
	 }

	 public function logout()
	 {

		 //removing session
		 $this->session->unset_userdata($newdata);
		 redirect("login");
	 }

	 public function AccountPage()
	 {
	 	//create session to get all the details for account page
		// load the account page
		// set the account page data in view file
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
