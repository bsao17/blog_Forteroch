<?php

function classAutoload($class){
    require_once($class.'php');
}
spl_autoload_register('classAutoload');
class ManagerBillets
{
    private $db;
    private $connection;

    public function __construct()
    {
        $this->db = new Database();
        $this->connection = $this->db->getConnection();
    }

    public function getBillet()
    {
        if(($_POST['login'] == "bsao17") && ($_POST['password'] == "1234") && ($_POST['repeat_password'] == $_POST['password'])){
                $request = $this->connection->query("SELECT * FROM billets");
                $result = $request->fetchAll();
                return $result;
        }else{
            echo "login or password bad";
        }
    }

    public function createBillet(){

    }

    public function deleteBillet(){

    }

    public function updateBillet(){

    }

}
