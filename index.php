<?php

require_once("./controllers/controller.frontend.php");

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
            echo "here is biography";
            break;

        case "chapter":
            $direction->chapter();
            echo "here is chapter";
            break;

        case "contact":
            $direction->contact();
            echo "here is contact";
            break;

        case "login":
            $direction->login();
            break;
        
        default :
            echo "<h1 class='bg-warning'><u class'text-danger'>404 not found !</u></h1>";
    }
}
