<?php
class Person extends CI_Model 
{
	function get_person($user_id)
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
	function is_logged_in()
	{
		return $this->session->userdata('user_id')!=false;
	}

}
?>
