<?php

/**
* This is a CMS model for history, with hard-coded data.
* This includes records of the activity going on in the factory
* ever since it has opened. This includes purchases, assemblies, 
* and shipments; as well as the date and time of each transaction
* transID, purchaseType (buy, sell, return) robotID partID shipmentID date time

@author Alex

**/

class HistoryModel extends CI_Model {

	var $data = array (
	
		array('transID' => 1, 'purchaseType' => 'buy', 'robotID' => null, 'partsID' => 1, 'shipmentID' => 1,
		'date' => '2016-02-09', 'time' => '6:19PM'),
		array('transID' => 2, 'purchaseType' => 'sell', 'robotID' =>1, 'partsID' => null, 'shipmentID' => 2,
		'date' => '2016-02-04', 'time' => '2:23AM'),
		array('transID' => 3,'purchaseType' => 'return', 'robotID' => null, 'partsID' => 2, 'shipmentID' => 3,
		'date' => '2016-04-29', 'time' => '1:34PM'),
		array('transID' => 4, 'purchaseType' => 'return', 'robotID' => 3, 'partsID' => null, 'shipmentID' => 5,
		'date' => '2016-12-11', 'time' => '10:19AM'),
		array('transID' => 5, 'purchaseType' => 'buy', 'robotID' => null, 'partsID' => 4, 'shipmentID' => 7,
		'date' => '2016-04-21', 'time' => '5:13PM'),	
		array('transID' => 6, 'purchaseType' => 'sell', 'robotID' => 4, 'partsID' => null, 'shipmentID' => 12,
		'date' => '2016-07-11', 'time' => '8:13PM')	
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

?>

