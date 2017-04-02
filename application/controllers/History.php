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
	/**
	public function viewParts()
	{
		
		$data['query'] = $this->historymodel->viewParts();   
		$this->load->view('history', $data);
	}
	**/
	
	/**
	 public function sorting()
	 {
		$data = $this->input->post('chkbox');
		if($data == "dateSort") {
			//$this->db->select()->from('history')->order_by('shipmentDate', 'desc');
			$res = $this->historymodel->dateSort();
			
			//var_dump($res);
			
		}
		else if($data == "robotIDSort") {
			
		}
	   
	 }
	 **/
	 
	    public function dateSort() { 
           
			
			
			// build the list of authors, to pass on to our view
			$dates = $this->historymodel->dateSort();
			
			//var_dump($source);
			//$this->load->view('history', $source)
		
			
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
           
			
			
			// build the list of authors, to pass on to our view
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