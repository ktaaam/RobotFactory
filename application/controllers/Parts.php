<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Parts extends Application
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('partsmodel');
        $this->load->model('apikeymodel');        
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
                $source = $this->partsmodel->all();    
                $this->data['partsTable'] = null;

                if($source != null){
                    // Loops through all the parts and addds them to the array
                    foreach($source as $record){
                        $record['part_pic'] = $record['part_code'] . ".jpeg";
                        $record['part_model'] = strtoupper($record['part_code'][0]);
                        $row[] = $this->parser->parse('parts_row',(array)$record,true);
                        $rows = $this->table->make_columns($row,5);
                        $this->data['partsTable'] = $this->table->generate($rows);
                    }
                }
     
                // Sets table template
                $params = array
                (
                    'table_open' => '<table class="table table-striped">',
                    'row_start' => '<td>',
                    'row_alt_start' => '<td>'
                );
                // Generates table
                $this->table->set_template($params);
                
                $this->render();      
            
            }       
            else{
                redirect('Welcome');                
            }
        }
       
        public function build(){
        // Get API key from database
        $key = $this->apikeymodel->getKey()[0]['apikey'];
        if($key != null){
            $arrContextOptions=array(
            "ssl"=>array(
                "verify_peer"=>false,
                "verify_peer_name"=>false,
                ),
            ); 
            // Get json response from REST API
            $response = file_get_contents('https://umbrella.jlparry.com/work/mybuilds?key=' . $key, false, stream_context_create($arrContextOptions));
            $data = json_decode($response);
            // Check if any parts were actually built
            if($data != null){
                $output = array();
                $i = 0;
                // Store parts data into an array
                foreach($data as $record){
                    $output[$i]['part_ca'] = $record->{'id'};
                    $output[$i]['part_code'] = $record->{'model'} . $record->{'piece'};
                    $output{$i}['built_at'] = $record->{'plant'};
                    $output{$i}['date_built'] = $record->{'stamp'};
                    $i++;            
                }
                // Insert built parts into the database
                $res = $this->partsmodel->insert($output);
            }
            redirect('Parts');
        }
        else{
            redirect('Parts');
        }        
    }
    public function buy(){
        // Get API key from database
        $key = $this->apikeymodel->getKey()[0]['apikey'];
        if($key != null){
            $arrContextOptions=array(
                "ssl"=>array(
                    "verify_peer"=>false,
                    "verify_peer_name"=>false,
                ),
            ); 
            // Get json response from REST API
            $response = file_get_contents('https://umbrella.jlparry.com/work/buybox?key=' . $key, false, stream_context_create($arrContextOptions));
            $data = json_decode($response);
            $output = array();
            $i = 0;
            // Store parts data into an array
            foreach($data as $record){
                $output[$i]['part_ca'] = $record->{'id'};
                $output[$i]['part_code'] = $record->{'model'} . $record->{'piece'};
                $output{$i}['built_at'] = $record->{'plant'};
                $output{$i}['date_built'] = $record->{'stamp'};
                $i++;            
            }
            // Insert bought parts into the database
            $res = $this->partsmodel->insert($output);
            redirect('Parts');
        }
        else{            
            redirect('Parts');
        }  
    }
}