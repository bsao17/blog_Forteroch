<?php
require("./views/TEMPLATES/baseTemplate.php");
require("./models/ManagerBillets.php");


class NavigationSite{
    public function home(){
        $billets = new ManagerBillets();
        $post = $billets->getBillet();
        require("./views/home.php") ;
    }

    public function getbillet(){
        $billets = new ManagerBillets();
        $post = $billets->getBillet();
        require("./views/billetsView.php");  
    }

    public function biography(){
        
        echo "here is Biography page";
    }

    public function contact(){
        
        echo "here is Contact page";
    }
}