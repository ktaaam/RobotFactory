<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Assembly extends Application {
    function __construct()
	{
		parent::__construct();
        $this->load->model('parts');
        $this->load->model('robots');
	}

	public function index()
	{
        $parts = $this->parts->all();
        $top = $this->parts->get_catagory('top');
        $torso = $this->parts->get_catagory('torso');
        $bottom = $this->parts->get_catagory('bottom');
        $robots = $this->robots->all();

        $this->data['parts'] = $parts;
        $this->data['top'] = $top;
        $this->data['torso'] = $torso;
        $this->data['bottom'] = $bottom;
        $this->data['robots'] = $robots;

        $this->data['pagebody'] = 'assembly'; 
        $this->render();
		//$this->load->view('assembly');

        //$this->parser->parse('assembly',$data);
	}
}