<?php
class Module extends CI_Model 
{
    function __construct()
    {
        parent::__construct();
    }
	
	function get_module_name($module_id)
	{
		$query = $this->db->get_where('modules', array('module_id' => $module_id), 1);
		
		if ($query->num_rows() ==1)
		{
			$row = $query->row();
			return lang($row->name_lang_key);
		}
		
		return lang('error_unknown');
	}
	
	function get_all_modules()
	{
		$this->db->from('modules');
		$this->db->order_by("sort", "asc");
		return $this->db->get();		
	}
	
	
}
?>
