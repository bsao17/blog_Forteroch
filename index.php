<?php

require_once("./controllers/controller.php");

if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = null;
}

if ($action != null) {
    switch ($action) {
        case "accueil":
            accueil();
            break;

        case "biography":
            accueil();
            echo "here is biography";
            break;

        case "chapter":
            accueil();
            echo "here is chapter";
            break;

        case "contact":
            echo "here is contact";
            break;
        
        default :
            echo "Enter the good link !";
    }
}
