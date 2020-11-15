<?php
require_once "./controllers/controller.NavigationSite.php";
require_once "./controllers/controller.AdministrationSite.php";

try {

    /**
     * Create super global variable with name "action" and POST or GET request method
     */
    if (isset($_GET['action']) || isset($_POST['action'])) {
        $action = $_GET['action'];
    } else {
        $action = null;
    }

    /**
     * Class instance NavigationSite
     */
    $direction = new NavigationSite();

    /**
     * Class instance AdministrationSite
     */
    $administration = new AdministrationSite();

    if ($action != null) {
        switch ($action) {
            case "accueil":
                $direction->accueil();
                break;

            case "home":
                $direction->home();
                break;

            case "biography":
                $direction->biography();
                break;

            case "adList":
                $administration->admin();
                break;

            case "createBillets":
                $administration->createBillet();
                break;

            case "updateBillets":
                $administration->updateBillet();
                break;

            case "deleteBillets":
                $administration->deleteBillet();
                break;

            case "delete":
                $administration->delete();
                break;

            case "getBillets":
                $direction->getbillets();
                break;

            case "simplebillet":
                $direction->getSingleBillet();
                break;

            case "createcomment":
                $administration->createComment();
                break;

            case "deletecomment":
                $administration->deleteComment();
                break;

            case "confirmcomment":
                $administration->confirmComment();
                break;

            case "notify":
                $administration->commentReport();
                break;

            case "contact":
                $direction->contact();
                break;

            case "sendmail":
                $direction->sendMail();
                break;

            case "signin":
                $administration->signin($_REQUEST, $_SERVER);
                break;

            case "signup":
                $administration->signup($_REQUEST, $_SERVER);
                break;

            default:
                echo "<h1 class='bg-warning'><u class'text-danger'>404 not found !</u></h1>";
                throw new Exception('aucun identifiant renvoyé');
        }
    }
} catch (Exception $e) {
    echo "404 not found : " . $e->getMessage();
}
