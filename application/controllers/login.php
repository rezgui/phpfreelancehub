<?php
require_once ("global_data.php");
class Login extends CI_Controller  
{
	function index()
	{
		if($this->User->is_logged_in())
		{
			redirect('home');
		}
		else
		{
			$email = $this->input->post("email");	
			$password = $this->input->post("password");	
			$this->login_check($email,$password);
		}
	}
	
	function login_check($email,$password)
	{
			
		if(!$this->User->login($email,$password))
		{
			$this->form_validation->set_message('login_check', lang('login_invalid_username_and_password'));
			$this->load->view("login/view");
		}
		else 
		{
			redirect('home');
		}
		
	}
	
	
}
?>