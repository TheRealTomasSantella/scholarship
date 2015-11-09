<?php
if(!defined('BASEPATH'))exit('No direct script allowed');

class profile_model extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
	public function insert_profile(){
		$data = array(
			'name' => $this->input->post('name'),
			'address' => $this->input->post('address'),
			'sex' => $this->input->post('gender'),
			'month' => $this->input->post('month'),
			'day' => $this->input->post('day'),
			'year' => $this->input->post('year'),
			'age' => $this->input->post('age'),
			'placeOfBirth' => $this->input->post('pod'),
			'civilStatus' => $this->input->post('status'),
			'elementary' => $this->input->post('elementary'),
			'secondary' => $this->input->post('secondary'),
			'typeOfSchool' => $this->input->post('type'),
			'scholarshipProgram' => $this->input->post('sp'),
			'yearOfAward' => $this->input->post('ya'),
			'university' => $this->input->post('univ'),
			'degree' => $this->input->post('degree'),
			'contactName' => $this->input->post('contactName'),
			'relation' => $this->input->post('relation'),
			'addressContact' => $this->input->post('contactAddress'),
			'contactNumber' => $this->input->post('contactNumber')
		);
		$this->db->insert('scholarprofile', $data);
	}
	public function edit_profile($id){
		$data = array(
			'name' => $this->input->post('name'),
			'address' => $this->input->post('address'),
			'sex' => $this->input->post('gender'),
			'month' => $this->input->post('month'),
			'day' => $this->input->post('day'),
			'year' => $this->input->post('year'),
			'age' => $this->input->post('age'),
			'placeOfBirth' => $this->input->post('pod'),
			'civilStatus' => $this->input->post('status'),
			'elementary' => $this->input->post('elementary'),
			'secondary' => $this->input->post('secondary'),
			'typeOfSchool' => $this->input->post('type'),
			'scholarshipProgram' => $this->input->post('sp'),
			'yearOfAward' => $this->input->post('ya'),
			'university' => $this->input->post('univ'),
			'degree' => $this->input->post('degree'),
			'contactName' => $this->input->post('contactName'),
			'relation' => $this->input->post('relation'),
			'addressContact' => $this->input->post('contactAddress'),
			'contactNumber' => $this->input->post('contactNumber')
		);
		$this->db->where('scholarID', $id);
		$this->db->update('scholarprofile', $data);
	}
	public function delete_profile($id){
		$this->db->where('scholarID' ,$id);
		$this->db->delete('scholarprofile');
	}
	public function getAllScholarProfile(){
		return $this->db->get('scholarprofile')->result_array();
	}
	public function getScholarByName($name){
		$this->db->like('name',$name);
		return $this->db->get('scholarprofile')->result_array();
	}
	public function getScholarById($id){
		$this->db->where('scholarID', $id);
		return $this->db->get('scholarprofile')->row_array();
	}
}