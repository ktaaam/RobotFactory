<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Homepage for our app
	 */
	public function index()
	{
		// this is the view we want shown
		$this->data['pagebody'] = 'homepage';

		// build the list of authors, to pass on to our view
		$source = $this->robotHome->all();
		$robotPart = array ();
		foreach ($source as $record)
		{
			$robotPart[] = array ('who' => $record['who'], 'imageSrc' => $record['imageSrc']);
		}
		$this->data['robotParts'] = $robotPart;

		$this->render();
	}

}
