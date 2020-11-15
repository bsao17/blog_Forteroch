<?php

function classAutoload()
{
    require_once(__CLASS__ . 'php');
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
        try{
            $request = $this->connection->query("SELECT * FROM billets");
            $request->execute();
            $result = $request->fetchAll();
            return $result;
        }catch(Exception $e){
            echo ("Error : " . $e->getMessage());
            die;
        }
    }

    // display one billet with ID    
    public function getBilletAlone($ID)
    {
        try{
            $request = $this->connection->prepare("SELECT * FROM billets WHERE ID = :ID");
            $request->bindParam(":ID", $ID, PDO::PARAM_STR);
            $request->execute();
            $result = $request->fetchAll();
            return $result;
        }catch(Exception $e){
            echo ("Error : ".$e->getMessage());
            die;
        }
    }

    //Insert new billet in database
    public function createBillet($title, $content)
    {
        try {
            $sql = "INSERT INTO billets(title, content) VALUES (:title, :content) ";
            if ($request = $this->connection->prepare($sql)) {
                $request->bindParam(":title", $title, PDO::PARAM_STR);
                $request->bindParam(":content", $content, PDO::PARAM_STR);
                $result = $request->execute();
                return $result;
            }
        } catch (Exception $e) {
            echo ("Error :" . $e->getMessage());
            die;
        }
    }

    public function deleteBillet($ID)
    {
        try{
            $sql = "DELETE FROM billets WHERE ID = :ID";
            $request = $this->connection->prepare($sql);
            $request->bindParam(":ID", $ID, PDO::PARAM_STR);
            $result = $request->execute();
            return $result;
        }catch(Exception $e){
            echo ("Error : ".$e->getMessage());
            die;
        }
    }

    public function updateBillet($ID, $titleUpdate, $commentUpdate)
    {
        try{
            $sql = "UPDATE billets SET title = :title, content = :content WHERE ID = :ID ";
            $request = $this->connection->prepare($sql);
            $request->bindParam(":title", $titleUpdate, PDO::PARAM_STR);
            $request->bindParam(":content", $commentUpdate, PDO::PARAM_STR);
            $request->bindParam(":ID", $ID, PDO::PARAM_STR);
            $result = $request->execute();
            return $result;
        }catch(Exception $e){
            echo("Error : ".$e->getMessage());
            die;
        }
    }
}
