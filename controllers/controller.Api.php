<?php

require_once("./models/ManagerBillets.php");
require_once("./models/ManagerComment.php");
require_once("./models/ManagerUser.php");
require_once("./models/DatabaseClass.php");

class APIdata{

    public function billets_data(){
        header("Content-type: application/json");
        $dataBillets = new ManagerBillets();
        $post = $dataBillets->getBillet();
        echo json_encode($post);  
    }
}