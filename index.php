<?php
    require_once("./controllers/controller.frontend.php");
    require_once("./controllers/controller.backend.php");

try{

    if (isset($_GET['action'])) {
        $action = $_GET['action'];
    } else {
        $action = null;
    }
    
    $direction = new NavigationSite;
    $administration = new Administration;
    
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
                echo "here is contact";
                break;
    
            case "connect":
                $administration->login();
                break;
            
            default :
                echo "<h1 class='bg-warning'><u class'text-danger'>404 not found !</u></h1>";
                throw new Exception('aucun identifiant renvoyé');
        }
    }
}catch(Exception $e){
    echo "404 not found : ".$e->getMessage();
}

