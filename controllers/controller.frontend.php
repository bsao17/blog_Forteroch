<?php
require("./views/accueilView.php");
require("./models/ManagerBillets.php");


class NavigationSite{
    public function home(){
        $billets = new ManagerBillets();
        $post = $billets->getBillet(); 
        require("./views/billetsView.php");  
    }

    public function chapter(){
        
        echo "here is Chapters page";
    }

    public function biography(){
        
        echo "here is Biography page";
    }

    public function contact(){
        
        echo "here is Contact page";
    }
    
    public function login(){
        require_once("./views/login.views.php");
    }
}