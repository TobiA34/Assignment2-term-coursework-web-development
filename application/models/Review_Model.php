<?php
class Review_Model extends CI_Model
{

	public function getReviews(){

		//load the database
		$this->load->database();
		// store query inside this variable
		$query = $this->db->get('reviews');
		//return the result that we get from the query
		return $query->result();

	}


}
