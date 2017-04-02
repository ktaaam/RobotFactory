<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Assembly extends Application {
    // Constructor
    function __construct()
	{
		parent::__construct();
        // Loads models
        $this->load->model('PartsModel');
        $this->load->model('RobotsModel');
	}

	public function index()
	{
        // Check role privledge
        $role = $this->session->userdata('userrole');
        if(strtolower($role) == 'boss' || strtolower($role) == 'supervisor'){
            // Gets all parts
            $parts = $this->PartsModel->all();

            // Gets parts by category
            $top = $this->PartsModel->get_catagory('top');
            $torso = $this->PartsModel->get_catagory('torso');
            $bottom = $this->PartsModel->get_catagory('bottom');

            // Set data
            $this->data['parts'] = $parts;
            $this->data['top'] = $top;
            $this->data['torso'] = $torso;
            $this->data['bottom'] = $bottom;

            $this->data['pagebody'] = 'assembly'; 
            $this->render();
            }       
        else{
            redirect('Welcome');
        }
	}

    public function build(){
        // Check role privledge
        $role = $this->session->userdata('userrole');
        if(strtolower($role) == 'boss' || strtolower($role) == 'supervisor'){
            // Gets input parts
            $top = $this->PartsModel->get($this->input->post('top'));
            $torso = $this->PartsModel->get($this->input->post('torso'));
            $bottom = $this->PartsModel->get($this->input->post('bottom'));

            // Check for any null or invalid inputs
            if($top != null && $torso != null && $bottom != null && $top[0]['part_code'][1] == '1' && $torso[0]['part_code'][1] == '2' && $bottom[0]['part_code'][1] == '3' ){
                // Insert robot with part infomation 
                $data = array('top' => $top[0]['part_code'], 'torso' => $torso[0]['part_code'], 'bottom' => $bottom[0]['part_code'], 'top_ca' => $top[0]['part_ca'], 'torso_ca' => $torso[0]['part_ca'], 'bottom_ca' => $bottom[0]['part_ca']);                
                $res = $this->RobotsModel->build($data);

                // Deletes input parts from database
                $parts = array($this->input->post('top'),$this->input->post('torso'),$this->input->post('bottom'));
                $this->PartsModel->delete($parts);
                
                // Return response
                echo $res;  
            }else{
                // Return fail
                echo 'failure';                        
            }
        }
        else{
            redirect('Welcome');
        }
    }
}