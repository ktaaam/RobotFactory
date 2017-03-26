// <?php

// class testPart extends CI_Model {
    
// 	var $data = array(
//         array('id' => '1', 'part_code' => 'a1', 'CA' => 'MIICXAIBAAKBgQCqGK', 'built_at' => 'umbrella_f1', 'date_built' => '2017-02-10 13:43:19',
//             'part_pic'=>'a1.jpeg', 'bot_model' => 'a'),
//         array('id' => '2', 'part_code' => 'a2', 'CA' => 'MIICXAIBAAKBgQCqGK', 'built_at' => 'umbrella_f1', 'date_built' => '2017-02-10 13:43:19',
//             'part_pic' => 'a2.jpeg', 'bot_model' => 'a'),
//         array('id' => '3', 'part_code' => 'a3', 'CA' => 'MIICXAIBAAKBgQCqGK', 'built_at' => 'umbrella_f1', 'date_built' => '2017-02-10 13:43:19',
//             'part_pic' => 'a3.jpeg', 'bot_model' => 'a'),
//         array('id' => '4', 'part_code' => 'b1', 'CA' => 'MIICXAIBAAKBgQCqGK', 'built_at' => 'umbrella_f1', 'date_built' => '2017-02-10 13:43:19',
//             'part_pic' => 'b1.jpeg', 'bot_model' => 'b'),
//         array('id' => '5', 'part_code' => 'c2', 'CA' => 'MIICXAIBAAKBgQCqGK', 'built_at' => 'umbrella_f1', 'date_built' => '2017-02-10 13:43:19',
//             'part_pic' => 'c2.jpeg', 'bot_model' => 'c'),
//         array('id' => '6', 'part_code' => 'r3', 'CA' => 'MIICXAIBAAKBgQCqGK', 'built_at' => 'umbrella_f1', 'date_built' => '2017-02-10 13:43:19',
//             'part_pic' => 'r3.jpeg', 'bot_model' => 'r')
// 	);

//     var $catagory = array('top' => '1', 'torso' => '2', 'bottom' => '3');

// 	// Constructor
// 	public function __construct()
// 	{
// 		parent::__construct();
// 	}

// 	// Get a single part
// 	public function get($which)
// 	{
// 		// iterate over the data until we find the one we want
// 		foreach ($this->data as $record)
// 			if ($record['id'] == $which)
// 				return $record;
// 		return null;
// 	}

//     // Get all parts that are the same catagory (i.e. top, torso, or bottom)
//     public function get_catagory($cata){
//         $data = array();
//         foreach($this->data as $part)
//             if($part['part_code'][1] == $this->catagory[$cata])
//                 array_push($data,$part);
//         return $data;
//     }

//     // Get all parts
// 	public function all()
// 	{
// 		return $this->data;
// 	}

// }