<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Parts extends Application
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('PartsModel');
	}
	public function index()
	{
        // Loads the table library
        $this->load->library('table');
        // Sets the view body of the page
        $this->data['pagebody'] ='Parts';        
        // Retrive all parts from model
        $source = $this->PartsModel->all();     

        foreach($source as $record){
            $record['part_pic'] = $record['part_code'] . ".jpeg";
            $record['part_model'] = strtoupper($record['part_code'][0]);
            $rows[] = $this->parser->parse('parts_row',(array)$record,true);
        }

        $params = array
        (
            'table_open' => '<table class="Parts">',
            'row_start' => '<td class="test">',
            'row_alt_start' => '<td class="test">'
        );

        $this->table->set_template($params);
        $rows = $this->table->make_columns($rows,5);
        $this->data['partsTable'] = $this->table->generate($rows);

        $this->render();             
	}
}
