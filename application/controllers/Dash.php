<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dash extends CI_Controller {

	public function index()
	{
		$this->load->view('dashboard/include/header');
		$this->load->view('dashboard/product_list');
		$this->load->view('dashboard/include/footer');
	}
	public function login()
	{
		$this->load->view('dashboard/include/header');
		$this->load->view('dashboard/login');
		$this->load->view('dashboard/include/footer');
	}

	public function login_process(){
		// $this->load->library('form_validation');
		// $this->form_validation->set_rules('u_name', 'Username', 'required');
		// $this->form_validation->set_rules('u_pass', 'Password', 'required');
		// if($this->form_validation->run()){
	$admin_email=$this->input->post('admin_email');
			$admin_pass=$this->input->post('admin_pass');

			$form_data=array(
				'admin_email'=>$admin_email,
				'admin_pass'=>$admin_pass
			);
			// echo "<pre>";
			// var_dump($user_data);
			// echo "</pre>";
			$admin_data = $this->db->get_where('admin',array('admin_email'=> $form_data['admin_email']) );
			foreach($admin_data->result() as $admin){
				// echo $admin->admin_email."</br>";
				// echo $admin->admin_pass;
				// echo $form_data['admin_email'];
				// echo $form_data['admin_pass'];
				if(($form_data['admin_email'] == $admin->admin_email)  && ($form_data['admin_pass'] == $admin->admin_pass)){
					$_SESSION['admin_email']=$form_data['admin_email'];
					redirect('dash','refresh');
				}else{
					echo "<script>alert('Username or Password incorrect !')</script>";
					$this->session->set_flashdata('status', 'Invalid username  or Password');			
					redirect('dash/login','refresh');			
				}
			}		
			
		// }else{
			// $this->load->view('inc/header');     
			// $this->load->view('home');
			// $this->load->view('inc/footer');	
		}

		// }


		public function logout(){
			session_unset();
			session_destroy();
			redirect('dash/login','refresh');	
		}

	public function add_category()
	{
        $this->load->view('dashboard/include/header');
		$this->load->view('dashboard/add_category');
	}

	public function add_product()
	{
        $this->load->view('dashboard/include/header');
		$this->load->view('dashboard/add_product');
        $this->load->view('dashboard/include/footer');
	}

	public function edit_product()
	{
        $this->load->view('dashboard/include/header');
		$this->load->view('dashboard/edit_product');
        $this->load->view('dashboard/include/footer');
	}

	public function view_product()
	{
        $this->load->view('dashboard/include/header');
        $this->load->view('dashboard/product_list');
        $this->load->view('dashboard/include/footer');	
	}
	
}
