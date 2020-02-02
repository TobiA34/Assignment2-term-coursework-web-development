<?php

class Review extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//Load in the model.
		$this->load->helper('url');
		$this->load->model('Review_Model');
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->view('review');

	}
	function reviewPage()
	{
		$data['result'] = $this->Review_Model->getReviews();
		$this->load->view('review',$data);
	}






}



