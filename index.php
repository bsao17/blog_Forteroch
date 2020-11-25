<?php

use controllers\BackController as Administration;
use controllers\FrontController as Navigation;

require_once './controllers/FrontController.php';
require_once './controllers/BackController.php';

try {
    session_start();
    /*
     * Create super global variable with name "action" and POST or GET request method
     */
    $action = isset($_GET['action']) ? $_GET['action'] : null;

    /*
     * Class instance NavigationSite
     */
    $direction = new Navigation();

    /*
     * Class instance AdministrationSite
     */
    $administration = new Administration();

    if ($action != null) {
        switch ($action) {
            case 'accueil':
                $direction->accueil();
            break;

            case 'home':
                $direction->home();
            break;

            case 'biography':
                $direction->biography();
            break;

            case 'adList':
                $administration->admin();
            break;

            case 'createBillets':
                $administration->createBillet();
            break;

            case 'updateBillets':
                $administration->updateBillet();
            break;

            case 'deleteBillets':
                $administration->deleteBillet();
            break;

            case 'delete':
                $administration->delete();
            break;

            case 'getBillets':
                $direction->getbillets();
            break;

            case 'simplebillet':
                $direction->getSingleBillet();
            break;

            case 'createcomment':
                $administration->createComment();
            break;

            case 'deletecomment':
                $administration->deleteComment();
            break;

            case 'confirmcomment':
                $administration->confirmComment();
            break;

            case 'notify':
                $administration->commentReport();
            break;

            case 'contact':
                $direction->contact();
            break;

            case 'sendmail':
                $direction->sendMail();
            break;

            case 'signin':
                $administration->signin($_SERVER);
            break;

            case 'signup':
                $administration->signup($_REQUEST, $_SERVER);
            break;

            default:
                echo "<h1 class='bg-warning'><u class'text-danger'>404 not found </u></h1>";
            throw new Exception('aucun identifiant renvoyé');
        }//end switch
    }//end if
} catch (Exception $e) {
    echo '404 not found : '.$e->getMessage();
}//end try
