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
            $role = $this->session->userdata('userrole');

            if(strtolower($role) == 'boss' || strtolower($role) == 'supervisor' || strtolower($role) == 'worker'){
                // Loads the table library
                $this->load->library('table');
                // Sets the view body of the page
                $this->data['pagebody'] ='Parts';        
                // Retrive all parts from model
                $source = $this->PartsModel->all();     

                // Loops through all the parts and addds them to the array
                foreach($source as $record){
                    $record['part_pic'] = $record['part_code'] . ".jpeg";
                    $record['part_model'] = strtoupper($record['part_code'][0]);
                    //$rows[] = $this->parser->parse('parts_row',(array)$record,true);
                    $parts[] = array('partCode'  => $record['part_code'], 
                                     'partPic'   => $record['part_pic'], 
                                     'partModel' => $record['part_model'],
                                     'partsId'   => $record['part_id']);

                }

              

                // Generates table
                //$this->table->set_template($params);
                //$rows = $this->table->make_columns($rows,5);
                //$this->data['partsTable'] = $this->table->generate($rows);
                $this->data['partsTable'] = $parts;

                $this->render();      
            }       
            else{
                redirect('Welcome');
            }
        }
}
