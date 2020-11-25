<?php

namespace controllers;

use Exception;
use models\ManagerBillets;
use models\ManagerComment;

require __DIR__.'/../vendor/autoload.php';

/**
 * class NavigationSite
 */
class FrontController
{


    /**
     * Accueil page is the first page for no members user
     */
    public function accueil()
    {
        DD($_SESSION);
        include_once './views/accueilView.php';

    }//end accueil()


    /**
     * home account page
     */
    public function home()
    {
        if (isset($_COOKIE['PHPSESSID'])) {
            include_once './views/ACCOUNT/accountHome.php';
        } else {
            header('location: ?action=signin');
        }

    }//end home()


    /**
     * Billets list page
     */
    public function getbillets()
    {
        if ($_REQUEST == 'POST' || isset($_COOKIE['user_login'])) {
            $billets = new ManagerBillets();
            $post    = $billets->getBillet();
            include_once './views/ACCOUNT/accountBilletsList.php';
        } else {
            header('location: ?action=signin');
        }

    }//end getbillets()


    /**
     * Billet one page
     */
    public function getSingleBillet()
    {
        if ($_REQUEST == 'POST' || isset($_COOKIE['user_login'])) {
            $ID       = $_GET['ID'];
            $billets  = new ManagerBillets();
            $post     = $billets->getBilletAlone($ID);
            $comments = new ManagerComment();
            $comment  = $comments->getComments($ID);
            include_once './views/ACCOUNT/accountBillet__1.php';
        } else {
            header('location: ?action=signin');
        }

    }//end getSingleBillet()


    /**
     * Account biography page
     */
    public function biography()
    {
        if (isset($_COOKIE['user_login'])) {
            include_once './views/TEMPLATES/accountBaseTemplate.php';
            include_once './views/ACCOUNT/accountBiography.php';
        } else {
            header('location: ?action=signin');
        }

    }//end biography()


    /**
     * Account sendMail contact page
     */
    public function contact()
    {
        if (isset($_COOKIE['user_login'])) {
            include_once './views/TEMPLATES/contactTemplate.php';
        } else {
            header('location: ?action=signin');
        }

    }//end contact()


    /**
     * Sendmail form
     */
    public function sendMail()
    {
        include_once './views/TEMPLATES/accountBaseTemplate.php';
        try {
            if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['mail']) && isset($_POST['contentMail'])) {
                $firstname   = $_POST['firstname'];
                $lastname    = $_POST['lastname'];
                $email       = $_POST['mail'];
                $contentMail = $_POST['contentMail'];
                $body        = "$firstname\n$lastname\n$email\n$contentMail";
                mail('declic62@gmail.com', 'test', $body);
                echo "<h1 class='border border-info bg-light text-center'>E-mail send !!!</h1>";
            } else {
                echo 'sorry not send mail !';
            }
        } catch (Exception $e) {
            echo 'send error : '.$e->getMessage();
            die;
        }

    }//end sendMail()


}//end class
