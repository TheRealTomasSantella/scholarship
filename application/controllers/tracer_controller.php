<?php
if(!defined('BASEPATH'))exit('No direct script allowed');

class tracer_controller extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('tracer_model');
	}
	public function add(){
		$this->tracer_model->insert_profile();
		redirect('view');
	}
	public function viewTracer(){
		$data['results'] = $this->tracer_model->getAllTracer();

		$this->load->view('templates/header');
		$this->load->view('tracer_view',$data);
	}
	public function edit($id){
		$data['result'] = $this->tracer_model->getScholarById($id);

		$this->load->view('templates/header');
		$this->load->view('tracer',$data);
		$this->load->view('templates/footer');
	}
	public function edit_tracer($id){
		$this->tracer_model->edit_profile($id);
		redirect('view');
	}
	public function delete_tracer($id){
		$this->tracer_model->delete_profile($id);
		redirect('view');
	}
	public function index(){

		$this->load->view('templates/header');
		$this->load->view('tracer');
		$this->load->view('templates/footer');
	}
}