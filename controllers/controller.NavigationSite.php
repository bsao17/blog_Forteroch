<?php
require("./views/TEMPLATES/baseTemplate.php");
require("./models/ManagerBillets.php");
require("./models/ManagerComment.php");


class NavigationSite{
    public function homeFirst(){
        require("./views/welcome.php");
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
        require_once("./views/TEMPLATES/biographyTemplate.php");
    }

    public function contact(){
        require_once("./views/TEMPLATES/contactTemplate.php");
    }

    public function sendMail(){
        require_once("./views/TEMPLATES/sendMailView.php");
    }
}