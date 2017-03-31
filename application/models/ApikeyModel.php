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
            $this->db->where('keyId',1);
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
            $result = $this->db->update('apikeys',$data);
        }
        
        // inserts a new key
        public function addKey($key){
            $this->db->truncate('apikeys');
            $data = array(
                'keyId' => 1,
                'apikey' => $key
            );
            $result = $this->db->insert('apikeys',$data);
        }
        
        //deletes all records in the database
        public function truncateDb(){
            $this->db->truncate('history');
            $this->db->truncate('parts');
            $this->db->truncate('robots');
        }
}

