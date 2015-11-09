<?php
if(!defined('BASEPATH'))exit('No direct script allowed');

class user_model extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
	public function insert(){
		$data = array(
			'name' => $this->input->post('username'),
			'password' => $this->input->post('password')
			);
		$this->db->insert('user', $data);
	}
	public function getAllUsers(){
		return $this->db->order_by('name', 'asc')->get('user')->result_array();
	}
	public function getUserByUsername($username){
		return $this->db->from('user')->where('name', $username)->get()->row_array();
	}
}