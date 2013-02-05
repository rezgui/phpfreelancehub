<?php 
require_once ("global_data.php");
class Users extends Global_data
{
	function index()
	{
		echo "vj";
	}
	
	function logout()
	{
		$this->User->logout();
	}
	
}

?>