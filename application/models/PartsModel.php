<?php
class PartsModel extends CI_Model {
    var $catagory = array('top' => '1', 'torso' => '2', 'bottom' => '3');
    

	// Constructor
	public function __construct()
	{
		parent::__construct();
	}

	// Get a single part
	public function get($which)
	{
		// Query the database and get all entries where the id matches the one we want
		$this->db->where('part_id',$which);
		$data = $this->db->get('parts');

		return $data->result_array();
	}

    // Get all parts that are the same catagory (i.e. top, torso, or bottom)
    public function get_catagory($cata){
		$data = $this->db->get('parts')->result_array();
        $parts = array();
        foreach($data as $part)
            if($part['part_code'][1] == $this->catagory[$cata])
                array_push($parts,$part);
        return $parts;
    }

	// Delete parts from the database
	public function delete($data){
		$this->db->where_in('part_id', $data);
		$res = $this->db->delete('parts');
		return $res;
	}

	public function insert($data){	
		$res = $this->db->insert_batch('parts',$data);
		return $res;
	}

    // Get all parts
	public function all()
	{
		// Query the database and get all entries from robots
		$data = $this->db->get('parts');

		return $data->result_array();
	}

}