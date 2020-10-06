<?php
require_once("DatabaseClass.php");
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
        $result = $request->fetch();
        return $result;
    }

    public function createBillet(){

    }

    public function deleteBillet(){

    }

    public function updateBillet(){

    }

}
