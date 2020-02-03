<?php

class Account_Model extends CI_Model
{

	public function getAccountDetails($username){
//		$query = "SELECT * FROM users WHERE username='$username'";
		$username = $this->session->userdata('username');

		// select all the columns
		$this->db->select('*');
		// get the table users
		$this->db->from('users');
		//where the username is equal to the username which is defined as a parameter
		$this->db->where('username',$username);
		//get the database and store it in the query variable
		$query = $this->db->get();
		// if the row return is greater than 0 then return the result else show not working message
		if ($query->num_rows() > 0){

			return $query->result();
		} else{
			echo "not working";
		}


	}



}
