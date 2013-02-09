<?php
class Client extends CI_Model 
{
	function total_clients()
	{
		$this->db->from('clients');
		$this->db->where('deleted',0);
		return $this->db->count_all_results();
	}
	
	function get_clients($limit=10000, $offset=0)
	{	
		$this->db->from('clients');	
		$this->db->join('people', 'people.user_id = clients.user_id');
		$this->db->where('clients.deleted',0);
		$query = $this->db->get();
					
		return $query;
	}
	
	function save(&$person_data,&$client_data)
	{	
		if($this->db->insert('people',$person_data))
			{
				$client_data['user_id']=$this->db->insert_id();
				$this->db->insert('clients',$client_data);
				return true;
			}
			return false;
	}
	
	function is_logged_in()
	{
		return $this->session->userdata('user_id')!=false;
	}

}
?>
