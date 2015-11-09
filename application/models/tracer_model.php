<?php
if(!defined('BASEPATH'))exit('No direct script allowed');

class tracer_model extends CI_Model{
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
			'contactNumber' => $this->input->post('contactNumber'),
			'company1' => $this->input->post('companyName1'),
			'company2' => $this->input->post('companyName2'),
			'company3' => $this->input->post('companyName3'),
			'designation1' => $this->input->post('designation1'),
			'designation2' => $this->input->post('designation2'),
			'designation3' => $this->input->post('designation3'),
			'from1' => $this->input->post('from1'),
			'from2' => $this->input->post('from2'),
			'from3' => $this->input->post('from3'),
			'to1' => $this->input->post('to1'),
			'to2' => $this->input->post('to2'),
			'to3' => $this->input->post('to3'),
			'seminar1' => $this->input->post('seminar1'),
			'seminar2' => $this->input->post('seminar2'),
			'seminar3' => $this->input->post('seminar3'),
			'semyear1' => $this->input->post('semyear1'),
			'semyear2' => $this->input->post('semyear2'),
			'semyear3' => $this->input->post('semyear3'),
			'certificate1' => $this->input->post('certificate1'),
			'certificate2' => $this->input->post('certificate2'),
			'certificate3' => $this->input->post('certificate3'),
			'ceryear1' => $this->input->post('ceryear1'),
			'ceryear2' => $this->input->post('ceryear2'),
			'ceryear3' => $this->input->post('ceryear3'),
			'org1' => $this->input->post('org1'),
			'org2' => $this->input->post('org2'),
			'org3' => $this->input->post('org3'),
			'orgyear1' => $this->input->post('orgyear1'),
			'orgyear2' => $this->input->post('orgyear2'),
			'orgyear3' => $this->input->post('orgyear3'),
 		);
		$this->db->insert('tracer', $data);
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
			'contactNumber' => $this->input->post('contactNumber'),
			'company1' => $this->input->post('companyName1'),
			'company2' => $this->input->post('companyName2'),
			'company3' => $this->input->post('companyName3'),
			'designation1' => $this->input->post('designation1'),
			'designation2' => $this->input->post('designation2'),
			'designation3' => $this->input->post('designation3'),
			'from1' => $this->input->post('from1'),
			'from2' => $this->input->post('from2'),
			'from3' => $this->input->post('from3'),
			'to1' => $this->input->post('to1'),
			'to2' => $this->input->post('to2'),
			'to3' => $this->input->post('to3'),
			'seminar1' => $this->input->post('seminar1'),
			'seminar2' => $this->input->post('seminar2'),
			'seminar3' => $this->input->post('seminar3'),
			'semyear1' => $this->input->post('semyear1'),
			'semyear2' => $this->input->post('semyear2'),
			'semyear3' => $this->input->post('semyear3'),
			'certificate1' => $this->input->post('certificate1'),
			'certificate2' => $this->input->post('certificate2'),
			'certificate3' => $this->input->post('certificate3'),
			'ceryear1' => $this->input->post('ceryear1'),
			'ceryear2' => $this->input->post('ceryear2'),
			'ceryear3' => $this->input->post('ceryear3'),
			'org1' => $this->input->post('org1'),
			'org2' => $this->input->post('org2'),
			'org3' => $this->input->post('org3'),
			'orgyear1' => $this->input->post('orgyear1'),
			'orgyear2' => $this->input->post('orgyear2'),
			'orgyear3' => $this->input->post('orgyear3'),
		);
		$this->db->where('scholarID', $id);
		$this->db->update('tracer', $data);
	}
	public function delete_profile($id){
		$this->db->where('scholarID' ,$id);
		$this->db->delete('tracer');
	}
	public function getAllTracer(){
		return $this->db->get('tracer')->result_array();
	}
	public function getScholarByName($name){
		$this->db->like('name',$name);
		return $this->db->get('tracer')->result_array();
	}
	public function getScholarById($id){
		$this->db->where('scholarID', $id);
		return $this->db->get('tracer')->row_array();
	}
}