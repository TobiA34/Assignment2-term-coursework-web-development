<?php

class Review extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//Load in the url.
		$this->load->helper('url');
		//Load in the model.
		$this->load->model('Review_Model');
		//Load in the session.
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->view('review');

	}
	function reviewPage()
	{
		//create a key called result which will get the function out of the review Model
		$data['result'] = $this->Review_Model->getReviews();
		// Load the view with the view and the data
		$this->load->view('review',$data);
	}






}



