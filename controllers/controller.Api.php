<?php

require_once("./models/ManagerBillets.php");
require_once("./models/ManagerComment.php");
require_once("./models/ManagerUser.php");
require_once("./models/DatabaseClass.php");

class APIdata{

    public function billets_data(){
        
        $dataBillets = new ManagerBillets();
        $post = $dataBillets->getBillet();
        echo json_encode($post);  
    }

    public function comments_data(){
       
        $dataComments = new ManagerComment();
        $comments = $dataComments->displayComment();
        echo json_encode($comments);
    }
}