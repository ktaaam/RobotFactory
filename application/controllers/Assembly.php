<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Assembly extends Application {
    function __construct()
	{
		parent::__construct();
            $this->load->model('PartsModel');
            $this->load->model('RobotsModel');
	}

	public function index()
	{
            $parts = $this->PartsModel->all();
            $top = $this->PartsModel->get_catagory('top');
            $torso = $this->PartsModel->get_catagory('torso');
            $bottom = $this->PartsModel->get_catagory('bottom');
            $robots = $this->RobotsModel->all();

            $this->data['parts'] = $parts;
            $this->data['top'] = $top;
            $this->data['torso'] = $torso;
            $this->data['bottom'] = $bottom;
            $this->data['robots'] = $robots;

            $this->data['pagebody'] = 'assembly'; 
            $this->render();
	}
}