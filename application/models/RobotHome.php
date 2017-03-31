<?php

/**
 * This is a "CMS" model for quotes, but with bogus hard-coded data,
 * so that we don't have to worry about any database setup.
 * This would be considered a "mock database" model.
 *
 * @author kevin
 */
class RobotHome extends CI_Model {

	// The data in the dashboard to display the total amount of  xxx 
	var $data = array(
		array('id' => '1', 'who' => 'Head', 'imageSrc' => 'a1.jpeg'),
		array('id' => '2', 'who' => 'Body', 'imageSrc' => 'a2.jpeg'),
		array('id' => '3', 'who' => 'Legs', 'imageSrc' => 'a3.jpeg'),
	);

	// Constructor
	public function __construct()
	{
		parent::__construct();
	}

	// retrieve a single quote
	public function get($which)
	{
		// iterate over the data until we find the one we want
		foreach ($this->data as $record)
			if ($record['id'] == $which)
				return $record;
		return null;
	}

	// retrieve all of the quotes
	public function all()
	{
		return $this->data;
	}

}
