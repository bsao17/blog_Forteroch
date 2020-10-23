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

    public function createBillet($title, $content){
        $sql = "INSERT INTO billets(title, content) VALUES (:title, :content) ";
        if($req = $this->connection->prepare($sql)){
            $req->bindParam(":title", $title);
            $req->bindParam(":content", $content);
            $req->execute();
            $results = $req->fetch();
            return $results;
        }
            
        
        
    }

    public function deleteBillet(){

    }

    public function updateBillet(){

    }

}
