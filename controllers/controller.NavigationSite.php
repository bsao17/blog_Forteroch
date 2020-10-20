<?php
require("./models/ManagerBillets.php");
require("./models/ManagerComment.php");

class NavigationSite {
    public function accueil(){
        require("./views/TEMPLATES/baseTemplate.php");
        require("./views/accueilView.php");
    }
    
    public function home(){
        session_start();
        require("./views/TEMPLATES/accountBaseTemplate.php");
        require("./views/ACCOUNT/accountHome.php");
    }
    
    public function getbillet(){
        session_start();
        $billets = new ManagerBillets();
        $post = $billets->getBillet();
        require_once("./views/ACCOUNT/accountBillets.php");
        require_once("views/commentFormView.php");
    }

    public function addComment(){
        require("./views/TEMPLATES/baseTemplate.php");
        $comment = new ManagerComment;
        $comment->postComment();
    }

    public function biography(){
        session_start();
        require_once("./views/TEMPLATES/accountBaseTemplate.php");
        require_once('./views/ACCOUNT/accountBiography.php');
    }

    public function contact(){
        session_start();
        require("./views/TEMPLATES/accountBaseTemplate.php");
        require_once("./views/TEMPLATES/contactTemplate.php");
    }

    public function sendMail(){
        session_start();
        require("./views/TEMPLATES/baseTemplate.php");
        require_once("./views/TEMPLATES/sendMailView.php");
    }
}