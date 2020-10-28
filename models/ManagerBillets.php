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
    //Display Billets
    public function getBillet()
    { 
        $request = $this->connection->query("SELECT * FROM billets");
        $result = $request->fetchAll();
        return $result;
    }
    //Insert new billet in database
    public function createBillet($title, $content){
        try{
            $sql = "INSERT INTO billets(title, content) VALUES (:title, :content) ";
            if($req = $this->connection->prepare($sql)){
                $req->bindParam(":title", $title, PDO::PARAM_STR);
                $req->bindParam(":content", $content, PDO::PARAM_STR);
                $req->execute();
            }
        }catch(Exception $e){
            echo ("Error :".$e->getMessage());
            die;
        }   
    }

    public function deleteBillet(){
        $sql = "";

    }

    public function updateBillet(){

    }

}
