<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Manage extends Application
{
    function __construct()
	{
            parent::__construct();
            $this->load->model('apikeymodel');
            $this->load->model('robotsmodel');
        }
     public function index()
     {
         // Prevent unauthorized access
        $role = $this->session->userdata('userrole');
        if($role != 'boss')
            redirect('Welcome');

         // Gets all robots
         $robots = $this->robotsmodel->all();
         $this->data['robots'] = $robots;
         $this->data['pagebody'] ='Manage';
         $this->render();  
     }
     
     //reboots factory to default
     public function reboot(){
         // Prevent unauthorized access
        $role = $this->session->userdata('userrole');
        if($role != 'boss')
            redirect('Welcome');

         $context=array(
            "ssl"=>array(
                "verify_peer"=>false,
                "verify_peer_name"=>false,
            ),
        ); 
         $apiKey = $this->apikeymodel->getKey();
         $url = 'http://umbrella.jlparry.com/work/rebootme?key='.$apiKey[0]['apikey'];
         $response = file_get_contents($url,false, stream_context_create($context));
         //$response = file_get_contents('http://umbrella.jlparry.com/work/rebootme?key=2cc5e1',false, stream_context_create($context));
         $data = explode(" ",$response);
         if(strtolower($data[0])=="ok"){
             $this->apikeymodel->truncateDb();
             echo 1;//return ok
         }
         else{
            echo 0;//return error
         }
     }

     public function sell(){
         // Prevent unauthorized access
        $role = $this->session->userdata('userrole');
        if($role != 'boss')
            redirect('Welcome');

         $key = $this->apikeymodel->getKey()[0]['apikey'];

        if($key != null){
            $arrContextOptions=array(
            "ssl"=>array(
                "verify_peer"=>false,
                "verify_peer_name"=>false,
                ),
            ); 
            // Get id from input
            $ids = $this->input->post('id');
            $result = array('status' => 'Fail');

            // Loop though id to sell each bot
            if($ids != null){
                foreach($ids as $id){
                    $robot = $this->robotsmodel->get($id);

                    if($robot != null){
                        $response = file_get_contents('https://umbrella.jlparry.com/work/buymybot/'. $robot[0]['top_ca'] .'/'. $robot[0]['torso_ca'] .'/'. $robot[0]['bottom_ca'] . '?key=' . $key, false, stream_context_create($arrContextOptions));

                        $status = substr($response, 0, 2);
                        if($status == 'Ok'){
                            // If successfully sold, delete from db
                            $this->robotsmodel->remove($id);
                            $result = array('status' => 'Ok');
                        }
                    }
                }
            }

            echo json_encode($result);
        }
        else{
            echo 'Fail';
        } 
     }
     
     //register factory with server
     public function register(){
         // Prevent unauthorized access
        $role = $this->session->userdata('userrole');
        if($role != 'boss')
            redirect('Welcome');

         $context=array(
            "ssl"=>array(
                "verify_peer"=>false,
                "verify_peer_name"=>false,
            ),
        ); 
         $pName = $this->input->post('pName');
         $sToken = $this->input->post('sToken');
         $url = 'https://umbrella.jlparry.com/work/registerme/'.$pName.'/'.$sToken;
         //parse response into array
         $response = file_get_contents($url,false, stream_context_create($context));
         //$response = file_get_contents('https://umbrella.jlparry.com/work/registerme/papaya/247843',false, stream_context_create($context));
         $data = explode(" ",$response);
         $key = $this->apikeymodel->getKey();
         if(strtolower($data[0])=="ok"){//check if response is ok
            $this->apikeymodel->truncateDb();
            if(sizeof($key)>0){//check if a key exists in db
               $key = $data[1];//set response val as key
               $this->apikeymodel->updateKey($key);
            }
            else{//a key does not exist in db
               $key = $data[1];
               $this->apikeymodel->addKey($key);
            }
            echo 1;//return ok
         }
         else{
            echo 0;//return error
         }
     }
}