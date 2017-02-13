<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class History extends Application
{
	function __construct()
	{
		parent::__construct();
		
		$this->load->model('historymodel');
	}
	/**
	 * About page for our app
	 */
        public function index() { 
           $this->data['pagebody'] = 'history'; 
			
		// build the list of authors, to pass on to our view
		$source = $this->historymodel->all();
		$history = array ();
		foreach ($source as $record)
		{
			$history[] = array ('transID' => $record['transID'], 'purchaseType' => $record['purchaseType'],
			'robotID' => $record['robotID'], 'partsID' => $record['partsID'], 'shipmentID' => $record['shipmentID'],
			'date' => $record['date'], 'time' => $record['time']);
		}
		$this->data['history'] = $history;

            $this->render();
        } 
}