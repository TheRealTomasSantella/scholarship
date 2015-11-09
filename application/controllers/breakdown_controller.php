<?php
if(!defined('BASEPATH'))exit('No direct script allowed');

class breakdown_controller extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('breakdown_model');
		$this->load->model('profile_model');
	}
	public function insertion($name){
		$id = $this->uri->segment(3);
		$this->breakdown_model->insert_data($id, $name);
		redirect('breakdown');
	}
	public function display_finance($id){
		$data['result'] = $this->profile_model->getScholarById($id);
		$data['results'] = $this->breakdown_model->getBreakdownByID($id);

		$this->load->view('templates/header');
		$this->load->view('financial',$data);
		$this->load->view('templates/footer');
	}
	public function edit($id, $name){
		$this->breakdown_model->update_data($id, $name);
		redirect('breakdown');
	}
	
}