<?php
if(!defined('BASEPATH'))exit('No direct script allowed');

class profile_controller extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('profile_model');
	}
	public function index(){
		$this->load->view('templates/header');
		$this->load->view('scholar_profile');
		$this->load->view('templates/footer');
	}
	public function insert_profile(){
		$this->profile_model->insert_profile();
		redirect('center');
	}
	public function search(){
		$name = $this->input->post('search');
		$data['results'] = $this->profile_model->getScholarByName($name);

		$this->load->view('templates/header');
		$this->load->view('breakdown',$data);
		$this->load->view('templates/footer');
	}
	public function to_edit($id){
		$data['result'] = $this->profile_model->getScholarById($id);
		$this->load->view('templates/header');
		$this->load->view('scholar_profile',$data);
	}
	public function edit_profile($id){
		$this->profile_model->edit_profile($id);
		redirect('breakdown');
	}
	public function delete_profile($id){
		$this->profile_model->delete_profile($id);
		redirect('breakdown');
	}
	public function breakdown(){
		$data['results'] = $this->profile_model->getAllScholarProfile();
		$this->load->view('templates/header');
		$this->load->view('breakdown',$data);
	}
	public function monitor($id){
		$data['result'] = $this->profile_model->getScholarById($id);

		$this->load->view('templates/header');
		$this->load->view('monitoring',$data);
		$this->load->view('templates/footer');
	}
}