<?php
if(!defined('BASEPATH'))exit('No direct script allowed');

class scholarship extends CI_CONTROLLER{
	public function __construct(){
		parent::__construct();
		$this->load->model('user_model');
	}
	public function index(){
		$this->load->view('templates/pureHeader');
		$this->load->view('login');
		$this->load->view('templates/footer');
	}
	public function sign_up(){
		$this->load->view('templates/pureHeader');
		$this->load->view('signUp');	
		$this->load->view('templates/footer');
	}
	public function login_error(){
		$this->load->view('templates/pureHeader');
		$this->load->view('login_error');	
		$this->load->view('templates/footer');
	}
	public function insertUser(){
		$this->user_model->insert();
		redirect('login');
	}
	public function search(){
		$this->load->view('templates/header');
		$this->load->view('search');
		$this->load->view('templates/footer');
	}
	public function center(){
		$this->load->view('templates/header');
		$this->load->view('center');
		$this->load->view('templates/footer');
	}
	public function login(){
		$users = $this->user_model->getAllUsers();
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$loginUser = null;

		foreach($users as $user){
			if (($user['name'] == $username) && ($user['password'] == $password)){
				$loginUser = $this->user_model->getUserByUsername($username);
				break;
			}
		}
		if (isset($loginUser)){
			$this->session->set_userdata($loginUser);
			redirect('center');
		} else {
			$this->session->set_flashdata("message", "Username or password is incorrect.");
			redirect('error');
		}
	}
	public function logout(){
		$this->session->unset_userdata('name');
		redirect('login');
	}
}