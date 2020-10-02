<?php

function accueil(){
    
}

class NavigationSite{
    public function home(){
        require_once("./views/accueilView.php");
        echo "here is Home page";
    }

    public function chapter(){
        require_once("./views/accueilView.php");
        echo "here is Chapters page";
    }

    public function biography(){
        require_once("./views/accueilView.php");
        echo "here is Biography page";
    }

    public function contact(){
        require_once("./views/accueilView.php");
        echo "here is Contact page";
    }
}