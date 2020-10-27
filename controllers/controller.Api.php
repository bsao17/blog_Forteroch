<?php

require_once("./models/ManagerBillets.php");
require_once("./models/ManagerComment.php");
require_once("./models/ManagerUser.php");
require_once("./models/DatabaseClass.php");

class APIdata{

    public function billets_data(){
        
        $dataBillets = new ManagerBillets();
        $response =$dataBillets->getBillet();
        json_encode($response);
    }
}