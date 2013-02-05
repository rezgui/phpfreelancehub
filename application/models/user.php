<?php
class User extends CI_Model 
{
    function __construct()
    {
        parent::__construct();
    }
	
	function login($email, $password)
	{
		$query = $this->db->get_where('people', array('email' => $email,'password'=>md5($password), 'deleted'=>0), 1);
		if ($query->num_rows() ==1)
		{
			$row=$query->row();
			$this->session->set_userdata('user_id', $row->user_id);
			return true;
		}
		else 
		{
			$query = $this->db->get_where('users', array('username' => $email,'password'=>md5($password), 'deleted'=>0), 1);
			if ($query->num_rows() ==1)
			{
				$row=$query->row();
				$this->session->set_userdata('user_id', $row->user_id);
				return true;
			}	
		}
		return false;
	}
	
	function get_user_info($user_id)
	{
		$query = $this->db->get_where('people', array('user_id' => $user_id), 1);
		
		if($query->num_rows()==1)
		{
			return $query->row();
		}
		else
		{
			//create object with empty properties.
			$fields = $this->db->list_fields('people');
			$person_obj = new stdClass;
			
			foreach ($fields as $field)
			{
				$person_obj->$field='';
			}
			
			return $person_obj;
		}
	}
	
	function logged_user()
	{
		if($this->User->is_logged_in())
		{
			return $this->get_user_info($this->session->userdata('user_id'));
		}
		
		return false;
	}
	
	function is_logged_in()
	{
		return $this->session->userdata('user_id')!=false;
	}
	
	function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
	
	
	
}
?>
