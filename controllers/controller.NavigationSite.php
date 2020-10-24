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
        
        require("./views/ACCOUNT/accountHome.php");
    }
    
    public function getbillet(){
        if($_REQUEST == "POST" || isset($_COOKIE['user_login'])){
            session_start();
            $billets = new ManagerBillets();
            $post = $billets->getBillet();
            require_once("./views/ACCOUNT/accountBillets.php");
            require_once("views/commentFormView.php");
        }else{
            header("location: ?action=signin");
        }
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
        
        require_once("./views/TEMPLATES/contactTemplate.php");
    }

    public function sendMail(){
        session_start();
        require("./views/TEMPLATES/baseTemplate.php");
        require_once("./views/TEMPLATES/sendMailView.php");
    }
}