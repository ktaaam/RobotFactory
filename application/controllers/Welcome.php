<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application {

    function __construct() {
        parent::__construct();
        $this->load->model('PartsModel');
        $this->load->model('RobotsModel');
        $this->load->model('HistoryModel');
    }

    /**
     * Homepage for our app
     */
    public function index() {
        $topPartsCounter = 0;
        $bottomPartsCounter = 0;
        $torsoPartsCounter = 0;
        $totalParts = 0;
        $totalRobotsAssem = 0;
        $totalBotsSold = 0;
        $totalBotsBought = 0;

        $this->data['pagebody'] = 'homepage';
        // build the list of parts, to pass on to our view
        $source = $this->PartsModel->all();
        $robots = $this->RobotsModel->all();
        $history = $this->HistoryModel->all();
        $robotPart = array();

        //loop through and count the amount of parts for each
        foreach ($source as $record) {
            //if the part has a 1 add 1 to the top counter
            if ($record['part_code'][1] == "1") {
                $topPartsCounter = $topPartsCounter + 1;
                //if the part has a 3 add  1 to the bottom counter
            } else if ($record['part_code'][1] == "3") {
                $bottomPartsCounter = $bottomPartsCounter + 1;
                // if the part has a 2 add 1 to the torso counter
            } else if ($record['part_code'][1] == "2") {
                $torsoPartsCounter = $torsoPartsCounter + 1;
            }

            $totalParts = $totalParts + 1;
        }
        // size of records
        $i = sizeof($record);
        // counts the amount of robots assembled and also add the recently created bots (3 only)
        foreach ($robots as $record) {
            $totalRobotsAssem = $totalRobotsAssem + 1;
            if ($i <= 3) {
                $recentRobots[] = array('recentTop' => $record['top'],
                    'recentTorso' => $record['torso'],
                    'recentBottom' => $record['bottom'],
                    'recentRobotId' => $record['robot_id']);
            }
            $i--;
        }
        //loop through history and find the amount of sold and bought
        foreach ($history as $record) {
            if ($record['purchaseType'] == "sell") {
                $totalBotsSold = $totalBotsSold + 1;
            } else if ($record['purchaseType'] == "buy") {
                $totalBotsBought = $totalBotsBought + 1;
            }
        }
        //get the amount of money 
        $response = file_get_contents('https://umbrella.jlparry.com/info/balance/papaya');
        //store the counted parts into the array
        $robotPart[] = array('totalPartsCounter' => $totalParts,
            'topPartsCounter' => $topPartsCounter,
            'torsoPartsCounter' => $torsoPartsCounter,
            'bottomPartsCounter' => $bottomPartsCounter,
            'totalRobotsAssem' => $totalRobotsAssem,
            'topImageSrc' => 'a1.jpeg',
            'torsoImageSrc' => 'a2.jpeg',
            'bottomImageSrc' => 'a3.jpeg',
            'balance' => $response,
            'totalBotsSold' => $totalBotsSold,
            'totalBotsBought' => $totalBotsBought);
        $this->data['robotParts'] = $robotPart;
        $this->data['recentRobots'] = $recentRobots;

        $this->render();
    }

}
