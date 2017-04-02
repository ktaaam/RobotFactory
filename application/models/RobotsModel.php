<?php
class RobotsModel extends CI_Model {
	// Constructor
	public function __construct()
	{
		parent::__construct();
	}

	// Get a single robot
	public function get($which)
	{
		// Query the database and get all entries where the id matches the one we want
		$this->db->where('robot_id',$which);
		$data = $this->db->get('robots');

		return $data->result_array();
	}

	// Build a robot from parts
	public function build($data){
		// Insert a new entry to the database using parts
		$result = $this->db->insert('robots', $data);		
		return $result;
	}

    // Get all robots
	public function all()
	{
		// Query the database and get all entries from robots
		$data = $this->db->get('robots');

		return $data->result_array();
	}

	// Deletes a robot from db
	public function remove($which){
		$this->db->where_in('robot_id', $which);
		$res = $this->db->delete('robots');
		return $res;
	}
}