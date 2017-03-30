<?php

class ApikeyModel extends CI_Model {
    // Constructor
	public function __construct()
	{
		parent::__construct();
	}
        
        /* 
         * Query the database and get the api key.
         * There should only be one key returned
         */
        public function getKey(){
            $data = $this->db->get('apikeys');
            return $data->result_array();
        }
        
        // replace old key with new key
        public function updateKey($key)
        {
            $data = array(
                'apikey' => $key
            );
            $this->db->where('keyId',1);
            $this->db->update('apikeys',$data);
        }
        
        // inserts a new key
        public function addKey($key){
            $data = array(
                'apikey' => $key
            );
            $this->db->insert('apikeys',$data);
        }
}

