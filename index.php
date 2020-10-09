<?php
    require_once("./controllers/controller.frontend.php");
    require_once("./controllers/controller.backend.php");

try{

    if (isset($_GET['action']) || isset($_POST['action'])) {
        $action = $_GET['action'];
    } else {
        $action = null;
    }
    
    $direction = new NavigationSite();
    $administration = new AdministrationSite();
    
    if ($action != null) {
        switch ($action) {
            case "home":
                $direction->home();
                break;
    
            case "biography":
                $direction->biography();
                echo "here is biography";
                break;
    
            case "getBillets":
                $direction->getbillet();
                break;
    
            case "contact":
                $direction->contact();
                break;
    
            case "connect":
                $administration->login();
                break;
            
            case "signup":
                $administration->signup($_REQUEST, $_SERVER);
                break;
            
            default :
                echo "<h1 class='bg-warning'><u class'text-danger'>404 not found !</u></h1>";
                throw new Exception('aucun identifiant renvoyé');
        }
    }
}catch(Exception $e){
    echo "404 not found : ".$e->getMessage();
}

