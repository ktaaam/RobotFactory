<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Manage extends Application
{
    function __construct()
	{
            parent::__construct();
            
        }
     public function index()
     {
         $this->data['pagebody'] ='Manage';
         $this->render();  
     }
     
     //reboots factory to default
     public function reboot(){
         $response = file_get_contents('https://umbrella.jlparry.com/work/rebootme');
     }
     
     public function register($pName, $sToken){
         //parse response into array
         $response = explode(" ",file_get_contents('https://umbrella.jlparry.com/work/registerme/'+$pName+'/'+$sToken));
         $key = $this->db->get('ApikeyModel');
         if($key != null){//key exists in db
            $key = $response[1];//set key as given value
            $this->ApikeyModel->updateKey($key);
         }
         else{//key does not exist in db
            $key = $response[1];
            $this->ApikeyModel->addKey($key);
         }
         return $response[0];//return ok or error
     }
}