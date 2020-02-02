<?php
class Review_Model extends CI_Model
{

	public function getReviews(){

		$this->load->database();
		$query = $this->db->get('reviews');
		return $query->result();

	}


}
