<?php
require("./models/ManagerBillets.php");
require("./models/ManagerComment.php");

class NavigationSite
{
    public function accueil()
    {
        require("./views/accueilView.php");
    }

    public function home()
    {
        if (isset($_COOKIE['user_login'])) {
            session_start();
            require("./views/ACCOUNT/accountHome.php");
        } else {
            header("location: ?action=signin");
        }
    }

    public function getbillet()
    {
        if ($_REQUEST == "POST" || isset($_COOKIE['user_login'])) {

            session_start();
            $billets = new ManagerBillets();
            $post = $billets->getBillet();
            require_once("./views/ACCOUNT/accountBillets.php");
        } else {
            header("location: ?action=signin");
        }
    }

    public function addComment()
    {
        require("./views/TEMPLATES/baseTemplate.php");
        $comment = new ManagerComment;
        $comment->postComment();
    }

    public function biography()
    {
        if (isset($_COOKIE['user_login'])) {
            session_start();
            require_once("./views/TEMPLATES/accountBaseTemplate.php");
            require_once('./views/ACCOUNT/accountBiography.php');
        } else {
            header("location: ?action=signin");
        }
    }

    public function contact()
    {
        if (isset($_COOKIE['user_login'])) {
            session_start();
            require_once("./views/TEMPLATES/contactTemplate.php");
        } else {
            header("location: ?action=signin");
        }
    }

    public function sendMail()
    {
        session_start();
        require("./views/TEMPLATES/baseTemplate.php");
        require_once("./views/TEMPLATES/sendMailView.php");
    }
}
