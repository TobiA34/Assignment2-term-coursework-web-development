<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        //Load in the model.
        $this->load->helper('url');
		$this->load->library('session');
	}

    public function index()
    {
    	$cookie = get_cookie('active_user',TRUE);
    	$data['heading'] = $cookie;
 		$data['uri'] = 'index.php/buttons/'.$cookie;
		$this->load->view('home',$data);

	}




	public function aboutPage()
	{
		//Get the information from our information model.
		//send the information to our new view, for further information
		$this->load->view('home');
	}




}


