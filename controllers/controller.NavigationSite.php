<?php

require("./models/ManagerBillets.php");
require("./models/ManagerComment.php");


class NavigationSite{
    public function accueil(){
        require("./views/TEMPLATES/baseTemplate.php");
        require("./views/welcome.php");
    }
    
    public function getbillet(){
        $billets = new ManagerBillets();
        $post = $billets->getBillet();
        require("./views/ACCOUNT/accountChapter.php"); 
        var_dump($_SESSION) ;
    }

    public function addComment(){
        require("./views/TEMPLATES/baseTemplate.php");
        $comment = new ManagerComment;
        $comment->postComment();
    }

    public function biography(){
        require("./views/TEMPLATES/baseTemplate.php");
        require_once("./views/TEMPLATES/biographyTemplate.php");
    }

    public function contact(){
        require("./views/TEMPLATES/baseTemplate.php");
        require_once("./views/TEMPLATES/contactTemplate.php");
    }

    public function sendMail(){
        require("./views/TEMPLATES/baseTemplate.php");
        require_once("./views/TEMPLATES/sendMailView.php");
    }
}