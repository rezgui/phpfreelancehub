<?php
require_once ("global_data.php");
class Projects extends Global_data 
{
	function index()
	{
		$data['controller_name']=strtolower(get_class());
		$this->load->view("projects/view",$data);
	}
	

}
?>