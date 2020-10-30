<?php
require("./models/ManagerBillets.php");
require("./models/ManagerComment.php");

class NavigationSite
{
    public function accueil()
    {
        require("./views/accueilView.php");
    }

//home account page
    public function home()
    {
        if (isset($_COOKIE['user_login'])) {
            session_start();
            require("./views/ACCOUNT/accountHome.php");
        } else {
            header("location: ?action=signin");
        }
    }

//Billets list page
    public function getbillets()
    {
        if ($_REQUEST == "POST" || isset($_COOKIE['user_login'])) {

            session_start();
            $billets = new ManagerBillets();
            $post = $billets->getBillet();
            require_once("./views/ACCOUNT/accountBilletsList.php");
        } else {
            header("location: ?action=signin");
        }
    }

//Billet one page
    public function getbilletAlone()
    {
        if ($_REQUEST == "POST" || isset($_COOKIE['user_login'])) {

            session_start();
            $ID = $_GET["ID"];
            $billets = new ManagerBillets();
            $post = $billets->getBilletAlone($ID);
            require_once("./views/ACCOUNT/accountBillet__1.php");
        } else {
            header("location: ?action=signin");
        }
    }

//Account biography page
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

//Account contact page
    public function contact()
    {
        if (isset($_COOKIE['user_login'])) {
            session_start();
            require_once("./views/TEMPLATES/contactTemplate.php");
        } else {
            header("location: ?action=signin");
        }
    }
//Sendmail form
    public function sendMail()
    {
        session_start();
        require("./views/TEMPLATES/baseTemplate.php");
        require_once("./views/TEMPLATES/sendMailView.php");
    }
}
