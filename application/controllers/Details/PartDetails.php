<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PartDetails extends Application
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('PartsModel');
	}

    public function get($id){
		
        $role = $this->session->userdata('userrole');

        if(strtolower($role) == 'boss' || strtolower($role) == 'supervisor' || strtolower($role) == 'worker'){

			$parts = $this->PartsModel->get($id);
			$parts[0]['img'] = $parts[0]['part_code'] . '.jpeg';
			$this->data['parts'] = $parts;

			$this->data['pagebody'] ='part_details';   

			$this->render(); 
		}       
        else{
            redirect('Welcome');
        }
    }
}