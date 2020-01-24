<?php

class Account_Model extends CI_Model
{

	public function getAccountDetails($username){
//		$query = "SELECT * FROM users WHERE username='$username'";
		$username = $this->session->userdata('username');

		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('username',$username);
		$query = $this->db->get();

		if ($query->num_rows() > 0){

			echo "not working";
		} else{
			return $query->result();

		}


	}



}
