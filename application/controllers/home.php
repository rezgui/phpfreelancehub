<?php
require_once ("global_data.php");
class Home extends Global_data 
{
	function index()
	{
		$data['controller_name']=strtolower(get_class());
		$this->load->view("home",$data);
	}
	
	function logout()
	{
		$this->Employee->logout();
	}
}
?>