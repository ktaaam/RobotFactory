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

    // Get all robots
	public function all()
	{
		// Query the database and get all entries from robots
		$data = $this->db->get('robots');

		return $data->result_array();
	}

}