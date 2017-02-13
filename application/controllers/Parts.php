<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Parts extends Application
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('testPart');
                $this->load->model('Robots');
                
                
	}
	public function index()
	{
            
            $this->data['pagebody'] ='Parts';//view
            //give to view
            
            $source = $this->testPart->all();
            $Parts = array();
            foreach($source as $record)
		$rows[] = $this->parser->parse('my_rows',(array)$record,true);
		
            $this->load->library('table');

            $params = array
            (
                'table_open' => '<table class="Parts">',
                'row_start' => '<td class="test">',
                'row_alt_start' => '<td class="test">'
            );
            $this->table->set_template($params);
            $rows = $this->table->make_columns($rows,3);
            $this->data['partsTable'] = $this->table->generate($rows);
            $this->data['Parts'] = 'Parts';
            
             
            
  
            $this->render();
             
	}
}
