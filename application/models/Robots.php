<?php
class Robots extends CI_Model {
	var $data = array(
        array('id' => '1', 'top' => 'a1', 'torso' => 'a2', 'bottom' => 'a3'),
		array('id' => '2', 'top' => 'b1', 'torso' => 'b2', 'bottom' => 'b3'),
		array('id' => '3', 'top' => 'a1', 'torso' => 'b2', 'bottom' => 'c3'),
		array('id' => '4', 'top' => 'a1', 'torso' => 'r2', 'bottom' => 'w3'),
		array('id' => '5', 'top' => 'b1', 'torso' => 'w2', 'bottom' => 'c3')
    );

    //var $catagory = array('top' => '1', 'torso' => '2', 'bottom' => '3');

	// Constructor
	public function __construct()
	{
		parent::__construct();
	}

	// Get a single robot
	public function get($which)
	{
		// iterate over the data until we find the one we want
		foreach ($this->data as $record)
			if ($record['id'] == $which)
				return $record;
		return null;
	}

    // Get all robots
	public function all()
	{
		return $this->data;
	}

}