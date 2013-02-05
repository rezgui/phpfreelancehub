<?php
require_once ("global_data.php");
class Home extends Global_data 
{
	function index()
	{
		$data['logged_user']=$this->User->get_user_info($this->session->userdata('user_id'));
		$data['controller_name']=strtolower(get_class());
		$this->load->view("home",$data);
	}
	
	function logout()
	{
		$this->Employee->logout();
	}
}
?>