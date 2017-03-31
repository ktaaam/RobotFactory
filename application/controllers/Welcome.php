<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('PartsModel');
		$this->load->model('RobotsModel');

	}

	/**
	 * Homepage for our app
	 */
	public function index()
	{    
		$topPartsCounter    = 0;
        $bottomPartsCounter = 0;
        $torsoPartsCounter  = 0;
        $totalParts         = 0;
        $totalRobotsAssem   = 0;

        $this->data['pagebody'] = 'homepage'; 
		// build the list of parts, to pass on to our view
		$source = $this->PartsModel->all();
		$robots = $this->RobotsModel->all();
		$robotPart = array ();
		foreach ($source as $record)
		{
			//if the part has a 1 add 1 to the top counter
            if($record['part_code'][1] == "1"){
                $topPartsCounter = $topPartsCounter + 1;
            //if the part has a 3 add  1 to the bottom counter
            }else if($record['part_code'][1] == "3"){
                $bottomPartsCounter = $bottomPartsCounter + 1;
            // if the part has a 2 add 1 to the torso counter
            }else if($record['part_code'][1] == "2"){
                $torsoPartsCounter = $torsoPartsCounter + 1;
            }

            $totalParts = $totalParts + 1;
		}

		foreach($robots as $record)
		{
			$totalRobotsAssem = $totalRobotsAssem + 1;
		}
		$robotPart[] = array('totalPartsCounter' => $totalParts, 
                            'topPartsCounter'    => $topPartsCounter, 
                            'torsoPartsCounter'  => $torsoPartsCounter, 
                            'bottomPartsCounter' => $bottomPartsCounter,
                            'totalRobotsAssem'   => $totalRobotsAssem,
                            'topImageSrc'        => 'a1.jpeg',
                            'torsoImageSrc'      => 'a2.jpeg',
                            'bottomImageSrc'     => 'a3.jpeg');
		$this->data['robotParts'] = $robotPart;

		$this->render();
	}

}
