<?php
require_once("./models/ConnectDbClass.php");
require("./views/accueilView.php");


class NavigationSite{
    public function home(){
        require_once("./views/billetsView.php");
        
        
    }

    public function chapter(){
        require_once("./views/accueilView.php");
        echo "here is Chapters page";
    }

    public function biography(){
        
        echo "here is Biography page";
    }

    public function contact(){
        
        echo "here is Contact page";
    }
    
    public function login(){
        
        echo "here is login page";
    }
}