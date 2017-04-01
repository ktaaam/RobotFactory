<?php

/**
* This is a CMS model for history, with hard-coded data.
* This includes records of the activity going on in the factory
* ever since it has opened. This includes purchases, assemblies, 
* and shipments; as well as the date and time of each transaction
* transID, purchaseType (buy, sell, return) robotID partID shipmentID date time

@author Alex

**/

class HistoryModel extends CI_Model {


	
	// Constructor
	public function __construct()
	{
		parent::__construct();
	}

	public function viewParts()
	{
		
		$this->load->library('pagination');
		
		//$query = $this->db->select('*')->from('history')->get();
		$query = $this->db->get('history', '5', $this->uri->segment(3));
		
		
		$query2 = $this->db->get('history');
		
		$config['base_url'] = base_url().'History/index/';
		$config['total_rows'] = $query2->num_rows();
		$config['per_page'] = 1;
		$config['num_links'] = 3;
		$config['uri_segment'] = 3;
		
		$config['full_tag_open'] = '<ul class ="pagination">';
		$config['full_tag_close'] = '</ul>';
		
		$config['first_tag_open']= '<li>';
		$config['last_tag_open'] = '<li>';
		
		$config['next_tag_open'] = '<li>';
        $config['prev_tag_close'] = '<li>';
		
		$config['num_tag_open']= '<li>';
		$config['num_tag_close']= '</li>';
		
		$config['first_tag_close'] = '</li>';
		$config['last_tag_close'] = '</li>';
		
		$config['next_tag_close'] = '</li>';
        $config['prev_tag_close'] = '</li>';
         
        $config['cur_tag_open'] = "<li class=\"active\"><span><b>";
        $config['cur_tag_close'] = "</b></span></li>";
		
		$this->pagination->initialize($config);
		
		
		
		 
		return $query->result_array();
	}
	



}

?>

