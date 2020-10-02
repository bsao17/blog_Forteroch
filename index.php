<?php

require_once("./controllers/controller.php");

if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = null;
}

$direction = new NavigationSite;

if ($action != null) {
    switch ($action) {
        case "home":
            $direction->home();
            break;

        case "biography":
            $direction->biography();
            break;

        case "chapter":
            $direction->chapter();
            break;

        case "contact":
            $direction->contact();
            break;

        case "login":
            echo "enter login";
            break;
        
        default :
            echo "<h1 class='bg-warning'><u class'text-danger'>404 not found !</u></h1>";
    }
}
