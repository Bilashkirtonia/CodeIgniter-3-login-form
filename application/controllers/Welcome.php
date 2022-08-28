<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->helper('form');
		$this->load->view("Welcome_message");
		

	}

	public function check(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','username','trim|required|alpha');
		$this->form_validation->set_rules('password','Password','trim|required');

		if($this->form_validation->run()){

			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$this->load->model('login');
			$login = $this->login->login_form($username,$password);

			if($login){
				$this->load->library('session');
				$this->session->set_userdata('user_id',$login);
				return redirect('/Home/Index');
			}else{
				$this->session->set_flashdata('login_faild','invallid password');
				return redirect('Welcome');
			}


		}else{

			$this->load->view('Welcome_message');
			// echo validation_errors();
		}
	}

	public function logout(){
		$this->session->set_userdata('user_id');
		return redirect('welcome');

	}
	
	
}
