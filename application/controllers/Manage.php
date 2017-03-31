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
     public function reboot(){
         $response = file_get_contents('https://umbrella.jlparry.com/xxx?key=YOUR_API_KEY');
     }
     public function register($pName, $sToken){
         $response = file_get_contents('https://umbrella.jlparry.com/work/registerme/'+$pName+'/'+$sToken);
         $key = substr($response, ' ');
         $this->apikey->addKey($key);
     }
}