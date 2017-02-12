<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class About extends Application
{

	function __construct()
	{
            parent::__construct();
            //$this->load->helper('url');
	}

	/**
	 * About page for our app
	 */
        public function index() {
            
            $this->data['pagebody'] = 'about'; 
            $this->render();
        } 

}
