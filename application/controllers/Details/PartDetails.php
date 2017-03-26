<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PartDetails extends Application
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('PartsModel');
	}
	public function index()
	{
                          
	}

    public function get($id){
        $data = $this->PartsModel->get($id);
        $thid->data['part'] =  $data;
        $this->data['pagebody'] ='part_details';   

        $this->render(); 
    }
}