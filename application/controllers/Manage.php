<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Manage extends Application
{
    function __construct()
	{
            parent::__construct();
            $this->load->model('ApikeyModel');
        }
     public function index()
     {
         $this->data['pagebody'] ='Manage';
         $this->render();  
     }
     
     //reboots factory to default
     public function reboot(){
         $context=array(
            "ssl"=>array(
                "verify_peer"=>false,
                "verify_peer_name"=>false,
            ),
        ); 
         $response = file_get_contents('https://umbrella.jlparry.com/work/rebootme',false, stream_context_create($context));
         $data = json_decode($response);
         return $data[0];//returns if reboot was successful
     }
     
     //register factory with server
     public function register($pName, $sToken){
         $context=array(
            "ssl"=>array(
                "verify_peer"=>false,
                "verify_peer_name"=>false,
            ),
        ); 
         //parse response into array
         $response = file_get_contents('https://umbrella.jlparry.com/work/registerme/'+$pName+'/'+$sToken,false, stream_context_create($context));
         $data = json_decode($response);
         $key = $this->db->get('apikeys');
         if(strtolower($data[0])=="ok"){//check if response is ok
            if($key->num_rows()>0){//check if a key exists in db
               $key = $data[1];//set response val as key
               $this->ApikeyModel->updateKey($key);
            }
            else{//a key does not exist in db
               $key = $data[1];
               $this->ApikeyModel->addKey($key);
            }
         }
         return $response;//return ok or error
     }
}