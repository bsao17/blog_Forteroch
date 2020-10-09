<?php
require("./views/TEMPLATES/baseTemplate.php");
require("./models/ManagerBillets.php");
require("./models/ManagerComment.php");


class NavigationSite{
    public function home(){
        $billets = new ManagerBillets();
        $post = $billets->getBillet();
        require("./views/home.php");
    }
    
    public function getbillet(){
        $billets = new ManagerBillets();
        $post = $billets->getBillet();
        require("./views/billetsView.php");  
    }

    public function addComment(){
        $comment = new ManagerComment;
        $comment->postComment();
    }

    public function biography(){
        require_once("./views/TEMPLATES/biographTemplate.php");
        echo "here is Biography page";
    }

    public function contact(){
        require_once("./views/TEMPLATES/contactTemplate.php");
        echo "here is Contact page";
    }
}