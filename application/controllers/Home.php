<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$this->load->view('include/header');
		$this->load->view('index');
		$this->load->view('include/footer');
	}
	public function about()
	{
		$this->load->view('include/header');
		$this->load->view('about');
		$this->load->view('include/footer');
	}
	public function gallery()
	{
		$this->load->view('include/header');
		$this->load->view('gallery');
		$this->load->view('include/footer');
	}
	public function single()
	{
		$this->load->view('include/header');
		$this->load->view('single');
		$this->load->view('include/footer');
	}
	public function contact()
	{
		$this->load->view('include/header');
		$this->load->view('contact');
		$this->load->view('include/footer');
	}

	public function sms(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'name', 'required|min_length[3]|max_length[12]');
		$this->form_validation->set_rules('phone', 'phone', 'required|min_length[3]|max_length[12]');
		$this->form_validation->set_rules('email', 'email', 'required|valid_email');
		$this->form_validation->set_rules('message', 'message', 'required');
		if($this->form_validation->run()){
			$this->load->view('sendingsms');
		}else{	
			$this->load->view('include/header');
		    $this->load->view('contact');
	    	$this->load->view('include/footer');
		}
	}


	public function sending(){
		$this->load->view('sendingsms');
	}
}
