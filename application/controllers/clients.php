<?php 
require_once ("global_data.php");
class Clients extends Global_data
{
	function index()
	{
		$config['base_url'] = site_url('clients');
		$config['total_rows'] = 200;
		$config['per_page'] = 20; 
		$this->pagination->initialize($config); 
		$data['page_links']=$this->pagination->create_links();
		$data['data_rows']=$this->Client->get_clients();
		$data['content']=get_content($data['data_rows']);
		$data['controller_name']=strtolower(get_class());
		$this->load->view('clients/view',$data);
	}
	
	function form()
	{
		$this->load->view('clients/form');
	}
	
	function formm()
	{
		$this->load->view('clients/formm');
	}
	
	function save()
	{
		$person_data = array(
		'full_name'=>$this->input->post('full_name'),
		'phone'=>$this->input->post('phone'),
		'email'=>$this->input->post('email'),
		'password'=>$this->input->post('password'),
		'address'=>$this->input->post('address'),
		'city'=>$this->input->post('city'),
		'state'=>$this->input->post('state'),
		'zipcode'=>$this->input->post('zipcode'),
		'country'=>$this->input->post('country')
		);
		
		$client_data=array(
		'company_name'=>$this->input->post('company_name'),
		);
		
		if($this->Client->save($person_data,$client_data))
		echo json_encode(array('success'=>true,'message'=>'ok'));
	}
	
	function logout()
	{
		$this->User->logout();
	}
	
}

?>