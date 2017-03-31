<?php

class apikey extends CI_Model {
    // Constructor
	public function __construct()
	{
		parent::__construct();
	}
        
        public function getKey(){
            // Query the database and get the api key
            $data = $this->db->get('apikey');
            return $data->result_array();
        }
        public function addKey($key){
		// replace old key with new key
                $data = array(
                    'key' => $key
                );
                $this->db->where('id',1);
                $this->db->update('apikey',$data);
        }
}

