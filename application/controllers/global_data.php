<?php
class Global_data extends CI_Controller 
{
	var $module_id;

	function __construct($module_id=null)
	{
		parent::__construct();
		$this->module_id = $module_id;	
		
		$this->load->model('User');
		if(!$this->User->is_logged_in())
		{
			redirect('login');
		}
		
		$data['all_modules']=$this->Module->get_all_modules();
		$this->load->vars($data);
	}
	

}
?>