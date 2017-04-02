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
			$source = $this->historymodel->viewParts();

			
			$history = array();
			foreach($source as $record) {
				$history[] = array ('transID' => $record['transID'], 'purchaseType' => $record['purchaseType'],
				'robotID' => $record['robotId'], 'partsID' => $record['partsId'], 'shipmentID' => $record['shipmentId'],
				'date' => $record['shipmentDate']);
			}
			//dateSort
			//robotMSort
			
			$this->data['history'] = $history;
			$this->render();
			
        } 

	 
	    public function dateSort() { 
           
			
			
			// build the array to pass to view
			$dates = $this->historymodel->dateSort();
		
			
			$history = array();
			foreach($dates as $record) {
				$history[] = array ('transID' => $record['transID'], 'purchaseType' => $record['purchaseType'],
				'robotID' => $record['robotId'], 'partsID' => $record['partsId'], 'shipmentID' => $record['shipmentId'],
				'date' => $record['shipmentDate']);
			}
			//dateSort
			//robotMSort
			
			$this->data['history'] = $history;
			$this->data['pagebody'] = 'history'; 
			$this->render();
			
        } 
		
		public function robotIDSort() { 
           
			
			
			// build the array to pass to view
			$robot = $this->historymodel->robotIDSort();
			
			//var_dump($source);
			//$this->load->view('history', $source)
		
			
			$history = array();
			foreach($robot as $record) {
				$history[] = array ('transID' => $record['transID'], 'purchaseType' => $record['purchaseType'],
				'robotID' => $record['robotId'], 'partsID' => $record['partsId'], 'shipmentID' => $record['shipmentId'],
				'date' => $record['shipmentDate']);
			}
			//dateSort
			//robotMSort
			
			$this->data['history'] = $history;
			$this->data['pagebody'] = 'history'; 
			$this->render();
			
        } 
}