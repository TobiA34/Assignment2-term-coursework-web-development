<?php
class Register_Model extends CI_Model
{

	public function insert_user($data){

		//for this example we will utilise static data.
		//Previous tutorials have explained the process of retriving and sending data between models and views

//		$data['username'] = 'TobiAdegoroyeD';
//		$data['password'] = 'sceret';

		$this->db->insert('users',$data);
	}

	public function select_users(){

		$this->db->select('username','user_id');
		$this->db->from('users');
		$this->db->where('user_id = 1');

		$query = $this->db->get();

		return $query->result();

	}

}
