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
        
        $request = $this->connection->query("SELECT * FROM billets");
        $result = $request->fetchAll();
        return $result;
    }

    public function createBillet(){
        $sql = $this->connection->prepare("INSERT INTO billets(title, content) VALUES (:title, :content) ");
        
    }

    public function deleteBillet(){

    }

    public function updateBillet(){

    }

}
