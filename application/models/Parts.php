<?php
class Parts extends CI_Model {
	var $data = array(
        array('id' => '1', 'part_code' => 'a1', 'ca' => 'MIICXAIBAAKBgQCqGK', 'built_at' => 'umbrella_f1', 'date_built' => '2017-02-10 13:43:19'),
        array('id' => '2', 'part_code' => 'a2', 'ca' => 'MIICXAIBAAKBgQCqGK', 'built_at' => 'umbrella_f1', 'date_built' => '2017-02-10 13:43:19'),
        array('id' => '3', 'part_code' => 'a3', 'ca' => 'MIICXAIBAAKBgQCqGK', 'built_at' => 'umbrella_f1', 'date_built' => '2017-02-10 13:43:19'),
        array('id' => '4', 'part_code' => 'b1', 'ca' => 'MIICXAIBAAKBgQCqGK', 'built_at' => 'umbrella_f1', 'date_built' => '2017-02-10 13:43:19'),
        array('id' => '5', 'part_code' => 'c2', 'ca' => 'MIICXAIBAAKBgQCqGK', 'built_at' => 'umbrella_f1', 'date_built' => '2017-02-10 13:43:19'),
        array('id' => '6', 'part_code' => 'r3', 'ca' => 'MIICXAIBAAKBgQCqGK', 'built_at' => 'umbrella_f1', 'date_built' => '2017-02-10 13:43:19')
	);

    var $catagory = array('top' => '1', 'torso' => '2', 'bottom' => '3');

	// Constructor
	public function __construct()
	{
		parent::__construct();
	}

	// Get a single part
	public function get($which)
	{
		// iterate over the data until we find the one we want
		foreach ($this->data as $record)
			if ($record['id'] == $which)
				return $record;
		return null;
	}

    // Get all parts that are the same catagory (i.e. top, torso, or bottom)
    public function get_catagory($cata){
        $data = array();
        foreach($this->data as $part)
            if($part['part_code'][1] == $this->catagory[$cata])
                array_push($data,$part);
        return $data;
    }

    // Get all parts
	public function all()
	{
		return $this->data;
	}

}