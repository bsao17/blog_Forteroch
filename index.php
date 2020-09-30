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

        
    }
}
