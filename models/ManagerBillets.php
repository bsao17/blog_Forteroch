<?php
require_once("DatabaseClass.php");
class ManagerBillets
{
    public function display()
    {
        $db = new Database();
        $connection = $db->getConnection();
        $result = $connection->query("SELECT * FROM billets");
        require("./views/billetsView.php");
    }
}
